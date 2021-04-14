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
    <div id="bloc_nav_ruche">
        <div id="titre">
            <h2 id="titre_ruche_observation">Observer ruche</h2>

            <!--titre ruche-->
            <?php 
                echo "<h3 id='titre_ruche'>ruche n°".$_SESSION['ruche']."</h3>";
            ?>
        </div>
    
        <div id="formulaire_ruche">

            <!--form selection ruche-->
            <form method="post" id="selection_ruche">
                <?php 
                    print $select_ruche; 
                ?>
                <input type="submit" value="valider ruche" name="valide_ruche">
            </form>
        
            <div id="csv_pdf">
                <table id="tableau_csv_pdf">
                    <tr id="cellule_csv_pdf">
                        <td>Télécharger les données :</td>
                        <td> <a href="csv.php" class="lien_csv_pdf">excel</a> </td>
                        <td> / </td>
                        <td> <a href="pdf.php" class="lien_csv_pdf">pdf</a> </td>
                    </tr>
                </table>
            </div>
        
            <!--form affichage tableau/graphique-->
            <table id="tableau_graph">
                <tr id="cellule_graph">
                        <td>Afficher :</td>
                    <form method="post" class="form_graph">
                        <td> <input type="submit" value="tableau" name="tableau" id="btn_graph"> </td>
                    </form>
                </tr>
            </table>
        </div>
    </div>
    
    <div id="affiche_graph">
        <?php        
        
            if(isset($_POST['tableau'])){
                include '../_function/tableau_ruche.php';
            }
        
            include '../_function/graphique.php';  
        ?>
    </div>
</body>
</html>