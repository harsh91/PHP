<html>
    <body>
        <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
            Select image to upload!!
            <input type="file" name="filetoupload" id="filetoupload">
            <input type="submit" value="Upload Image" name="Submit">
        </form>
    </body>
</html>


<?php
if(!empty($_FILES) && array_key_exists("filetoupload", $_FILES)) {
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["filetoupload"]["name"]);
    $uploadOK = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

//Check image is actual image to fake?
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["filetoupload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".<br>";
            $uploadOK = 1;
        } else {
            echo "File is a fake image<br>";
            $uploadOK = 0;
        }
    }

//Check is file already exists?
    if(file_exists($targetFile)) {
        echo "Sorry, file already exists!<br>";
        $uploadOK = 0;
    }

//Check file size?
    if($_FILES["filetoupload"]["size"] > 100000) {
        echo "Sorry, file is too large!<br>";
        $uploadOK = 0;
    }

//Allow certain file formats?
    if($imageFileType !== "jpg" && $imageFileType !== "png" && $imageFileType !== "jpeg") {
        echo "Sorry, only JPG, PNG and JPEG file types are allowed.<br>";
        $uploadOK = 0;
    }

// Check if $uploadOK is set to 0 by an error or requirement?
    if($uploadOK == 0) {
        echo "Sorry, your file was set to not upload!<br>";
    } else {
        if(move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $targetFile)) {
            echo "The file " . basename($_FILES["filetoupload"]["name"]) . " has been uploaded!<br>";
        } else {
            echo "Sorry, there was an error uploading your file.<br>";
        }
    }
}