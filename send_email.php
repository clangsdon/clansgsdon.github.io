<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $business_owner = $_POST['business_owner'];
    $w2_wages = $_POST['w2_wages'];
    $w2_employees = $_POST['w2_employees'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $to = "eghoran77@gmail.com";
    $subject = "New Form Submission";
    $body = "Business Owner: $business_owner\n".
            "Paid W2 Wages in 2020 or 2021: $w2_wages\n".
            "Number of W2 Employees in 2022: $w2_employees\n".
            "Contact Info:\n".
            "Name: $name\n".
            "Email: $email\n".
            "Phone: $phone\n";

    mail($to, $subject, $body);
}
?>
