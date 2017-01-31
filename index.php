<?php
function alpha(array $langage){
  $plouf = $langage;
  sort($plouf);
  return $plouf;
}

function glue($langage){
  $fusion = implode($langage, "");
  return $fusion;
}

$langage = array("HTML","CSS","Javascript","PHP");
$plouf = alpha($langage);
print_r($plouf);
echo "</br>", glue($langage);
?>
