<?php
if (isset($_POST['create'])) {
    include "../db_conn.php";

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = validate($_POST['name']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $mobile = validate($_POST['mobile']);
    $gender = validate($_POST['gender']);

    if (empty($name) || empty($email) || empty($mobile) || empty($gender) || empty($password)) {
        header("Location: ../index.php?error=All fields are required");
    } else {
        $stmt = $conn->prepare("INSERT INTO users (name, email, mobile, gender,password) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $name, $email, $mobile, $gender, $password);

        if ($stmt->execute()) {
            header("Location: ../index.php?success=successfully created");
        } else {
            header("Location: ../index.php?error=unknown error occurred");
        }

        $stmt->close();
    }
}
?>
