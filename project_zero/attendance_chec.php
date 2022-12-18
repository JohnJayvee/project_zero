<?php include 'admin_header.php';

 ?>
<script language="javascript" src="attendance.js" type="text/javascript"></script>
<h1 class="page-header">Students</h1>
<!-- main content -->

  <div class="box-content">

    <?php

$tablename = 'attendance_records';
$attendance = $_POST['attendance_check'];
if(isset($attendance) != 0)
{
  foreach ($attendance as &$value) {
    if($_POST['attendance'] == 'present'){
      updatestatus($value, $tablename, 1);
      
    
    } elseif ($_POST['attendance'] == 'late') {
     updatestatus($value, $tablename, 2);
    
    }
    elseif($_POST['attendance'] == 'absent')
    {
      updatestatus($value, $tablename, 3);
     
    }
  }
}


 ?>
  <div class="row-fluid sortable">  
    <div class="box span12">
      <div class="box-header" data-original-title>
        <h2>Students</h2>
      </div>
      <div class="box-content">
      <?php $create_attendance = base_url()."view_present.php"; ?>
      <a href="<?= $create_attendance ?>">
      <button class="btn btn-success" >View Attendance</button></a>
      <br><br>
         <?php $form_location = base_url()."user_create_proc.php";?>
         
           
           
         
               <form method="POST" action="">
        <table class="table table-striped table-bordered bootstrap-datatable datatable">
        
          <thead>
            <tr>
              <th>Attendance</th>
              <th></th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Year Level</th>
                <th>Section</th>
                <th>Strand</th>
                
              
            </tr>
          </thead>   
          <tbody>
     
              <?php 
                
              $user_data = get_join_attendance("students","attendance_records", "studid", 0,$_SESSION["sname"]);
              //get all records from users table
          
                       
            //fetch result set and pass it to an array (associative)
              foreach ($user_data as $key => $row) {
                $serialnumber++;
                $id = $row['id'];
            $studid = $row['studid'];
            $fname = $row['fname'];
            $lname = $row['lname'];
            $strand = $row['strand'];
            $section = $row['section'];
            $year_level = $row['year_level'];
            $attendance_status = $row['attendance_status'];
              
          ?>
      <tr>
        
              <td class="center"><input type="checkbox" name="attendance_check[]"  value="<?= $id ?>"></td>
              <td class="center"><?= $serialnumber ?></td>
            
            <td class="center"><?= $fname ?></td>
            <td class="center"><?= $lname ?></td>
            <td class="center"><?= $year_level ?></td>
            <td class="center"><?= $section ?></td>
            <td class="center"><?= $strand ?></td>
            
               </tr>

          <?php } ?>

          </tbody>
        </table>
        <div>
     
               <input type="submit" name="attendance" class="btn btn-info" value="present" action="<?= $form_location ?>">
               <input type="submit" name="attendance" class="btn btn-primary" value="late">
               <input type="submit" name="attendance" class="btn btn-danger" value="absent">
      </div>
 
    </div>
  </div>
</div>
</form>


<!-- close main content -->


<?php include 'admin_footer.php'; ?>
