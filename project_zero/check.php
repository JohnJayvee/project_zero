<!DOCTYPE html>
<html lang="en">
  <head>
  <style>
table,th,td
{
border-collapse:collapse;
}
th, td
{
padding:6px;
}
        td { text-align: center; width: 40px; overflow: hidden;  white-space: nowrap;}
</style>
    <meta charset="utf-8">
    <title>Manage Daily Notes</title>
  </head>
  <body>
      <p><a href="..">physCMS home</a></p>
      <?php include $_SERVER['DOCUMENT_ROOT'] . '/artgibney/includes/logout.inc.html.php'; ?>
    <h1>Manage Daily Notes</h1>
    <p><a href="?addcourseform">Add Course</a>  &#8658;  
    <? if(countRows('courses')): ?>
     <a href="?addlearnerform">Add Student</a>
    <? endif; ?>  
    <? if(countRows('learners')): ?>
       &#8658;  <a href="?courses">Manage Courses and Students</a></p>
    <? endif; ?>
                 <form action="?addnotes" method="post">
            <table>
            <tr>
            <th>Course</th>
            <th>Student</th>
            <th>Absence</th>
            </tr>
            <?php foreach (array_reverse($courses) as $course): 
            foreach (array_reverse($learners) as $learner): ?>
                     <tr>
                          <?php if($course['id']==$learner['courseid']): ?>
                      <td> 
                            <?php htmlout($course['course']) ?>
                      </td>
                        <td>           
                            <?php htmlout($learner['learner']);?> 
                        </td>
                        <td>
                           <input type="checkbox" name="absence[]" id="<?php htmlout($learner['id']);?> " value="<?php htmlout($learner['id']);?> ">
                        </td>
                             <?php endif; ?>   
                        </tr>
                <?php endforeach; ?>    
        <?php endforeach; ?>
        </table>
        <input type="submit" value="Submit"> 
        </form>
  </body>
</html>
<?php

if (isset($_GET['addnotes']))
{
  include $_SERVER['DOCUMENT_ROOT'] . '/artgibney/includes/db.inc.php';

  try
  {
    $sql = 'INSERT INTO notes SET
        userid = :userid,
        date = CURDATE(),
        absence = :id';
    $s = $pdo->prepare($sql);
    foreach($_POST['absence'] as $absence)
    { 
    $s->bindValue(':userid', $absence);
    $s->bindValue(':id', '1');
    $s->execute();
    }
  }
  catch (PDOException $e)
  {
    $error = 'Error adding submitted daily notes data. Click the back button to continue.';
    include 'error.html.php';
    exit();
  }

  header('Location: .');
  ?>