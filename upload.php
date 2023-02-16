<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h1 class="text-center text-white bg-dark">Registered Name With Profile</h1>
        <br>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <th>Id</th>
                    <th>Username</th>
                    <th>Profile Pic</th>
                </thead>
                <tbody>
                    <?php
                    $con = mysqli_connect('localhost','root');
                    mysqli_select_db($con,'crudimage');
                     if(isset($_POST['submit'])){

                        $username = $_POST['username'];
                        $files = $_FILES['file'];

                        print_r($username);
                        echo "<br>";
                        // print_r($files);
                        
                        $filename = $files['name'];
                        $fileerror = $files['error'];
                        $filetmp = $files['tmp_name'];

                        // 55.JPG
                        // 55
                        //jpg
                        $fileext = explode('.',$filename);
                        $filecheck = strtolower(end($fileext));

                        $fileextstored = array('png', 'jpg', 'jpeg');
                        
                        if(in_array($filecheck,$fileextstored)){
                            $destinationfile = 'upload/'.$filename;
                            move_uploaded_file($filetmp,$destinationfile);

                            $q = "INSERT INTO `imageupload`( `name`, `image`) VALUES ('$username','$destinationfile')";
                            print_r($q);
                            $query = mysqli_query($con,$q);

                            $displayquery = "select * from imageupload";
                            $querydisplay = mysqli_query($con,$displayquery);

                            // $row = mysqli_num_rows($querydisplay);

                            while( $result = mysqli_fetch_array($querydisplay)){

                            ?>
                             <tr>
                                <td><?php echo $result['id']; ?></td>
                                <td><?php echo $result['name']; ?></td>
                                <td><img src="<?php echo $result['image']; ?>" height="100px" width="100px"></td>
                             </tr>

                            <?php

                            }
                        }else{
                            echo "Extension Is Not Matching";
                        }
                     }
                    ?>


                </tbody>
            </table>

        </div>
    </div>
</body>

</html>