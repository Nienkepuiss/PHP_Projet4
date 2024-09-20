<?php
function connexion() {
    try {
       
        $pdo = new PDO('mysql:dbname=artbox;host=localhost', 'root', 'root');
      
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } 
    catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
        exit;
    }
}
?>
