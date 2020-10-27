
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="regiter.css">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
    <body class="bg-primary">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <form action="" method="POST">
                    <div class="form-group" style="margin-top : 150px">
                        <input required type="text" name="name" id="" class="form-control" placeholder="Enter Your Name">
                    </div>
                    <div class="form-group">
                        <input required type="email" name="email" id="" class="form-control" placeholder="Enter Your Email">
                    </div>
                    <div class="form-group"> 
                        <input required type="password" name="pass" id="" class="form-control" placeholder="Enter Your Password">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="btn" class="btn btn-outline-danger">
                            Submit
                        </button>
                    </div>
                </form>
                <?php
                    if(isset($_POST['btn']))
                    {
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $pass = $_POST['pass'];

                        $connection = mysqli_connect('localhost','root','','practise_php');

                        if($connection)
                        {
                              $sql_insert = "INSERT INTO php(user_email,user_name,user_password) VALUES('$email','$name','$pass')";
                             $insert = mysqli_query($connection,$sql_insert);
                             if($insert)
                             {
                                ?>
                                <h5>INSERTED</h5>
                                <?php
                             }
                             else
                             {
                                ?>
                                <h5>NOT INSERTED</h5>
                                <?php
                             }
                        }
                    } 
                ?>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </body>
</html>