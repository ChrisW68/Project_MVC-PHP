<?php

class Users extends CI_Controller {



	// public function show($user_id){

	//$this->load=>model('user_model');  //manual way to run a model
	//By going to the config folder and opening autoload.php
	//We can have the 'user_model' autoload

	//using a controller to communicate with user_model.php

	// 	$data['results'] = $this->user_model->get_users($user_id, 'Chris');  //this operation communicates with the controller

	// 	$this->load->view('user_view',$data);  //this operation is transferring the data to the view

	// foreach ($result as $object) {
	// 	echo $object->username. "<br>";
	// 	echo $object->password. "<br>";
		

	// }

	// public function insert() {

	// $username = "Peter";
	// $password = "password";

	// $this->user_model->create_users([

	// 	'username' => $username,
	// 	'password' => $password


	// 	]);


	// }

	// public function update() {

	// $id = 3;

	// $username = "Rob";
	// $password = "not_secret";

	// $this->user_model->update_users([

			
	//	'username' => $username,
	// 	'password' => $password


	// 	], $id);


	// }

	// public function delete() {

	// $id = 3;

	// $this->user_model->delete_users($id);
	// }

	public function login
	{

		echo "this works";

	}



}

?>