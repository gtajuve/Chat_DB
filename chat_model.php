<?php

/**
 * Created by PhpStorm.
 * User: joro
 * Date: 4/8/16
 * Time: 7:04 PM
 */
class Chat
{
    private $conn;
    private static $instance=null;

    private  function __construct()
    {
        $this->conn=mysqli_connect('localhost','Joro','qwerty','chat');
    }
    public static function getInstance()
    {
        if(self::$instance==null){
           self::$instance=new Chat();
        }
        return self::$instance;
    }
    public function getAll()
    {
        $sql='SELECT * FROM messages ';
        $rq=mysqli_query($this->conn,$sql);
        $result=array();
        while($row=$rq->fetch_assoc()){
            $result[]=$row;
        }
        return $result;
    }
    public function insertMessage($insertData)
    {
        $sql='INSERT INTO messages SET user="'.$insertData['user'].'",message="'.$insertData['message'].'",post_date='.time();
        mysqli_query($this->conn,$sql);
    }
    public function reset()
    {
        $sql='TRUNCATE messages';
        mysqli_query($this->conn,$sql);
    }
}