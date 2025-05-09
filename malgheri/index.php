<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "lighthow";
$conn = mysqli_connect($host, $user, $pass, $dbname);
if(!$conn){
    die("Connessione fallita: ". mysqli_connect_error());
}
$querypost="SELECT * FROM post LIMIT 4";
$resultpost=mysqli_query($conn, $querypost);
$querydomande="SELECT * FROM domande LIMIT 3";
$resultdomande=mysqli_query($conn, $querydomande);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lighthow</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header>
        <div class='logo'>
            <img src="img/logolighthow.png" class="foto" alt="Descrizione dell'immagine">
            <h1>LIGHTHOW</h1>
        </div>
        <div class='nav'>
            <a href='index.php' style="border-bottom: 2px solid white" class='link'>HOME</a>
            <a href='domande.php' class='link'>POST</a>
            <a href='form.php'class='link'>FORUM</a>
        </div>
        <form action="ricerca.php" method="GET" class="boxsearch">
            <input type='search' name='search' placeholder='  Search' class='search'>
        </form>
    </header>
    <main>
        <h3 class="titolo"> POST IN EVIDENZA </h3>
       <div class="domande">
        <?php
            while($row =mysqli_fetch_assoc($resultpost)){
                echo "<a href = 'postdettagli.php?id_post={$row['id_post']}' class='singoledomande'>";
                echo "<h4>" . $row['titolo'] . "</h4>";
                echo "</a>";
            }
        ?>
       </div>
       <h3 class="titolo" style="margin-top:12px"> FORUM IN EVIDENZA </h3>
        <div class="form">
        <?php
            while($row =mysqli_fetch_assoc($resultdomande)){
                echo "<div class='formsingoli'>";
                echo "<h4 class='formtitolo'>" . $row['titolo'] . "</h4>";
                echo "<p class='formdescrizione'>" . $row['descrizione'] . "</p>";
                echo "<a href='forumDomanda1.php?id_domanda=" . $row['id_domanda'] . "'>";
                echo "<input type='submit' value='Rispondi' class='bottonerispondi'>";
                echo "</a>";
                echo "</div>";
                


            }
        ?>
            </div>
        </div>
    </main>
</body>
</html>