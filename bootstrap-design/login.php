<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,700,800" rel="stylesheet">
  <link rel="stylesheet" type="text/css" media="screen" href="assets/css/main.css" />
  <script src="assets/js/main.js"></script>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
           <?php include('header.php') ?>

  <div class="container">
    <div class="content">
              <br><center><h2>Login</h2></center>

      <div class="content-bottom">
        <div class="form">
          <div class="input-row">
            <label>Email</label>
            <input type="text" placeholder="Email..">
          </div>
          <div class="input-row">
            <label>Password</label>
            <input type="password" placeholder="Password..">
          </div>
          <button type="button" class="btn btn-info"><a class = "text-white" href="#">Login</a></button>
        </div>
      </div>
    </div>
  </div>
              <?php include('footer.php') ?>

</body>
</html>