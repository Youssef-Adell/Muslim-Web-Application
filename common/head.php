<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Lateef&family=Reem+Kufi&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/main.css" />
  <title><?php echo $pageName ?></title>

  <!---if page is "thfez" only call its style because there are styles conflicts--->
  <?php if ($pageName == "تحفيظ القرأن") { ?>
    <link rel="stylesheet" href="css/sessions.css" />
  <?php } else { ?>
    <link rel="stylesheet" href="css/ramadan.css" />
    <link rel="stylesheet" href="css/sessions.css" />
    <link rel="stylesheet" href="css/register.css" />
    <link rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="css/forget_password.css" />
    <link rel="stylesheet" href="css/sour.css" />
    <link rel="stylesheet" href="css/stories.css" />
    <link rel="stylesheet" href="css/contact.css" />
    <link rel="stylesheet" href="css/thaqafa.css" />
    <link rel="stylesheet" href="css/keraaa.css" />
  <?php } ?>

</head>