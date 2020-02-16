<?php session_start()?>

<a href='edit'>Edit</a>
<a href='deco'>Deconnect</a>
<p>Bienvenue sur le profil de  : <?php echo $_SESSION['email']?></p>

<form action="update" method="post" class="form">
    <input type="text" id="email" name="email" value="<?php echo $_SESSION['email']?>" ></br>
    <input type="text" id="password" name="password" value="<?php echo $_SESSION['password']?>"></br>
    <input type="submit" id="uptdate" name="update" value="Modifier le profil"></br>
    <input type="submit" id="delete" name="delete" value="Supprimer le profil">
</form>




