<?php $language = "DK";
  $colorblind = 0;
 ?>
<?php require("incl/settings.php") ?>

<?php $strPageTitle = "Sprogleg"; ?>

<!-- HEAD, HEADER & BODY(start) -->
<?php require("incl/header.php"); ?>



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



<!-- FOOTER, JAVASCRIPTS & BODY(end) -->
<?php require("incl/footer.php"); ?>
