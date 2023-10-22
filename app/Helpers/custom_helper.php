<?php
if (!function_exists("// pre")) {
    function pre($array)
    {
        echo "<pre>";
        print_r($array);
        echo "<pre>";
    }
}
if (!function_exists('IdToFieldGetData')) {
    function IdToFieldGetData($fieldname = '', $where, $tablename)
    {
        $db = \Config\Database::connect();
        $result_data = array();
        if (!empty($fieldname) && !empty($where)) {
            $sql = 'SELECT ' . $fieldname . ' FROM ' . $tablename . ' WHERE ' . $where;
        } else {
            $sql = 'SELECT * FROM ' . $tablename . ' WHERE ' . $where;
        }
        $result = $db->query($sql);
        if ($result->getNumRows() > 0) {
            $result = $result->getResultArray()[0];
            if (isset($result) && !empty($result)) {
                // if($default_data == 1)
                // {
                $result_data = $result;
                //$result_user_data['fullname'] = $people_array['firstname'] .' '. $people_array['lastname'] ;
                // }
                // else
                // {
                //     $result_user_data['fullname'] = $people_array['firstname'] .' '. $people_array['lastname'] ;
                // }
            }
        }
        // $results = get_object_vars($result[0]);
        return $result_data;
    }
}

?>