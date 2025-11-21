<?php
require_once "config/config.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = trim($_POST["nom"]);
    $prenom = trim($_POST["prenom"]);
    $email = trim($_POST["email"]);
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
    $licence = trim($_POST["licence"]);

    try {
        $sql = "INSERT INTO utilisateur (nom, prenom, email, mot_de_passe, numero_licence)
                VALUES (:nom, :prenom, :email, :mot_de_passe, :licence)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':email' => $email,
            ':mot_de_passe' => $password,
            ':licence' => $licence
        ]);
        header("Location: index.html?success=1");
        exit;
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
?>
