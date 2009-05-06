<?
  $i = 1;
  while($i<10) {
    if(++$j<10) {
      echo $i."x".$j." = ".sprintf("%4d\n", ($i*$j));
    } else {
      $i++;
      $j = 1;
    }
  }
?>
