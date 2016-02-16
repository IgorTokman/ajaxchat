<?php

//class for interaction with the table users

class User extends Core
{
    /**
     * @param $id
     * @return mixed
     */
    public function fetchUser($id)
    {
        $this->query("SELECT * FROM ajaxchat.users WHERE id = $id");
        return $this->result()[0];
    }

    /**
     * @return array
     */
    public function fetchAllUsers()
    {
        $this->query("SELECT * FROM ajaxchat.users");
        return $this->result();
    }
}
