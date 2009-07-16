<?
$i=1;
$j=1;
while($i<=9)
{
  echo $i." x ".$j." = ".$i*$j;
  if($i==$j)
  {
    echo "\n";
    $i=1;
    $j++;
  }
  else
  {
    echo "  ";
    $i++;
  }
  if($j==10)
  {
    exit;
  }
}
?>
