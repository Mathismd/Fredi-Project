<?php
session_start();
require_once "config/config.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST["email"]);
    $password = $_POST["password"];

    $sql = "SELECT * FROM utilisateur WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':email' => $email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['mot_de_passe'])) {
        $_SESSION["user"] = [
            "id" => $user["id"],
            "nom" => $user["nom"],
            "prenom" => $user["prenom"],
            "email" => $user["email"]
        ];
        header("Location: dashboard.php");
        exit;
    } else {
        echo "<script>alert('Identifiants incorrects'); window.location='index.html';</script>";
    }
}
?>
