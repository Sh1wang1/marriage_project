<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $appointment_date = $_POST["appointment_date"];
    $appointment_time = $_POST["appointment_time"];

    // Check if the appointment slot is available
    $existing_appointments = isset($_SESSION['appointments']) ? $_SESSION['appointments'] : [];

    foreach ($existing_appointments as $appointment) {
        if ($appointment['date'] == $appointment_date && $appointment['time'] == $appointment_time) {
            echo "Appointment slot not available. Please choose another slot.";
            exit();
        }
    }
    
    // Add the new appointment to the session
    $new_appointment = [
        'date' => $appointment_date,
        'time' => $appointment_time,
    ];

    $_SESSION['appointments'][] = $new_appointment;

    echo "Appointment scheduled successfully!";
} else {
    echo "Invalid request";
}
$sql = "INSERT INTO appoint (ddate,ttime) VALUES ('$appointment_date','$appointment_time')";
?>
