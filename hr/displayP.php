<?php include("header.php"); ?>
 <div class="wrapper">
      <div class="container" class="content">

      <h3><span>Projects</span> Data</h3>
  <div class="contact">
        <table class="responsive-table">
          <tr>
            <th> Project ID </th>
            <th> Project Name </th>
            <th> Project Manager Name </th>
            <th> Project Description </th>
            <th> Project Size </th>

          </tr>

      <?php
      foreach ($result as $key) : ?>
      <tr>
      <td> <?php echo $key['project_id'];?></td>
       <td><?php echo $key['project_name'];?></td>
         <td><?php echo $key['project_manager_name'];?></td>
         <td><?php echo $key['project_description'];?></td>
            <td><?php echo $key['project_size'];?></td>
                <td>
             </td>
    </tr>
    <?php endforeach; ?>

    </table>
    <br>
     <a class="waves-effect waves-light btn" href=".?action=next">Back to Update Form</a>
</div>
</div>
</div>
<?php include("footer.php"); ?>
