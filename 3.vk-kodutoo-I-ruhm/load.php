<?php

  $faili_nimi = $_POST['faili_nimi'];
  $kysimused();

  $myfile = fopen("/Taring/kysimused/$faili_nimi.kys", "r") or die("Unable to open file!");
  // Output one line until end-of-file
  while(!feof($myfile)) {
    array_push($kysimused, echo fgets($myfile));
    echo fgets($myfile) . "<br>";
  }
  fclose($myfile);

?>
