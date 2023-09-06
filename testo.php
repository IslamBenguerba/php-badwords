<?php

$testo = $_GET['testo'];
echo '<pre>'.nl2br($testo).'</pre>' ;

$parolaChiave = $_GET['key'];

echo   $parolaChiave.' la parola da censurare'. '<br/>';
$nuovoTesto = str_replace($parolaChiave,'***',$testo);

echo $nuovoTesto
?>