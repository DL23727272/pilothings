<?php
include "myConnection.php";

if (isset($_POST['fname']) && isset($_POST['dateIn']) && isset($_POST['timeIn']) && isset($_POST['serviceType'])) {
    $fname = $_POST['fname'];
    $CheckInDate = $_POST["dateIn"];
    $CheckInTime = $_POST["timeIn"];
    $serviceType = $_POST["serviceType"]; 
   
    $query = "INSERT INTO ramil (checkin_date, checkin_time, name, service_type) 
                VALUES ('$CheckInDate', '$CheckInTime', '$fname', '$serviceType')";
   
    if(mysqli_query($connect, $query)){
        $response = [
            'status' => 'success',
            'message' => 'Booked to Ramil successfully'
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
