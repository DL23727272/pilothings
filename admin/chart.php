<?php
include 'C:\xampp\htdocs\pilothings\Process\myConnection.php';

$data = array(
    'arwen' => getAppointmentCount($connect, 'arwen'),
    'allen' => getAppointmentCount($connect, 'allen'),
    'ramil' => getAppointmentCount($connect, 'ramil')
);

echo json_encode($data);

function getAppointmentCount($connect, $barberName) {
    $query = "SELECT COUNT(*) AS appointment_count FROM $barberName";
    $result = mysqli_query($connect, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        return $row['appointment_count'];
    } else {
        return 0;
    }
}
?>
