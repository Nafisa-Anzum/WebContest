<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CISModel extends CI_Model {

    public function _construct()
    {
        parent::_construct();
    }
    public function editUser($data)
    {
        $q="UPDATE accountinfo SET name='".$data['name']."' address='".$data['address']."' balance=".$data['balance']." phoneNumber=".$data['phoneNumber']." WHERE a_id=".$data['a_id'];
        $query= $this->db->query($q);
    }

    public function updateBalance($data)
    {
        $q="UPDATE accountinfo SET balance=".$data['balance']." WHERE a_id=".$data['a_id'];
        $query= $this->db->query($q);
    }
    public function addUser($data)
    {
        $q="INSERT INTO accountinfo (name, address, balance,phoneNumber) VALUES('".$data['name']."','".$data['address']."',".$data['balance'].",".$data['phoneNumber'].")";
        $query= $this->db->query($q);
        $id="SELECT MAX(a_id) as mx FROM accountinfo";
        $query=$this->db->query($id);
        $id2=  $query->result(); echo $id;
        //return $id2->'a_id';
    }

    public function getUsers()
    {
        $query= $this->db->query("SELECT * FROM accountinfo;");
        if($query->num_rows()>0) {
            return $query->result();
        }
        else{
            return NULL;
        }
    }

    public function getUser($data)
    {
        $q="SELECT * FROM accountinfo where a_id=".$data['a_id'];
        $query= $this->db->query($q);
        if($query->num_rows()>0) {
            return $query->result();
        }
        else{
            return NULL;
        }
    }
    public function deleteUser()
    {
        $q="DELETE FROM accountinfo where a_id=".$data['a_id'];
        $query= $this->db->query($q);
    }



}
