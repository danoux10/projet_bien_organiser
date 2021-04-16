<!DOCTYPE html>

<?php include'../controller/header.php';?>
<title>Inscription</title>
</head>
<body>
	<div class="inscription">
        <form method="post" class="formulaire_inscription">
			<h2 id="titre_inscription">Incription</h2>
            <div>

                <div class="image_inscription">  
                    <img src="../img/honey.svg" alt="image_miel" class="image_miel">
                </div>

                <!--Nom & Prenom-->
                <div class="nom_prenom">
                    <!--Nom-->
                    <div class="nom_inscription">
                        <label class="nom_label">Nom</label>
                        <input type="text" class="input_nom" name="nom">
                    </div>

                    <!--prenom-->
                    <div class="prenom_inscription">
                        <label class="prenom_label">Prenom</label>
                        <input type="text" class="input_prenom" name="prenom">
                    </div>
                </div>    

                <!--Email & Confirm email-->
                <div class="email_confirm_email">
                    <!--email-->
                    <div class="email_inscription">    
                        <label class="inscription_email_label">Email</label>
                        <input type="text" class="inscription_input_email" name="email">
                    </div>

                    <!--confirm email-->
                    <div class="email_inscription">    
                        <label class="inscription_email_label">Confirm Email</label>
                        <input type="text" class="inscription_input_email" name="confirm_email">
                    </div>
                </div>

                <!-- Password & Confirm password-->
                <div class="password_confirm_password">
                    <!--password-->
                    <div class="password_inscription">    
                        <label class="inscription_password_label">Password</label>
                        <input type="password" class="inscription_input_password" name="password">
                    </div>

                    <!--confirm password-->
                    <div class="password_inscription">    
                        <label class="inscription_password_label">Confirm Password</label>
                        <input type="password" class="inscription_input_password" name="confirm_password">
                    </div>    
                </div>
                
                <div class="inscription_valide">
                    <input type="submit" value="Inscrire" class="inscription_bt_valide" name="valide">
                </div>
                
            </div>
        </form>
    </div>
	
</body>
</html>