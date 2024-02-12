<?php
start_session();

f (isset($_POST['login'])) {
    include('connection.php');
    echo "Button is clicked!";

 // Get user input from the login form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate user input (you can add more validation steps)
    if (empty($email) || empty($password)) {
        // Handle empty fields, redirect or display an error message
        echo "Email and password are required!";
    } else {
        // Query the database to check user credentials
        $sql = "SELECT * FROM People WHERE email='$email' AND passwd='$password'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            // Login successful
            $user = $result->fetch_assoc();

            // Set session variables or perform other actions
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['email'] = $user['email'];

        
            header("Location: homepage.php");
            exit();
        } else {
            // Login failed
            echo "Invalid email or password!";
        }
    }

    // Close the database connection
    $conn->close();
}
else{
    echo
}
?>
   
