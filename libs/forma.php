<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id = "nav-bar">
  		<a class="navbar-brand" href="../index.php">Video Spēles</a>
    		<ul class="navbar-nav mr-auto">
      			<li class="nav-item active">
        			<a class="nav-link" href="../index.php">Sākums<span class="sr-only">(current)</span></a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="https://store.steampowered.com/">Steam</a>
      			</li>
      			<li class="nav-item">
       				<a class="nav-link" href="video.html">Video</a>
      			</li>
      			<li class="nav-item dropdown">
        			<a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kontakti</a>
        			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
                		<a class="dropdown-item" href="karte.html">Kontakti</a>
                		<div class="dropdown-divider"></div>
                		<a class="dropdown-item" href="forma.php">Forma</a>
            		</div>
      			</li>
      			<li class="nav-item">
      				<a class="nav-link" href="foto.html">Foto</a>
      			</li>
    		</ul>
  		</div>
	</nav>
    <h2>Jautājumi?</h2>
	<div class="form-group">
        <form action="forma" method="post">
        <div class="form-group">
            <label for="name">Vārds:</label>
            <input type="name" class="form-control" id="name" placeholder="Ievadiet vārdu" name="name">
        </div>
        <div class="form-group">
            <label for="surname">Uzvārds:</label>
            <input type="surname" class="form-control" id="surname" placeholder="Ievadiet uzvārdu" name="surname">
        </div>
        <div class="form-group">
            <label for="email">E-pasts:</label>
            <input type="email" class="form-control" id="email" placeholder="Ievadiet e-pastu" name="email">
        </div>
        <div class="form-group">
            <label for="mobile">Telefons:</label>
            <input type="number" class="form-control" id="mobile" placeholder="Ievadiet telefona numuru" name="mobile">
        </div>
        <div class="form-group">
            <label for="question">Jūsu jautājums:</label>
            <textarea class="form-control" id="question" rows="3" name="question"></textarea>
        </div>
        <button class="btn btn-secondary" type="submit" name="save">Iesūtīt</button>
        </form>
    </div>
    <?php
    if(isset($_POST['save'])){
        if(empty($_POST['name'])){
            echo "<b>Nav ievadīts vārds</b>";
        } else {
            echo "<b>Vārds:</b>{$_POST['name']}";
        }
        if(empty($_POST['surname'])){
            echo "<b>Nav ievadīts uzvārds</b>";
        } else {
            echo "<b>Uzvārds:</b>{$_POST['surname']}<br/>";
        }
        echo "<b>E-pasts:</b>{$_POST['email']}<br/>";
        echo "<b>Telefons:</b>{$_POST['mobile']}<br/>";
        echo "<b>Jūsu jautājums:</b>{$_POST['question']}";
    }
    ?>
    <h2>Pieteikties jaunumu saņemšanai e-pastā</h2>
    <div class="form-group">
        <form action="forma" method="post">
        <div class="form-group">
            <label for="emailnews">E-pasts:</label>
            <input type="email" class="form-control" id="emailnews" placeholder="Ievadiet e-pastu" name="emailnews">
        </div>
        <button class="btn btn-secondary" type="submit" name="news">Iesūtīt</button>
        </form>
    </div>
    <?php
    if(isset($_POST['news'])){
        echo "<b>E-pasts:</b>{$_POST['emailnews']}<br/>";
    }
    ?>
    <h2>Reģistrēties</h2>
    <div class="form-group">
        <form action="forma" method="post">
        <div class="form-group">
            <label for="emaillogin">E-pasts:</label>
            <input type="email" class="form-control" id="emaillogin" placeholder="Ievadiet e-pastu" name="emaillogin">
        </div>
        <div class="form-group">
            <label for="password">Parole</label>
            <input type="password" class="form-control" id="password" placeholder="Ievadiet paroli" name="password">
        </div>
        <button class="btn btn-secondary" type="submit" name="login">Iesūtīt</button>
        </form>
    </div>
    <?php
    if(isset($_POST['login'])){
        echo "<b>E-pasts:</b>{$_POST['emaillogin']}<br/>";
        echo "<b>Parole</b>{$_POST['password']}<br/>";
    }
    ?>
</body>
</html>