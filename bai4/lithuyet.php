<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <!-- <?php
         /*if(isset($_POST['sbm'])){
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            echo $user.'<br>'.$pass;
        }  */
        
        if(isset($_POST['sbm'])){
            $file_name = $_FILES['fileupload']['name'];
            $tmp_name = $_FILES['fileupload']['tmp_name'];
            $file_error = $_FILES['fileupload']['error'];
            if($file_error > 0){
                echo 'File upload bi loi';
            }
            else{
                move_uploaded_file($tmp_name, 'upload/'.$file_name);
            }
        }

    ?>
     // ghi chus : ctrl+k+c
        // upload file : cus phap : $_FILES['thamso]['name'] lay dc theo ten file 
        // $_FILES[thamso][size] : laay theo kich co file
        // $_FILES[thamso][type] : lay theo kieu file
        // $file_tmp_name = $_FILES[thamso][tmp_name] : upload len thu muc tam
        //	move_uploaded_file($file_tmp_name, 'upload/anhdep.png); : 
             

    <form action="ahh.php" method="post">
        <input type="text" name="user" id="">
        <input type="text" name="pass" id="">
        <input type="submit" name="sbm" id="" value="h1">
        <input type="submit" name="sbm1" id="" value="h2">

    </form> 
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="fileupload" value="">
        <input type="submit" name="sbm" value="submit">
    </form>-->
</body>
</html>