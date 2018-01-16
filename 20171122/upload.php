<?php
    extract($_POST);
    if($height && $weight) {
        $BMI = $weight / ($height * $height);
        echo "height = $height m <br> weight = $weight kg <br> BMI = $BMI <br>";
    }else echo "Please type in all information.<br>";
    
	if($_FILES["file"]["error"] > 0){
        if($_FILES["file"]["error"] == 4)echo "empty";
    }else{
		if($_FILES["file"]["type"] && strstr($_FILES["file"]["type"],"image") == FALSE)echo "Wrong file type.";
		else{
		    move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"]);
			echo '<img src = "upload/'.$_FILES["file"]["name"].'"/>';
		}
	}
?>