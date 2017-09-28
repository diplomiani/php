<?php
function dd($data){
    echo "<pre>";
        die(var_dump($data));
    echo "</pre>";
}
/*// ბაზასთან ქონექშენი 
function connectToDb(){
	try {
		return new PDO('mysql:host=127.0.0.1;dbname=mytodosd','root','scouser123');
	} catch (Exception $e) {
		die($e->getMessage());	
	}
}*/


/*// ბაზიდან მონაცემის წამოღება 

function fetchAllTask($pdo){

	$statment = $pdo->prepare('select * from todos');

	$statment->execute();

	return $statment->fetchAll(PDO::FETCH_OBJ);
}*/
