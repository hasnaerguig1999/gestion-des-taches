<?php
require '../controller/tasks.Controller.php';
$data = new ADD_task();
$result = $data->search();

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

		<a href="dashboard.php">
		<button class="user-settings-btn btn" aria-label="Create">
			
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
  <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
</svg>
		</button>
		</a>

		

	</div>

	<div class="logo">

		<h1><i class="fab fa-trello logo-icon" aria-hidden="true"></i>Gestion-des-projet</h1>

	</div>

		<div class="input-group">
  <div class="form-outline">

	<form method="post" action="search.php" id="form">
	<input type="search" name="word" id="form1" class="form-control" placeholder="Search" />
  <button  name="search" type="button" class="btn btn-primary">
    <i class="fas fa-search"></i>
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>
  </button>
</div>

		

	</div>

</header>
<section class="vh-20">
<div class="container py-5 h-100">
<div class="row d-flex align-items-center justify-content-center h-100">
<div class="list" >

		<h3 class="list-title"> les resultat(<?php echo count($result) ?>) </h3>
		<div class="scroll">
		<?php
  foreach( $result as $r){
?>
      <input type="hidden" name="task_id" value="<?php echo $r['task_id'] ?>">

		<ul class="list-items">
			
			<li><?php echo $r['task_descr'] ?><span><span> : </span><?php echo $r['task_end'] ?></span></li>
			
			

		</ul>
		<?php
	}
	?>
		
</section>

<style>
		#form{
		display:flex;
	}
</style>
</body>
</html>