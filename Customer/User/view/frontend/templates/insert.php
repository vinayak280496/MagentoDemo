<?php
  $ename = $_POST['ename'];
  $add = $_POST['add'];
  $dept = $_POST['dept'];
  $salary = $_POST['salary'];
  $insert = "insert into Employee_Details values('$ename','$add','$dept','$salary')";// Do Your Insert Query
  if(mysql_query($insert)) {
   echo "Success";
  } else {
   echo "Cannot Insert";
  }
?>