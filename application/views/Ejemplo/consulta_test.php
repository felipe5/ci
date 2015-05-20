<table>
  <tr>
    <th>first_name</th>
    <th>last_name</th>
  </tr>
  <tbody>
    <?php 
    $test;
    foreach($test as $tests): ?>
      <tr>
        <td><?php echo $tests->dept_no ?></td>
        <td><?php echo $tests->dept_name ?></td>
      </tr>
    <?php endforeach;?>
  </tbody>
</table>