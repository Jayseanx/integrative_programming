<?php

    class Account
    {
        public $name;
        public $username;
        public $email;

        function __construct($name, $username, $email)
        {
            $this->name = $name;
            $this->username = $username;
            $this->email = $email;
        }
    }

    class User extends Account
    {
        function AddFriend()
        {
            echo "{$this->name}. Added a friend <br>";
        }
        function PostStatus()
        {
            echo "{$this->name}. Posted a status";
        }
    }

    $acc=new User('Jaysean', 'Sean1104', 'seancaube@gmail.com');
    $acc->AddFriend();
    $acc->PostStatus(); 

    

?>