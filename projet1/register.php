<?php require 'inc/header.php'; ?>


<?php
if(!empty($_POST))
{
    $errors = array();

    //Variable errors Username
    if(empty($_POST['username']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['username'])){
        $errors['username'] = "Votre pseudo n'est pas valide ! (a-z_0_9)";
    }
    //Variable errors Email
    if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL )){
        $errors['email'] = "Votre mail n'est pas valide";
    }
    //Variable Password && Confirmation du pass valide
    if (empty($_POST['password']) || $_POST['password'] != $_POST['password1'] ){
        $errors['password'] = "Votre mot de passe est pas valide";
    }
    //VARIABLE QUI DÉBUG AVEC LA FONCTION DANS FUNCTION.PHP
    debug($errors);

}

?>

<h1>Inscription du site</h1>

<form method="post">


    <div class="form-group">
        <label for="Pseudo">Votre Pseudo</label>
        <input type="text" name="username" />

    </div>


<div class="form-group">
    <label for="Email">Votre email</label>
    <input type="text" name="email" class="form-control" />

</div>


<div class="form-group">
    <label for="Pseudo">Confirmez votre email</label>
    <input type="text" name="email" class="form-control" />

</div>


<div class="form-group">
    <label for="">Mot de passe </label>
    <input type="password" name="password" class="form-control" />

</div>


<div class="form-group">
    <label for="">Confirmez votre mot de passe </label>
    <input type="password" name="password1" class="form-control" />

</div>

<button type="submit" class="btn btn-primary">M'inscrire</button>

</form>



















<?php require 'inc/footer.php'; ?>
