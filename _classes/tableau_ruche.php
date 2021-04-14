<?php
    $ruche_selectionner = $bdd_ruche->query('SELECT * FROM ruche_data WHERE ruche_id='.$_SESSION['ruche'].' ORDER BY jour ASC');
    echo "<div id='tableau_ruche'>";
     echo "<table id='affiche_ruche'>";
                echo "<thead class='table_head'>";
                    echo "<tr class='cellule'>";
                        echo "<th colspan='2' class='centre'>id</th>";
                        echo "<th colspan='2' class='centre'>date</th>";
                        echo "<th colspan='2' class='centre'>heure</th>";
                        echo "<th colspan='2' class='centre'>poids</th>";
                        echo "<th colspan='2' class='centre'>temperature</th>";
                        echo "<th colspan='2' class='centre'>humidité</th>";
                    echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                
                while($donner = $ruche_selectionner->fetch()){
                    
                    //variable
                    $id = $donner['ruche_id'];                
                    $poids = $donner['poids'];
                    $temperature = $donner['temperature'];
                    $humiditer = $donner['humidite'];
                    
                    //formatage date/heure
                    $datetime = $donner['jour'];
                    
                    $annee = substr($datetime, 0,4);
                    $mois = substr($datetime, 5,2);
                    $jours = substr($datetime, 8,2);
                    
                    $heure = substr($datetime,11,8);
                    
                    $date = $jours."/".$mois."/".$annee;
                    
                    //affichage
                    echo "<tr class='cellule'>";
                        echo "<td colspan='2' class='centre'>$id</td>";
                        echo "<td colspan='2' class='centre'>$date</td>";
                        echo "<td colspan='2' class='centre'>$heure</td>";
                        echo "<td colspan='2' class='centre'>$poids Kg</td>";
                        echo "<td colspan='2' class='centre'>$temperature °C</td>";
                        echo "<td colspan='2' class='centre'>$humiditer %</td>";
                    echo "</tr>";
                }
                echo "</tbody>";
            echo "</table>";
        echo "</div>";
?>