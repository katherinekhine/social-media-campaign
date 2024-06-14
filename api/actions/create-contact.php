<?php
include "../db/db.php";
include "../db/contact-process.php";

$db = new Database();
$contact = new Contact($db);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Assuming $contact is already instantiated
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $msg = $_POST['msg'];


    // Create the contact
    $result = $contact->createContact($fname, $lname, $email, $phone, $msg);
    if ($result) {
        // Success: Redirect to contact page
        header("Location:../contact.php");
        exit();
    } else {
        // Error: Handle the error (e.g., display an error message)
        echo "Failed to create contact. Please try again.";
        exit();
    }
} else {
    // If not a POST request, handle accordingly
    echo "Can't send email";
    exit();
}
