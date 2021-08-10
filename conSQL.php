<?php

//on vérifie si la connexion a déjà été définie
if(!function_exists('db_connexion')){
    function db_connexion(){
        //une fois ouverte on renvoie toujours la même connexion
        static $pdo;
        //on vérifie si la connexion n'a pas déjà été initialisée
        if(!($pdo instanceof PDO)){
            //tentative d'ouverture de la connexion Mysql
            try{
                $pdo=new PDO('mysql:host=localhost;port=3306;dbname=sortieslso;charset=utf8','root','',[
                    PDO::ATTR_ERRMODE           =>PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES  =>false
                ]);
            }
            catch(PDOException $e){
                throw new invalidArgumentException('Erreur connection à la base de donnée, erreur: ' .$e->getMessage());
                exit;
            }
        }
        //connexion à la base de données
        return $pdo;
    }
}
return db_connexion();

?> 