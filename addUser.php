<?php
try{

     
    $link = new \PDO(   'mysql:host=94.23.106.33:8443;dbname=eventepi;charset=utf8mb4',
                        'root',
                        'mysql',
                        array(
                            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                            \PDO::ATTR_PERSISTENT => false
                        )
                    );
 
      


$stmt = $link->prepare("INSERT INTO user (nom, prenom,etab,email,prof,dateinscri) VALUES (:nom, :prenom, :etab,  :email , :prof, :dateinscri)");
$stmt->bindParam(':nom', $_POST["nom"] );
 $stmt->bindParam(':prenom', $_POST["prenom"] );
 $stmt->bindParam(':etab', $_POST["etab"] );
 $stmt->bindParam(':email', $_POST["email"] );
 $stmt->bindParam(':prof', $_POST["prof"] );
 $stmt->bindParam(':dateinscri',  date('Y/m/d H:i:s') );

// insertion d'une ligne
 
$stmt->execute();

 header('Location: '."success.html");
}
catch(\PDOException $ex){
    print($ex->getMessage());
}

 