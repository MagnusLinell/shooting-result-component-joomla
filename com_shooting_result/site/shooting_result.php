<?php
  $user = JFactory::getUser();
  if ($user->guest) {
  		echo "<p>You must login to see the content.</p>";
	} else {
?>

<html>
   <head>
     <title>Resultat</title>
   </head>
   <body>

     <h2><?php echo "Hej, {$user->name}!"; ?></h2>

     <h3>Resultat</h3>

   </body>
</html>

<?php
  }
?>
