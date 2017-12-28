<?php
defined('_JEXEC') or die('Restricted access');
?>

<h2>Resultat Fält</h2>

<table style="width: 100%;">
 <thead>
   <tr>
     <th>Tävling</th>
     <th>Tävlande</th>
     <th>Station</th>
     <th>Träff</th>
     <th>Tavlor</th>
     <th>Poäng</th>
   </tr>
 </thead>
 <tbody>
   <?php foreach ($this->results as $result) { ?>
     <tr>
       <td><?php echo $result->COMPETITION_ID; ?></td>
       <td><?php echo $result->PARTICIPANT_ID; ?></td>
       <td><?php echo $result->STATION_NUMBER; ?></td>
       <td><?php echo $result->HITS; ?></td>
       <td><?php echo $result->TARGETS; ?></td>
       <td><?php echo $result->POINTS; ?></td>
     </tr>
   <?php } ?>
 </body>
</table>
