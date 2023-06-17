
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;1,300;1,400;1,600&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">


<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css">



   <title>Login</title>
  </head>


  <body>
  <section class="bg">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <div class="form-wrap">
                    <div class="form-heading">
                        <h1>Hoodie Store</h1>
                        <p>Customer Login Form</p>
                    </div>
                   <form id="regForm" class="form" action="loginaction.php" method="POST">
                        <div class="form-group">
                            <label>Email: </label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                            <p id="p2"></p>
                        </div>
                        <div class="form-group">
                            <label>Password: </label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                            <p id="p3"></p>
                        </div>
                        <div class="form-group">

                            <input type="submit" class="btn btn-primary btn-block"  value="Submit"><br>
                            
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Don't have account?&nbsp;&nbsp;&nbsp;&nbsp;<a href="reader_register.php">Sign Up</a><br><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </section>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>




  </body>
</html>