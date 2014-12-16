<?php 

$notes = array("a", "a-flat", "b", "b-flat", "c", "d-flat", "d", "e-flat", "e", "f", "g-flat", "g");

shuffle($notes);
$file = "../assets/".$notes[array_rand($notes)]."-3.wav";

array_rand($notes);
header('Content-type: audio/wav');
//header('Content-Disposition: inline; filename='.basename($file));
header('Content-Disposition: inline; filename="note.wav"');
header('Pragma: public');
header('Content-Length: ' . filesize($file));

// The wav source is in assets
readfile($file);


?>