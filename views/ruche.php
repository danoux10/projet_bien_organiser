<!DOCTYPE html>

<?php include '../controller/header.php';?>
<title>Observer Ruche</title>
</head>
<body>
	<?php
        if(isset($_POST['valide_ruche'])){
            $_SESSION['ruche'] = $_POST['ruche'];
            $ruche=$_POST['ruche'];
        }
    ?>
    <div class="bloc_nav_ruche">
        <div id="titre">
            <h2 class="titre_ruche_observation">Observer ruche</h2>

            <!--titre ruche-->
            <?php 
                echo "<h3 class='titre_ruche'>ruche n°".$_SESSION['ruche']."</h3>";
            ?>
        </div>
    
        <div class="formulaire">

            <!--form selection ruche-->
            <form method="post" class="selection_ruche">
                <?php 
                    print $select_ruche; 
                ?>
                <input type="submit" value="valider ruche" name="valide_ruche">
            </form>
        
            <div class="csv_pdf">
                <table class="table_csv_pdf">
                    <tr class="cellule_csv_pdf">
                        <td>Télécharger les données :</td>
                        <td> <a href="csv.php" class="lien_csv_pdf">excel</a> </td>
                        <td> / </td>
                        <td> <a href="pdf.php" class="lien_csv_pdf">pdf</a> </td>
                    </tr>
                </table>
            </div>
        
            <!--form affichage tableau/graphique-->
            <table id="table_graph">
                <tr class="cellule_graph">
                        <td>Afficher :</td>
                    <form method="post" class="tableau_graph">
                        <td> <input type="submit" value="tableau" name="tableau" class="bt_graph"> </td>
                    </form>
                </tr>
            </table>
        </div>
    </div>
    
    <div id="tableau_graph">
        <?php        
        
            if(isset($_POST['tableau'])){
                include '../_function/tableau_ruche.php';
            }
        
            include '../_function/graphique.php';  
        ?>
    </div>
</body>
</html>