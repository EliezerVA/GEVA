<?php
class Post{
 
    private $conn;
    private $table_name = "post";
    public $id;
    public $post_content;
    public $post_res;
    public $post_view;
    public $post_ulres;
   
 
    public function __construct($db){
        $this->conn = $db;
    }
    
    
    // save user
    function saveUser(){
        
    
   
    date_default_timezone_set('America/Chihuahua'); 
        
    $query = "INSERT INTO " . $this->table_name . " SET post_content=:post_content, post_res=:post_res, post_view=:post_view,  post_ulres=:post_ulres";
    
    $stmt = $this->conn->prepare($query);
    
        // sanitize
    $this->post_content=htmlspecialchars(strip_tags($this->post_content));
    $this->post_res=htmlspecialchars(strip_tags($this->post_res));
    $this->post_view=htmlspecialchars(strip_tags($this->post_view));
    $this->post_ulres=htmlspecialchars(strip_tags($this->post_ulres));
   
    

    
        // bind values
    $stmt->bindParam(":post_content", $this->post_content);
    $stmt->bindParam(":post_res", $this->post_res);
    $stmt->bindParam(":post_view", $this->post_view);
    $stmt->bindParam(":post_ulres", $this->post_ulres);
    
    
        // execute query
        if($stmt->execute()){
            $this->id = $this->conn->lastInsertId();
            return true;
        }
        return false;  
    }

    
    // get user 
    function getUser(){
        $query = "SELECT name FROM " . $this->table_name . " WHERE id=".$this->id;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

       
}