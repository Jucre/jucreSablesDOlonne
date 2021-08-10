<?php

    spl_autoload_register(function ($methPoo) {
        include 'pooSEmploi.php';

    });
    
    session_start();



    if(isset($_SESSION['util']))
    {
        $util=$_SESSION['util'];
    }


    $db=new PDO('mysql:host=localhost;dbname=portanim;charset=utf8','root','');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    $manager=new UtilisateurManager($db);
    $managerA=new ActiManager($db);
    $managerB=new AnnonceManager($db);
    

    if(isset($_POST['connexion']))
    {
        //vérification des identifiants
        if(isset($_POST['login']) && isset($_POST['pswd']))
        {
            if($manager->exist($_POST['login']))
            {
                $util=$manager->get($_POST['login']);
                $_SESSION['$util']=$util;
                header('location:resrce.php');
                exit();
            }
            else
            {
                $message='Le login ou le mail sont erronés';
            }
        }
    }

    //création d'un compte en bdd
    if(isset($_POST['enregistre']) && isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['login']) && isset($_POST['pswd']) && isset($_POST['ville']))
   {
       $util=new Utilisateur (array('nom'=>$_POST['nom'], 'prenom'=>$_POST['prenom'], 'email'=>$_POST['email'], 'login'=>$_POST['login'], 'pswd'=>$_POST['pswd'], 'ville'=>$_POST['ville']));
       //si le formulaire est valide

        if(!$util->nomValid())
        {
            $message='Le nom doit être valide ';
            unset($util);
        }
        /*
        if(!$util->prenomValid())
       {
           $message='Le prénom doit être valide';
           unset($util);
       }

        elseif(!$util->emailValid())
        {
            $message=' Le mail doit être valid ';
            unset($util);
        }
*/
        elseif(!$util->pswdValid())
        {
            $message='Le mot de passe ...' ;
            unset($util);
        }

       elseif($manager->exist($util->login()))
       {
           $message='Le login est déjà pris';
           unset($util);
       }

        else
        {
            $manager->add($util);
            $_SESSION['$util']=$util;
            header('location:resrce.php');
            exit();
        }
   }
?>



<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Site animation emploi</title>
        <meta http-equiv="Content-type" content="text/html; charset=iso-8859-1" />
        <meta name="author" content="Julie Crépin">
        <link rel="stylesheet" href="mep.css">
    </head>

    <body>
        <div id="bloc">
            <div id="formulaire">
            <?php

                if(isset($message)) echo '<p>' .$message. '</p>';

                elseif(isset($util))
                {
            ?>
                    <p>
                    Bienvenue sur ton espace personnel <?php echo "<i>".$util->prenom()."</i>" ?><br /><br />
                    </p>

                    <fieldset>
                    <a href="resrce.php" id="actite">Activité</a>
                    <a href="resrce.php" id="offr">Offre</a>

                    </fieldset>
            <?php    
                }        
                elseif(isset($_POST['connect']))
                {
            ?>
                <!--formulaire entré des identifiants-->
                    <form action='#' method=POST>
                        <p>
                            Entrez vos identifiants de connexion:<br /><br />
                            Identifiant:
                            <input type="text" name="login" /><br /><br />
                            Mot de passe:
                            <input type="text" name="pswd" /><br /><br />
                            <input type="submit" value="Envoyer" name="connexion" />
                        </p>
                    </form><br /><br />
            <?php
                }
                elseif(isset($_POST['register']))
                {
            ?>
                    <form action="#" method="POST">
                        <p>
                            Entrez vos informations:<br /><br />
                            Prénom: 
                            <input type="text" name="prenom" /><br /><br />
                            Nom: 
                            <input type="text" name="nom" /><br /><br />
                            Mail: 
                            <input type="mail" name="email" /><br /><br />
                            Identifiant:
                            <input type="text" name="login" /><br /><br />
                            Mot de passe:
                            <input type="text" name="pswd" /><br /><br />
                            Ville:
                            <input type="text" name="ville" /><br /><br />
                            <input type="submit" value="Envoyer" name="enregistre" />
                        </p>

                    </form><br /><br />
            <?php
                }
                else   
                {
            ?>
                    <!--formulaire de connexion ou création-->
                    <form action="" method="post">
                        <p>
                            Que voulez vous faire?<br /><br />
                            <input type="submit" value="me connecter" name="connect" />
                            <input type="submit" value="créer un compte"  name="register" />
                        </p>
                    </form><br /><br />
            </div>
            
            <div id="theme">
                <div id="consult">
                    <h1>Activités</h1><br />
                    <input type="button" value="Entrer" name="viewActi" /><br /><br /><br />
                    <h1>Offres</h1><br />
                    <input type="button" value="Entrer" name="viewOffr" />
                </div>

                <div id="resrceAc">
                    <!--- Affichage des activités enregistrés --->
                    <div class="frame">

                        <?php $actis = $managerA->getActi();
                        foreach($actis as $uneActi)
                        echo  $uneActi->descpt() . '<br />' . $uneActi->source() . '<br /><br />';
                        ?>
                        
                    </div>
                </div><br />

                <div id="resrceOf">
                    <!--- Affichage des annonces enregistrées --->
                    <div class="frame">
                        
                        <?php
                        $annons = $managerB->getAnnons();
                        foreach($annons as $uneAnnons)
                        echo 'A: ' . $uneAnnons->lieu() . '<br />' . 'dates: du ' . $uneAnnons->dateS() . ' au ' . $uneAnnons->dateE() . '<br />' . 'hébergement: ' . $uneAnnons->heberge() . '<br />' . 'public: ' . $uneAnnons->partcpt() . '<br />' . 'séjour: ' . $uneAnnons->descpt() . '<br />' . 'profil recherché: ' . $uneAnnons->profil() . '<br /><br />'  ;
                        ?>
                        
                    </div>
                </div>
 
            </div>
            <?php
                }    
            ?>
            <a href="conxSEmploi.php" id='accueil'>Accueil</a>
        </div>
        
    </body>
    
    
</html>