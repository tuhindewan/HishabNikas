<?php 
require_once 'lib/database.php';
require_once 'helpers/format.php';
$errors = array();
?>

<?php 

class Message
{
	private $db;
	private $fm;
	function __construct()
	{
		$this->db = new Database();
		$this->fm = new Format();
	}

	public function saveUserMessage($data){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$message = $_POST['message'];

		$firstname = $this->fm->validation($firstname);
		$lastname = $this->fm->validation($lastname);
		$email = $this->fm->validation($email);
		$phone = $this->fm->validation($phone);
		$message = $this->fm->validation($message);

		$firstname = mysqli_real_escape_string($this->db->link,$firstname);
		$lastname = mysqli_real_escape_string($this->db->link,$lastname);
		$email = mysqli_real_escape_string($this->db->link,$email);
		$phone = mysqli_real_escape_string($this->db->link,$phone);
		$message = mysqli_real_escape_string($this->db->link,$message);

		$data = array();
		$data['type'] = 0;
		$data['status'] = array();



		if (!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$email)) {
			array_push($data['status'], "Email address is invalid");
		}

		


		if (count($data['status']) == 0) {
			$data['type'] = 1;
			$query = "INSERT INTO user_message (firstname,lastname,email,phone,message) VALUES ('$firstname','$lastname','$email','$phone','$message')";
			$insertRow = $this->db->insert($query);
			$data['status'] = "alert()";
			return $data;
		  }else{
		  	return $data;
		  }
	}

	public function saveContactMessage($data){
		$name = $_POST['name'];
		$company = $_POST['company'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];

		$name = $this->fm->validation($name);
		$company = $this->fm->validation($company);
		$email = $this->fm->validation($email);
		$phone = $this->fm->validation($phone);

		$name = mysqli_real_escape_string($this->db->link,$name);
		$company = mysqli_real_escape_string($this->db->link,$company);
		$email = mysqli_real_escape_string($this->db->link,$email);
		$phone = mysqli_real_escape_string($this->db->link,$phone);

		$data = array();
		$data['type'] = 0;
		$data['status'] = array();



		if (!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$email)) {
			array_push($data['status'], "Email address is invalid");
		}

		


		if (count($data['status']) == 0) {
			$data['type'] = 1;
			$query = "INSERT INTO contact_message (name,company,email,phone) VALUES ('$name','$company','$email','$phone')";
			$insertRow = $this->db->insert($query);
			$data['status'] = "Thank you for your message. We'll give you a feedback soon.";
			return $data;
		  }else{
		  	return $data;
		  }
	}





}

?>

