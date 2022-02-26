<?php
class DB
{
    public static $instance = NULL;
    public static function getInstance() 
    {
        if (!isset(self::$instance)) 
        {
            self::$instance = mysqli_connect("us-cdbr-east-05.cleardb.net", "b6054845c2e7dd", "ab49573f", "heroku_fcf4166d15d93c7",80);
            // if (mysqli_connect_errno())
            // {
            //     die("Failed to connect to MySQL: " . mysqli_connect_error());
            // }
        }

        return self::$instance;
    }
}
?>
