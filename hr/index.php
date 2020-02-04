<?php
// start session management with persistent cookie
$lifetime = 60 * 60 * 24;
session_set_cookie_params($lifetime, '/');
session_start();

//Create array if needed
if(empty($_SESSION['products'])){
    $_SESSION['products'] = array();
  }
//Initialize index variable
if(empty($_SESSION['index'])){
       $_SESSION['index']=0;
}


// bring in models
// make connection to database
require('db.php');
require('function_db.php');

// get the action to perform
// post from form button
// get from hyperlink
$action = filter_input(INPUT_GET, 'action');
if(empty($action)){
  $action = filter_input(INPUT_POST, 'action');
}

//initialize variable to hold record
//initialize variable to hold index
$product = array();
$products=array();
$x = $_SESSION['index'];
$record = array();
$info=array();
// if no action was selected
if(!isset($action)){
$_SESSION['products'] = get_all();
$product =$_SESSION['products'][0];
include('update.php');
}

// if next action was selected
elseif($action == 'next'){
$_SESSION['index']++;
    if($_SESSION['index'] == count($_SESSION['products']))
        {$_SESSION['index']=0;}
$x = $_SESSION['index'];
$product =  $_SESSION['products'][$x];
include('update.php');
}

// if previous action was selected
elseif($action == 'prev'){
   $_SESSION['index']--;
    if($_SESSION['index'] < 0){
        $_SESSION['index']=count($_SESSION['products'])-1;}
$x = $_SESSION['index'];
$product =  $_SESSION['products'][$x];
include('update.php');
}
// if update action was selected
elseif($action == 'update')
{
   $id = filter_input(INPUT_POST, 'id');
   $fname = filter_input(INPUT_POST, 'fname');
   $lname  = filter_input(INPUT_POST, 'lname');
   $address = filter_input(INPUT_POST, 'address');
   $city = filter_input(INPUT_POST, 'city');
   $state = filter_input(INPUT_POST, 'state');
   $zip = filter_input(INPUT_POST, 'zip');
   $phone = filter_input(INPUT_POST, 'phone');
   $project_id = filter_input(INPUT_POST, 'project_id');
  $insuranceId = filter_input(INPUT_POST, 'insuranceId');

   update_employee($id, $fname, $lname, $address, $city, $state, $zip, $phone,
   $project_id, $insuranceId);

   $_SESSION['products'] = get_all();
   $x = $_SESSION['index'];
   $product =  $_SESSION['products'][$x];
   include('update.php');

}
// to see all employees
elseif($action == 'showadd'){
    include('add.php');
}
// is user wants to add the record
elseif($action == 'add'){

    $id = filter_input(INPUT_POST, 'id');
    $fname = filter_input(INPUT_POST, 'fname');
    $lname  = filter_input(INPUT_POST, 'lname');
    $address = filter_input(INPUT_POST, 'address');
    $city = filter_input(INPUT_POST, 'city');
    $state = filter_input(INPUT_POST, 'state');
    $zip = filter_input(INPUT_POST, 'zip');
    $phone = filter_input(INPUT_POST, 'phone');
    $project_id  = filter_input(INPUT_POST, 'project_id');

    //input from insurance
    $insuranceId = filter_input(INPUT_POST, 'insuranceId');
    $insurance_name = filter_input(INPUT_POST, 'insurance_name');
    $order_date = filter_input(INPUT_POST, 'order_date');
    $expiration_date  = filter_input(INPUT_POST, 'expiration_date');
    //input from project

    $project_name = filter_input(INPUT_POST, 'project_name');
    $project_manager_name = filter_input(INPUT_POST, 'project_manager_name');
    $project_description = filter_input(INPUT_POST, 'project_description');
    $project_size = filter_input(INPUT_POST, 'project_size');

    add_employee($id, $fname, $lname, $address, $city, $state, $zip, $phone,
    $project_id, $insuranceId);

    $_SESSION['products'] = get_all();
    $_SESSION['index']=count($_SESSION['products'])-1;
    $x = $_SESSION['index'];
    $product =  $_SESSION['products'][$x];
   include('update.php');
}
elseif($action=='delete'){

    $product_id = $_SESSION['products'][$x]['id'];
    delete_employee($id);
    $_SESSION['products'] = get_all();
    $_SESSION['index']--;
     $x = $_SESSION['index'];
     $product =  $_SESSION['products'][$x];
     include('update.php');

}
elseif($action=='deleteFromList'){

    $id = filter_input(INPUT_POST, 'id');
    delete_employee($id);
    $_SESSION['products'] = get_all();
    $_SESSION['index']--;
     $x = $_SESSION['index'];
     $products=$_SESSION['products'];
     include('all.php');

}

elseif($action=='view'){

    $products=$_SESSION['products'];
    include('all.php');
}
elseif($action=='displayAll'){
      $products=$_SESSION['products'];
    include('displayAll.php');
}


elseif($action=='displayP'){
  $result=showProjects();
         include('displayP.php');

}
elseif($action=='displayI'){
  $result=showInsurances();
         include('displayI.php');

}

// reset session
// $_SESSION=array();
// session_destroy();
?>
