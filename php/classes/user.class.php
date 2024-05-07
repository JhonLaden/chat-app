<?php

require_once 'database.php';

class User{
    //attributes

    public $unique_id;
    public $firstname;
    public $lastname;
    public $email;
    public $password;
    public $img;
    public $status;


    protected $db ;

    function __construct(){
        $this->db = new Database();
    }

    //Methods
    function add_user(){
        $sql = "INSERT INTO user (unique_id, firstname, lastname, email, password, img, status) VALUE 
        (:unique_id, :firstname, :lastname, :email, :password, :img, :status);";

        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':unique_id', $this->unique_id);
        $query->bindParam(':firstname', $this->firstname);
        $query->bindParam(':lastname', $this->lastname);
        $query->bindParam(':email', $this->email);
        $query->bindParam(':password', $this->password);
        $query->bindParam(':img', $this->img);
        $query->bindParam(':status', $this->status);

        if($query->execute()){
            return true;
        }else{
            return false;
        }
    }

    function show_email(){
        $sql = "SELECT * FROM user WHERE email = :email";
    
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':email', $this->email);
    
        if($query->execute()){
            return $query = $query->fetchAll();
        } else {
            return [];
        }
    }
    

    function show(){
        $sql = "SELECT * FROM user ; ";
        $query =  $this->db->connect()->prepare($sql);
    
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
        
    }

    function show_users_online(){
        $sql = "SELECT * FROM user WHERE status = 'Active now'; ";
        $query =  $this->db->connect()->prepare($sql);
    
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
        
    }

    function update_status(){
        $sql = "UPDATE user SET status = :status WHERE unique_id = :unique_id";
        
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':status', $this->status);
        $query->bindParam(':unique_id', $this->unique_id);
        
        return $query->execute(); // Returns true on success, false on failure
    }

}

?>