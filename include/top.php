<?php
if(!isset($pageName)) { $pageName = 'Default Name';}
if(!isset($pageDesc)) { $pageDesc = 'Default Description';}
?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo $pageName; ?></title>
  <meta name="description" content="<?php echo $pageDesc; ?>">

  <script type="text/javascript" src="//use.typekit.net/zgz8qhl.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  <link rel="stylesheet" href="/public/css/style.css">
</head>
<body id="<?php echo basename($_SERVER['PHP_SELF'], '.php'); ?>">
