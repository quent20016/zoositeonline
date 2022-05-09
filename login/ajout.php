<?php
    //fichier pour ajouter un utilisateur
    session_start();
    $users = explode("\n", file_get_contents("../../BDD/user.txt", true)); //récupération du fichier utilisateur
    $list = explode("µ", end($users));
    $id = strval(intval($list[0]) + 1);

    $email = $_POST['email'];
    $password = $_POST['password'];

    $newList = $email."µ".$password;

    //enregistrement du nouvel utilisateur dans le fichier
    array_push($users, $newList);
    $tmp = implode("\n", $users);

    $file = fopen("../../BDD/user.txt", "w");
    fwrite($file, $tmp);
    fclose($file);

    $_SESSION["USER"] = $id;     //enregistrement des varables de sesssion
    $_SESSION["UserEvent"] = "";

    header("Location: ../../index.php");
?>
