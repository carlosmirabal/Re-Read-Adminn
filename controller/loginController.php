<?php
include '../model/user.php';
include '../model/userDAO.php';
if (isset($_POST['email'])) {
    $user = new User($_POST['email'], md5($_POST['psswd']));
    $userDAO = new UserDAO();
    echo "primer if";
    if($userDAO->login($user)){
        echo 'perfect';
        // establecer sesiones
        // redirección a ebook.admin.php
        header('Location: ../view/zona.admin.php');
    }else {
        header('Location: ../view/login.php');
        echo "fallo";
    }
}else {
    header('Location: ../view/login.php');
}