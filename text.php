<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Test template</title>
</head>
<body>
<?php 

echo $_SESSION['articleText'];

?>
</body>
</html>