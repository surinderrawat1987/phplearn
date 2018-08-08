<?php

class User {

    public function createUser(UserBean $userBean) {
        $db = Database::getInstance();
        if (!null == $userBean->getId()) {
            $query = "Update users set ";
            $query .= "fname = '" . $userBean->getFname() . "',";
            $query .= " lname = '" . $userBean->getLname() . "',";
            $query .= " gender= '" . $userBean->getGender() . "',";
            $query .= " usename = '" . $userBean->getUsername() . "'";
            $query .= " where id=" . $userBean->getId();
        } else {
            $query = "Insert into users (fname,lname,usename,password,gender) values ("
                    . "'" . $userBean->getFname() . "',"
                    . "'" . $userBean->getLname() . "',"
                    . "'" . $userBean->getUsername() . "',"
                    . "'" . $userBean->getPassword() . "',"
                    . "'" . $userBean->getGender() . "'"
                    . ")";
        }

        mysqli_query($db->getConnection(), $query) or die(mysqli_error($db->getConnection()));
        if (mysqli_errno($db->getConnection()) === 0) {
            return true;
        } else {
            return false;
        }
    }

    public function updateUser($param) {
        
    }
    
    public function deleteUser($id) {
        $db = Database::getInstance();
        $query = "Delete from users where id=$id";
        mysqli_query($db->getConnection(), $query);
        if (mysqli_errno($db->getConnection()) === 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getUser($id) {
        $db = Database::getInstance();
        $query = "select * from users where id=$id";
        $res = mysqli_fetch_assoc(mysqli_query($db->getConnection(), $query));
        $userBean = new UserBean();
        $userBean->setId($res['id']);
        $userBean->setFname($res['fname']);
        $userBean->setLname($res['lname']);
        $userBean->setGender($res['gender']);
//        $userBean->setPassword($password);
        $userBean->setUsername($res['usename']);
        return $userBean;
    }

    public function insertUserDetails($param) {
        
    }

    public function updateUserDetails() {
        
    }

}
