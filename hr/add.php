<?php include("header.php"); ?>
  <div class="container">

      <div class="contact">
        <form action="." method="post">
          <div class="container" class="content">
              <div class="content">

                <h3 class="brand"> Add an<span> Employee </span> Information </h3>
               <label>Enter ID:</label>
               <input type="text" name="id" ><br><br>
               <label>Enter first name:</label>
               <input type="text" name="fname"  ><br><br>
               <label>Enter last name:</label>
               <input type="text" name="lname" ><br><br>
               <label>Enter Address:</label>
               <input type="text" name="address" ><br><br>
               <label>Enter City:</label>
               <input type="text" name="city"  ><br><br>
               <label>Enter State:</label>
               <input type="text" name="state" ><br><br>
               <label>Enter Zipcode:</label>
               <input type="text" name="zip"  ><br><br>
               <label>Enter Phone number:</label>
               <input type="text" name="phone" ><br><br>
             <label>Project ID:</label>
             <input type="text" name="project_id" ><br><br>
             <label>Insurance ID:</label>
             <input type="text" name="insuranceId" ><br><br>
              <input type="hidden" name="action" value="add">
              <label>&nbsp;</label>
              <input class="waves-effect waves-light btn" type="submit" value="Add a new Employee">
              <a class="waves-effect waves-light btn" href=".?action=next">Back to Update Form</a><br><br><br><br><br><br>
        </form>
        </div>
      </div>
    </div>
  </div>
  <?php include("footer.php"); ?>
