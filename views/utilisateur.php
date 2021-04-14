<!DOCTYPE html>

<?php include '../controller/header.php';?>
<title>Gere les utilisateur</title>
</head>
<body>
	
	<h2 id="titre_user">gere utilisateur</h2>
    <div id="user">
		<div id="tableau_utilisateur">
            <?php 
                include '../_function/tableau_utilisateur.php';
            ?>
        </div>
        
        <div id="formulaire_utilisateur">    
			<table>	
				<tbody>
					<tr>
						<td>
							<form target="_blank" action="inscription.php" id="inscription">
								<input type="submit" value="ajouter un utilisateur" id="ajouter">    
							</form> 
						</td>
						<td>
							<form target="_blank" action="inscription.php" id="modif">
								<input type="submit" value="modifier un utilisateur" id="modifier">    
							</form> 
						</td>
						<td>
							<form target="_blank" action="inscription.php" id="suppresion">
								<input type="submit" value="supprimer un utilisateur" id="supp">    
							</form>
						</td>
					</tr>
				</tbody>
         	</table>
			
		<!--formulaire de selection utilisateur-->
        <form method="post" id="selection">
            <!--select user-->
            <?php 
                echo $select_user;
            ?>    
            <input type="submit" value="valider" name="valider_utilisateur" id="valide">
        </form>
    	
			<div id="affiche_selection">
			<?php 
				//session_start();
				if(isset($_POST['valider_utilisateur'])){

					$_SESSION['utilisateur'] = $_POST['user'];

					$utilisateur_selectionner = $bdd -> query('SELECT * FROM utilisateur WHERE id='.$_SESSION['utilisateur'].'');

					while($users = $utilisateur_selectionner->fetch()){
						$nom_selection = $users['nom'];
						$prenom_selection = $users['prenom'];
						$email_selection = $users['email'];
					}
					echo "<table id='tableau_selection'>";
						echo "<caption id='tableau_title'> utilisateur selectioner </caption>";
						echo "<thead>";
							echo "<tr class='cellule table_head'>";
								echo "<th class='centre'>Nom</th>";
								echo "<th class='centre'>Prenom</th>";
								echo "<th class='centre'>Email</th>";
							echo "</tr>";
						echo "<tbody>";
							echo "<tr>";
								echo "<td class='centre'> $nom_selection </td>";
								echo "<td class='centre'> $prenom_selection </td>";
								echo "<td class='centre'> $email_selection </td>";
							echo "<tr>";
						echo "</tbody>";
					echo "</table>";
				}

				 //delete user
				if(isset($_POST['supprimer_utilsateur'])){
					$delet_user = $bdd -> prepare('DELETE FROM utilisateur WHERE id='.$_SESSION['utilisateur'].'');
					$delet_user->execute();
					header('location:affichage_utilisateur.php');
				}       
			?>
			</div>
		</div><!--fin formulaire--> 
	</div><!--fin user-->
</body>
</html>