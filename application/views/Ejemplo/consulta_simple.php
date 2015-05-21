<table>
  <tr>
    <th>no</th>
    <th>name</th>
  </tr>
  <tbody>
    <?php 
    $departments;
    foreach($departments as $department): ?>
      <tr>
        <td><?php echo $department->dept_no ?></td>
        <td><?php echo $department->dept_name ?></td>
      </tr>
    <?php endforeach;?>
  </tbody>
  <?=$this->pagination->create_links()?> 
</table>