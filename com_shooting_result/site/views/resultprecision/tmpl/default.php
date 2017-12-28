<?php
defined('_JEXEC') or die('Restricted access');
?>
<h1><?php echo "Resultat Precision: "; echo count($this->results); ?></h1>

<h3>Resultat Precision</h3>

<table style="width: 100%;">
 <thead>
   <tr>
     <th>Tävling</th>
     <th>Tävlande</th>
     <th>1</th>
     <th>2</th>
     <th>3</th>
     <th>4</th>
     <th>5</th>
   </tr>
 </thead>
 <tbody>
   <?php foreach ($this->results as $result) { ?>
     <tr>
       <td><?php echo $result->COMPETITION_ID; ?></td>
       <td><?php echo $result->PARTICIPANT_ID; ?></td>
       <td><?php echo $result->SERIE_NUMBER; ?></td>
       <td><?php echo $result->POINTS1; ?></td>
       <td><?php echo $result->POINTS2; ?></td>
       <td><?php echo $result->POINTS3; ?></td>
       <td><?php echo $result->POINTS4; ?></td>
       <td><?php echo $result->POINTS5; ?></td>
     </tr>
   <?php } ?>
 </body>
</table>
