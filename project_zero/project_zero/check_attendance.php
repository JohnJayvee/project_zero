<?php include "perfect_function.php" ?>
<html>
 <body>
 <form method = "POST"><strong>
 Set the date: 
 </strong>
 <input type = "date" name = "set_date"></br></br>
 <table width="800" border="3" cellpadding="1" cellspacing="1">
 <tr>
 <th><center>First name</center></th>
 <th><center>Section</center></th>
 <th><center>Status</center></th>
 </tr>
 <?php
  $query = mysql_query("SELECT * FROM students");
  echo "<form action = view_attendance.php method = POST>";
  while($student=mysql_fetch_array($query))
  {   
  echo "<tr>";
  echo "<td><center>".$student['fname']."</center></td>";  // the 'fname' and the 'section'
  echo "<td><center>".$student['lname']."</center></td>";
   echo "<td><center>".$student['strand']."</center></td>";  // the 'fname' and the 'section'
  echo "<td><center>".$student['section']."</center></td>"; 
  echo '<td><center><input type = "checkbox" name = "status" value = "Present">Present </input>';
  echo '<input type = "checkbox" name = "status" value = "Absent">Absent </input>';
  }
  echo "</form>";
  echo "</table>";

if(isset($_POST['save']))
{
    if(filter_input(INPUT_POST, 'set_date') && filter_input(INPUT_POST, 'status'))
    {
       if(isset($_POST['set_date']) && ($_REQUEST['status']=="Present"))
       {
        $sql = "INSERT INTO attendance(date, status) VALUES('$_POST[set_date]', '$_REQUEST[status]')"; 
        echo '<span style="color:green;"><strong></br>Attendance Complete!<strong></span>';
       }
       else if(isset($_POST['set_date']) && ($_REQUEST['status']=="Absent"))
       {
        $sql = "INSERT INTO attendance(date, status) VALUES('$_POST[set_date]', '$_REQUEST[status]')"; 
        echo '<span style="color:green;"><strong></br>Attendance Complete!<strong></span>';          
       }   
        mysql_query($sql, $con);
    }       
    else 
    echo '<span style="color:red;"><strong></br>All fields are required</strong></span>';
}
  ?>
</br></br>
<input type = "submit" name = "save" value = "Submit>
</form>
</body>
</html>