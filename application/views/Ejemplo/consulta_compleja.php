<table>
  <tr>
    <th>first_name</th>
    <th>last_name</th>
    <th>salary</th>
    <th>title</th>
    <th>from_date</th>
    <th>to_date</th>
    <th>dept_name</th>
  </tr>
  <tbody>
    <?php 
    $Personas;
    foreach($Personas as $persona): ?>
      <tr>
        <td><?php echo $persona->first_name ?></td>
        <td><?php echo $persona->last_name ?></td>
        <td><?php echo $persona->salary ?></td>
        <td><?php echo $persona->title ?></td>
        <td><?php echo $persona->from_date ?></td>
        <td><?php echo $persona->to_date ?></td>
        <td><?php echo $persona->dept_name ?></td>
      </tr>
    <?php endforeach;?>
  </tbody>
  <?=$this->pagination->create_links()?>    
</table>

