<?php

// $mm=$_POST["mm"];
$name=$_POST["uusername"];
// $r=$_POST["reason"];
// $uc=$_POST["usercontact"];
$file=fopen("Message.txt", "a");
$date = date('d-m-y h:i:s');
// fwrite($file, "Reason : ");
// fwrite($file, $r);
// fwrite($file, $reason."\n");
fwrite($file, "Date : ");
fwrite($file, $date."\n");
fwrite($file, "Name :");
fwrite($file, $name);
// fwrite($file, $uusername."\n");
// fwrite($file, "Contact :");
// fwrite($file, $uc."\n");
// fwrite($file, "Message :");
// fwrite($file, $mm."\n");
fclose($file);

?>
