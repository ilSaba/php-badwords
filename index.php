<!-- Codice PHP -->
<?php
    $paragraph = 'Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.';

    $pluto = str_replace($_GET["badword"], '*****', $paragraph);
    echo $pluto;

    $pippo = strlen($paragraph);
    echo $pippo;

    $leonzio = $_GET["badword"]
?>

<hr>

<!-- Stampo su HTML -->
<h1>Testo:</h1>
<h3><?php echo $pluto ?></h3>
<h1>Il paragrafo è composto da: </h1>
<h3><?php echo $pippo ?> lettere</h3>
<h1>La bad word è: </h1>
<h3><?php echo $leonzio ?></h3>