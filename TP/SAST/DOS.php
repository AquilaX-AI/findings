<?php
include_once('./ignore/design/design.php');
$title = 'Denial-of-service';
$design = Design(__FILE__, $title);

?>

<?php
function InviteLink($from, $to) {  

    $f = intval($from);
    $t = intval($to);
    $l = "abcdefghijklmnopqrstuvwxyz";
    $invite = "";

    if ( ( ($f >= 0 && $f <= 16) && $t <= 64 ) == false) {
        return null;
    }
    //Generate an invite:
    for ($i = $f; $i != $t; $i++) { 
            $invite .= $l[rand(0, strlen($l) - 1)];
    }

    $link = ("https://".$_SERVER['SERVER_NAME']."/".$invite);

    return $link;
} 

echo "<h2>Generate a invite link\n</h2>";

if ( isset($_GET['from']) || isset($_GET['to']) ) {
    echo "Your link: ", InviteLink($_GET['from'], $_GET['to']);
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
