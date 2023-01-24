<?php 
require_once '../controller/admin.controller.php';
session_start();
if (isset($_SESSION['id'])) {
  header('location:dashboard.php');
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../view/css/login.css?=<?php time() ?>">
  <link rel="stylesheet" href="../view/css/style.css?=<?php time() ?>">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <title>Gestion des tâches</title>
</head>
<body>
        
    <section class="vh-100">
        <div class="container py-5 h-100">
          <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <img src="../view/img/login.svg" width="100%" alt="">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1" id="bor">
              <form  method="post" autocomplete="off">
                     <center>
                <div>
                    <p class="h3">signup</p><br>
                </div>
                     </center>
                       <!-- Name input -->
                <div class="form-outline mb-4">
                  <input type="text" id="form1Example13" class="form-control form-control-lg"  placeholder="User Name"  name="user_name"/>
                   <br>
                </div>
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="text" id="form1Example13" class="form-control form-control-lg"  placeholder="Email address"  name="email"/>
                   <br>
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="form1Example23" class="form-control form-control-lg" placeholder="Password" name="password"/>
                  <br>
                </div>
                <div class="d-flex justify-content-around align-items-center mb-4">
                <!-- Submit button -->
                
                <button type="submit" class="btn btn-primary btn-lg btn-block" name="signup">register</button><br>
                
              </form>
            </div>
          </div>
        </div>
      </section>
    <style>
      #a{
        text-decoration:none;
        text-decoration-color:white;
      }
    </style>
        <script src="./js/script.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
