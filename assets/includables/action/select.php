<?php 

for($i = 0;$i<28;$i++){
    $run[$i] = "";
    $run2[$i] = "" ;                               
  }

 if(isset($_GET["search"]) && $_GET["atomicmass"] != "" && is_numeric($_GET["atomicmass"]) == true){
    $atomicmass = $_GET['atomicmass'];
    $query = "SELECT * FROM periodic_table_of_elements2 WHERE `COL 1` = '$atomicmass'";
    $result = mysqli_query($conn,$query);
    $run = mysqli_fetch_array($result);
  
    $query2 = "SELECT * FROM periodic_table_of_elements2 WHERE `COL 4` = 'AtomicMass'";
      $result2 = mysqli_query($conn,$query2);
      $run2 = mysqli_fetch_array($result2);
      
 }else if(isset($_GET["search"]) && $_GET["atomicmass"] != "" && is_numeric($_GET["atomicmass"]) == false && strlen($_GET["atomicmass"]  < 3)){
    $atomicmass = ucfirst($_GET['atomicmass']);
    $query = "SELECT * FROM periodic_table_of_elements2 WHERE `COL 3` = '$atomicmass'";
    $result = mysqli_query($conn,$query);
    $run = mysqli_fetch_array($result);

    $query2 = "SELECT * FROM periodic_table_of_elements2 WHERE `COL 4` = 'AtomicMass'";
      $result2 = mysqli_query($conn,$query2);
      $run2 = mysqli_fetch_array($result2);
 }
 

 if(isset($_GET['all'])){
  $selectall = "SELECT * FROM `periodic_table_of_elements2`";
  $selectallquery = mysqli_query($conn,$selectall);
  $heading = mysqli_fetch_array($selectallquery);
 }
 
      
?>