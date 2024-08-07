<?php
//  namespace App\Controller;
class BaseController{
    protected $data =[]; // chua lai du lieu moi, dc ghi de len
    protected $titlepage="";
     function renderView($viewpage,$titlepage,$data){
   $viewfile= 'App/View/' .$viewpage . '.php';
   if(is_file($viewfile)){
include $viewfile;
   }else{
    echo ' Trang nay ko ton tai';
   }


     }
}

?>