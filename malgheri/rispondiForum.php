<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "lighthow";
$conn = mysqli_connect($host, $user, $pass, $dbname);
if(!$conn){
    die("Connessione fallita: ". mysqli_connect_error());
}
if(isset($_POST['contenuto'])){
    $rispondiContenuto=$_POST['contenuto'];
    $rispondiData=date('Y-m-d');
    $rispondiUtente=$_POST['rispUtente'];
    $rispondiEmail=$_POST['email'];
    $idDomanda=$_GET['id_domanda'];
    $queryForm="INSERT INTO risposte(contenuto, data_compilazione, email, nome_utente, id_domanda) VALUES(?, ?, ?, ?, ?)";
    $stmt=mysqli_prepare($conn, $queryForm);
    $resultDom= mysqli_stmt_bind_param($stmt, "ssssi", $rispondiContenuto, $rispondiData, $rispondiEmail, $rispondiUtente, $idDomanda);
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
            <h1>LIGHTHOW</h1>
        </div>
        <div class='nav'>
            <a href='forumDomanda1.php?id_domanda=<?php echo $_GET['id_domanda']; ?>' class='link'>Indietro</a>
        </div>
    </header>
    <main>
        <form action="rispondiForum.php?id_domanda=<?php echo $_GET['id_domanda']; ?>" method="POST">
        <div class='input'>
            <label for="email"><b>Email</b></label>
            <input type="text" name="email" placeholder="Inserisci la tua email" required>
            <label for="domUtente"><b>Nome Utente</b></label>
            <input type="text" name="rispUtente" placeholder="Inserisci il tuo nome utente" required>
            <label for="contenuto"><b>Risposta</b></label>
            <textarea name="contenuto" id="contenuto" placeholder="Scrivi la tua risposta" required></textarea>
            
            <input type="submit" class='bottone'>
        </div>
        
        </form>
    </main>
</body>
</html>