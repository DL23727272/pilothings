<?php
include "myConnection.php";

if (isset($_POST['fname']) && isset($_POST['dateIn']) && isset($_POST['timeIn'])) {
    $fname = $_POST['fname'];
    $CheckInDate = $_POST["dateIn"];
    $CheckInTime = $_POST["timeIn"];
   
    $query = "INSERT INTO allen (checkin_date, checkin_time, name) VALUES ('$CheckInDate', '$CheckInTime', '$fname')";
   
    if(mysqli_query($connect, $query)){
        $response = [
            'status' => 'success',
            'message' => 'Booked to Allen successfully'
        ];
    } else {
        $response = [
            'status' => 'error',
            'message' => 'Failed to add record: ' . mysqli_error($connect)
        ];
    }
    mysqli_close($connect);
} else {
    $response = [
        'status' => 'error',
        'message' => 'All fields are mandatory'
    ];
}


header('Content-Type: application/json');
echo json_encode($response);
?>
