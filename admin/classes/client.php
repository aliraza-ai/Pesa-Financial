<?php
$filepath=realpath(dirname(__FILE__)); 
include_once ($filepath.'/session.php');
include_once ($filepath.'/database.php');
include_once ($filepath.'/format.php');
class Client
{   private $db;
    private $fm;
	function __construct()
	{
		$this->db=new Database();
		$this->fm=new Format();
	}


    public function getalluser()
    {
        $query="select * from affiliation";
        $result=$this->db->select($query);
        return $result;
    }

    public function delete($id)
    {
        $query="delete  from affiliation where id='$id'";
        $result=$this->db->delete($query);
    }


}

