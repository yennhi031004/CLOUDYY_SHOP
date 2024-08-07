<?php
//  namespace App\Model;
//  use App\Model\Database;

class ProductModel{

private $db;
function __construct(){
    $this->db=new DatabaseModel;
}

   
    function sanpham_get_all($view, $limit){
      $sql = "SELECT * FROM sanpham ";
      if ($view == 0) {
          $sql .= " ORDER BY id DESC LIMIT " . $limit;
      } elseif ($view == 1) {
          $sql .= " ORDER BY view desc LIMIT " . $limit;
      } 
      // else {
      //     $sql .= " WHERE bestseller = 1 ORDER BY bestseller LIMIT " . $limit;
      // }
      return $this->db->get_all($sql);
  }

    function sanpham_get_all_catalog($idcatalog,$limit,$sotrang){
        $sql="select * from sanpham where 1";
        if($idcatalog>0){ 
             $sql.=" AND idcatalog =".$idcatalog;
        }
            $limit1 = ($sotrang-1) * $limit;
            $limit2 = $limit;
            $sql.=" ORDER BY id DESC LIMIT " .$limit1.",".$limit2;           
        return $this->db->get_all($sql);
        } 

        function sale_get_all($limit){
          $sql = "SELECT * FROM sanpham order by price_sale desc limit $limit";
          return $this->db->get_all($sql);
      }
    
      
    //     function sanpham_get_one($id){
    //     if($id>0){
    //         $sql="select * from sanpham where id=",$id;
    //         return $this->db->get_one($sql);
            
    //     }else{
    //         return 0 ;
    //     }
    // } 
    function sanpham_get_one($id){
        $sql="select * from sanpham where id=?";
        return $this->db->get_one($sql,$id);
    }
    


    function sanpham_show($dssp){
        $html_dssp_home ='';
      
        foreach($dssp as $item){
            extract($item);
            $link="index.php?pg=productdetail&id=".$id;
            $html_dssp_home.='
            <div class="item col-md-3 col-sm-4 cat-1 cat-2">
              <div class="item-thumbnail">        
                <a class="fancybox" href="images/home08/featured/1.jpg">
                  <img src="public/upload/'.$img.'" alt="Item Thumbnail">
                </a>
              </div><!-- /.item-thumbnail -->
              
              <div class="item-content">
                <div class="buttons">
                  <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                  <button class="wish-list"><i class="fa fa-heart"></i></button>
                </div><!-- /.buttons -->

                <h3 class="item-title" style="color: #000;
                font-family: sans-serif;
                font-size: 15px;
                font-weight: 100; text-transform: none">
                <a href="'.$link.'">'.$name.'</a></h3><!-- /.item-title -->
                <div class="item-price">
                  <span class="currency"></span>
                  <span class="price">'.$price.'vnđ</span>
                </div><!-- /.item-price -->
                <div class="rating"><input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/></div><!-- /.rating -->
              </div><!-- /.item-content -->
            </div>';
      
        }
        return $html_dssp_home;
    }
 
       
    }
?>