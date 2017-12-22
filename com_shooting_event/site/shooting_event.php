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
     <?php echo "User: name={$user->name}, username={$user->username}"; ?>
     <?php echo '<p>Grattis! Du har kommit till redigera eventsidan!</p>'; ?>
   </body>
</html>

<?php
  }
?>
