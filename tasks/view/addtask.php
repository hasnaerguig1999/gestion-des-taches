<?php
require '../controller/tasks.Controller.php';
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
<!-- End of masthead -->


<!-- Board info bar -->
<section class="board-info-bar">
    <form method="post" class="float-right mb-2 d-flex flex-row justify-content-around align-items-center">
  
	<div class="board-controls">

		<button class="board-title btn">
			<h2>Web Development</h2>
		</button>

		<button class="star-btn btn" aria-label="Star Board">
			<i class="far fa-star" aria-hidden="true"></i>
		</button>
         <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
	+ Add Name
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
				<!-- <div class="form-group">
					<label for="task_name" ></label>
					<input type="text" class="form-control" name="task_desc" id="task_desc" placeholder="Description de la tâche :"><br>
				</div> -->
				<div class="container">
					<h1 class="display-4">Liste des tâches</h1>
					<ul id="task-list"></ul>
					
					</div>
					
					<form class="form-inline">
						
						<label for="task-count" class="mr-sm-2" style="color: black;">Nombre de tâches à ajouter:</label><br>
						<input type="number" id="task-count" name="task-count" min="1" onchange="createTaskForm()" class="form-control" id="inpu"><br>
						<!-- <div class="form-group">
							<select class="form-control" name="statut">
								<option value="0">A faire</option>
								<option value="1">En cours</option>
								<option value="2">Terminer</option>
							</select>
							<div class="form-group">
								<label for="task_end">Date limite :</label>
								<input type="date" class="form-control" name="task_end" id="task_end">
							</div> -->
					</form>
					<div id="task-forms">
					<input type="button" value="Ajouter" onclick="addTasks()" class="btn btn-primary" id="inp"><br>
				</div>
					<!-- <div id="task-forms"></div>
				<input type="button" value="Ajouter" onclick="addTasks()">
				<div class="form-group"> -->
		
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
<section class="lists-container d-flex flex-row  ">
        
	<div class="list" >

		<h3 class="list-title"> A Faire </h3>
		

		<ul class="list-items">
			while {
			<li><span> <input type="text" name=""  id="mod">rowfgvg</span></li>
			
			<div class="">
                <button class="btn btn-warning btn-sm">Modifier</button>
                <button class="btn btn-danger btn-sm">Supprimer</button>
              </div>
						}
		</ul>
        <button type="button" class="add_field_button btn btn-primary btn-md"  onclick="addTaska() "><span class="glyphicon glyphicon-plus" aria-hidden="true">+ Add New</span></button>
	</div>
   

	<div class="list">

		<h3 class="list-title">En Cours </h3>
      
		<ul class="list-items" id="item">
			<li><span> <input type="text" name="" id="mod"></span></li>
			<div class="">
                <button class="btn btn-warning btn-sm">Modifier</button>
                <button class="btn btn-danger btn-sm">Supprimer</button>
              </div>
			</ul>
			<button type="button" class="add_field_button btn btn-primary btn-md"  onclick="addTaskb() "><span class="glyphicon glyphicon-plus" aria-hidden="true">+ Add New</span></button>
		</div>

       
	</div>

	<div class="list">

		<h3 class="list-title">Terminé</h3>
		<ul class="list-items" id="itemc">
			<li><span> <input type="text" name=""id="mod"></span></li>
			<div class="">
                <button class="btn btn-warning btn-sm">Modifier</button>
                <button class="btn btn-danger btn-sm">Supprimer</button>
              </div>
			</ul>
			<button type="button" class="add_field_button btn btn-primary btn-md"  onclick="addTaskc() " ><span class="glyphicon glyphicon-plus" aria-hidden="true">+ Add New</span></button>
		</div>

       
	</div>









	</div>


</section>

<!-- End of board info bar -->

        
<!-- End of lists container -->
<style>
	label{
		color: black;
	}
	input#task{
		border: 1px black;
	}
</style>
<script>
    function createTaskForm() {
      // Récupérer le nombre de formulaires à créer
      let taskCount = document.getElementById("task-count").value;
      // Vider les formulaires existants
      let taskForms = document.getElementById("task-forms");
      taskForms.innerHTML = "";
      // Créer autant de formulaires que spécifié
      for (let i = 0; i < taskCount; i++) {
        let taskForm = document.createElement("form");
				let html = `
				<div class="form-group">
					<label for="task_name" ></label>
					<input type="text" class="form-control" name="task_desc" id="task_desc" placeholder="Description de la tâche :"><br>
				</div><div class="form-group">
							<select class="form-control" name="statut" value="<?php echo $task['statut'] ?>">
								<option value="0">A faire</option>
								<option value="1">En cours</option>
								<option value="2">Terminer</option>
							</select>
							<div class="form-group">
								<label for="task_end">Date limite :</label>
								<input type="date" class="form-control" name="task_end" id="task_end" value="<?php echo $task['task_end'] ?>><br>
							</div>`
        taskForm.innerHTML = '<label for="task_descr' + i + '">Tâche ' + (i + 1) + ':</label>' +
        '<input type="text" id="mod' + i + '" name="task_descr' + i + '"><br><br>'+ html +'<br>';
        taskForms.appendChild(taskForm);
      }
    }
    function addTasks() {
      // Récupérer les valeurs des formulaires
      let taskForms = document.getElementById("task-forms");
      let taskList = document.getElementById("task-list");
      for (let i = 0; i < taskForms.children.length; i++) {
        let task = taskForms.children[i].elements[0].value;
        // Vérifier si l'input est vide
        if (!task) {
          alert("Veuillez entrer une tâche valide");
          return;
        }
        // Ajouter la tâche à la liste
        let newTask = document.createElement("input");
        newTask.innerHTML = task;
        newTask.value = task;
        taskList.appendChild(newTask);
      }
      // Réinitialiser les formulaires
      taskForms.innerHTML = "";
      document.getElementById("task-count").value = "<input>";
    }
  </script>
      
           <script>
						function addTaska() {
    var list = document.querySelector('.list-items');
    var newTaska = document.createElement('li');
    newTaska.innerHTML = "<input>";
    list.appendChild(newTaska);
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

  