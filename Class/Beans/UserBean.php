<?php

/**
 * Description of userBean
 *
 * @author Surinder Rawat
 */
class UserBean {
    
    private $id;
    private $fname;
    private $lname;
    private $username;
    private $gender;
    private $userDetails;
    private $password;
    
    
    function getId() {
        return $this->id;
    }
    function setId($id) {
        $this->id = $id;
    }
    
    function getFname() {
        return $this->fname;
    }

    function getLname() {
        return $this->lname;
    }

    function getUsername() {
        return $this->username;
    }

    function getGender() {
        return $this->gender;
    }

    function getUserDetails() {
        return $this->userDetails;
    }

    function setFname($fname) {
        $this->fname = $fname;
    }

    function setLname($lname) {
        $this->lname = $lname;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setGender($gender) {
        $this->gender = $gender;
    }
    
    function setPassword($password) {
        $this->password = $password;
    }

    function getPassword() {
        return $this->password;
    }

    function setUserDetails($userDetails) {
        $this->userDetails = $userDetails;
    }    
}
