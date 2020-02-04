

<?php include("header.php"); ?>
<div class="container">
  <div class="contact">
      <form action="." method="post">
        <div class="container" class="content">
            <div class="content">

                  <h3> <span>Employee </span> Information </h3>
                  <label>Employee ID:</label>
                   <input type="text" name="id" value="<?php echo $product['employee_id'] ?>"><br>

                  <label>First Name:</label>
                  <input type="text" name="fname" value="<?php echo $product['employee_first_name'] ?>"><br>

                   <label>Last Name:</label>
                  <input type="text" name="lname" value="<?php echo $product['employee_last_name'] ?>"><br>

                   <label>Address:</label>
                  <input type="text" name="address" value="<?php echo $product['employee_address'] ?>"><br>

                  <label>City:</label>
                  <input type="text" name="city" value="<?php echo $product['employee_city'] ?>"><br>

                   <label>State:</label>
                  <input type="text" name="state" value="<?php echo $product['employee_state'] ?>"><br>

                   <label>Zip code:</label>
                  <input type="text" name="zip" value="<?php echo $product['employee_zip'] ?>"><br>

                  <label>Phone number:</label>
                  <input type="text" name="phone" value= "<?php echo $product['employee_phone'] ?>"><br>

                  <label>Project ID:</label>
                  <input type="text" name="project_id" value="<?php echo $product['project_id_d'] ?>"><br>

                   <label>Insurance ID:</label>
                  <input type="text" name="insuranceId" value="<?php echo $product['insurance_id_d'] ?>"><br>


                  <input  type="hidden" name="action" value="update" >
                  <span>&nbsp;</span>
                  <br><br><br><br>

          </form>
        <input class="waves-effect waves-light btn" type="submit" value="Update Record">
        <a class="waves-effect waves-light btn" href=".?action=prev">Previous</a>
        <a class="waves-effect waves-light btn" href=".?action=next">Next</a><br><br><br>
      <!--  <a class="waves-effect waves-light btn" href=".?action=delete">Delete a record</a> -->
       </div>
     </div>
    </div>
</div>
<?php include("footer.php"); ?>
