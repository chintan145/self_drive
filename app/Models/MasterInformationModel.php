<?php namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class MasterInformationModel extends Model{
    protected $db;
    public function __construct(ConnectionInterface &$db) {
        $this->db =& $db;
        helper('custom');
    }

    public function insert_entry($data,$tablename){
        $this->db->table($tablename)->insert($data);
        $insert_id = $this->db->insertID();
        return $insert_id;
    }
    public function display_all_records($tablename ,$oreder = 'ASE'){
        ini_set('memory_limit', '-1');
        $result = $this->db->table($tablename)->orderBy('id', $oreder)->get();
        return json_encode($result->getResult());
    }
}
?>