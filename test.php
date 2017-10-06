<?php
$language = "UK";
$colorSwitch = rand(1,6);
$colorblind = 1;

if ($colorblind == 1) {
  if ($colorSwitch <= 3) {
    $styleColor = "style=\"background-color:grey;\"";
  }
  else {
    $styleColor = "style=\"background-color:black;\"";
  };
}

else {
  if ($colorSwitch <= 3) {
  $styleColor = "style=\"background-color:blue;\"";
  }
  else {
  $styleColor = "style=\"background-color:red;\"";
  };
};

?>

<?php

echo "<article $styleColor>";

switch ($language) {
  case 'DK':
    $strPageTitle = "Sprogleg";
    require("incl/dkTxt.php");
    break;

  case 'UK':
    $strPageTitle = "Language Play";
    require("incl/ukTxt.php");
    break;

  default:
    $language = "UK";
    break;
};
 ?>

</article>


<!-- /*switch ($colorblind) {
  case 1:
  if ($colorSwitch <= 3) {
    $styleColor = "style=\"background-color:grey;\"";
  }
  else {
    $styleColor = "style=\"background-color:black;\"";
  };

  default:
  if ($colorSwitch <= 3) {
    $styleColor = "style=\"background-color:blue;\"";
  }
  else {
    $styleColor = "style=\"background-color:red;\"";
  };
};*/ -->
