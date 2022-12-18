<?php
include 'admin_header.php';
 ?>
 <?php
$form_location = 'attendance_chec_proc.php';
 ?>
 <form action="<?= $form_location ?>" method="post">

    <div class="row-fluid sortable">    
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2>Students</h2>
            </div>
            <div class="box-content">
            <h3>Input Date</h3><input type="date" name="date">
            <br><br>
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                
                  <thead>
                      <tr>
                        <th>P</th>
                        <th>T</th>
                        <th>A</th>
                        <th></th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Section</th>
                          <th>Strand</th>
                      </tr>
                  </thead>   
                  <tbody>
 
                        <?php 
                        $table_name = "students";

                        //get all records from users table
                        $user_data = get($table_name);
                        $serialnumber = 0;
                       
                        //fetch result set and pass it to an array (associative)
                        foreach ($user_data as $key => $row) {
                            $serialnumber++;
                        $fname = $row['fname'];
                        $lname = $row['lname'];
                        $gender = $row['gender'];
                        $section = $row['section'];
                        $strand = $row['strand'];
                        $id = $row['id'];
                        $no_pres = $row['no_pres'];
                        $no_abs = $row['no_abs'];
                        $no_late = $row['no_late'];     
                  ?>
            
                    <tr>
                         <td class="center">

                        <input type="checkbox" name="attendance_status[]" value="Present" ></td>
                          <td><input type="checkbox" name="attendance_status[]" value="Late" ></td>
                            <td><input type="checkbox" name="attendance_status[]" value="Absent" ></td>
                        </td>
                        <td class="center"><?= $serialnumber ?></td>
                        
                        <td class="center"><?= $fname ?><input type="hidden" value="<?= $fname ?>" name="fname[]"></td>
                        <td class="center"><?= $lname ?><input type="hidden" value="<?= $lname ?>" name="lname[]"></td>
                        <td class="center"><?= $section ?><input type="hidden" value="<?= $section ?>" name="section[]"></td>
                        <td class="center"><?= $strand ?><input type="hidden" value="<?= $strand ?>" name="strand[]"></td>
                            
                    </tr>

                    <?php } ?>


                  </tbody>
                </table>
                <div>
                    <input type="submit" name="submit" value="submit" class="btn btn-primary">
                </div>
                </form>
                
 <?php include 'admin_footer.php' ?>