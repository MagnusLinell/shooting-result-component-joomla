<?php
defined('_JEXEC') or die('Restricted access');
?>

<h2>Resultat PPC</h2>

<table style="width: 100%;">
 <thead>
   <tr>
     <th>Tävling</th>
     <th>Tävlande</th>
     <th>X</th>
     <th>10</th>
     <th>9</th>
     <th>8</th>
     <th>7</th>
     <th>0</th>
     <th>Miss</th>
   </tr>
 </thead>
 <tbody>
   <?php foreach ($this->results as $result) { ?>
     <tr>
       <td><?php echo $result->COMPETITION_ID; ?></td>
       <td><?php echo $result->PARTICIPANT_ID; ?></td>
       <td><?php echo $result->MATCH_NUMBER; ?></td>
        <td><?php echo $result->X; ?></td>
       <td><?php echo $result->TEN; ?></td>
       <td><?php echo $result->NINE; ?></td>
       <td><?php echo $result->EIGHT; ?></td>
       <td><?php echo $result->SEVEN; ?></td>
       <td><?php echo $result->ZERO; ?></td>
       <td><?php echo $result->MISS; ?></td>
     </tr>
   <?php } ?>
 </body>
</table>
