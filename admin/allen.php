<html>
    <head>
        <title>Allen</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    
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
        <h1>Allen</h1>
        <?php
            include 'D:\xampp\htdocs\Appointment\Process\myConnection.php';
            
            $currentDate = date("Y-m-d");

            $query = "SELECT * FROM arwen WHERE checkin_date = '$currentDate'";
            $result = mysqli_query($connect, $query);

            $totalAppointmentsToday = mysqli_num_rows($result);
         ?>
        <table>
            <tr>
                <th>Total appointment today: </th>
                <th><?php echo $totalAppointmentsToday; ?></th>

                </th>
            </tr>
            <tr>
                <th> ID </th>
                <th> Check-in Date </th>
                <th> Check-in Time </th>
                <th> Name </th>
                <th> Type </th>
                <th> Edit </th>
                <th> Delete </th>
            </tr>
            <?php 
                include 'D:\xampp\htdocs\Appointment\Process\myConnection.php';

                $query = "SELECT * FROM allen";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
            ?>         
                <tr>
                    <td> <?php echo $row["id"];?> </td>
                    <td> <?php echo $row["checkin_date"];?> </td>
                    <td> <?php echo $row["checkin_time"];?> </td>
                    <td> <?php echo $row["name"];?> </td>
                    <td> <?php echo $row["service_type"];?> </td>
                    <td>
                      <a href="editForm.php?id=<?php echo $row ["id"]; ?>">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit" >Edit</button>
                      </a>
                    </td>
                    <td>
                        <a href="delete.php?id=<?php echo $row ["id"]; ?>">
                        <button type="button" class="btn btn-warning">Delete</button></a>
                    </td>
                    
                </tr>
                
                <?php
                    }
                }
                else{
                    echo "0 results";
                }
            ?>
            
        </table>
    </body>
</html>