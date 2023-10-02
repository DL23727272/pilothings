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

    echo "<div class='container-fluid'>";
    echo "<h1 class='h4 mt-5'><i class='fa-solid fa-user-check'></i> $barberName</h1>";
    echo "<table class='table'>";
    echo "<tr>";
    echo "<th scope='col'>Total appointment today: </th>";
    echo "<th scope='col'><i class='fa-solid fa-square-poll-vertical'></i> $totalAppointmentsToday</th>";
    echo "</tr>";
    echo "<tr>";
    echo "<th scope='col'><i class='fa-solid fa-id-card'></i> ID </th>";
    echo "<th scope='col'><i class='fa-solid fa-calendar-days'></i> Check-in Date </th>";
    echo "<th scope='col'><i class='fa-solid fa-clock'></i> Check-in Time </th>";
    echo "<th scope='col'><i class='fa-solid fa-signature'></i> Name </th>";
    echo "<th scope='col'><i class='fa-solid fa-bell-concierge'></i> Type </th>";
    echo "<th scope='col'><i class='fa-solid fa-pen-to-square'></i> Edit </th>";
    echo "<th scope='col'><i class='fa-solid fa-trash'></i> Delete </th>";
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
    echo "</div>";
}

?>
<html>
    <head>
        <title>Admin</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
          <!-- Alertify sakit sa ulo -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    </head>
    <body>
        <?php include ('../modals.php'); ?>

        <nav class="navbar bg-body-tertiary fixed-top shadow p-3 mb-5 bg-body-tertiary rounded">
        <div class="container-fluid">
            <a class="navbar-brand" href="admin.php"><i class="fa-solid fa-users-line"></i> Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Paesano Barber Shop</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                    <a class="nav-link" href="admin.php"><i class="fa-solid fa-users-line"></i> Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa-solid fa-plus"></i> Add User</a>
                </li>
                </ul>
                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-scissors"></i> Barbers
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="arwen.php"><i class="fa-solid fa-user-check"></i> Arwen</a></li>
                        <li><a class="dropdown-item" href="allen.php"><i class="fa-solid fa-user-check"></i> Allen</a></li>
                        <li><a class="dropdown-item" href="ramil.php"><i class="fa-solid fa-user-check"></i> Ramil</a></li>
                    </ul>
                </div>
            </div>
            </div>
        </div>
        </nav>

        <br></br>
    
            
            <div class="container-fluid">
            <h1 class="h4 mt-5">Dashboard</h1>
            <div class="d-sm-flex gap-1">
            <div class="card">
                <div class="card-body d-flex flex-column align-items-end">
                    <div>
                    <?php 
                        include 'D:\xampp\htdocs\Appointment\Process\myConnection.php';
                
                        $currentDate = date("Y-m-d");
                
                        $query = "SELECT COUNT(*) AS appointment_count FROM allen WHERE checkin_date = '$currentDate'";
                        $result = mysqli_query($connect, $query);
                
                        $totalAppointmentsToday = 0; // Default value if there's an error or no appointments
                        if ($result) {
                            $row = mysqli_fetch_assoc($result);
                            $totalAppointmentsToday = $row['appointment_count'];
                        }
                    ?>
                    <p>Total appointments today: <?php echo $totalAppointmentsToday; ?></p>
                    </div>
                    <div>
                        <h6 class="h5"><i class="fa-solid fa-user-check"></i> Allen Clients</h6>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body d-flex flex-column align-items-end">
                    <div>
                    <?php 
                        include 'D:\xampp\htdocs\Appointment\Process\myConnection.php';
                
                        $currentDate = date("Y-m-d");
                
                        $query = "SELECT COUNT(*) AS appointment_count FROM arwen WHERE checkin_date = '$currentDate'";
                        $result = mysqli_query($connect, $query);
                
                        $totalAppointmentsToday = 0; // Default value if there's an error or no appointments
                        if ($result) {
                            $row = mysqli_fetch_assoc($result);
                            $totalAppointmentsToday = $row['appointment_count'];
                        }
                    ?>
                    <p>Total appointments today: <?php echo $totalAppointmentsToday; ?></p>
                    </div>
                    <div>
                        <h6 class="h5"><i class="fa-solid fa-user-check"></i> Arwen Clients</h6>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body d-flex flex-column align-items-end">
                    <div>
                    <?php 
                        include 'D:\xampp\htdocs\Appointment\Process\myConnection.php';
                
                        $currentDate = date("Y-m-d");
                
                        $query = "SELECT COUNT(*) AS appointment_count FROM ramil WHERE checkin_date = '$currentDate'";
                        $result = mysqli_query($connect, $query);
                
                        $totalAppointmentsToday = 0; // Default value if there's an error or no appointments
                        if ($result) {
                            $row = mysqli_fetch_assoc($result);
                            $totalAppointmentsToday = $row['appointment_count'];
                        }
                    ?>
                    <p>Total appointments today: <?php echo $totalAppointmentsToday; ?></p>
                    </div>
                    <div>
                        <h6 class="h5"><i class="fa-solid fa-user-check"></i> Ramil Clients</h6>
                    </div>
                </div>
            </div>
            </div>

            <div class="container-fluid d-flex justify-content-start">
            <div style="width: 500px; height: 300px;">
                <h1 class="h4 mt-4">Total Clients</h1>
                <canvas id="myChart" width="200" height="100"></canvas>
            </div>
            </div>
            </div>
           

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
