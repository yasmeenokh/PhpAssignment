<?php
function sortArray(&$array)
{
  for ($j = 0; $j < 10; $j++) {
    for ($i = 0; $i < 9; $i++) {
      if ($array[$i] > $array[$i + 1]) {
        $temp = $array[$i + 1];
        $array[$i + 1] = $array[$i];
        $array[$i] = $temp;
      }
    }
  }
  print_r($array);
  return $array;
}
$inputArray = array(3, 6, 8, 7, 0, 1, 4, 2, 9, 5);
sortArray($inputArray);
?>

<?php

function isValidHexCode($str)
{
  if (preg_match_all('/^#[0-9A-F]{6}$\b/', $str)) {
    echo 'true';
    return 'true';
  } elseif (preg_match_all('/^#[0-9a-f]{6}$\b/', $str)) {
    echo 'true';
    return 'true';
  } else {
    echo 'false';
    return 'false';
  }
}

isValidHexCode("#CD5C5C")
?>
