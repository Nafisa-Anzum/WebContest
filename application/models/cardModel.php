<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cardModel extends CI_Model {

    public function _construct()
    {
        parent::_construct();
    }
    public function addCard($data)
    {
        if($data[type]==0){
        $q="INSERT INTO dCard (expiry, cvc, type) VALUES(".$data[expiry].",".$data[cvc].",".$data[type].")";
            $id="SELECT MAX(c_id) as mx FROM dCard;";
        }
    else{
        $q="INSERT INTO cCard (expiry, cvc, type) VALUES(".$data[expiry].",".$data[cvc].",".$data[type].",".$data[limit].")";
        $id="SELECT MAX(c_id) as mx FROM dCard;";
    }
        $query= $this->db->query($q);
        $query1= $this->db->query($id);
        $q1="INSERT INTO card (a_id, c_id, type) VALUES(".$data[a_id].",".$data[$query1->c_id].",".$data[type].")";
    }


}
