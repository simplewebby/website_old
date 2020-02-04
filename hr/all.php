<?php include("header.php"); ?>

      <div class="container" class="content">

      <h3>Retrieved  <span>Data</span></h3>
  <div class="contact">
        <table class="responsive-table">
          <tr>
            <th> ID </th>
            <th> First Name </th>
            <th> Last Name </th>
            <th> Address </th>
            <th> City </th>
            <th> State </th>
            <th> Zip Code </th>
            <th> Phone Number </th>
            <th> Project Id </th>
              <th> Insurance Id </th>
            <th> Delete </th>

          </tr>

      <?php
      foreach ($products as $product) : ?>
      <tr>
      <td> <?php echo $product['employee_id'];?></td>
      <td><?php echo $product['employee_first_name'];?></td>
      <td><?php echo $product['employee_last_name'];?></td>
      <td><?php echo $product['employee_address'];?></td>
      <td><?php echo $product['employee_city'];?></td>
      <td> <?php echo $product['employee_state'];?></td>
      <td><?php echo $product['employee_zip'];?></td>
      <td><?php echo $product['employee_phone'];?></td>

      <td><?php echo $product['project_id_d'];?></td>
      <td><?php echo $product['insurance_id_d'];?></td>
                <td>
                 <form action="index.php" method="post">
                     <input type="hidden" name="action" value="deleteFromList">
                     <input type="hidden" name="id"
                            value="<?php echo $product['employee_id']?>" >
                     <input class="waves-effect waves-light btn"type="submit" value ="Delete">
                 </form>
             </td>
    </tr>
    <?php endforeach; ?>

    </table>
    <br>
     <a class="waves-effect waves-light btn-large" href=".?action=next">Back to Update Form</a><br><br><br><br>
</div>
</div>
<?php include("footer.php"); ?>
