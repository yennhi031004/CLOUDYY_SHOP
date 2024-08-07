<?php
include_once "header.php";
?>
<?php
$html_cart="";
$tongtien=0;
if (count($_SESSION["giohang"])>0){
  foreach($_SESSION["giohang"] as $item){
    $tt=$item["soluong"]*$item["price"];
    $tongtien+=$tt;
    $html_cart.='
<tr>

<td class="order-item">
  <button class="del">
  <a href="'.$item["id"].'">

 
  <i class="ti-trash">
  </i>
  
  </a>
  </button>
  <div class="item-thumbnail">
    <img src="public/layout/images/upload/'.$item["img"].'" alt="images">
  </div><!-- /.item-thumbnail -->

  <div class="item-details">
    <h3 class="item-title">'.$item["name"].'</h3>
   
  </div><!-- /.item-details -->
</td>
<td class="unit-price"><span class="currency"></span><span class="price">'.number_format($item["price"],0,",",".").'VNĐ</span></td>

<td class="order-count">
  <div class="cart-counter">
    <button class="item-minus"type="button">-</button>
    <span class="item-count" type="text" value="1">1</span>
    <button class="item-plus" type="button">+</button>
  </div><!-- /.cart-counter -->
</td>

<td class="total-price"><span class="currency"></span><span class="price">'.number_format($tt,0,',','.').'</span></td>

<td class="edit"><button><i class="ti-pencil"></i></button></td>
</tr>


';

}
  }


?>
<section class="cart-section">
    <div class="section-padding">
      <div class="container" id="cart">
       
        <div class="per-order-items">

          <table class="cart-table">
            <tbody>
              <tr class="order-head">
                <th>SẢN PHẨM</th>
                <th>ĐƠN GIÁ</th>
                <th>SỐ LƯỢNG</th>
                <th>THÀNH TIỀN</th>
                <th>THAO TÁC</th>
              </tr>
    <?=$html_cart?>
            </tbody>
          </table><!-- /.cart-table -->

          <div class="cart-buttons">
            <button class="clear-cart">
              <a href="deletecart"> Xóa giỏ hàng </a></button>
            <button class="update-cart">
              <a href="product">   Cập nhập giỏ hàng</a></button>
            <button class="continue pull-right">
              <a href="product">   Tiếp tục mua sắm</a>
           
            </button>
          </div><!-- /.cart-buttons -->
        </div><!-- /.per-order-items -->

        <div class="billing-table">   
          <div class="row">
            <div class="discount-details col-md-4 col-sm-6">
              <h3 class="title">Mã giảm giá</h3>
              <form action="#">
                <input class="form-input" type="text" placeholder="Nhập mã">
                <button type="submit" class="btn submit-code">Áp dung</button>
              </form>
            </div><!-- /.discount-details -->

            <div class="shipping-details col-md-4 col-sm-6">
              <h3 class="title">Vận chuyển</h3>
              <form action="#">
                  <select name="country" id="Country-name" class="form-input">
                    <option value="">Quốc gia*</option>
<option value="1">USA</option>
                    <option value="2">Franch</option>
                    <option value="3">Germany</option>
                    <option value="4">Russia</option>
                  </select>

                  <select name="country" id="state-province" class="form-input">
                    <option value="">Tỉnh/TP*</option>
                    <option value="1">Florida</option>
                    <option value="2">NY</option>
                    <option value="3">LA</option>
                    <option value="4">PH</option>
                  </select>

                  <input id="zip-code" class="form-input" type="text" placeholder="Post/Zip Code" required="">

                  <button class="btn btn-xs" type="submit">Estimate</button>

              </form>
            </div><!-- /.shipping-details -->

            <div class="billing-order col-md-4 col-sm-6">
              <div class="order-cost">
                <ul>
                
               
                  <li>
                    <div class="bill-name total">Tổng tiền</div>
                    <div class="amount total"><span class="currency"></span><span class="count"><?=number_format($tongtien,0,",",".")?>VNĐ</span></div>
                  </li>
                </ul>
                <button class="btn">Tiến hành thanh toán</button>
              </div><!-- /.order-cost -->
            </div><!-- /.billing-order -->
          </div><!-- /.row -->
        </div><!-- /.billing-table -->
      </div><!-- /.contaier -->
    </div><!-- /.section-padding -->
  </section><!-- /.cart-section -->




  <section class="subscribe-03 background-bg" data-image-src="">
    <div class="container">
      <div class="subscribe-details">
        <div class="row">
          <div class="col-sm-5">
            <div class="section-top">
              <h3 class="section-title">Stay up to date <span></span></h3><!-- /.section-title -->
            </div>
          </div>
          <div class="col-sm-7">
            <form class="subscribe-form" action="#">
              <input class="form-control" type="email" placeholder="myemail@email.com">
              <input class="btn btn-subscribe" type="submit" value="Subscribe">
            </form>
          </div>
        </div><!-- /.row -->
      </div><!-- /.subscribe-details -->
    </div><!-- /.section-padding -->
  </section>

  <div id="scroll-to-top" class="scroll-to-top">
    <i class="fa fa-angle-double-up"></i>    
  </div>



  <script src="public/layout/assets/js/plugins.js"></script>
  <script src="public/layout/assets/js/main.js"></script>
  <?php
include_once "footer.php";
?>