<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "lighthow";
$conn = mysqli_connect($host, $user, $pass, $dbname);
if(!$conn){
    die("Connessione fallita: ". mysqli_connect_error());
}
$search=$_GET['search'];
if(isset($search)){
    $querySearch="SELECT * FROM post WHERE titolo LIKE '%$search%'";
    $querySearchDom="SELECT * FROM domande WHERE titolo LIKE '%$search%'";
    // $querySearchRisp="SELECT * FROM risposte WHERE contenuto LIKE '%$search%'";
    // $query="SELECT * FROM domande JOIN risposte ON risposte.id_domanda = domande.id_domanda WHERE titolo LIKE '%$search%'";
    $resultSearchPost=mysqli_query($conn, $querySearch);
    $resultSearchDom=mysqli_query($conn, $querySearchDom);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/ricerca.css">
</head>
<body>
    <header>
    <header>
        <div class='logo'>
        <img src="img/logolighthow.png" class="foto" alt="Descrizione dell'immagine">
            <h1>LIGHTHOW</h1>
        </div>
        <div class='nav'>
            <a href='index.php' class='link'>INDIETRO</a>
        </div>
    </header>
    <div>
    <h3 class="titolo"> RISULTATI </h3>
    <?php
        while($row =mysqli_fetch_assoc($resultSearchPost)){
            echo "<a href = 'postdettagli.php?id_post={$row['id_post']}' class='ricercato'>";
            echo "<h4 class='risultato'>POST: " . $row['titolo'] . "</h4>";
            echo "</a>";
        }
    ?>
    <?php
        while($rowDomanda = mysqli_fetch_assoc($resultSearchDom)){
            echo "<a href = 'forumDomanda1.php?id_domanda=" . $rowDomanda['id_domanda'] . "' class='ricercato'>";
            echo "<h4 class='risultato'>Domanda: " . $rowDomanda['titolo'] . "</h4>";
            echo "</a>";
                    
        }
    ?>
    </div>
</body>
</html>