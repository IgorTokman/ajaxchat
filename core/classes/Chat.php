<?php

/**
 * Created by PhpStorm.
 * User: IgorTokman
 * Date: 11.02.2016
 * Time: 23:49
 */
class Chat extends Core
{
    /**
     * return message from db
     */
    public function fetchMessage()
    {
        $this->query("SELECT * FROM ajaxchat.messages");
        return  $this->result();
    }

    /*
     * insert message into db
     */
    public function throwMessage($message, $user_id)
    {
        $time = time();
        $this->db->exec("insert into ajaxchat.messages set text = '$message', user_id = '$user_id', time = '$time'") or die("insert error");
    }

    public function deleteAllMessages()
    {
        $this->db->exec("DELETE FROM ajaxchat.messages");
    }
}