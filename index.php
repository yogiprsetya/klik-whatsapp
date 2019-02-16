<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <!--<meta http-equiv="refresh" content="5;url=whatsapp://send?text=Hello%2C%20World!&phone=6283873087154">-->
  <?php
    require_once 'Mobile_Detect.php';
    $detect = new Mobile_Detect;

    if ( $detect->isMobile() ) {
        //header("Location: whatsapp://send?text=Hello%2C%20World!&phone=6283873087154");
        header("refresh:5;url=http://sukajualan.com/cs-wa/langsung-wa.php");
    }

   ?>
  <title>Contact-Card</title>
</head>

<body>

    <h1><a href="https://web.whatsapp.com/send?text=haha%0A%0Ahiii&phone=6283873087154">Whatsapp Aja sis</a> </h1><br>
</body>
</html>