<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>
<!doctype html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="form-group">
        <form action="sazina" method="get">
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
            <input type="mobile" class="form-control" id="mobile" placeholder="Ievadiet telefona numuru" name="mobile">
        </div>
        <div class="form-group">
            <label for="question">Jūsu jautājums:</label>
            <textarea class="form-control" id="question" rows="3" name="question"></textarea>
        </div>
        <button class="btn btn-secondary" type="save">Iesūtīt</button>
        </form>
    </div>
    <?php
    if(isset($_POST['save'])){
        echo "<b>Vārds:</b>{$_POST['name']}";
        echo "<b>Uzvārds:</b>{$_POST['surname']}<br/>";
        echo "<b>E-pasts:</b>{$_POST['email']}<br/>";
        echo "<b>Telefons:</b>{$_POST['mobile']}<br/>";
        echo "<b>Jūsu jautājums:</b>{$_POST['question']}";
    }
    ?>
</body>