<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "lighthow";
// $search=$_POST['search'];
$conn = mysqli_connect($host, $user, $pass, $dbname);
if(!$conn){
    die("Connessione fallita: ". mysqli_connect_error());
}
$querypost="SELECT * FROM post";
$resultpost=mysqli_query($conn, $querypost);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lighthow</title>
    <link rel="stylesheet" href="css/domande.css">
</head>
<body>
<header>
        <div class='logo'>
        <img src="img/logolighthow.png" class="foto" alt="Descrizione dell'immagine">
            <h1>LIGHTHOW</h1>
        </div>
        <div class='nav'>
            <a href='index.php'class='link'>HOME</a>
            <a href='domande.php' style="border-bottom: 2px solid white" class='link'>POST</a>
            <a href='form.php'class='link'>FORUM</a>
        </div>
        <form action="ricerca.php" method="GET" class="boxsearch">
            <input type='search' name='search' placeholder='  Search' class='search'>
        </form>
    </header>
        <h3 class="titolo"> ESPLORA I POST </h3>
        <div class="domande">
        <?php
            while($row =mysqli_fetch_assoc($resultpost)){
                // echo "<a href = 'postdettagli.php?id_post=" . $row['id_post'] . "' class='singoledomande'>";
                echo "<a href = 'postdettagli.php?id_post={$row['id_post']}' class='singoledomande'>";
                echo "<h4>" . $row['titolo'] . "</h4>";
                echo "</a>";
          }
        ?>
       </div>
</body>
</html>