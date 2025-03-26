<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOI</title>
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="..\views\auth\css\tyles.css">
</head>
<body>
    <?php
        require_once __DIR__ . '/../../../database/scripts/data_base_admin_req.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $firstname = isset($_POST['firstname']) ? trim($_POST['firstname']) : '';
            $lastname = isset($_POST['lastname']) ? trim($_POST['lastname']) : '';
            $email = isset($_POST['email']) ? trim($_POST['email']) : '';
            $password = isset($_POST['password']) ? trim($_POST['password']) : '';
            $confirmpass = isset($_POST['confirmpass']) ? trim($_POST['confirmpass']) : '';

            // Validate required fields
            if (empty($firstname) || empty($lastname) || empty($email) || empty($password)) {
                echo "All fields are required!";
                exit;
            }

            // Validate password match
            if ($password !== $confirmpass) {
                echo "Passwords do not match!";
                exit;
            }

            // Check if an account with the same contact number already exists
            $stmt = $conn->prepare("SELECT * FROM accounts WHERE email = ?");
            if ($stmt === false) {
                die('Error preparing the query: ' . $conn->error);
            }

            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            // If account exists, stop the registration process
            if ($result->num_rows > 0) {
                echo "Email Already Exists!";
                exit;
            }

            // Generate a unique ID for the new account
            $uniqueid = substr(bin2hex(random_bytes(4)), 0, 8);

            // Hash the password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Insert the new account into the database
            $stmt = $conn->prepare("INSERT INTO accounts (unique_id, first_name, last_name, email, password) VALUES (?, ?, ?, ?, ?)");
            if ($stmt === false) {
                die('Error preparing the query: ' . $conn->error);
            }

            $stmt->bind_param("sssss", $uniqueid, $firstname, $lastname, $email, $hashed_password);

            if ($stmt->execute()) {
                echo "Account Created Successfully!";
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
            $conn->close();
        } else {
            echo "Invalid request method.";
        }
    ?>
</body>
</html>
