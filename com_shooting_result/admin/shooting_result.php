<?php
  $user = JFactory::getUser();
  if ($user->guest) {
  		echo "<p>You must login to see the content.</p>";
	} else {
?>

<html>
   <head>
     <title>Redigera resultat</title>
   </head>
   <body>
     <?php echo "Hello {$user->name}, this is the admin result page!"; ?>
   </body>
</html>

<?php
  }
?>
