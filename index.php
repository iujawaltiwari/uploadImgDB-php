<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">
        <br>
        <h1 class="text-white bg-dark text-center">
            Register From For Events
        </h1>
        <div class="col-lg-8 m-auto d-block">
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="user">Username: </label>
                    <input type="text" name="username" id="user" class="form-control">
                </div>

                <div>
                    <div class="form-group">
                        <label for="file">Profile Pic:</label>
                        <input type="file" name="file" id="file" class="form-control">
                    </div>
                </div>
                   
                <div class="my-2">
                   <input type="submit" name="submit" value="Submit" class="btn btn-success">
                </div>

            </form>
        </div>
    </div>

</body>

</html>