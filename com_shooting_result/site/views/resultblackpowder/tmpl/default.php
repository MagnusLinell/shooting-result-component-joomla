<?php
defined('_JEXEC') or die('Restricted access');
?>

<h2>Resultat Svartkrut</h2>

<table style="width: 100%;">
 <thead>
   <tr>
     <th>Tävling</th>
     <th>Tävlande</th>
     <th>Serie</th>
     <th>1</th>
     <th>2</th>
     <th>3</th>
     <th>4</th>
     <th>5</th>
     <th>6</th>
     <th>7</th>
     <th>8</th>
     <th>9</th>
     <th>10</th>
     <th>11</th>
     <th>12</th>
     <th>13</th>
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
       <td><?php echo $result->POINTS6; ?></td>
       <td><?php echo $result->POINTS7; ?></td>
       <td><?php echo $result->POINTS8; ?></td>
       <td><?php echo $result->POINTS9; ?></td>
       <td><?php echo $result->POINTS10; ?></td>
       <td><?php echo $result->POINTS11; ?></td>
       <td><?php echo $result->POINTS12; ?></td>
       <td><?php echo $result->POINTS13; ?></td>
     </tr>
   <?php } ?>
 </body>
</table>
