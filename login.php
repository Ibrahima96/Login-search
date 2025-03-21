<?php 
session_start();

$message= ""; // je vais l'utiliser  pour integrer mes messages d'erreur et de success

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $valid_username= "Bicom";
    $valid_password= "passe@123";
    if( $username === $valid_username &&  $password === $valid_password){
        $_SESSION['user'] = $username;
        header("location: hompage.php");
        exit();
    }else{
        $message = "<div class='alert alert-error shadow-lg mt-4'><span>Identifiants incorrects.</span></div>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="flex justify-center items-center h-screen bg-gray-200">
    <div class="card w-96 bg-white shadow-xl p-6">
        <h2 class="text-2xl font-bold text-center">Connexion</h2>
        <form method="POST" action="">
            <div class="form-control">
                <label class="label">Nom d'utilisateur</label>
                <input type="text" name="username" class="input input-bordered" required>
            </div>
            <div class="form-control mt-4">
                <label class="label">Mot de passe</label>
                <input type="password" name="password" class="input input-bordered" required>
            </div>
            <button type="submit" class="btn btn-primary w-full mt-4">Se connecter</button>
        </form>
        <?= $message ?>

    </div>
</body>
</html>