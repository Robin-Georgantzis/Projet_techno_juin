 <div class="container">
     <h4>Information personnel</h4>
     <form method="post">
         <?php
         if (isset($er_sex)){
             ?>
             <div><?= $er_sex ?></div>
             <?php
         }
         ?><input type="radio" name="sexe" value="oui" id="h" checked="checked" /> <label for="oui">Femme</label>
           <input type="radio" name="sexe" value="non" id="h" checked="checked" /> <label for="non">Homme</label><br><br>
 <?php
 // S'il y a une erreur sur le nom alors on affiche
if (isset($er_nom)){
?>
 <div><?= $er_nom ?></div>
<?php
}
?>
<input type="text" placeholder="Votre nom" name="nom" value="<?php if(isset($nom)){ echo $nom; }?>" required>
<?php
if (isset($er_prenom)){
?>
<div><?= $er_prenom ?></div>
<?php
 }
 ?>
<input type="text" placeholder="Votre prénom" name="prenom" value="<?php if(isset($prenom)){ echo $prenom; }?>" required><br><br><hr><h5>Login du compte</h5>
<?php
if (isset($er_mail)){
?>
 <div><?= $er_mail ?></div>
<?php
}
?>
<input type="email" placeholder="Adresse mail" name="mail" value="<?php if(isset($mail)){ echo $mail; }?>" required>
<?php
 if (isset($er_mdp)){
?>
<div><?= $er_mdp ?></div>
<?php
 }
 ?><br><br>
 <input type="password" placeholder="Mot de passe" name="mdp" value="<?php if(isset($mdp)){ echo $mdp; }?>" required>
<br><br><input type="password" placeholder="Confirmer le mot de passe" name="confmdp" required>
<br><br><button type="submit" name="inscription">Envoyer</button></form><br><br>
 </div>

