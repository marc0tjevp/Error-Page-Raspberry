<?php

// Get status code from SERVER.
//$status = $_SERVER['REDIRECT_STATUS'];
$status = 500;

// Array with statuscodes, each containing a title and a message.
$codes = array(
       403 => array('403 - Forbidden', 'The page you were trying to reach is absolutely forbidden for some reason.'),
       404 => array('404 - Not Found', 'The page or file you tried to access can not be found on this Raspberry Pi...'),
       500 => array('500 - Internal Server Error', 'The request was unsuccessful due to an unexpected condition encountered by the server.'),
       503 => array('503 - Service Unavailable', 'Shouldn\'t have used Duct Tape to wall-mount my Raspberry...'),
);

// Get the title and message based on the status code.
$title = $codes[$status][0];
$message = $codes[$status][1];

// Alter message if the status code does not exist in the array.
if ($title == false || strlen($status) != 3) {
       $message = 'Please supply a valid status code.';
}

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title><?php echo $title ?></title>
  </head>

  <body>
    <div class="vertical-center">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-md-4 col-xs-12" align="center">
            <img src="img/pi.png" class="img-responsive img-raspberry" alt="Raspberry Pi Logo">
          </div>
          <div class="col-sm-8 col-md-8 col-xs-12">
            <h3><?php echo $title ?></h3>
            <p><?php echo $message ?></p>

            <a class="btn btn-raspberry" data-statuscode="<?php echo $status ?>"></a>

          </div>
        </div>
      </div>
    </div>
  </body>

</html>
