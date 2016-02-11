<?php

/**
 * Created by PhpStorm.
 * User: IgorTokman
 * Date: 12.02.2016
 * Time: 1:33
 */
class User extends Core
{
    public function fetchUser($id)
    {
        $this->query("SELECT * FROM ajaxchat.users where id = $id");
        $this->result();
        return $this->rows;
    }

    public function fetchAllUsers(){
        $this->query("SELECT * FROM ajaxchat.users");
        $this->result();
        return $this->rows;
    }

    public function clearrows(){
        $this->rows = [];
    }
}