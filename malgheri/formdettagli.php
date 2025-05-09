<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "lighthow";
$conn = mysqli_connect($host, $user, $pass, $dbname);
if(!$conn){
    die("Connessione fallita: ". mysqli_connect_error());
}
if(isset($_POST['titolo'])){
    $domandaTitolo=$_POST['titolo'];
    $domandaData=date('Y-m-d');
    $domandaDescrizione=$_POST['descrizione'];
    $domandaUtente=$_POST['domUtente'];
    $domandaEmail=$_POST['email'];
    $queryForm="INSERT INTO domande(titolo, descrizione, data_compilazione, email, nome_utente) VALUES(?, ?, ?, ?, ?)";
    $stmt=mysqli_prepare($conn, $queryForm);
    $resultDom= mysqli_stmt_bind_param($stmt, "sssss", $domandaTitolo, $domandaDescrizione, $domandaData, $domandaEmail, $domandaUtente);
    mysqli_stmt_execute($stmt);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/formdettagli.css">
</head>
<body>
    <header>
        <div class='logo'>
        <img src="img/logolighthow.png" class="foto" alt="Descrizione dell'immagine">
            <h1>LIGHTHOW</h1>
        </div>
        <div class='nav'>
            <a href='form.php' class='link'>INDIETRO</a>
        </div>
    </header>
    <main>
        <form action="formdettagli.php" method="POST">
        <div class='input'>
            <label for="email"><b>Email</b></label>
            <input type="text" name="email" placeholder=" Inserisci la tua email" class="form" required>
            <label for="domUtente"><b>Nome Utente</b></label>
            <input type="text" name="domUtente" placeholder=" Inserisci il tuo nome utente" class="form" required>
            <label for="titolo"><b>Titolo</b></label>
            <input type="text" name="titolo" placeholder=" Scrivi la tua domanda" class="form" required>
            <label for="descrizione"><b>Descrizione</b></label>
            <textarea name="descrizione" id="descrzione" placeholder=" Scrivi la tua risposta" class="descrizione" required></textarea>
            
            <input type="submit" class='bottone'>
        </div>
        
        </form>

        <?php

        ?>
    </main>
</body>
</html>