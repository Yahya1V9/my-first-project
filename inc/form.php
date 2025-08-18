<?php
$firstName = '';
$lastName = '';
$email = '';

// تهيئة أخطاء
$errors = [
    'firstNameError' => '',
    'lastNameError'  => '',
    'emailError'     => '',
];

if (isset($_POST['submit'])) {

    $firstName = trim($_POST['firstName'] ?? '');
    $lastName  = trim($_POST['lastName'] ?? '');
    $email     = trim($_POST['email'] ?? '');

    // التحقق من الحقول
    if (empty($firstName)) {
        $errors['firstNameError'] = 'First name is required';
    }

    if (empty($lastName)) {
        $errors['lastNameError'] = 'Last name is required';
    }

    if (empty($email)) {
        $errors['emailError'] = 'Email is required';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['emailError'] = 'Email is not valid';
    }

    if (!array_filter($errors)) {

        $safeFirstName = mysqli_real_escape_string($conn, $firstName);
        $safeLastName  = mysqli_real_escape_string($conn, $lastName);
        $safeEmail     = mysqli_real_escape_string($conn, $email);

        $sql = "INSERT INTO winer (firstname, lastname, email) 
                VALUES ('$safeFirstName', '$safeLastName', '$safeEmail')";

        if (mysqli_query($conn, $sql)) {
           
            header('Location: ' . $_SERVER['PHP_SELF']);
            exit; 
        } else {
            echo 'Database error: ' . mysqli_error($conn);
        }
    }
}
   