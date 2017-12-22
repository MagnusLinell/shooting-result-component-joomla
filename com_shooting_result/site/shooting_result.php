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
     <?php echo "User: name={$user->name}, username={$user->username}"; ?>
     <?php echo '<p>Grattis! Du har kommit till resultatsidan!</p>'; ?>
   </body>
</html>

<?php
  }
?>
