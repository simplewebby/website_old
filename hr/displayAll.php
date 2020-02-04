<?php include("header.php"); ?>
    <body>

      <div class="container" class="content">

      <h3Retrieved  <span>Data</span></h3>
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
            <th> Project ID </th>
            <th> Insurance Id </th>
            <th> Project Name </th>
            <th> Project Manager Name </th>
            <th> Project Description </th>
            <th> Project Size </th>
            <th> Insurance Name </th>
            <th> Order Date </th>
            <th> Expiration Date </th>
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
      <td> <?php echo $product['project_id_d'];?></td>
          <th> <?php echo $product['insurance_id_d'];?></th>
       <td><?php echo $product['project_name'];?></td>
         <td><?php echo $product['project_manager_name'];?></td>
         <td><?php echo $product['project_description'];?></td>
            <td><?php echo $product['project_size'];?></td>
            <th><?php echo $product['insurance_name'];?></th>
            <th><?php echo $product['order_date'];?></th>
           <th><?php echo $product['expiration_date'];?></th>
                <td>
                  <form action="index.php" method="post">
                      <input type="hidden" name="action" value="deleteFromList">
                      <input type="hidden" name="id"
                             value="<?php echo $product['employee_id']?>" >
                      <input class="waves-effect waves-light btn" type="submit" value ="Delete">
                  </form>
              </td>
     </tr>
    <?php endforeach; ?>

    </table>
     <a class="waves-effect waves-light btn" href=".?action=next">Back to Update Form</a><br>
    <br>

</div>
</div>
<?php include("footer.php"); ?>
