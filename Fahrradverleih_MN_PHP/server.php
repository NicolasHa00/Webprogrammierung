<?php
session_start();

$username = "";
$email    = "";
$errors = array();
$anmelden = "Hallo";

$db = mysqli_connect('localhost', 'root', '', 'fahrradverleih_mn');

//registrieren

if (isset($_POST['reg_user'])) {
   
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
    
    if (empty($username)) { array_push($errors, "Benutzername fehlt"); }
    if (empty($email)) { array_push($errors, "Email fehlt"); }
    if (empty($password_1)) { array_push($errors, "Password fehlt"); }
    if ($password_1 != $password_2) {
        array_push($errors, "Die Passwörter stimmen nicht überein.");
    }
    
   
    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) { 
        if ($user['username'] === $username) {
            array_push($errors, "Benutzername existiert bereits");
        }
        
        if ($user['email'] === $email) {
            array_push($errors, "E-Mail existiert bereits");
        }
    }
    
   
    if (count($errors) == 0) {
        $password = md5($password_1);
      
        $query = "INSERT INTO users (username, email, password)
  			  VALUES('$username', '$email', '$password')";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "Sie sind jetzt angemeldet!";
        header('location: index.php');
    }
}

//einloggen

if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    
    if (empty($username)) {
        array_push($errors, "Benutzername fehlt");
    }
    if (empty($password)) {
        array_push($errors, "Passowort fehlt");
    }
    
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Sie sind jetzt angemeldet!";
            header('location: index.php');
            setcookie("UsernameCookie", $username, time()+86400);
        }
        else {
            array_push($errors, "Falsche Kombination von Benutzername und Passwort!");
        }
    }
}

?>
