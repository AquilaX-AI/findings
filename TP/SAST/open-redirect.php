?>

<?php

if ( isset($_GET['logout']) ) {
    echo "<b>Logging out...</b>";
    
    if ( !isset($_GET['redirect_to']) ) {
        //Redirect to the login domain:
        $url = "/logout.html";
    
    } else if ( preg_match("/^https:\/\/www.example.com\/.*$/", $_GET['redirect_to']) ) {
        $url = $_GET['redirect_to'];
  
    } else {
        $url = "https://www.example.com/login.php";
    }

    header("Location: ".$url, TRUE, 301);
    die;
}

?>
  
<!DOCTYPE html>
<html>
    <head>
      <title><?= $title ?></title>
    </head>
<body>
<h1><?= $title ?></h1>
<div>
<?= $design ?>
</div>
</body>
</html>
