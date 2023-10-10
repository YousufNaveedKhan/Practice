<?php
$server="localhost";
$username="root";
$password="";
$database="UserAuthentication";

$insert=false;

$con = mysqli_connect($server, $username, $password, $database);

if (!$con) {
    die ("<div class='alert alert-danger' role='alert'>
    Database is failed!
  </div>".mysqli_connect_error());
}

if (isset($_POST["user"])) {
    $uservalue=$_POST["user"];
    $passvalue=$_POST["pass"];
    
    $sql = "insert into info(username, password)values('$uservalue','$passvalue')";

    $res = mysqli_query($con, $sql);

    
if ($res) {
    echo"<svg xmlns='http://www.w3.org/2000/svg' class='d-none'>
    <symbol id='check-circle-fill' viewBox='0 0 16 16'>
      <path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z'/>
    </symbol>
    <symbol id='info-fill' viewBox='0 0 16 16'>
      <path d='M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z'/>
    </symbol>
    <symbol id='exclamation-triangle-fill' viewBox='0 0 16 16'>
      <path d='M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>
    </symbol>
  </svg>

  <div class='alert alert-success d-flex align-items-center' role='alert'>
    <svg class='bi flex-shrink-0 me-2' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg>
    <div>
      Successfully Logged In!
    </div>
  </div>
";
    $insert = true;
}
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Authentication | Aptech Gulshan-2</title>
    <link rel="stylesheet" href="css/userauthentication.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <div class="container">
        <div class="card card-login mx-auto text-center bg-dark">
            <div class="card-header mx-auto bg-dark">
                <span> <img src="https://aptech-education.com.pk/assets/images/logo.png" class="w-75" alt="Logo"> </span><br />
                <span class="logo_title mt-5"> Login Dashboard </span>

            </div>
            <div class="card-body">
                <form action="User Authentication.php" method="post">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="user" class="form-control" placeholder="Username">
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="pass" class="form-control" placeholder="Password">
                    </div>

                    <div class="form-group">
                        <input type="submit" name="btn" value="Login" class="btn btn-outline-danger float-right login_btn">
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>