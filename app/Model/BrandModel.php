<?php
// namespace app\Model;
// use App\Model\DatabaseModel;

class BrandModel{

private $db;
function __construct(){
    $this->db=new DatabaseModel;
}

    function brand_get_all(){
    // $sql="select * from sanpham oder by id desc";
    $sql="select * from brand order by id asc ";
    
    return $this->db->get_all($sql);
    }
   
    function anh_getAll(){
        $sql="select img from brand";
        return $this->db->get_all($sql);
     }

   
 }

    
?>