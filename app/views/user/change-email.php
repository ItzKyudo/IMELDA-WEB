<?php
    session_start();
    require_once __DIR__ . '/../../../database/scripts/data_base_admin_req.php';

    $user_id = $_SESSION['user_id']; 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $old_email = filter_var(trim($_POST['oldemail']), FILTER_SANITIZE_EMAIL);
        $new_email = filter_var(trim($_POST['newemail']), FILTER_SANITIZE_EMAIL);
        $password = isset($_POST['pass']) ? trim($_POST['pass']) : '';
        $confirm_pass = isset($_POST['confpass']) ? trim($_POST['confpass']) : '';

        if($password != $confirm_pass) {
            echo "PASSWORD DO NOT MATCH";
            return;
        }

        if (filter_var($new_email, FILTER_VALIDATE_EMAIL)) {
            $sql = "UPDATE accounts SET email = :email WHERE unique_id = :user_id";

            $stmt = $pdo->prepare($sql);

            $stmt->bindParam(':email', $new_email, PDO::PARAM_STR);
            $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);

            if ($stmt->execute()) {
                echo "Email address updated successfully!";
            } else {
                echo "Error updating email. Please try again later.";
            }
        } else {
            echo "Please provide a valid email address.";
        }
    }
?>
