<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve user input from the form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    
    // Perform validation on the input (you can add more validation rules as needed)
    if (empty($username) || empty($password) || empty($email)) {
        echo "Please fill in all fields.";
    } else {
        // All fields are filled, proceed with registration
        // Here, you can connect to your database and insert the user details
        // For the sake of this example, let's just display the registered user's details
        
        echo "Registration Successful!<br>";
        echo "Username: " . $username . "<br>";
        echo "Email: " . $email . "<br>";
    }
}
?>
