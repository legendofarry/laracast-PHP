<?php

require 'functions.php';
require 'router.php';
require 'Database.php';
$configure = require 'config.php';

// class person
// {
//     public $name;
//     public $age;
//     public function render()
//     {
//         echo $this->name . ' if fucked up';
//     }
//     public function this()
//     {
//         echo ', he ' . $this->age . ' Dude';
//     }
// }
// ;
// $person = new person();
// $person->name = 'arryson';
// $person->age = +'22';
// $person->render() . $person->this();




// connect to our mySQL database and execute a query

$db = new Database($configure['database']);
$posts = $db->query("select * from Posts")->fetchAll(PDO::FETCH_ASSOC);
dd($posts);

// foreach ($posts as $post) {
//     echo '<pre>';
//     echo '<li>' . $post['Title'] . '</li>';
//     echo '</pre>';
// }
// ;


