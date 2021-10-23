<?php


class Form{

	public $name;
	public $fam;
	public $ot;
	public $file;
	public $password;

	public function __construct(){
	
	}	$this->name = $_POST["name"];
		$this->fam  = $_POST["fam"];
		$this->ot  = $_POST["ot"];
		$this->file  = $_POST["file"];
		$this->password  = $_POST["password"];

}

$form = new Form();

print_r($form);
print_r($form);



 /*
class Usser{
	public $logic ="";
	public $pass;

	public function auth($logic){
		echo $this->login= $login;
		echo $this->pass;

	}
}

$user = new User();
ver_dump($user);
$user->auth('login111111');
var_dump($user);


$user = new User();
ver_dump($user);



class  Aliens {
	public $username ="root";
	public $pass ="";
	public $hostname ="localhost";
	public $database ="hello";



}

*/
?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<form method="post" action="" enctype="multipart/form-data" class="container p-5">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Имя</label>
    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Фамилия</label>
    <input name="fam" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>

     <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Отчество</label>
    <input name="ot" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
       <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Файл</label>
    <input name="file" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Пароль</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
  </div>
 
  <button type="submit" class="btn btn-primary">Отправить</button>
</form>
	
</body>
</html>
