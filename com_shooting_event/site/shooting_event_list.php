<?php
  $user = JFactory::getUser();
  if ($user->guest) {
  		echo "<p>You must login to see the content.</p>";
	} else {
?>

<html>
   <head>
     <title>Event - Lista</title>
   </head>
   <body>

     <h2><?php echo "Hej, {$user->name}!"; ?></h2>

     <h3>Event - Lista</h3>

     <table>
       <thead>
         <tr>
           <th>Datum</th>
           <th>Event</th>
           <th>Plats</th>
         </tr>
       </thead>
       <tbody>
         <tr>
           <td>2017-12-25 | 18:00-19:00</td>
           <td>Precision tävling</td>
           <td>Skjutvallen</td>
         </tr>
         <tr>
           <td>2017-12-29 | 09:00-13:00</td>
           <td>Snabbpistol träning</td>
           <td>Skjutvallen</td>
         </tr>
       </body>
     </table>

   </body>
</html>

<?php
  }
?>
