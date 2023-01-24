<?php
    require_once '../database/db_connection.php';
  
class task{
    static public function addtodotask($data){
        $db=Database::connect()->prepare("INSERT INTO task( task_descr, task_end , statut,user_id )
                                        VALUES( :task_descr, :task_end , 'todo',:user )");
                                       
       
    //    
       $db->bindParam(':task_descr',$data['task_descr']);
       $db->bindParam(':user',$_SESSION['id']);
       $db->bindParam(':task_end',$data['task_end']);
       $db->execute();
}
    static public function adddoingtask($data){
        $db=Database::connect()->prepare("INSERT INTO task( task_descr, task_end , statut ,user_id)
                                        VALUES( :task_descr, :task_end , 'doing' ,:user)");   
       $db->bindParam(':task_descr',$data['task_descr']);
       $db->bindParam(':task_end',$data['task_end']);
       $db->bindParam(':user',$_SESSION['id']);
       $db->execute();
    //    die(print_r($data));
}
    static public function adddonetask($data){
        $db=Database::connect()->prepare("INSERT INTO task( task_descr, task_end , statut ,user_id)
                                        VALUES( :task_descr, :task_end , 'done',:user )");
                                       
       
    //    
       $db->bindParam(':task_descr',$data['task_descr']);
       $db->bindParam(':task_end',$data['task_end']);
       $db->bindParam(':user',$_SESSION['id']);
    //    $db->bindParam(':statut',$data['statut']);
       $db->execute();
    //    die(print_r($data));
}
    static public function gettodotasks(){
        $db=Database::connect()->prepare("SELECT * FROM task where statut='todo' and user_id=:user ORDER BY task_end DESC");
        $db->bindParam(':user',$_SESSION['id']);
        $db->execute();
        $todotasks=$db->fetchAll();
        $db=NULL;
        
        return $todotasks;
    }
    static public function getdoingtasks(){
        $db=Database::connect()->prepare("SELECT * FROM task where statut='doing' and user_id=:user ORDER BY task_end DESC");
        $db->bindParam(':user',$_SESSION['id']);
        $db->execute();
        $doingtasks=$db->fetchAll();
        $db=NULL;
        
        return $doingtasks;
    }
    static public function getdonetasks(){
        $db=Database::connect()->prepare("SELECT * FROM task where statut='done' and user_id=:user ORDER BY task_end DESC");
        $db->bindParam(':user',$_SESSION['id']);
        $db->execute();
        $donetasks=$db->fetchAll();
        $db=NULL;
        
        return $donetasks;
    }
    static public function getOnetask($task_id){
        $db=Database::connect()->prepare("SELECT * FROM task WHERE task_id = :task_id and user_id=:user");
        
        $db->bindParam(':task_id',$task_id['task_id']);
        $db->bindParam(':user',$_SESSION['id']);
        $db->execute();
        $tasks=$db->fetchAll();
        $db=NULL;
      
        return $tasks;
    }

    static public function getsearch($search){
        
        $db=Database::connect()->prepare("SELECT * FROM `task` WHERE task_descr like :task_descr or task_descr like :task_descr1 or task_descr like :task_descr2 and user_id=:user ;");
        
        $db->bindParam(':task_descr',$search['task_descr']);
        $db->bindParam(':task_descr1',$search['task_descr1']);
        $db->bindParam(':task_descr2',$search['task_descr2']);
        $db->bindParam(':user',$_SESSION['id']);
        $db->execute();
        $tasks=$db->fetchAll();
        $db=NULL;
        
      
        return $tasks;
    }
    static public function update_task($data_update){
        $db=Database::connect()->prepare("UPDATE task SET task_descr = :task_descr, task_end = :task_end , statut = :statut,user_id=:user
                                            WHERE task_id = :task_id");

        $db->bindParam(':task_id',$data_update['task_id']);
        $db->bindParam(':task_descr',$data_update['task_descr']);
        $db->bindParam(':task_end',$data_update['task_end']);
        $db->bindParam(':statut',$data_update['statut']);
        $db->bindParam(':user',$_SESSION['id']);
        

        $db->execute();
    }

    static public function delete_task($data){
        $db=Database::connect()->prepare("DELETE FROM task WHERE task_id = :task_id and user_id=:user");
        $db->bindParam(':task_id',$data['task_id']);
        $db->bindParam(':user',$_SESSION['id']);
        $db->execute();
    }
    static public function search_task($search_task){
        $db=Database::connect()->prepare("SELECT * FROM `task` WHERE task_descr like '%['task_descr']%' or task_descr like '%['task_descr']'or task_descr like '['task_descr']%'; and ,user_id=:user ");
        $db->bindParam(':task_descr',$data_search['task_descr']);
        $db->bindParam(':user',$_SESSION['id']);
        $db->execute();
    }

    // static public function count_task($count_task){
    //     $db=Database::connect()->prepare("SELECT COUNT(*) FROM task;");
    //     $db->bindParam(':task_descr',$data_count['task_descr']);
    //     $db->execute();
    // }
   

//     public function gettask($user_id)
// {
    
//     $sql = "SELECT * FROM task WHERE user_id = :user_id ORDER BY task_end DESC";
//     $query = $this->db->prepare($sql);
//     $query->execute(array(':user_id' => $user_id));

//     return $query->fetchAll();
// }

}





