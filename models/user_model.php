<?php

class User_model extends CI_Model {


	public function get_users($user_id, $username){

		$this->db->where([
			'id'=>$user_id,
			'username'=>$username

			]);
		//$this->db->where('id', $user_id); 
		$query = $this->db->get('users');
	 	return $query->result();            //returns in a array of objects
		


		//$query = $this->db->query("SELECT * FROM users");

		//return $query->num_fields();  //this gives me column count

		// return $query->num_rows();  //this gives me row count


		// return $query->result();    //returns everything from the table in a array of objects
		// 							//making querries to th errand database

		// $config['hostname'] = "localhost";
		// $config['username'] = "root";
		// $config['password'] = "";
		// $config['database'] = "errand_db"

		// $connection = $this->load->database($config);  //assign $connection variable to the database
	}

	public function create_users($data) {

		$this->db->insert('users', $data);
	}

	public function update_users($data, $id) {

		$this->db->where(['id'=> $id]);
		$this->db->update('users', $data);
	}

	public function delete_users($id) {

		$this->db->where(['id'=> $id]);
		$this->db->delete('users');


	}

	public function login_user($username, $password) {

		$this->db->where('username', $username);
		$this->db->where('password', $password);

		$result = $this->db->get('users');

		if($result->num_rows() == 1) {
			return $result->row(0)->id;
		}
		else{
			return false;
		}

	}

}





?>
