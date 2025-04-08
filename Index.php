<?php 

// Exercice 1 :
for ($i=1; $i < 11; $i++) { 
    echo $i;
    echo '<br/>';
}

// Exercice 2 : 
$somme=0;
for ($i=1; $i <=100; $i++) { 
    $somme +=$i;
}
echo $somme;
echo '<br/>';

// Exercice 3 :
for( $i = 1; $i <= 10; $i++ )
{
  echo '| ';

  for( $j = 1; $j <= 10; $j++ )
  { 
    echo $i * $j . ' | ';
  }
 
  echo '<br/>';
} 