<?php
// namespace App\Controller;
// use App\Model\ProductModel;
// use App\Model\CatalogModel;

class ProductController  extends BaseController{
    private $ProductModel;
    private $CatalogModel;
    function __construct(){
        $this->ProductModel=new ProductModel;
        $this->CatalogModel = new CatalogModel;
    }
function index(){
    $this->titlepage="Danh sách sản phẩm";
    if(isset($_GET['idcatalog'])){
        $idcatalog=$_GET['idcatalog'];
    }else{
        $idcatalog=0;
    }
    $limit = 12;
    $sotrang = 1;
    $dssp_new=$this->ProductModel->sanpham_get_all_catalog($idcatalog,$limit,$sotrang);// catalog  
    $this->data["new_product"]= $dssp_new;
    $this->data["catalog_list"]= $this->CatalogModel->catalog_get_all();
    $this ->renderView("product",$this->titlepage,$this->data);
}

function detail(){
    $this->titlepage="Chi tiết sản phẩm";
    if(isset($_GET['id'])){
        $id=$_GET['id'];
    }else{
        $id=0;
    }
    $get_sp=$this->ProductModel->sanpham_get_one($id);
    if(is_array($get_sp)){
        extract($get_sp);
        $this->titlepage=$name;
        $this->data["detail"]= $get_sp;
        $this ->renderView("productdetail",$this->titlepage,$this->data);      
    } else{
        header('Location:index.php');
    }
}
        // function cart(){
        //     $this ->renderView("cart",$this->titlepage,$this->data);

        // }
        function checkout(){
            $this ->renderView("checkout",$this->titlepage,$this->data);

        }
        function login(){
            $this ->renderView("login",$this->titlepage,$this->data);

        }
        function register(){
            $this ->renderView("register",$this->titlepage,$this->data);

        }
        function forgotpassword(){
            $this ->renderView("forgotpassword",$this->titlepage,$this->data);

        }
}

?>