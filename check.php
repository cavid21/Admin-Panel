<?php
session_start();

if (isset($_POST['sub_name'])) {
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];
    $file = $_FILES['file']['name'];
    if (!empty($mail) && !empty($pass)) {
        if ($mail == "admin@code.edu.az" && $pass == "12345") {
                $_SESSION['admin'] = true;
                header('Location:admin.php');
            }
            else {
            $_SESSION['contactmsj'] = 'mail sehvdi';
            $_SESSION['admin'] = false;
            header('Location:index.php');
        }
        } else {
            $_SESSION['contactmsj'] = 'Boşluq buraxmayın';
            $_SESSION['admin'] = false;
            header('Location:index.php');
        }
    } else {
        $_SESSION['contactmsj'] = 'error!';
        $_SESSION['admin'] = false;
        header('Location:index.php');
    }