<?php
/* -- LANGUAGE SELECTOR -- */
  switch ($language) {
    case 'DK':
      // write code here
      break;

    case 'UK':
      // write code here
      break;

    default:
      # code...
      break;
  };


  /* COLORBLIND SELECTOR & RANDOM COLOR PICKER COMBINED */

    $colorSwitch = rand(1,6);

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
