<?php
if ( false && isMobile ) {
?>
<!DOCTYPE html>
<html ng-app="xlk" class="no-js">
<head>
    <meta charset="utf-8" >
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="bookmark" href="/favicon.ico" type="image/x-icon">
    <meta name="keywords" content="关键字" >
    <meta name="description" content="">
    <title>H5</title>
</head>
<body ng-controller="MainCtrl as main">
</body>
</html>
<?php
}else{
?>

<?php echo $this->getContent() ?>

<?php
}
?>