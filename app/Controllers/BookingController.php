<?php



namespace App\Controllers;



use App\Models\MasterInformationModel;

use Config\Database;



class BookingController extends BaseController
{
    public function __construct()

	{
		helper('custom');
		$db = db_connect();
		$this->MasterInformationModel = new MasterInformationModel($db);
		// $this->username = session_username($_SESSION['username']);
		// $this->admin = 0;
		// if (isset($_SESSION['admin']) && !empty($_SESSION['admin'])) {
		// 	$this->admin = 1;
		// }
		// $tiemzone= timezone('Y-m-d');
		// $tiemzone_with_time = timezone('Y-m-d h:m');
	}

    public function booking_insert_data()
	{
		$result = array();	
		$post_data = $this->request->getPost();
		$table_name = $this->request->getPost("table");
		$action_name = $this->request->getPost("action");
		if ($this->request->getPost("action") == "insert") {
			unset($_POST['action']);
			unset($_POST['table']);
			if (!empty($_POST)) {
				$insert_data = $_POST;

				$isduplicate = $this->duplicate_data($insert_data,  $table_name);
				if ($isduplicate == 0) {
					$response = $this->MasterInformationModel->insert_entry($insert_data,  $table_name);
					$departmentdisplaydata = $this->MasterInformationModel->display_all_records($table_name);
					
					$result['response'] = 1;
                    $result['message'] = 'Add successfully!';
					
					$departmentdisplaydata = json_decode($departmentdisplaydata, true);
				} else {
					$result['response'] = 0;
					$result['message'] = 'already created !';
				}
			}
		}
		return json_encode($result);
        die();
    }

	   // dublicate data 

	   public function duplicate_data($data, $table)
	   {
   
		   $this->db = \Config\Database::connect();
   
		   $i = 0;
   
		   $data_duplicat_Query = "";
   
		   $numItems = count($data);
   
		   foreach ($data as $datakey => $data_value) {
   
			   if ($i == $numItems - 1) {
   
				   $data_duplicat_Query .= 'LOWER(TRIM(REPLACE(' . $datakey . ', " ",""))) = "' . strtolower(trim(str_replace(' ', '', $data_value))) . '"';
			   } else {
   
				   $data_duplicat_Query .= 'LOWER(TRIM(REPLACE(' . $datakey . '," ",""))) = "' . strtolower(trim(str_replace(' ', '', $data_value))) . '" AND ';
			   }
   
			   $i++;
		   }
   
		   $sql = 'SELECT * FROM ' . $table . ' WHERE ' . $data_duplicat_Query;
		   $result = $this->db->query($sql);
   
		   if ($result->getNumRows() > 0) {
   
			   return TRUE;
		   } else {
   
			   return FALSE;
		   }
	   }

	public function book_car() {
		pre($_POST);
		pre($_FILES);
	}
}

?>