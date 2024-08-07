<?php require_once "header.php"?>
<?php
extract($data['detail']);

?>
<section class="page-name-sec page-name-sec-01">
    <div class="section-padding">
      <div class="container">
        <h3 class="page-title">Chi tiết sản phẩm</h3><!-- /.page-title -->

        <div class="row">
          <div class="col-sm-7">
            <p class="description">
              
            </p><!-- /.description -->
          </div>

          <div class="col-sm-5">
            <ol class="breadcrumb text-right">
              <li><a href="#">Trang chủ</a></li>
              <li><a href="#">Sản phẩm</a></li>
              <li class="active">Chi tiết</li>
            </ol><!-- /.breadcrumb -->
          </div>

        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.section-padding -->
  </section><!-- /.page-name-sec -->



  <section class="shop-contents">
    <div class="section-padding">
      <div class="container">
        <div class="product-details">

          <div class="post-navigation text-center">
            <a class="post-prev" href="shop-details-01.html"><i class="ti-arrow-left"></i></a>
            <a class="post-next" href="shop-details-01.html"><i class="ti-arrow-right"></i></a>
          </div><!-- /.post-navigation -->

          <div class="row">
            <div class="col-md-6">
              <div class="item-gallery vertical">                    
                <div class="tabs">
                  <div role="tabpanel" class="tabpanel">

                    <div class="tab-content">
                      <div role="tabpanel" class="tab-pane in active" id="item1">
                        <img src="public/upload/<?=$img?>" alt="<?=$name?>"> 
                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="item2">
                        <img src="public/upload/<?=$img?>" alt="Product Image"> 
                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="item3">
                        <img src="public/upload/<?=$img?>" alt="Product Image"> 
                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="item4">
                        <img src="public/upload/<?=$img?>" alt="Product Image"> 
                      </div>
                    </div><!-- /.tab-content -->

                    <ul class="nav nav-tabs" role="tablist">
                      <li role="presentation" class="active"><a href="#item1" aria-controls="item1" role="tab" data-toggle="tab" aria-expanded="true"><img src="public/upload/<?=$img?> alt="Product Image"></a></li>
                      <li role="presentation" class=""><a href="#item2" aria-controls="item2" role="tab" data-toggle="tab" aria-expanded="false"><img src="public/upload/<?=$img?>" alt="Product Image"></a></li>
                      <li role="presentation" class=""><a href="#item3" aria-controls="item3" role="tab" data-toggle="tab" aria-expanded="true"><img src="public/upload/<?=$img?>" alt="Product Image"></a></li>
                      <li role="presentation" class=""><a href="#item4" aria-controls="item4" role="tab" data-toggle="tab" aria-expanded="true"><img src="public/upload/<?=$img?>" alt="Product Image"></a></li>
                    </ul><!-- /.nav-tabs -->

                  </div>
                </div><!-- /.item-gallery -->
              </div>
            </div>

            <div class="col-md-6">
              <div class="about-product">
                <h3 class="item-title"><?=$name?></h3>
                <div class="top-meta">
                  <!-- <a href="#">20 reviews</a>
                  <a href="#">Write a review</a> -->
                </div><!-- /.top-meta -->

                <div class="availability">
                  <!-- <button>In Stock<i class="ti-check-box"></i></button> -->
                </div><!-- /.availability -->

                <div class="rating"><input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/></div><!-- /.rating -->

                <div class="item-price">
                  <div class="current-price"><span class="currency"></span><span class="price"><?=$price_sale?></span></div><!-- /.current-price -->
                  <div class="previous-price"><span class="currency"></span><span class="price"><?=$price?></span></div><!-- /.previous-price -->
                </div><!-- /.item-price -->

                <div class="cart-counter">
                  <button id="item-plus" class="item-plus"><i class="ti-plus"></i></button>
                  <span id="count" class="count">0</span>
                  <button id="item-minus" class="item-minus"><i class="ti-minus"></i></button>
                </div><!-- /.cart-counter -->

                <select data-select-like-alignement="never" class="color drop-select">
                  <option value="">Color</option>
                  <option value="2">White</option>
                  <option value="3">Gray</option>
                  <option value="4">Red</option>
                  <option value="5">Blue</option>
                </select>

                <select data-select-like-alignement="never" class="size drop-select">
                  <option value="">Size</option>
                  <option value="2">S</option>
                  <option value="3">M</option>
                  <option value="4">L</option>
                  <option value="5">XL</option>
                  <option value="5">XXL</option>
                </select>

                <p class="description">
                    <?=$mota?>
                </p><!-- /.short-description -->

                <div class="buttons">
                  <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                  <button class="wish-list"><i class="fa fa-heart"></i></button>
                </div>

                <!-- <div class="product-meta">
                  <span class="meta-id">Product ID : <span class="meta-about">0013459870</span></span>
                  <span class="meta-id">Category : <span class="meta-about"><a href="#">Mockup</a><a href="#">Design</a></span></span>
                  <span class="meta-id">Tags : <span class="meta-about"><a href="#">Mockup</a>,<a href="#">Design</a>,<a href="#">Photoshop</a></span></span>
                </div>/.product-meta -->

                <div class="product-social">
                  <a href="#"><i class="ti-twitter-alt"></i></a>
                  <a href="#"><i class="ti-facebook"></i></a>
                  <a href="#"><i class="ti-pinterest-alt"></i></a>
                  <a href="#"><i class="ti-google"></i></a>
                </div><!-- /.product-social -->
              </div><!-- /.about-product -->
            </div>
          </div>
          <div class="clearfix"></div>

      
        </div><!-- /.product-details -->

      
      </div><!-- /.container -->
    </div><!-- /.section-padding -->
  </section><!-- /.shop-contents -->





  <!-- <section class="related-products text-center">
    <div class="section-padding">
      <div class="container">
        <div class="section-top text-center">
          <h2 class="section-title">Sản phẩm liên quan <span></span></h2>
        </div>/.section-top -->

        <!-- <div id="related-slider" class="related-slider">

          <div class="item">
            <a class="fancybox" href="images/home01/trend/1.png">
              <div class="item-thumbnail">
                <img src="images/home01/trend/1.png" alt="Item Thumbnail">
                <span class="ribbon sale"></span>
              </div>
            </a>

            <div class="item-details">
              <h3 class="item-title"><a href="#">Product name here</a></h3>/.item-title -->
              <!-- <div class="item-price">
                <span class="currency">$</span>/.currency -->
                <!-- <span class="price">88.00</span>/.price -->
              <!-- </div>/.item-price -->

              <!-- <div class="previous-price">
                <span class="currency">$</span>/.currency -->
                <!-- <span class="price">98.00</span>/.price -->
              <!-- </div>/.previous-price                   -->
              <!-- <a href="#" class="btn">Add to cart</a>/.btn -->
            <!-- </div>
          </div> -->

         

          
        </div><!-- /#related-slider -->
      </div><!-- /.container -->
    </div><!-- /.section-padding -->
  </section><!-- /.related-products -->
<?php require_once "footer.php"?>



 