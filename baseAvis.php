<?php
session_start();
include('conSQL.php');
include('additionnel.php');

?>

<html>
    <head>
        <tittle></tittle>
        
        <script language ="javascript">
            function erreurMail()
            {
                var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                if(inputText.value.match(mailformat))
                {
                document.form1.text1.focus();
                return true;
                }
                else
                {
                alert("You have entered an invalid email address!");
                document.form1.text1.focus();
                return false;
                }
            }
        </script>
        
        <style type="text/css">
            #visu{
                /*   CSS3   */
                opacity: 0.4;
                /*   Pour IE   */
                filter(opacity=40);
            }
            .orange{
                color: darkgreen;
                font-style: italic;
            }
            .affichage{
                display: block;
                position: absolute;
                margin-top: -380px;
                margin-left: 15%;
                padding: 15px;
                width: 700px;
                height: auto;
                background-color: #fff;
                text-align: center;
            }
            #retour input{
                margin-left: 50px;
            }
            @media screen and (max-width: 960px){
                .affichage{
                    width: 400px;  
                    margin-top: -170px;
                    padding: 10px;
                    margin-left: 10%;
                }
            }
            
        </style>
    </head>

<body>
    <script language="text/javascript">
            onload=document.forms['retour'].element['prenom'].focus();
    </script>
    
    <div class="affichage">
        
        <?php
           
//Récupération de l'événement et du message visiteur 
                $evenmt=$_POST['evenement'];
                $mess=$_POST['message'];

//création de 2 variables de session
                $_SESSION['evenmt']=$evenmt;
                $_SESSION['mess']=$mess;

//Indication temporelle: date à laquelle l'avis est laissé
                $date=date("d-m-Y");
                echo 'Aujourd\'hui, le '.$date;

                $_POST['evenmt']=$_POST['mess']=$_POST['nom']=null;
                unset($_POST['publication']);
        ?>
        
<!-- message de confirmation -->
                <p>L'avis que vous avez partagé pour l'évènement: 
                <span class="orange"><?php echo $evenmt ?></span>
                est <span class="orange"><?php echo $mess ?></span>
                    <br /><br />
                    Pour publier votre avis, indiquez votre prénom:
                </p>
           
        
<!-- formulaire retour -->
                <form name="retour" id="retour" action="accueil.php" method="POST">
                    
                    <label for="prenom">Prénom: </label>
                    <input type="text" name="prenom" id='prenom' maxlength='20' required />
                    <span id='missPrenom'></span>
                    <br /><br />
                    
                    <label for="letter">Souhaitez-vous recevoir notre newsletter avec les dernière actualités de notre région?</label><br />
                    <input type="radio" name="nL" onclick='nextForm(this);' value="oui">Oui
                    <input type="radio" name="nL" onclick='nextForm(this);' value="non" checked>Non<br />
                    
                    <input type="mail" name="email" id="cod" placeholder="mail@serveur.com">
                    <span id="missMail"></span>
                    <br />
                    
                    <input type="submit" value="Publier" name="publier" id="boutonEnvoi" >
                    <input type="reset" value="Annuler">
                </form>
                <br />
        
        
        
<!-- manipulation du formulaire: vérification des données -->
            <script language="javascript">

                var formValid=document.getElementById('boutonEnvoi');
                var prnom=document.getElementById('prenom');
                var missPrenom=document.getElementById('missPrenom');
                var email=document.getElementById('cod');

                formValid.addEventListener('click', validation);

                function validation(event)
                {
//Si le champ est vide vérifié avec la méthode valueMissing
                    if(prnom.validity.valueMissing)
                    {
                        event.preventDefault();
                        missPrenom.textContent='prénom manquant';
                        missPrenom.style.color='red';
                    } 
                    else
                    {
                        alert(this.prenom+' vous avez publié votre message!');
                    }
                }
                
// apparition du formulaire mail
                document.getElementById('cod').style.display="none";

                function nextForm(nL)
                {
                    var enrEmail;
                    if(nL.value=="oui")
                    {
                        document.getElementById('cod').style.display="block";
                        $_POST['nL']='oui';
                    }
                    if(nL.value=="non")
                    {
                        document.getElementById('cod').style.display="none";
                        $_POST['nL']='non';
                    }
                }
                
                function validateEmail(email)
                {
                    var re=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                    return re.test(email);
                }



            </script>

        </div>
    
   
    </body>
</html>