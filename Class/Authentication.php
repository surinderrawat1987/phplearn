<?php

Class Authentication {
    
    public $db = null;
    public $username = null;
    public $password = null;
    
    function __construct($u,$p){
        $this->db = Database::getInstance();
        $this->username = mysqli_real_escape_string($this->db->getConnection(),$u);
        $this->password = mysqli_real_escape_string($this->db->getConnection(),$p);        
    }

    function login() {

        $this->password = md5($this->password);
        $query = "select * from users where usename='$this->username' and password='$this->password'";
        $mysqliQueryObj = mysqli_query($this->db->getConnection(), $query);
        if(mysqli_error($this->db->getConnection())){
            die(mysqli_error($this->db->getConnection()));
        }
        if(mysqli_num_rows($mysqliQueryObj) > 0){
            return true;
        }
        return false;
    }
    
    function logout($param) {
        Session::destroyAll();
    }
    
}