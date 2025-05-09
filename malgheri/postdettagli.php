<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "lighthow";
$conn = mysqli_connect($host, $user, $pass, $dbname);
if(!$conn){
    die("Connessione fallita: ". mysqli_connect_error());
}
$queryPost="SELECT titolo, contenuto, autore FROM post WHERE id_post=" . $_GET["id_post"];
$resultPost=mysqli_query($conn, $queryPost);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/postdettagli.css">
</head>
<body>
<header>
        <div class='logo'>
        <img src="img/logolighthow.png" class="foto" alt="Descrizione dell'immagine">
            <h1>LIGHTHOW</h1>
        </div>
        <div class='nav'>
            <a href='domande.php' class='link'>INDIETRO</a>
        </div>
    </header>
    <?php
        while($row=mysqli_fetch_assoc($resultPost)){
            echo "<h1>" . $row['titolo'] ."</h1>";
            echo "<p>" . $row['contenuto'] ."</p>";
            echo "<span>" . $row['autore'] ."</span>";
        }
    ?>
</body>
</html>

