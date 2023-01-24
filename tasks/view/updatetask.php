<?php

require_once '../controller/tasks.controller.php';


$task_id = $_GET['id'];
$idi = array(
    'task_id' => $task_id,
);

$update = new ADD_task();
 $task = $update->gettask($idi);

 if (isset($_POST["submit"])) {
	$update = new ADD_task();
 $update->update_task();

	  header('location: dashboard.php');
	}

 
?>





<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <title>Gestion des tâches</title>
</head>
<body>
   <!-- Masthead -->
<header class="masthead">

    <div class="user-settings">

		<button class="user-settings-btn btn" aria-label="Create">
			<i class="fas fa-plus" aria-hidden="true"></i>
		</button>

		<button class="user-settings-btn btn" aria-label="Information">
			<i class="fas fa-info-circle" aria-hidden="true"></i>
		</button>

		<button class="user-settings-btn btn" aria-label="Notifications">
			<i class="fas fa-bell" aria-hidden="true"></i>
		</button>

		<button class="user-settings-btn btn" aria-label="User Settings">
			<i class="fas fa-user-circle" aria-hidden="true"></i>
		</button>

	</div>

	<div class="logo">

		<h1><i class="fab fa-trello logo-icon" aria-hidden="true"></i>Gestion-des-projet</h1>

	</div>

	<div class="user-settings">

		<button class="user-settings-btn btn" aria-label="Create">
			<i class="fas fa-plus" aria-hidden="true"></i>
		</button>

		<button class="user-settings-btn btn" aria-label="Information">
			<i class="fas fa-info-circle" aria-hidden="true"></i>
		</button>

		<button class="user-settings-btn btn" aria-label="Notifications">
			<i class="fas fa-bell" aria-hidden="true"></i>
		</button>

		<button class="user-settings-btn btn" aria-label="User Settings">
			<i class="fas fa-user-circle" aria-hidden="true"></i>
		</button>

	</div>

</header>

<section class="vh-20">
<div class="container py-5 h-100">
<div class="row d-flex align-items-center justify-content-center h-100">
	<?php
	foreach($task as $t){
		?>
<form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">task descreption</label><br>
    <input type="hidden" name="task_id" class="form-control" value="<?php echo $t['task_id'] ?>" >
		<textarea name="task_descr" id="texte" ><?php echo $t['task_descr'] ?></textarea>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">deadline</label>
    <input type="date" name="task_end" class="form-control"  value="<?php echo $t['task_end'] ?>">
  </div>
	<select name="statut" id="sel">
		<option value=""></option>
		<option value="todo">todo</option>
		<option value="doing">doing</option>
		<option value="done">done</option>
	</select>
	<br><br>
	<?php } ?>
  <button name="submit" class="btn btn-primary">Submit</button>
</form>
	</div>
	</div>

</section>

<style>
	#texte{
		padding: 3px 33px;
	}
	#sel{
		padding: 2px 65px;
	}
	label{
		color: black;
	}
	input#task{
		border: 1px black;
	}
</style>
      <script>
	function addTasktodo() {
	var btn=document.getElementById("todobtn");
	var form=document.getElementById("todoform");
   
		btn.classList.toggle("d-none");
		form.classList.toggle("d-none");

  }
	function addTaskdoing() {
	var btn1=document.getElementById("doingbtn");
	var form1=document.getElementById("doingform");
   
		btn1.classList.toggle("d-none");
		form1.classList.toggle("d-none");

  }
	function addTaskdone() {
	var btn2=document.getElementById("donebtn");
	var form2=document.getElementById("doneform");
   
		btn2.classList.toggle("d-none");
		form2.classList.toggle("d-none");

  }


  function addTaskb() {
    var list = document.querySelector('#item');
    var newTaskb = document.createElement('li');
    newTaskb.innerHTML = "<input>";
    list.appendChild(newTaskb);
  }
  function addTaskc() {
    var list = document.querySelector('#itemc');
    var newTaskc = document.createElement('li');
    newTaskc.innerHTML = "<input>";
    list.appendChild(newTaskc);
  }

			</script>
  
              <script src="../view/js/script.js"></script>
              <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
              <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
              <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
							<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
						</body>
</html>

  