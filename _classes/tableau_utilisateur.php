<?php
      $utilisateur = $bdd_user->query('SELECT * FROM utilisateur ORDER BY id');
     echo "<table class='affiche_utilisateur'>";
                echo "<thead>";
                    echo "<tr class='cellule table_head'>";
                        echo "<th colspan='2' class='centre'>nom</th>";
                        echo "<th colspan='2' class='centre'>prenom</th>";
                        echo "<th colspan='2' class='centre'>email</th>";
                    echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                
                while($affichage = $utilisateur->fetch()){
                    
                    //variable
                    $nom = $affichage['nom'];
                    $prenom = $affichage['prenom'];
                    $email = $affichage['email'];
                    
                    //affichage
                    echo "<tr class='cellule'>"; 
                        echo "<td colspan='2' class='centre'>$nom</td>";
                        echo "<td colspan='2' class='centre'>$prenom</td>";
                        echo "<td colspan='2' class='centre'>$email</td>";
                    echo "</tr>";
                }
                echo "</tbody>";
            echo "</table>";
?>