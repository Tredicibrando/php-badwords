<?php
    // testo originale
    $testo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, sit!';
    // conto lunghezza testo originale
    $lunghezza_originale = strlen($testo);
    // inserisco badword
    $badword = $_GET['badword'];
    // censuro il testo con la parola della query
    $testo_censurato = str_replace( $badword, 'xxx', $testo)
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div>
<h3>Testo originale</h3>
<p> <?php echo $testo; ?> </p>

<h3>Lunghezza testo originale</h3>
<p> <?php echo $lunghezza_originale; ?>  </p>

<h3>Testo censurato</h3>
<p> <?php echo $testo_censurato ?> </p>

</div>


</body>
</html>