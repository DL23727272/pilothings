<?php
    
    include "myConnection.php";

    $fname = $_POST['fname'];
    $CheckInDate = $_POST["dateIn"];
    $CheckInTime = $_POST["timeIn"];
  
   
    
    $query = "INSERT INTO arwen ( checkin_date, checkin_time, name)
             VALUE ('$CheckInDate', '$CheckInTime', '$fname')";

   
   
        if(mysqli_query($connect, $query)){
            echo "New record added successfully";
        }
        else{
            echo "Empty Details <br>". mysqli_error($connect);
        }
        mysqli_close($connect);
?>
<html>
    <head>
    <script type="text/javascript">
            var yes = confirm("Book successfully");
            
            if (yes) {
                window.location.replace("/finalAppointment/book.php");
            }
            else{
                document.write("Please reload the Page");
            }
        </script>
    </head>
</html>