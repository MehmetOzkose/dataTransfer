<?php
header('Content-Type: text/html; charset=utf-8');
foreach($query as $row)
{
  print "<b>İd no: </b>".$row->id;
  print "   ";
  print "<b>Ad: </b>".$row->ad;
  print "-->";
  print $row->aciklama;
  print "---------------------------<br>";
}
?>