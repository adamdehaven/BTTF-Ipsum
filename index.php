<?php
require_once('class.BTTF.php');
$placeholder = new BTTF;

if(isset($_POST)){
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    $par = ( intval($_POST['par']) > 0 && intval($_POST['par']) < 101 ? intval($_POST['par']) : 1 );
    $sen = ( intval($_POST['sen']) > 0 && intval($_POST['sen']) < 20 ? intval($_POST['sen']) : 5 );
    $tags = ( isset($_POST['tags']) && $_POST['tags'] == 'false' ? false : true );
}
if(isset($_GET)){
    $_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
    $par = ( intval($_GET['par']) > 0 && intval($_GET['par']) < 101 ? intval($_GET['par']) : 1 );
    $sen = ( intval($_GET['sen']) > 0 && intval($_GET['sen']) < 20 ? intval($_GET['sen']) : 5 );
    $tags = ( isset($_GET['tags']) && $_GET['tags'] == 'false' ? false : true );
}

if($tags):
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Back To The Future</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="delorean.png">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    </head>
    <body>
        <?=$placeholder->generateParagraphs($par, $tags, $sen);?>
    </body>
</html>
<? else:
    echo $placeholder->generateParagraphs($par, $tags, $sen);
endif; ?>