<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=11" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8"/>
    <title><?php echo $strPageTitle ?></title>
    <!-- NORMALIZE -->
    <link href="../../content/css/normalize.css" rel="stylesheet" />
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- CUSTOM STYLESHEETS -->
    <link href="content/css/burgermenu.css" rel="stylesheet" />
    <link href="content/css/master.css" rel="stylesheet" />
    <link href="favicon.ico" rel="shortcut icon" >
    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Space+Mono|Titillium+Web" rel="stylesheet" media="bogus">
  </head>


<!--BODY-->
<body>
  <!-- NEEDED PHP SCRIPTS -->
<?php include("variables.php"); ?>

<!-- HEADER -->
<?php echo "<header $styleColor>" ?>

  <nav>
    <ul>
      <li><a href="index.php">Engelsk</a></li>
      <li><a href="task1.php">Dansk</a></li>
      <li><a href="task2.php">Farveblind</a></li>
      <li><a href="task3.php">Ikke Farveblind</a></li>
    </ul>
  </nav>

  <h1><?php echo $strPageTitle; ?></h1>

</header>
