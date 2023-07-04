<!--Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure. L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
BONUS 1 : Milestone 3
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.
BONUS 2: Milestone 4
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme). Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.-->

<?php
 $comb = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
 $pass = array(); 
 $combLen = strlen($comb) - 1; 
 for ($i = 0; $i < 10; $i++) {
     $n = rand(0, $combLen);
     $pass[] = $comb[$n];
 } 
 $password = implode($pass);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-STRONG-PASSWORD-GENERATOR</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>StrongGenerator Password</h1>
        <h2>Genera una password sicura</h2>
        <div class="form-layout">
            <form action="./index.php" method="get">
                <h1>
                    PASSWORD : 
                    <?php echo $password; ?>
                </h1>
                <div class="flex">
                    <label for="password">
                        lunghezza password : 
                        <?php echo strlen($password); ?>
                                
                    </label>
                </div>
                
                <input type="submit" value="check">
             </form>
        </div>
    </div>
    
</body>
</html>