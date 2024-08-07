<?php 

    require_once "app/Config/database.php";
    require_once "app/Model/DatabaseModel.php";
    require_once "app/Model/ProductModel.php";
    require_once "app/Model/CatalogModel.php";
    require_once "app/Model/BrandModel.php";
    require_once "app/Controller/BaseController.php";
    require_once "app/Controller/HomeController.php";
    require_once "app/Controller/ProductController.php";
    
   
    if(isset($_GET['pg'])){
        switch($_GET['pg']){
            case 'product':
            $propage=new ProductController;
            $propage->index();
            break;
            case 'productdetail':
                $propage=new ProductController;
                $propage->detail();
            break;
            case 'relate':
                $propage=new ProductController;
                $propage->relate();
            break;
            case 'cart':
                $propage=new CartController;
                $propage->index();
            break;
            case 'checkout':
                $propage=new ProductController;
                $propage->checkout();
            break;
            case 'login':
                $propage=new ProductController;
                $propage->login();
            break;
            case 'register':
                $propage=new ProductController;
                $propage->register();
            break;
            case 'forgotpassword':
                $propage=new ProductController;
                $propage->forgotpassword();
            break;

            
            default:
            #code....
            break;
        }
    }else{
        $homedpage=new HomeController;
        $homedpage ->index();
    }
?>
