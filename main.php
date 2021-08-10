 <?php
session_start();

/* ajout de mise en page externe */
include('additionnel.php');

/* connection avec la base de donnée */
$db=include('conSQL.php');

?>

<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sables d'Olonne</title>
        <meta name="description" content="Un site d'informations sur la ville les Sables d'Olonne, pour les habitants, les visiteurs et les vacanciers.">
        <meta name="keywords" content="Les Sables d'Olonne, mairie, services, activités, sortir">
        <meta name="author" content="Julie Crépin">
        <link rel="stylesheet" href="style.css">
        <style>
            @import url('https://fonts.googleapis.com/css?family=Ranga&display=swap');

            @import url('https://fonts.googleapis.com/css?family=Indie+Flower|Ranga&display=swap');

            @import url('https://fonts.googleapis.com/css?family=Dancing+Script|Indie+Flower|Ranga&display=swap');
        </style>

    </head>
    
    <body>
        
        
<!--- Création de la barre de navigation   ---->
        <div id = "barre">
            <ul id = "labarre">
                <li><a href = "ActCityen.php" >Activités citoyennes</a>
                    <ul class = "entite">
                        <li>Etre candidat au conseil des quartiers</li>
                        <li>Demander une autorisation de fleurir le trottoir</li>
                        <li>Participer à la journée citoyenne</li>
                        <li>Organiser une manifestation</li>
                        <li>Réserver une salle</li>
                    </ul>
                </li>
                <li><a href = "ActCityen.php">Commerces et marchés</a>
                    <ul class = "entite">
                        <li>Dates et lieu des marchés</li>
                        <li>Avoir une place sur un marché</li>
                        <li>Animations, foires et évènements</li>
                    </ul>
                </li>
                <li><a href = "ActCityen.php">Services</a>
                    <ul class = "entite" id = "serv">
                        <li>Etat civil</li>
                        <li>Papiers</li>
                        <li>Solidarité</li>
                        <li>Aide à la personne</li>
                        <li>Ehpad public</li>
                    </ul>
                </li>
                <li><a href = "https://www.lachainemeteo.com/meteo-france/ville-44281/previsions-meteo-les-sables-d-olonne-aujourdhui">Météo</a></li>
            </ul>
        </div>
        
        
<!--- Création de la grille --->
        <div id = "grille">
            <div class = "rubrique">
                <p class = "elmt"></p>
                <a href = "ActCityen.php">
                    <img src = "logoSport.gif" />
                    <h3>Sports</h3>
                    <p class="cach">Sites sportifs<br />Piscine<br />Jardins<br />Evènements</p>
                </a>
            </div>
            <div class = "rubrique">
                <p class = "elmt"></p>
                <a href = "ActCityen.php">
                    <img src = "logoNature.gif" /><br />
                    <h3>Nature Environnement</h3><br /><p class="cach">Sites préservés<br />Zoo<br />Sentiers pédestre</p>
                </a>
            </div>
            <div class = "rubrique">
                <p class = "elmt"></p>
                <a href = "ActCityen.php">
                    <img src = "logoTransport.gif" />
                    <h3>Transports</h3>
                    <p class="cach">Parkings<br />Stationnements<br />Transports urbains</p>
                </a>
            </div>
            <div class = "rubrique">
                <p class = "elmt"></p>
                <a href = "ActCityen.php">
                    <img src = "logoAssociation.gif" />
                    <h3>Associations et culture</h3>
                    <p class="cach">Sportives<br />Bibliothèque<br />Conservatoire</p>
                </a>
            </div>
            <div class = "rubrique">
                <p class = "elmt"></p>
                <a href = "ActCityen.php">
                    <img src = "logoVille.gif" />
                    <h3>Logement</h3>
                    <p class="cach">Logements sociaux<br />Service urbanisme<br />Permis de construire</p>
                </a>
            </div>
            <div class = "rubrique">
                <p class = "elmt"></p>
                <a href = "ActCityen.php">
                    <img src = "logoUrgence.gif" />
                    <h3>Santé Sécurité</h3>
                    <p class="cach">Police municipale<br />Urgences<br />Hôpiteaux</p>
                </a>
            </div>
            <div class = "rubrique">
                <p class = "elmt"></p>
                <a href = "ActCityen.php">
                <img src = "logoFamille.gif" />
                    <h3>Famille</h3>
                    <p class="cach">Petite enfance<br />Ecole<br />Centre de loisir<br />Collèges et lycées</p>
                </a>
            </div>
            <div class = "rubrique">
                <p class = "elmt"></p>
                <a href = "ActCityen.php">
                    <img src = "logoEmploi.gif" />
                    <h3>Emploi</h3>
                </a>
            </div>
        </div>
        
        
<!--- Création du slider sur les sorties + formulaire --->
        <div id = "sortir">
        
            <div id = "slider">
                <h1>Sortir</h1>
                <img id = "text" alt = "Sortir" src = "text.gif" />

                <div class = "leSlide">
                    <p>Musique<br /><br />Concerts sur la place de l'Hôtel de Ville chaque samedi aprés-midi, du 1er juillet au 31 août.</p><br /><br />
                    <img src = "SLConcert.png" class = "posIM" >
                </div>
                <div class = "leSlide">
                    <p>Spectacle<br /><br />Le mardi, jeudi et samedi jusqu'au 20 août, de 20h à minuit, venez rire à écouter les clowns provenant de différentes troupes. Bons moments assurés!</p><br /><br />
                    <img src = "SLBatCl.png" >
                </div>
                <div class = "leSlide">
                    <p>Musique<br /><br />Le trio les Wody's font leur show au jardin du tribunal, du 13 au 21 juillet</p><br /><br />
                    <img src = "SLGrp.png" >
                </div>
                <div class = "leSlide">
                    <p>Art urbain<br /><br />Balade au milieu des fresques rurales concues par une habitante du quartier, vous allez vous amusez en regardant de quoi elles sont faites</p><br /><br />
                    <img src = "SLPen.png" >
                </div>
                
            
<!--- Création des boutons flèche du slider --->
                <div class = "bouton">
                    <button class = "bLeft" onclick = "plusDivs(-1)">&#10094;</button>
                    <button class = "bRight" onclick = "plusDivs(1)">&#10095;</button>      
                </div>
            </div>
            
        
<!--- Script js pour l'animation du slider --->
            <script language = "javascript">
            var slideIndex = 1;
            showDivs(slideIndex);
            
            function plusDivs(n){
                showDivs(slideIndex += n);
            }
            
            function showDivs(n){
                var i;
                var x = document.getElementsByClassName("leSlide");
                if (n > x.length) {slideIndex = 1}
                if (n < 1) {slideIndex = x.length}
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                x[slideIndex-1].style.display = "block";
            } 
            </script>
        
        
<!--- Message informatif du formulaire --->
            <div id = "avis">
                <div class = "formulaire1">
                    <p>Messages laissés par les visiteurs, utilisateurs de service </p><br />
                </div>
            
<!-- Création formulaire -->
                <div class = "formulaire">
                    
                    <form method="POST" name="publication" action="baseAvis.php">
                        
                        <p><label for="evenmt">Sortie: </label></p>
                        <input type="texte" name="evenement" id="evenement" required>
                        <span id="missEv"></span><br /><br />

                        <p><label for="avis">Avis: </label></p>
                        <textarea name="message" rows="5" cols="30" id="message" required></textarea>
                        <span id="missMes"></span><br /><br />

                        <input type="submit" name="valid" value="Envoyer" id="envoiAvis" >
                        <input type="reset" name="annuler" value="Annuler" >
                        
                    </form>
                    
                    
<!-- manipulation du formulaire en js par accès des sous-objets de l'objet document-->
                    <script type="text/javascript">
                        
                        var formOk=document.getElementById('envoiAvis');
                        
                        var evenement=document.getElementById('evenement');
                        var missEv=document.getElementById('missEv');
                        
                        var message=document.getElementById('message');
                        var missMes=document.getElementById('missMes');
                        
                        formOk.addEventListener('click', valid);
                        
 
//Vérification champs formulaire remplis correctement
                        function valid(event)
                        {
                            if(evenement.validity.valueMissing)
                            {
                                event.preventDefault();
                                missEv.textContent="Nom sortie manquant";
                                missEv.style.color='red';
                            }
                            if(message.validity.valueMissing)
                            {
                                event.preventDefault();
                                missMes.textContent="Manque l'avis";
                                missMes.style.color='red';
                            }
                        }
                    </script>
                </div>
                
                <div class = "formulaire">


                <?php

                    
//récupération du prénom et du mail pour entrer en bdd 
                    if(!empty($_POST['prenom']))
                    {
                        $prenom=$_POST['prenom'];
                        $email=$_POST['email'];
                        if($_POST['nL']== "oui")
                        {
                            $nLet="oui";
                        }
                        elseif($_POST['nL']== "non")
                        {
                            $nLet="non";
                        }

                        
//insertion du nom, mail? dans la bdd
                        $putVisit = 'INSERT INTO visiteur (code_visiteur, nom, mail, newsletter) VALUES (NULL, ?, ?, ?)';

                        try
                        {
                            $stmt=$db->prepare($putVisit);
                            $stmt->execute(array($prenom, $email, $nLet));

                            $nb_insert=$stmt->rowcount();

                        }
                        catch(Exception $e)
                        {
                            print "Erreur V! " . $e->getMessage() . "<br/>";
                        }
                 
                    
//connexion avec la base de données
                        $pdo=new PDO('mysql:host=localhost;port=3306;dbname=sortieslso;charset=utf8','root','');    
                        
                        
// récupération du code du visiteur
                        $majId='SELECT code_visiteur FROM visiteur';
                        
                        foreach ($pdo->query($majId) as $varId)
                        {
                            $cde= $varId['code_visiteur'];
                        }
                        
                        
                        if($nLet=="oui")
                        {      
                            $majLetter='INSERT into letter (code_visiteur, nom, mail, dateInscpt) VALUES (?, ?, ?, NOW())';
                            
                            try 
                            {
                                $stmt=$db->prepare($majLetter); 
                                $stmt->execute(array($cde, $prenom, $email));
                                $nb_insert=$stmt->rowcount();
                            }
                            catch (Exception $e)
                            {
                                print "Erreur L! " . $e->getMessage() . "<br/>";
                            }
                        }
                        
                        
                    }
                    

                    
//Récupération de l'evenement et du message
                    if(!empty($_SESSION['evenmt']))
                    {
                        $evenmt=$_SESSION['evenmt'];
                        $mess=$_SESSION['mess'];
                        
                        
//Indication temporelle: date à laquelle l'avis est laissé
                        $date=date("Y-m-d");
                        
            
//insertion du message et de l'avis dans la table 'avis'
                        $putMess = 'INSERT INTO avis (id_avis, evenement, message, dateEnt, code_visiteur_Ecrire) 
                        VALUES (NULL, ?, ?, ?, ?)';

                        try
                        {
                            $stmt=$db->prepare($putMess);
                            $stmt->execute(array($evenmt, $mess, $date, $cde));
                            $nb_insert=$stmt->rowcount();
                        }
                        catch (Exception $e)
                        {
                            print "Erreur A! " . $e->getMessage() . "<br/>";
                        }
                    }        

                ?>


<!--- Affichage des avis --->
                    <div id = "mep">
                    <?php
                        
//connexion avec la base de données
                        $pdo=new PDO('mysql:host=localhost;port=3306;dbname=sortieslso;charset=utf8','root','');    
                                    
//affichage des avis
                       $affich = "SELECT * 
                        FROM avis AS AV
                        INNER JOIN visiteur AS VI 
                        ON VI.code_visiteur = AV.id_avis ORDER BY code_visiteur DESC";

                        foreach ($pdo->query($affich) as $row)
                        {
                            print '<strong><span>Evènement: </span></strong>'.$row['evenement'].'<br />';
                            print '<strong><span>Message: </span></strong><br />'.$row['message'].'<br />'.$row['nom'].', le '.$row['dateEnt'].'<br /> ';
                        }                   
                                                            
                        
                        $_POST['prenom'] = $_POST['email'] = $_POST['nL'] = NULL;
                        unset($db);
                        unset($pdo);
                    ?>
                    </div>
                </div>
            </div>
        </div>  
        
        
        
<!--- Cartes, coordonnées --->
        <div id = "find">
            <div id = "cart">
                <img src = "" />
            </div>
            <div id = "plan">
                <img src = "" />
            </div>
            <div id = "contact">
                <h2>Contact mairie:</h2><br />
                    <p>02 51 23 16 00 <br />
                    21, place du Poilu de France <br />
                    85100 Les Sables d'Olonne <br />
                    cedex</p>
            </div>
        </div>
        
        
<!--- Pied de page --->
        <footer>
            <p>Production Com'uniK</p>
        </footer>
    </body>
    
</html>
