<?php
function get_all() {
    global $db;
    $query = 'SELECT *
FROM employees
ORDER BY employee_id';
    try {
        $statement = $db->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();
            $statement->closeCursor();
            return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function get_all_records($id, $fname, $lname, $address, $city, $state, $zip, $phone,
$project_id_d, $insurance_id_d, $project_name, $project_manager_name, $project_description,$project_size,
 $insurance_name, $order_date, $expiration_date) {
    global $db;
    $query = 'SELECT e.employee_id,employee_first_name, employee_last_name,
    employee_address, employee_city, employee_state, employee_zip, employee_phone,
    e.project_id_d, e.insurance_id_d, project_name, project_manager_name,
     project_description,project_size,
     insurance_name, order_date, expiration_date
FROM insurances i  JOIN employees e
ON e.insurance_id_d = i.insurance_id
JOIN projects p
ON p.project_id = e.project_id_d
ORDER BY employee_id';
    try {
        $statement = $db->prepare($query);

            $statement->bindValue(':id', $id);
            $statement->bindValue(':fname', $fname);
            $statement->bindValue(':lname', $lname);
            $statement->bindValue(':address', $address);
            $statement->bindValue(':city', $city);
            $statement->bindValue(':state', $state);
            $statement->bindValue(':zip', $zip);
            $statement->bindValue(':phone', $phone);
            $statement->bindValue(':project_id_d', $project_id);
            $statement->bindValue(':insurance_id_d', $insuranceId);


            $statement->bindValue(':project_name', $project_name);
            $statement->bindValue(':project_manager_name', $project_manager_name);
            $statement->bindValue(':project_description', $project_description);
            $statement->bindValue(':project_size', $project_size);


            $statement->bindValue(':insurance_name', $insurance_name);
            $statement->bindValue(':order_date', $order_date);
            $statement->bindValue(':expiration_date', $expiration_date);
            $statement->execute();
            $result = $statement->fetchAll();
            $statement->closeCursor();
            return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function add_employee($id, $fname, $lname, $address, $city, $state, $zip, $phone,
$project_id, $insuranceId) {
    global $db;
    $query = 'INSERT INTO employees
                 (employee_id, employee_first_name, employee_last_name, employee_address,
                   employee_city, employee_state, employee_zip, employee_phone, project_id_d, insurance_id_d
                   )
              VALUES
                 (:id,:fname,:lname, :address,:city,:state, :zip, :phone,
                 :project_id, :insuranceId)';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id);
        $statement->bindValue(':fname', $fname);
        $statement->bindValue(':lname', $lname);
        $statement->bindValue(':address', $address);
        $statement->bindValue(':city', $city);
        $statement->bindValue(':state', $state);
        $statement->bindValue(':zip', $zip);
        $statement->bindValue(':phone', $phone);
        $statement->bindValue(':project_id', $project_id);
          $statement->bindValue(':insuranceId', $insuranceId);
        $statement->execute();
        $statement->closeCursor();

        // Get the last product ID that was automatically generated
        $product_id = $db->lastInsertId();
        return $id;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function update_employee($id, $fname, $lname, $address, $city, $state, $zip, $phone,
$project_id, $insuranceId){
    global $db;
    $query = 'UPDATE employees
              SET employee_id = :id,
                  employee_first_name = :fname,
                  employee_last_name = :lname,
                  employee_address = :address,
                  employee_city = :city,
                  employee_state = :state,
                  employee_zip = :zip,
                  employee_phone = :phone,
                  project_id_d = :project_id,
                  insurance_id_d = :insuranceId
              WHERE employee_id = :id';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id);
        $statement->bindValue(':fname', $fname);
        $statement->bindValue(':lname', $lname);
        $statement->bindValue(':address', $address);
        $statement->bindValue(':city', $city);
        $statement->bindValue(':state', $state);
        $statement->bindValue(':zip', $zip);
        $statement->bindValue(':phone', $phone);
        $statement->bindValue(':project_id', $project_id);
        $statement->bindValue(':insuranceId', $insuranceId);
        $row_count = $statement->execute();
        $statement->closeCursor();
        return $row_count;
    } catch (PDOException $e) {
        echo "We have an error <br>";
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function delete_employee($id) {
    global $db;
    $query = 'DELETE FROM employees WHERE employee_id = :id';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id);
        $row_count = $statement->execute();
        $statement->closeCursor();
        return $row_count;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}
function showProjects(){
  global $db;
  $query = 'SELECT * FROM projects ORDER BY project_id';
  try {
      $statement = $db->prepare($query);
      $statement->execute();
      $result = $statement->fetchAll();
      $statement->closeCursor();
      return $result;
  } catch (PDOException $e) {
      $error_message = $e->getMessage();
      display_db_error($error_message);
  }
}

function showInsurances(){
  global $db;
  $query = 'SELECT * FROM insurances ORDER BY insurance_name';
  try {
      $statement = $db->prepare($query);
      $statement->execute();
      $result = $statement->fetchAll();
      $statement->closeCursor();
      return $result;
  } catch (PDOException $e) {
      $error_message = $e->getMessage();
      display_db_error($error_message);
  }
}

function delete_insurance($insuranceId) {
    global $db;
    $query = 'DELETE FROM insurances WHERE insurance_id = :insuranceId';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':insuranceId', $insuranceId);
        $row_count = $statement->execute();
        $statement->closeCursor();
        return $row_count;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

?>
