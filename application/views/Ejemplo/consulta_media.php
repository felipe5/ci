<table>
  <tr>
    <th>first_name</th>
    <th>last_name</th>
  </tr>
  <tbody>
    <?php 
    $personasF;
    foreach($personasF as $persona): ?>
      <tr>
        <td><?php echo $persona->first_name ?></td>
        <td><?php echo $persona->last_name ?></td>
      </tr>
    <?php endforeach;?>
  </tbody>
  <?=$this->pagination->create_links()?>  
</table>