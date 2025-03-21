<?php

session_start();
if (!isset($_SESSION['user'])) {
    header("Location: logout.php");
    exit();
} else {
    $message = '<div role="alert" class="alert  alert-success alert-soft">
        <span> sucess.</span>
      </div>'; 
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
   
</head>
<body class="flex justify-center items-center h-screen bg-gray-100">
    <div class="card w-96 bg-white shadow-xl p-6">
        <h2 class="text-2xl font-bold text-center">Bienvenue, <?= htmlspecialchars($_SESSION['user']); ?> !</h2>
        <p class="text-center">Vos informations sont les suivants</p>
        <?= $message ?>
        <a href="logout.php" class="btn btn-secondary w-full mt-4">Se déconnecter</a>
    </div>
    
</body>
</html>