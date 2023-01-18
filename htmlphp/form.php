<?php
$user = $_POST['name'];



if ($user === "James"){
    echo "Bond, James Bond";
} else{
    echo "Bonjour ". $user;
}
