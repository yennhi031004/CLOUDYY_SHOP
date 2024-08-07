<?php
// namespace app\Controller\HomeController;
class HomeController  extends BaseController{
    private $ProductModel;
    private $BrandModel;
    function __construct(){
        $this->ProductModel=new ProductModel;
        $this->BrandModel=new BrandModel;
    }
function index(){
    $this->titlepage="Trang chu ";
    $dssp_new=$this->ProductModel->sanpham_get_all(0,4);
    $dssp_view=$this->ProductModel->sanpham_get_all(1,4);
    $brand_list=$this->BrandModel->brand_get_all();
    $dssp_sale=$this->ProductModel->sale_get_all(2);
    // $dssp_view=$this->ProductModel->sanpham_get_all(1,6);
    $this->data["view_product"]= $dssp_view;
    $this->data["new_product"]= $dssp_new;
    $this->data["brand_list"]= $brand_list;
    $this->data["dssp_sale"]= $dssp_sale;
  
   
   $this ->renderView("home",$this->titlepage,$this->data);

}


}

?>