<?php include("header.php"); ?>
<body>
    <div class="wrapper">
      <div class="container" class="content">

      <h3>Retrieved  <span>Data</span></h3>

  <div class="contact">
        <table class="responsive-table">
          <tr>
            <th> Insurance ID </th>
            <th> Insurance Name </th>
            <th> Order Date </th>
            <th> Expiration Date </th>

          </tr>

      <?php
      foreach ($result as $key) : ?>
      <tr>
        <th> <?php echo $key['insurance_id'];?></th>
        <th><?php echo $key['insurance_name'];?></th>
        <th><?php echo $key['order_date'];?></th>
       <th><?php echo $key['expiration_date'];?></th>
        <td>
      </td>
    </tr>
    <?php endforeach; ?>

    </table>
    <br>
     <a  class="waves-effect waves-light btn" href=".?action=next">Back to Update Form</a>
</div>
</div>
</div>
<?php include("footer.php"); ?>
