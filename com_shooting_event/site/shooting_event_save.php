<?php
  $user = JFactory::getUser();
  if ($user->guest) {
  		echo "<p>You must login to see the content.</p>";
	} else {
?>

<html>
   <head>
     <title>Event - Skapa</title>
   </head>
   <body>

     <h2><?php echo "Hej, {$user->name}!"; ?></h2>

     <h3>Event - Skapa</h3>

     <table>
       <tbody>
         <tr>
           <td>Rubrik:</td>
           <td><input type="text" value="Snabbpistol träning"></td>
         </tr>
         <tr>
           <td>När:</td>
           <td>
              Start: <input type="datetime-local" value="2017-12-29 09:00"><br>
              Slut: <input type="datetime-local" value="2017-12-29 13:00">
            </td>
         </tr>
         <tr>
           <td>Plats:</td>
           <td><input type="text" value="Skjutvallen"></td>
         </tr>
         <tr>
           <td>Kategori:</td>
           <td><input type="text" value="Träning"></td>
         </tr>
         <tr>
           <td>Beskrivning:</td>
           <td><input type="text" value="Så snabbt det går!"></td>
         </tr>
         <tr>
           <td></td>
           <td><input type="button" value="Spara"></td>
         </tr>
       </body>
     </table>

   </body>
</html>

<?php
  }
?>
