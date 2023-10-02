<?php
session_start();
include 'D:\xampp\htdocs\Appointment\Process\myConnection.php';

function totalAppoitments($connect, $barberName) {
    $currentDate = date("Y-m-d");

    $query = "SELECT * FROM $barberName WHERE checkin_date = '$currentDate'";
    $result = mysqli_query($connect, $query);

    $totalAppointmentsToday = mysqli_num_rows($result);

    // Return the total appointments
    return $totalAppointmentsToday;
}

function displayAppointments($connect, $barberName) {
    $currentDate = date("Y-m-d");

    $query = "SELECT * FROM $barberName WHERE checkin_date = '$currentDate'";
    $result = mysqli_query($connect, $query);

    $totalAppointmentsToday = mysqli_num_rows($result);

  
    echo "<h1>$barberName</h1>";
    echo "<table>";
    echo "<tr>";
    echo "<th>Total appointment today: </th>";
    echo "<th>$totalAppointmentsToday</th>";
    echo "</tr>";
    echo "<tr>";
    echo "<th> ID </th>";
    echo "<th> Check-in Date </th>";
    echo "<th> Check-in Time </th>";
    echo "<th> Name </th>";
    echo "<th> Type </th>";
    echo "<th> Edit </th>";
    echo "<th> Delete </th>";
    echo "</tr>";

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td> {$row["id"]} </td>";
            echo "<td> {$row["checkin_date"]} </td>";
            echo "<td> {$row["checkin_time"]} </td>";
            echo "<td> {$row["name"]} </td>";
            echo "<td> {$row["service_type"]} </td>";
            echo "<td>";
            echo "<a href='editForm.php?id={$row["id"]}'>";
            echo "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#edit' >Edit</button>";
            echo "</a>";
            echo "</td>";
            echo "<td>";
            echo "<a href='delete.php?id={$row["id"]}'>";
            echo "<button type='button' class='btn btn-warning'>Delete</button></a>";
            echo "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='7'>0 results</td></tr>";
    }

    echo "</table>";
}

?>
<html>
    <head>
        <title>Admin</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
          <!-- Alertify sakit sa ulo -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    
        <style>
            table{
                border-collapse: collapse;
                border-spacing: 0;
                width: 100%;
                border: 1px solid #ddd;
            }

            th,td{
                text-align: left;
                padding: 16px;
            }
            tr:nth-child(even){
                background-color: #f2f2f2;
            }
            img{
                width: 100px;
                height: 40px;
            
            }
            a .btn{
               margin: 2px;
            }
            h1{
                text-align: center;
            }
            .btn a{
                text-decoration: none;
                color: white;
            }
        </style>

    </head>
    <body>
        <?php include ('../modals.php'); ?>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a href="index.php" class="navbar-brand">Home</a>

            <button class="navbar-toggler" type="button" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span></button>
            <div class="collapsse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item active">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addUser">Add User</button>
                <button type="button" class="btn btn-success" data-toggle="modal"><a href="admin.php">Admin</a></button>
                <button type="button" class="btn btn-success" data-toggle="modal"><a href="arwen.php">Arwen</a></button>
                <button type="button" class="btn btn-success" data-toggle="modal"><a href="allen.php">Allen</a></button>
                <button type="button" class="btn btn-success" data-toggle="modal"><a href="ramil.php">Ramil</a></button>
                </li>
            </ul>
        </div>
        </nav>
       

        <br></br>
       

            <?php
                $arwenTotalAppointments = totalAppoitments($connect, "arwen");
            
                $allenTotalAppointments = totalAppoitments($connect, "allen");
            
                $ramilTotalAppointments = totalAppoitments($connect, "ramil");

                $totalAppointments = $arwenTotalAppointments + $allenTotalAppointments + $ramilTotalAppointments;
            ?>

            <h1>TOTAL APPOINTMENTS: <?php echo $totalAppointments; ?></h1>


            <?php
                // Call the function for Arwen
                displayAppointments($connect, "arwen");

                // Call the function for Allen
                displayAppointments($connect, "allen");

                // Call the function for Ramil
                displayAppointments($connect, "ramil");
            ?>
                        
        <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
             alertify.set('notifier','position', 'top-right');
             alertify.success('Welcome, admin!' );
        </script>
    </body>
</html>
