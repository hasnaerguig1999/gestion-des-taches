<?php



require_once '../models/tasks.model.php';


     class ADD_task{
        public function add_todotask(){
        

$data= array(
    'task_descr' =>$_POST['task_descr'],
    'task_end'=>$_POST['task_end'],
    
);



       
            $result=task::addtodotask($data);
           
        }
        public function add_doingtask(){
        

$data= array(
    'task_descr' =>$_POST['task_descr'],
    'task_end'=>$_POST['task_end'],
    
);



       
            $result=task::adddoingtask($data);
           
        }
        public function add_donetask(){
        

$data= array(
    'task_descr' =>$_POST['task_descr'],
    'task_end'=>$_POST['task_end'],
    
);
// die(print_r($data));



       
            $result=task::adddonetask($data);
           
        }
        // récupère les informations d'une tâche spécifique à partir de la base de données.
        public function gettodotasks(){
            return task::gettodotasks();
            header('location:tours.php');
        }
        public function getdoingtasks(){
            return task::getdoingtasks();
            header('location:tours.php');
        }
        public function getdonetasks(){
            return task::getdonetasks();
            header('location:tours.php');
        }
        public function gettask($task_id){
            
            
            
            $tasks = task::getOnetask($task_id);
            return $tasks;
            header('location:updatetask.php');
            
        }
        
        public function delete_task(){
            $task_id = array(
                'task_id' => $_POST['task_id']
            );
            task::delete_task($task_id);
            header('location:dashboard.php');
        }
        public function update_task(){
            $data_update = array(
                'task_id'=>$_POST['task_id'],
                'task_descr'=>$_POST['task_descr'],
                'task_end'=>$_POST['task_end'],
                'statut'=>$_POST['statut'],
            );
            $result=task::update_task($data_update);
            
           
        }
        public function search(){
            $search = array(
                'task_descr'=>'%'.$_POST['word'],
                'task_descr1'=>$_POST['word'].'%',
                'task_descr2'=>'%'.$_POST['word'].'%',
                
            );
            
            $result=task::getsearch($search);
            return $result;
            
            
           
        }
      
    
           
        }
    
    $data = new ADD_task();
$todotasks = $data->gettodotasks();
    $data = new ADD_task();
$doingtasks = $data->getdoingtasks();
    $data = new ADD_task();
$donetasks = $data->getdonetasks();






if (isset($_POST['addtodo'])) {
    $task = new ADD_task();
    $task->add_todotask();
    header('location:dashboard.php');

    
}
if (isset($_POST['adddoing'])) {
    $task = new ADD_task();
    $task->add_doingtask();
    header('location:dashboard.php');

    
}
if (isset($_POST['adddone'])) {
    $task = new ADD_task();
    $task->add_donetask();
    header('location:dashboard.php');

    
}
if (isset($_POST['delete'])) {
    $delete = new ADD_task();
    $delete->delete_task();
    header('location:dashboard.php');

}

if (isset($_POST['update_task'])) {
    $update = new ADD_task();
    $update->update_taske();
    header('location:updatetask.php');
}
