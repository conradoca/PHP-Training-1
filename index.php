<?php

require 'core/bootstrap.php';

// die(var_dump($app));

$router= new Router;

require 'routes.php';


require Router::load('routes.php')
  ->direct(Request::uri(), Request::method());




//require 'functions.php';
//require 'Task.php';


/*$test=new Task('test');
$test->complete();
dd($test); */



/*$tasks = array_map (function ($task1)
{
  $t=new Task($task1->description);
  $t->completed= $task1->completed;
  return $t;
}, $tasks);*/

//dumper ('Hello', 'big', 'world');

// //http://localhost:8888/?Input=Hola&Data=Avui
//$Input=htmlspecialchars($_GET['Input']);
//$Data=htmlspecialchars($_GET['Data']);

// $task = [
//  'Name' => 'Review Agenda',
//  'Details' => 'Review all the agenda topics for the day',
//  'Due for' => '26/11/2016',
//  'Completed' => false
//];

//$task['Owner']='Conrado';

//var_dump($tasks);
//dd($tasks);
