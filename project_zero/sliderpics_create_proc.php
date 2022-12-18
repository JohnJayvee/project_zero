<?php include "admin_header.php"; ?>

<?php 
session_start();
?>

<h1 class="page-header">Slider Pictures</h1>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon white edit"></i><span class="break"></span>Slider Pictures</h2>
        </div>
        <div class="box-content">
        
        <?php
        $target_dir = "slider_pics/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                $uploadOk = 1;
            } else {
                $error_msg1 =  "File is not an image.";
                $uploadOk = 0;
            }
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            $error_msg1 = "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 5000000) {
            $error_msg1 = "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            $error_msg1 = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            $_SESSION['pic_errormsg'] = $error_msg1. "Your file was not uploaded.";
            header("Location: sliderpics_create.php");
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            ?>
            <div class="alert alert-success">
                <?php
                //edit user record (update value of photo)
                $table_name = "sliderpics";
                $photo = basename($_FILES["fileToUpload"]["name"]);

                $sliderpics_data = array (
                    //columname from table => value from post
                        "picture" => $photo,
                        "alt"      => $photo
                );

                insert($sliderpics_data, $table_name);
                ?>
                Your file <?= basename( $_FILES["fileToUpload"]["name"]) ?> was successfully added!
            </div>
            <p>
                <a href="<?= base_url() ?>sliderpics_manage.php">
                    <button type="button" class="btn btn-primary">
                    Return to Manage Slider Pictures Page</button>
                </a>
            </p>
            <?php
            } else {
                $_SESSION['pic_errormsg'] = "Sorry, there was an error uploading your file.";
                header("Location: sliderpics_create.php");
                $text = "User $username has successfully added a photo slider.";
                save_logs($text);
            }
        }
        ?>
        </div>
    </div><!--/span-->
</div><!--/row-->

<?php include "admin_footer.php"; ?>