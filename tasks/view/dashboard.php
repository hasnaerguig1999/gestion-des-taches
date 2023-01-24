
<?php 
session_start();
require '../controller/tasks.Controller.php';
// die(print_r($_SESSION['id']));


if (!isset($_SESSION['id'])) {
  header('location:login.php');
}


?>




<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Gestion des tâches</title>
</head>
<body>
   <!-- Masthead -->
<header class="masthead">

    <div class="user-settings">

		<a href="logout.php">
		<button class="user-settings-btn btn" aria-label="Create">
			
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
</svg>
		</button>
		</a>

		

	</div>

	<div class="logo">

		<h1><i class="fab fa-trello logo-icon" aria-hidden="true"></i>Gestion-des-projet</h1>

	</div>
		<div class="input-group">
  <div class="form-outline">

    <!-- <form method="post" action="search.php">
		<input type="search" name="word" id="form1" class="form-control" placeholder="Search" />
		<button name="search">search</button>
		</form> -->
   
  </div>
	<form method="post" action="search.php" id="form">
	<input type="search" name="word" id="form1" class="form-control" placeholder="Search" />
  <button  name="search" type="button" class="btn btn-primary">
    <i class="fas fa-search"></i>
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>
  </button>
	</form>
</div>
	</div>
</header>


<section class="board-info-bar">
 <form method="post" class="float-right mb-2 d-flex flex-row justify-content-around align-items-center">
  
	<div class="board-controls">

		<button class="board-title btn">
			<h2>Gestion-des-projet</h2>
		</button>

		<button class="star-btn btn" aria-label="Star Board">
			<i class="far fa-star" aria-hidden="true"></i>
		</button>
         <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
	+ Add Multiple
    </button>
      
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content">
		<div class="modal-header">
		  <h1 class="modal-title  fs-5" id="exampleModalLabel"> Task title</h1>
		  
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<form>
				<div class="container">
					<h1 class="display-4">Liste des tâches</h1>
					<ul id="task-list"></ul>
					
					</div>
					
					<form class="form-inline">
						
						<label for="task-count" class="mr-sm-2" style="color: black;">Nombre de tâches à ajouter:</label><br>
						<input type="number" id="task-count" name="task-count" min="1" onchange="createTaskForm()" class="form-control" id="inpu"><br>
					</form>
					<div id="task-forms">
					<input type="button" value="Ajouter" onclick="addTasks()" class="btn btn-primary" id="inp"><br>
				</div>
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
		  <button type="button" class="btn btn-primary">Save changes</button>
		</div>
	  </div>
	</div>
  </div>
</section>
<!-- Lists container -->
<section class="lists-container d-flex flex-row ">
        

	<div class="list" >
	<?php $j=0; foreach ($todotasks as $todo) :
			{ $j++;}endforeach; ?>
		<h3 class="list-title"> A Faire (<?php echo $j;?>) </h3>
		<div class="scroll">
		<?php
  foreach( $todotasks as $todo){
?>
      <input type="hidden" name="task_id" value="<?php echo $todo['task_id'] ?>">

		<ul class="list-items">
			
			<li><?php echo $todo['task_descr'] ?></li>
			<li><?php echo $todo['task_end'] ?></li>
			<div class="">
			<form action=""method="post">
			<a style="color:powderblue;" href="updatetask.php?id=<?php echo $todo['task_id'] ?>">
			<button type="button" class="btn btn-primary ">update</button></a>
			
			<input type="hidden" name="task_id" value="<?php echo $todo['task_id'] ?>">
      <button type="submit" name="delete" class="btn btn-danger">delete</button>
			</form>
              </div>
		</ul>
		<?php
	}
	?>
		</div>
	<form action="" method="post" id="todoform" class="d-none">
		<input type="text" name="task_descr">
		<input type="date" name="task_end">
		<button name="addtodo"> add task</button>
		<button type="button" onclick="addTasktodo()"> cancel</button>
		
	</form>
        <button type="button" id="todobtn" class="add_field_button btn btn-primary btn-md"  onclick="addTasktodo() "><span class="glyphicon glyphicon-plus" aria-hidden="true">+ Add New</span></button>
	</div>
   

	<div class="list">
	<?php $j=0; foreach ($doingtasks as $doing) :
			{ $j++;}endforeach; ?>
		<h3 class="list-title">En Cours(<?php echo $j;?>) </h3>
		<div class="scroll">
		<?php
  foreach( $doingtasks as $doing){
		?>

      <input type="hidden" name="task_id" value="<?php echo $doing['task_id'] ?>">

		<ul class="list-items" id="item">
			<li><?php echo $doing['task_descr'] ?></li>
			<li><?php echo $doing['task_end'] ?></li>
			<div class="">
			<form action=""method="post">
			<a style="color:powderblue;" href="updatetask.php?id=<?php echo $doing['task_id'] ?>">
			<button type="button" class="btn btn-primary ">update</button></a>
			
			<input type="hidden" name="task_id" value="<?php echo $doing['task_id'] ?>">
      <button type="submit" name="delete" class="btn btn-danger">delete</button>
			</form>
              </div>
			
							</ul>
							<?php
	}
	?>
		</div>
		<form action="" method="post" id="doingform" class="d-none">
		<input type="text" name="task_descr">
		<input type="date" name="task_end">
		<button name="adddoing"> add task</button>
		<button type="button" onclick="addTaskdoing()"> cancel</button>
		
	</form>
        <button type="button" id="doingbtn" class="add_field_button btn btn-primary btn-md"  onclick="addTaskdoing() "><span class="glyphicon glyphicon-plus" aria-hidden="true">+ Add New</span></button>
	</div>

	<div class="list">
	<?php $j=0; foreach ($donetasks as $done) :
			{ $j++;}endforeach; ?>
		<h3 class="list-title">Terminé (<?php echo $j;?>)</h3>
		<div class="scroll">
		<?php
  foreach( $donetasks as $done){
?>
     

		<ul class="list-items" id="itemc">
		<li><?php echo $done['task_descr'] ?></li>
		<li><?php echo $done['task_end'] ?></li>
		<div class="">
		<form action=""method="post">
			<a style="color:powderblue;" href="updatetask.php?id=<?php echo $done['task_id'] ?>">
			<button type="button" class="btn btn-primary ">update</button></a>
			
			<input type="hidden" name="task_id" value="<?php echo $done['task_id'] ?>">
      <button type="submit" name="delete" class="btn btn-danger">delete</button>
			</form>
              </div>
		</ul>
		<?php
	}
	?>
		</div>
	
		<form action="" method="post" id="doneform" class="d-none">
		<input type="text" name="task_descr">
		<input type="date" name="task_end">
		<button name="adddone"> add task</button>
		<button type="button" onclick="addTaskdone()"> cancel</button>
		
	</form>
        <button type="button" id="donebtn" class="add_field_button btn btn-primary btn-md"  onclick="addTaskdone() "><span class="glyphicon glyphicon-plus" aria-hidden="true">+ Add New</span></button>
	</div>

       

	</div>


</section>
<style>
		#form{
		display:flex;
	}
	.scroll{
		overflow:scroll;
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

							<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
						</body>
</html>

  