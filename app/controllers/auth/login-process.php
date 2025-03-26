<?php
    session_start();

    require_once __DIR__ . '/../../../database/scripts/data_base_admin_req.php'; 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = isset($_POST['email']) ? trim($_POST['email']) : '';
        $password = isset($_POST['passwd']) ? trim($_POST['passwd']) : '';

        // Validate form fields
        if (empty($email) || empty($password)) {
            echo "<p style='color: red;'>All fields are required!</p>";
            exit;
        }

        // Query to fetch the user by email
        $stmt = $conn->prepare("SELECT * FROM accounts WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            // Verify password
            if (password_verify($password, $user['password'])) {
                // Store user data in session
                $_SESSION['loggedin'] = true;
                $_SESSION['user_id'] = $user['unique_id'];
                $_SESSION['firstname'] = $user['first_name'];   // Set the first name
                $_SESSION['lastname'] = $user['last_name'];     // Set the last name
                $_SESSION['email'] = $user['email'];            // Set the email
                $_SESSION['password'] = $user['password'];     // Set phone number if necessary

                // Redirect after successful login
                header("Location: /WEB/imelda-web/index.php");
                exit();
            } else {
                echo "<p style='color: red;'>Incorrect password!</p>";
            }
        } else {
            echo "<p style='color: red;'>No user found with that email!</p>";
        }

        $stmt->close();
        $conn->close();
    }
?>
