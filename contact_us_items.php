<?php
require_once('header.php');

require_once('database_call.php');
$contact_us = "SELECT * FROM contact";
$result = $db->query($contact_us);
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Description</th>
      <th scope="col">Timestamp</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($result as $item) 
    {

    
    ?>
    <tr>
      <td><?php echo $item['username'] ?></td>
      <td><?php echo $item['email'] ?></td>
      <td><?php echo $item['description'] ?></td>
      <td><?php echo $item['timestamp'] ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>

<?php require_once('footer.php')
?>