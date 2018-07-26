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

	public function getAllMessages(){
		$query = "SELECT * FROM user_message ORDER BY id DESC";
		$result = $this->db->select($query);
		return $result;
	}

	public function getMessageById($message_id){
		$query = "SELECT * FROM user_message WHERE id = $message_id";
		$result = $this->db->select($query);
		return $result;
	}

	public function deleteMessage($message_id)
	{
		$query = "DELETE FROM user_message WHERE id = '$message_id'";
		$result = $this->db->delete($query);

		if ($result) {
		$msg = "<div class='alert alert-success' role='alert'>Message has been deleted successfully.</div>";
			return $msg;
				
		}else{
		$msg = "<div class='alert alert-danger' role='alert'>Something went wrong. Please try again later.</div>";
			return $msg;
		}	
	}


}

?>

