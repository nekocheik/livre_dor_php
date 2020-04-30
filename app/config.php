<?php
 $pdo = new PDO('mysql:host=localhost;dbname=livreDor', 'root', '' );
try {
} catch (PDOException $e ) {
   var_dump($e);
};
?>
