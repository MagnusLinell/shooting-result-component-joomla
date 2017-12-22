<?php
  $user = JFactory::getUser();
  if ($user->guest) {
  		echo "<p>You must login to see the content.</p>";
	} else {
?>

<html>
   <head>
     <title>Event - Detailjer</title>
   </head>
   <body>

     <h2><?php echo "Hej, {$user->name}!"; ?></h2>

     <h3>Event - Detailjer</h3>

     <table>
       <tbody>
         <tr>
           <td>Rubrik:</td>
           <td>Snabbpistol träning</td>
         </tr>
         <tr>
           <td>När:</td>
           <td>2017-12-29 | 09:00-13:00</td>
         </tr>
         <tr>
           <td>Plats:</td>
           <td>Skjutvallen</td>
         </tr>
         <tr>
           <td>Kategori:</td>
           <td>Träning</td>
         </tr>
         <tr>
           <td>Beskrivning:</td>
           <td>Så snabbt det går!</td>
         </tr>
         <tr>
           <td>Anmälan:</td>
           <td><input type="button" value="Anmäl"></td>
         </tr>
         <tr>
           <td>Anmälda:</td>
           <td>Olle, Pelle, Lisa, Eva</td>
         </tr>
       </body>
     </table>

   </body>
</html>

<?php
  }
?>
