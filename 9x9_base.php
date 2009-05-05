<?
  for($i=1;$i<10;$i++) {
    for($j=1;$j<10;$j++) {
      echo $i."x".$j." = ".sprintf("%4d\n", ($i*$j));
    }
  }
?>
