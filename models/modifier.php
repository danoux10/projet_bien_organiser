<!DOCTYPE html>

<?php include'../controller/header.php';?>
<title>Modifier</title>
</head>
<body>
	<div class="modifier">
		<h2 id="titre_modifier">Modifier</h2>
        <form method="post" class="formulaire_modifier">
            <div>

                <div class="image_modifier">  
                    <img src="../img/honeycombs.svg" alt="image_miel" class="image_miel">
                </div>

                <!--Nom & Prenom-->
                <div class="nom_prenom">
                    <!--Nom-->
                    <div class="nom_modifier">
                        <label class="nom_label">Nom</label>
                        <input type="text" class="input_nom" name="nom">
                    </div>

                    <!--prenom-->
                    <div class="prenom_modifier">
                        <label class="prenom_label">Prenom</label>
                        <input type="text" class="input_prenom" name="prenom">
                    </div>
                </div>    

                <!--Email & Confirm email-->
                <div class="email_confirm_email">
                    <!--email-->
                    <div class="email_modifier">    
                        <label class="modifier_email_label">Email</label>
                        <input type="text" class="modifier_input_email" name="email">
                    </div>

                    <!--confirm email-->
                    <div class="email_modifier">    
                        <label class="modifier_email_label">Confirm Email</label>
                        <input type="text" class="modifier_input_email" name="confirm_email">
                    </div>
                </div>

                <!-- Password & Confirm password-->
                <div class="password_confirm_password">
                    <!--password-->
                    <div class="password_modifier">    
                        <label class="modifier_password_label">Password</label>
                        <input type="password" class="modifier_input_password" name="password">
                    </div>

                    <!--confirm password-->
                    <div class="password_modifier">    
                        <label class="modifier_password_label">Confirm Password</label>
                        <input type="password" class="modifier_input_password" name="confirm_password">
                    </div>    
                </div>
                
                <div class="modifier_valide">
                    <input type="submit" value="Inscrire" class="modifier_bt_valide" name="modifier">
                </div>
                
            </div>
        </form>
    </div>
	
</body>
</html>