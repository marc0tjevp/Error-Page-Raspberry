<?php

// Get status code from SERVER.
$status = $_SERVER['REDIRECT_STATUS'];

// Array with statuscodes, each containing a title and a message.
$codes = array(
  200 => array('200 - OK!', 'The server is up and running!'),
  403 => array('403 - Forbidden', 'The page you were trying to reach is absolutely forbidden for some reason.', "index.php"),
  404 => array('404 - Not Found', 'The page or file you tried to access can not be found on this Raspberry Pi...', "index.php"),
  500 => array('500 - Internal Server Error', 'The request was unsuccessful due to an unexpected condition encountered by the server.', "#"),
  503 => array('503 - Service Unavailable', 'Shouldn\'t have used Duct Tape to wall-mount my Raspberry...', "#"),
);


// Get the title and message based on the status code.
$title = $codes[$status][0];
$message = $codes[$status][1];
$link = $codes[$status][2];

// Alter message if the status code does not exist in the array.
if ($title == false || strlen($status) != 3) {
  $title = 'What happened?!';
  $message = 'Something weird happend and we don\'t know what to do...';
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

            <a class="btn btn-raspberry" href="javascript:history.back()">Go Back</a>
            <a class="btn btn-raspberry" href="<?php echo $link ?>" data-statuscode="<?php echo $status ?>"></a>

          </div>
        </div>
      </div>
    </div>
  </body>

</html>
