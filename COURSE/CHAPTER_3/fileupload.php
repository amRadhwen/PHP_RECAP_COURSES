<html>
    <head>
        <title>File upload</title>
        <style type="text/css">
            form {
                width: 500px;
                height: 50px;
                margin: 200px auto;
                padding: 50px;
                background-color: #0d6efd;
                line-height: 50px;
                border-radius: 25px;
            }
            form span {
                font-family: "Fira code";
                font-size: 12px;
                color: white;
                text-transform: uppercase;
                font-weight: bold;
            }
            form input[type="file"] {
                width: 180px;
                color: red;
                margin-right: 20px
            }
        </style>
    </head>
    <body>
        <form action="fileupload.php" method="POST" enctype="multipart/form-data">
            <span>Select file to upload</span>
            <input type="file" name="filetoupload" id="filetoupload" />
            <input type="submit" value="Upload Image" name="upload" />
        </form>
    </body>
</html>


<?php
    if(isset($_POST["upload"]) && strtolower($_POST["upload"]) == "upload image"){
        if(isset($_FILES["filetoupload"]) && strlen($_FILES["filetoupload"]["name"]) > 0){
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["filetoupload"]["name"]);
            $filename = $_FILES["filetoupload"]["tmp_name"];
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            $uploadok = 1;
            //check if image file is an image or fake image
            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILE["filetoupload"]["tmp_name"]);
                if($check) {
                    echo "File is an image - ". $check["mime"] . " .";
                    $uploadok = 1;
                }
                else {
                    echo "File is not an image.";
                    $uploadok = 0;
                }
            }
            
            // check if file already exists
            if(file_exists($target_file)) {
                echo "Sorry, file already exists !";
                $uploadok = 0;
            }

            // limit file size
            if($_FILES["filetoupload"]["size"] > 500000) {
                echo "Sorry, file is too large !";
                $uploadok = 0;
            }
            
            // limit file type
            switch($imageFileType) {
                case !"jpg":
                case !"png":
                case !"jpeg":
                case !"gif":
                    echo "Sorry, choose a file with jpg/jpeg/png or gif type !";
                    $uploadok = 0;
                    break;
            }
            
            // UPLOAD THE FILE
            // check if $uplaodok is true
            if($uploadok) {
                if(move_uploaded_file($filename, $target_file)) {
                    echo "File: ".htmlspecialchars($filename)." has been uploaded :)";
                }
                else {
                    echo "Sorry, there was an error uploading your file !";
                }
            }
            else {
                echo "Sorry, file was not uploaded !";
            }
        }
        else {
            echo "Sorry, choose a file to upload !";
        }
    }
    
    echo "<pre>";
    

