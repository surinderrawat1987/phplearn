<?php

/**
 * Description of UserDetailsBean
 *
 * @author Surinder Rawat
 */
class UserDetailsBean {

    private $user_id;
    private $user_department;
    function getUser_id() {
        return $this->user_id;
    }

    function getUser_department() {
        return $this->user_department;
    }

    function setUser_id($user_id) {
        $this->user_id = $user_id;
    }

    function setUser_department($user_department) {
        $this->user_department = $user_department;
    }
    
}
