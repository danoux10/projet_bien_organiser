<!DOCTYPE html>

<?php include '../controller/header.php';?>
<title>Gere les utilisateur</title>
</head>
<body>
	<?php 
		$selection = $bdd_user->query('SELECT * FROM utilisateur ORDER BY id');
	?>
    <div class="user">
    <table class="affiche">
        <thead>
            <tr class="title">
                <th colspan="2" class="centre">id</th>
                <th colspan="2" class="centre">nom</th>
                <th colspan="2" class="centre">prenom</th>
                <th colspan="2" class="centre">email</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                while($affichage = $selection->fetch()){
                    //variable selection
                    $id = $affichage['id'];
                    $nom = $affichage['nom'];
                    $prenom = $affichage['prenom'];
                    $email = $affichage['email'];
                    
                    //affichage
                    echo "<tr>"; 
                        echo "<td colspan='2' class='centre'>$id</td>";
                        echo "<td colspan='2' class='centre'>$nom</td>";
                        echo "<td colspan='2' class='centre'>$prenom</td>";
                        echo "<td colspan='2' class='centre'>$email</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
        
    <div id="formulaire">    
    <!--ajouter utilisateur-->
    <form target="_blank" action="inscription.php" id="inscription">
        <input type="submit" value="ajouter un utilisateur">    
    </form> 
    <!--formulaire de selection utilisateur-->
    <form method="post" id="selection">
        <!--select user-->
        <?php 
            echo $select_user;
        ?>    
        <input type="submit" name="valider_utilisateur" value="valider">
    </form>
        
    <!--modifier utilisateur-->
    <form method="post" id="modifier">
        <input type="submit" value="modifier utilisateur" name="modifier">
    </form>
    <!--supprimer utilisateur-->
    <form method="post" id="supprimer">
        <input type="submit" value="supprimer utilisateur" name="supprimer_utilsateur" onClick="myFunction()">
    </form>
    </div>
    <!--fin user-->    
    </div>
    <?php 
        session_start();
        if(isset($_POST['valider_utilisateur'])){
           
            $_SESSION['utilisateur'] = $_POST['user'];
                
                //debug $utilisateur
            //echo $utilisateur;
                
            $utilisateur_selectionner = $bdd_user -> query('SELECT * FROM utilisateur WHERE id='.$_SESSION['utilisateur'].'');
            //$utilisateur_selectionner = $bdd -> query('SELECT * FROM utilisateur WHERE email=loic.cb@gmail.com');
            
            while($users = $utilisateur_selectionner->fetch()){
                $nom_selection = $users['nom'];
                $prenom_selection = $users['prenom'];
                $email_selection = $users['email'];
                
                echo "<p class='selection'> $nom_selection      $prenom_selection     $email_selection";
            }
        }
    
         //delete user
        if(isset($_POST['supprimer_utilsateur'])){
            
            $delet_user = $bdd_user -> prepare('DELETE FROM utilisateur WHERE id='.$_SESSION['utilisateur'].'');
            $delet_user->execute();
                  
        }
   
        
        
    ?>
</body>
</html>