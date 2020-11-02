<?php
    class User
    {
        function __construct($name, $username, $email)
        {
            $this->name = $name;
            $this->username = $username;
            $this->email = $email;
        }
        function addFriend()
        {
            echo $this->name . " added a friend<br>";
        }
        function postStatus()
        {
            echo $this->name . " posted a status<br>";
        }
    }
    $user1 = new User("Jamie Samar", "MimiChan18", "JamieSamar@gmail.com");
    $user1->addFriend();
    $user1->postStatus();
?>