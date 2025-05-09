<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "lighthow";
$conn = mysqli_connect($host, $user, $pass, $dbname);
if(!$conn){
    die("Connessione fallita: ". mysqli_connect_error());
}
$querypost="SELECT * FROM domande ORDER BY id_domanda DESC";
$resultdomande=mysqli_query($conn, $querypost);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lighthow</title>
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
<header>
        <div class='logo'>
        <img src="img/logolighthow.png" class="foto" alt="Descrizione dell'immagine">
            <h1>LIGHTHOW</h1>
        </div>
        <div class='nav'>
            <a href='index.php' class='link'>HOME</a>
            <a href='domande.php' class='link'>POST</a>
            <a href='form.php'style="border-bottom: 2px solid white" class='link'>FORUM</a>
        </div>
        <form action="ricerca.php" method="GET" class="boxsearch">
            <input type='search' name='search' placeholder='  Search' class='search'>
        </form>
    </header>
       <h3 class="titolo"> ESPLORA I FORUM </h3>
       <a href="formdettagli.php">
       <div class='bottonecontenitore'>
       <button class='bottone'>
           <b>+ Crea un forum</b>
       </button>
       </a>
        </div>
        <div class="form">
        <?php
            while($row =mysqli_fetch_assoc($resultdomande)){
                echo "<a href = 'forumDomanda1.php?id_domanda=" . $row['id_domanda'] ."'class='formsingoli'>";
                echo "<h4 class='formtitolo'>" . $row['titolo'] . "</h4>";
                echo "<p class='formdescrizione'>" . $row['descrizione'] . "</p>";
                echo "</a>";
            }
        ?>
            </div>
        </div>
</body>
</html>