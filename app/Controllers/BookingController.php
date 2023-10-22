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
		$session = session();

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

				$isduplicate = $this->duplicate_data($insert_data, $table_name);
				if ($isduplicate == 0) {
					$response = $this->MasterInformationModel->insert_entry($insert_data, $table_name);
					$departmentdisplaydata = $this->MasterInformationModel->display_all_records($table_name);

					$result['response'] = 1;
					$result['data'] = $insert_data;
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
	function booking_car_list()
	{

		$db_connection = db_connect();
		$table_name = $_POST['table'];

		$action = $_POST['action'];
		//    $username = session_username($_SESSION['username']);
		$html = "";
		$row_count_html = '';
		$return_array = array(
			'row_count_html' => '',
			'html' => '',
			'total_page' => 0,
			'response' => 0
		);
		//$allow_data = json_decode($_POST['show_array']);
		//$status = get_table_array_helper('master_inquiry_status');
		// $get_roll_id_to_roll_duty_var = get_roll_id_to_roll_duty();
		$db_connection = \Config\Database::connect();
		//    $user_id = 1;
		//    if (!$this->admin == 1) {
		// 	   $user_id = $_SESSION['id'];
		//    }
		$status = isset($_POST['datastatus']) && !empty($_POST['datastatus']) ? $_POST['datastatus'] : "";
		$perPageCount = isset($_POST['perPageCount']) && !empty($_POST['perPageCount']) ? $_POST['perPageCount'] : 10;
		$pageNumber = isset($_POST['pageNumber']) && !empty($_POST['pageNumber']) ? $_POST['pageNumber'] : 1;
		$ajaxsearch = isset($_POST['ajaxsearch']) && !empty($_POST['ajaxsearch']) ? $_POST['ajaxsearch'] : '';
		$datastatus = isset($_POST['datastatus']) && !empty($_POST['datastatus']) ? $_POST['datastatus'] : "'1','2','3','4','6','7','9','10','11','12','13'";
		$which_result = isset($_POST['follow_up_day']) && !empty($_POST['follow_up_day']) ? $_POST['follow_up_day'] : '';


		//    $all_gm_under_people = '';
		//    $all_gm_under_people = getChildIds($_SESSION['id']);
		//    $array_push = array_push($all_gm_under_people);
		//    $all_gm_under_people_implode = "'" . implode("', '", $all_gm_under_people) . "'";
		$ajaxsearch_query = ' ';

		$db = \Config\Database::connect();
		$full_name = 'car_features';
		if ($ajaxsearch != '') {
			$ajaxsearch_query .= ' AND CONCAT(car_name) LIKE "%' . $ajaxsearch . '%" ';
		}
		//    if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1) {
		// 	   // $sql = $db->query('SELECT * FROM ' . $username . '_all_inquiry ');
		// 	   // $sql = "SELECT * FROM " . $full_name WHERE ' . $ajaxsearch_query . ';
		// 	   $sql = "SELECT * FROM " . $full_name . " WHERE 1" . $ajaxsearch_query;

		//    } else {
		// 	   // $sql = "SELECT * FROM $full_name WHERE   (assign_id='" . $_SESSION['id'] . "' OR assign_id IN (" . $all_gm_under_people_implode . ")) . $ajaxsearch_query";
		// 	   $sql = "SELECT * FROM $full_name WHERE (assign_id='" . $_SESSION['id'] . "' OR assign_id IN ($all_gm_under_people_implode)) $ajaxsearch_query";

		//    }
		//pre($sql);

		$sql = "SELECT * FROM `car_booking_data` WHERE user_id = " . $_SESSION['id'];


		$result = $db_connection->query($sql);
		$departmentdisplaydata = $result->getResultArray();
		$main_sql = $sql;
		$rowCount = $result->getNumRows();
		$total_no_of_pages = $rowCount;
		$second_last = $total_no_of_pages - 1;
		$pagesCount = ceil($rowCount / $perPageCount);
		$lowerLimit = ($pageNumber - 1) * $perPageCount;

		$sqlQuery = $main_sql . " LIMIT $lowerLimit , $perPageCount";
		// SELECT * FROM urvi_all_inquiry WHERE isSiteVisit = 1 ORDER BY id DESC LIMIT 10


		$Getresult = $db_connection->query($sqlQuery);
		$car_all_data = $Getresult->getResultArray();
		// pre($inquiry_all_data);
		// die();

		$rowCount_child = $Getresult->getNumRows();

		$start_entries = $lowerLimit + 1;
		$last_entries = $start_entries + $rowCount_child - 1;

		$row_count_html .= 'Showing ' . $start_entries . ' to ' . $last_entries . ' of ' . $rowCount . ' entries';
		$i = 1;
		$loop_break = 0;
		//    $status = get_table_array_helper('master_inquiry_status');
		$today = date("d-m-Y");

		if ($result->getNumRows() > 0) {

			$ts = "";
			$i = 1;

			$html = "";
		

			foreach ($car_all_data as $key => $value) {
				$car_details = "";
				if (isset($value['car_id']) && !empty($value['car_id'])) {
					$car_type_name = IdToFieldGetData('car_name', "id=" . $value['car_id'] . "", "car_features");
					$car_details = isset($car_type_name['car_name']) && !empty($car_type_name['car_name']) ? $car_type_name['car_name'] : '';
				}

				$car_price = "";
				if (isset($value['car_id']) && !empty($value['car_id'])) {
					$car_full_price = IdToFieldGetData('price', "id=" . $value['car_id'] . "", "car_features");
					$car_price = isset($car_full_price['price']) && !empty($car_full_price['price']) ? $car_full_price['price'] : '';
				}

				$car_full_image = "";
				if (isset($value['car_id']) && !empty($value['car_id'])) {
					$car_image = IdToFieldGetData('car_image', "id=" . $value['car_id'] . "", "car_features");
					$car_full_image = isset($car_image['car_image']) && !empty($car_image['car_image']) ? $car_full_price['car_image'] : '';
				}
			
				$html .= '<tr>';
				$html .= '  
				<td>' . $value['id'] . '</td>
				<td><a class="dropdown-item" href="'<?= base_url('assets/images/carimages/' . $car_full_image);'"> </td>
				<td>' . $car_details . '</td>
				<td>' . $value['city'] . '</td>
				<td>' . $value['start_date'] . '</td>
				<td>' . $value['end_date'] . '</td>
				<td>' . $value['id'] . '</td>
				<td>₹' . $car_price . '</td>
				<td><span class="status pending-bar"><div class="icon">&#9654;</div>pending</span></td>
				<td>' . $value['created_at'] . '</td>';
				$html .= '</tr>';
				//}
				//}
			}
			// pre($html);
			$return_array['row_count_html'] = $row_count_html;
			$return_array['html'] = $html;
			$return_array['total_page'] = $pagesCount;
			$return_array['response'] = 1;
		} else {
			$return_array['row_count_html'] = "Page 0 of 0";
			$return_array['total_page'] = 0;
			$return_array['response'] = 1;
			$return_array['html'] = '<p style="text-align:center;">Data Not Found </p>';
		}

		// if($perPageCount <= 800){
		echo json_encode($return_array);
		// } else {
		//     return $return_array;
		// }
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

	public function car_details_insert()
	{

		$post_data = $this->request->getPost();
		$table_name = $this->request->getPost("table");
		$action_name = $this->request->getPost("action");
		if ($this->request->getPost("action") == "insert") {
			$insert_data = array();
			if (!empty($this->request->getFile('profile_pic'))) {

				$img = $this->request->getFile('profile_pic');
				if (!empty($img->getName())) {
					$newName = $_POST['car_name'] . '_' . strtolower(trim(str_replace(' ', '', $img->getName())));
					$img->move(ROOTPATH . 'assets/images/carimages/', $newName);
					$image = [
						'car_image' => strtolower(trim(str_replace(' ', '', $img->getName()))),
					];
				}
			}

			unset($_POST['action']);
			unset($_POST['table']);

			if (!empty($_POST)) {
				$insert_data = $_POST;
				if (isset($image) && !empty($image)) {
					$insert_data['car_image'] = $image['car_image'];
				}
				$isduplicate = $this->duplicate_data($insert_data, $table_name);
				if ($isduplicate == 0) {
					$response = $this->MasterInformationModel->insert_entry($insert_data, $table_name);
					$departmentdisplaydata = $this->MasterInformationModel->display_all_records($table_name);

					$result['response'] = 1;
					$result['message'] = 'Add successfully!';

					$departmentdisplaydata = json_decode($departmentdisplaydata, true);
				} else {
					$result['response'] = 0;
					$result['message'] = 'Already created!';
				}
			}
		}

		return json_encode($result);
		die();
	}

	public function booking_data_insert()
	{
		// pre($);
		// if (!empty($this->request->getFile('profile_pic'))) {
		// pre($_POST);
		// pre($_FILES);
		$img = $this->request->getFile('addar_card');
		if (!empty($img->getName())) {
			$newName = $_POST['user_id'] . '_addar_' . strtolower(trim(str_replace(' ', '', $img->getName())));
			$img->move(ROOTPATH . 'assets/images/proof/', $newName);
			$image = [
				'addar_image' => strtolower(trim(str_replace(' ', '', $img->getName()))),
			];
		}
		$img2 = $this->request->getFile('pan_card');
		if (!empty($img2->getName())) {
			$newName2 = $_POST['user_id'] . '_pan_' . strtolower(trim(str_replace(' ', '', $img2->getName())));
			$img2->move(ROOTPATH . 'assets/images/proof/', $newName2);
			$image2 = [
				'pan_image' => strtolower(trim(str_replace(' ', '', $img2->getName()))),
			];
		}

		$img3 = $this->request->getFile('driving_license');
		if (!empty($img3->getName())) {
			$newName2 = $_POST['user_id'] . '_pan_' . strtolower(trim(str_replace(' ', '', $img3->getName())));
			$img3->move(ROOTPATH . 'assets/images/proof/', $newName2);
			$image3 = [
				'driving_license' => strtolower(trim(str_replace(' ', '', $img3->getName()))),
			];
		}

		$insert_data = $_POST;
		$insert_data['addar_card'] = $image['addar_image'];
		$insert_data['pan_card'] = $image2['pan_image'];
		$insert_data['driving_license'] = $image3['driving_license'];
		$table_name = 'car_booking_data';
		$response = $this->MasterInformationModel->insert_entry($insert_data, $table_name);
		$result['response'] = 1;
		$result['message'] = 'Add successfully!';

		return json_encode($result, true);
	}


	// list data 
	public function admin_car_show_list_data()
	{

		$db_connection = db_connect();
		$table_name = $_POST['table'];

		$action = $_POST['action'];
		//    $username = session_username($_SESSION['username']);
		$html = "";
		$row_count_html = '';
		$return_array = array(
			'row_count_html' => '',
			'html' => '',
			'total_page' => 0,
			'response' => 0
		);
		//$allow_data = json_decode($_POST['show_array']);
		//$status = get_table_array_helper('master_inquiry_status');
		// $get_roll_id_to_roll_duty_var = get_roll_id_to_roll_duty();
		$db_connection = \Config\Database::connect();
		//    $user_id = 1;
		//    if (!$this->admin == 1) {
		// 	   $user_id = $_SESSION['id'];
		//    }
		$status = isset($_POST['datastatus']) && !empty($_POST['datastatus']) ? $_POST['datastatus'] : "";
		$perPageCount = isset($_POST['perPageCount']) && !empty($_POST['perPageCount']) ? $_POST['perPageCount'] : 10;
		$pageNumber = isset($_POST['pageNumber']) && !empty($_POST['pageNumber']) ? $_POST['pageNumber'] : 1;
		$ajaxsearch = isset($_POST['ajaxsearch']) && !empty($_POST['ajaxsearch']) ? $_POST['ajaxsearch'] : '';
		$datastatus = isset($_POST['datastatus']) && !empty($_POST['datastatus']) ? $_POST['datastatus'] : "'1','2','3','4','6','7','9','10','11','12','13'";
		$which_result = isset($_POST['follow_up_day']) && !empty($_POST['follow_up_day']) ? $_POST['follow_up_day'] : '';


		//    $all_gm_under_people = '';
		//    $all_gm_under_people = getChildIds($_SESSION['id']);
		//    $array_push = array_push($all_gm_under_people);
		//    $all_gm_under_people_implode = "'" . implode("', '", $all_gm_under_people) . "'";
		$ajaxsearch_query = ' ';

		$db = \Config\Database::connect();
		$full_name = 'car_features';
		if ($ajaxsearch != '') {
			$ajaxsearch_query .= ' AND CONCAT(car_name) LIKE "%' . $ajaxsearch . '%" ';
		}
		//    if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1) {
		// 	   // $sql = $db->query('SELECT * FROM ' . $username . '_all_inquiry ');
		// 	   // $sql = "SELECT * FROM " . $full_name WHERE ' . $ajaxsearch_query . ';
		// 	   $sql = "SELECT * FROM " . $full_name . " WHERE 1" . $ajaxsearch_query;

		//    } else {
		// 	   // $sql = "SELECT * FROM $full_name WHERE   (assign_id='" . $_SESSION['id'] . "' OR assign_id IN (" . $all_gm_under_people_implode . ")) . $ajaxsearch_query";
		// 	   $sql = "SELECT * FROM $full_name WHERE (assign_id='" . $_SESSION['id'] . "' OR assign_id IN ($all_gm_under_people_implode)) $ajaxsearch_query";

		//    }
		//pre($sql);
		$sql = "SELECT * FROM  `car_features`";

		$result = $db_connection->query($sql);
		$departmentdisplaydata = $result->getResultArray();
		$main_sql = $sql;
		$rowCount = $result->getNumRows();
		$total_no_of_pages = $rowCount;
		$second_last = $total_no_of_pages - 1;
		$pagesCount = ceil($rowCount / $perPageCount);
		$lowerLimit = ($pageNumber - 1) * $perPageCount;

		$sqlQuery = $main_sql . " LIMIT $lowerLimit , $perPageCount";
		// SELECT * FROM urvi_all_inquiry WHERE isSiteVisit = 1 ORDER BY id DESC LIMIT 10


		$Getresult = $db_connection->query($sqlQuery);
		$car_all_data = $Getresult->getResultArray();
		// pre($inquiry_all_data);
		// die();

		$rowCount_child = $Getresult->getNumRows();

		$start_entries = $lowerLimit + 1;
		$last_entries = $start_entries + $rowCount_child - 1;

		$row_count_html .= 'Showing ' . $start_entries . ' to ' . $last_entries . ' of ' . $rowCount . ' entries';
		$i = 1;
		$loop_break = 0;
		//    $status = get_table_array_helper('master_inquiry_status');
		$today = date("d-m-Y");

		if ($result->getNumRows() > 0) {

			$ts = "";
			$i = 1;

			$html = "";
			//    $access = '';
			//    $getchild = array();
			// //    $user_id = 1;
			// //    if (!$this->admin == 1) {
			// // 	   $user_id = $_SESSION['id'];
			// //    }
			//    $getchild = getChildIds($_SESSION['id']);
			//    if (!empty($getchild)) {
			// 	   array_push($getchild, $user_id);
			//    }
			//    if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
			// 	   $projectss = $_SESSION['id'];
			// 	   $projectss = explode(",", $_SESSION['id']);
			//    } else {
			// 	   $projectss = array();
			//    }

			foreach ($car_all_data as $key => $value) {

				$html .= '<tr>';
				$html .= '
								  <td  class="d-flex">	 
											 <div class="people-list-trf bg-white px-3 py-2 w-100 admin_car_view" data-bs-toggle="modal"
												data-bs-target="#admin_car_view" id="people_list_model" data-view_id="' . $value['id'] . '">
												<div
												   class="people-list-topbar d-flex align-items-center justify-content-between  flex-wrap">
												   <div class="d-flex align-items-center col-12 col-xl-4">
													  <p> ' . $value['id'] . '</p>
													  <span class="mx-2">' . $value['car_name'] . '</span>
												   </div>
												</div>
												<div class="d-flex align-items-center justify-content-between flex-wrap">
												   <div class="d-flex align-items-center col-12 col-md-6 col-sm-6 col-xl-3">
													  <p> bag_allow  :</p>
													  <span class="mx-1">' . $value['bag_allow'] . '</span>
												   </div>
												   <div class="d-flex align-items-center col-12 col-md-6 col-sm-6 col-xl-3">
													  <p>age : </p>
													  <span class="mx-1">' . $value['age'] . '</span>
												   </div>
												   <div class="d-flex align-items-center col-12 col-md-6 col-sm-6  col-xl-3">
													  <p>Fuel : </p>
													  <span class="mx-1">' . $value['fuel'] . '</span>
												   </div>
												   <div class="d-flex align-items-center col-12 col-md-6 col-sm-6  col-xl-3">
												   <p>Km : </p>
												   <span class="mx-1">' . $value['km'] . '</span>
												</div>
												<div class="d-flex align-items-center col-12 col-md-6 col-sm-6  col-xl-3">
												   <p>Car Image : </p>
												   <span class="mx-1">' . $value['km'] . '</span>
												</div>
												<div class="d-flex align-items-center col-12 col-md-6 col-sm-6  col-xl-3">
												   <p>Car Image : </p>
												   <span class="mx-1">' . $value['km'] . '</span>
												</div><div class="d-flex align-items-center col-12 col-md-6 col-sm-6  col-xl-3">
												   <p>Car Image : </p>
												   <span class="mx-1">' . $value['km'] . '</span>
												</div>
												<div class="d-flex align-items-center col-12 col-md-6 col-sm-6  col-xl-3">
												   <p>Pickup Address : </p>
												   <span class="mx-1">' . $value['pickup_address'] . '</span>
												</div>
												<div class="d-flex align-items-center col-12 col-md-6 col-sm-6  col-xl-3">
												   <p>Seater : </p>
												   <span class="mx-1">' . $value['seater'] . '</span>
												</div>
												<div class="d-flex align-items-center col-12 col-md-6 col-sm-6  col-xl-3">
												   <p>Gear : </p>
												   <span class="mx-1">' . $value['gear'] . '</span>
												</div>
												</div>
											 </div>
											 </td>';
				$html .= '</tr>';
				//}
				//}
			}
			// pre($html);
			$return_array['row_count_html'] = $row_count_html;
			$return_array['html'] = $html;
			$return_array['total_page'] = $pagesCount;
			$return_array['response'] = 1;
		} else {
			$return_array['row_count_html'] = "Page 0 of 0";
			$return_array['total_page'] = 0;
			$return_array['response'] = 1;
			$return_array['html'] = '<p style="text-align:center;">Data Not Found </p>';
		}

		// if($perPageCount <= 800){
		echo json_encode($return_array);
		// } else {
		//     return $return_array;
		// }
		die();
	}

	// view data 
	public function view_data()
	{
		if ($this->request->getPost("action") == "view") {
			$view_id = $this->request->getPost('view_id');
			$table_name = $this->request->getPost('table');
			// $username = session_username($_SESSION['username']);

			$userEditdata = $this->MasterInformationModel->edit_entry('car_features', $view_id);
			$inquirydata = get_object_vars($userEditdata[0]);


			return json_encode($userEditdata, true);
		}
		die();
	}
	// edit data 
	public function edit_data()
	{

		if ($this->request->getPost("action") == "edit") {
			$edit_id = $this->request->getPost('edit_id');
			//  $username = session_username($_SESSION['username']);

			$table_name = $this->request->getPost('table');
			$userEditdata = $this->MasterInformationModel->edit_entry($table_name, $edit_id);

			return json_encode($userEditdata, true);
		}
		die();
	}

	public function view_car_data()
	{
		$view_id = $this->request->getPost('view_id');

		if (!empty($view_id)) {
			$table_name = $this->request->getPost('table');
			$userEditdata = $this->MasterInformationModel->edit_entry($table_name, $view_id);
			if (isset($userEditdata[0])) {
				$returndata = $userEditdata[0];
			} else {
				$returndata = $userEditdata;
			}
			return json_encode($returndata, true);
		}
	}
}
