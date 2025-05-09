<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "lighthow";
$conn = mysqli_connect($host, $user, $pass, $dbname);
if(!$conn){
    die("Connessione fallita: ". mysqli_connect_error());
}
$queryFormDom="SELECT nome_utente,data_compilazione,titolo,descrizione FROM domande WHERE id_domanda=" . $_GET['id_domanda'];
$resultdomande=mysqli_query($conn, $queryFormDom);
$queryFormRisp="SELECT nome_utente, data_compilazione, contenuto FROM risposte WHERE id_domanda=" . $_GET['id_domanda'];
$resultRisposte=mysqli_query($conn, $queryFormRisp);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum Domanda</title>
    <link rel="stylesheet" href="css/formdomanda.css">
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
        <div class='primo'>
        <?php
            while($row =mysqli_fetch_assoc($resultdomande)){
                echo "<a href = '' class='inizio'>";
                echo "<div class='utenteprincipale'>";
                echo $row['nome_utente']; 
                echo "</div>"
        ?>
                
            <span></span>

        <?php
                echo "<div class='utenteprincipale'>";
                echo $row['data_compilazione'];
                echo "</div>";
                echo "<h4 class='formtitolo'>" . $row['titolo'] . "</h4>";
                echo "<p class='formdescrizione'>" . $row['descrizione'] . "</p>";
                echo "<form action='rispondiForum.php?id_domanda=" . $_GET['id_domanda'] . "' method='POST'> <input type='submit' class='bottone' value='Rispondi'> </form>";
                echo "</a>";
            }
        ?>
            </div>
        </div>
        <div class="form">
        <?php
            while($row=mysqli_fetch_assoc($resultRisposte)){
                echo "<div class='risposte'>";
                echo $row['nome_utente'] ."<br>"; 
                echo $row['data_compilazione'];
                echo "<p class='risputenti'>" .$row['contenuto'] ."</p>";
                echo "<form action='rispondiForum.php?id_domanda=" . $_GET['id_domanda'] . "' method='POST'>";
                echo "</div>";
            }
        ?>
        </div>
    </header>
</body>
</html>