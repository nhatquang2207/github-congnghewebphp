<?php
    include ("login.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author">
    <link href="./css/font-family.css" rel="stylesheet">

    <title>Ultimate laptop</title>

    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>

    <script src="./js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/fontawesome.css">
    <link rel="stylesheet" href="./css/layout.css">
    <link rel="stylesheet" href="./css/owl.css">
    <script src="./js/dangnhap.js"></script>
</head>


<body>
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- Header -->
    <header class="" >
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <h2>Ultimate <em>Laptop</em></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Trang chủ
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sản phẩm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Về chúng tôi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pageDN.php" id="DN">Đăng nhập
                                <i class="fa fa-user"></i>
                            </a>
                        </li>   
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-dismiss="modal" data-toggle="modal" data-target="#modalcart">Giỏ hàng
                                <i class="fa fa-cart-arrow-down"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <nav class="navbar navbar-expand-lg">
            <div class="container" >
                <div class="nav-item dropdown">
                    <a class="nav-link" href="" id="navbardrop" data-toggle="dropdown">Danh mục hãng &nbsp; 
                        <i class="fa fa-align-justify"></i></a>
                    <div class="dropdown-menu">
                        <a href="" class="dropdown-item">MSI</a>
                        <a href="" class="dropdown-item">Apple</a>
                    </div>

                </div>

                <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4 ">
                    <marquee behavior="" direction="Left" style="color: #f33f3f; font-weight: bold; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 20px; ">Bring you the best choice </marquee>
                </div>

                <form action="./search.php" method="get" class="form-inline">
                    <input type="text"  name="txtSearch" placeholder="Tìm kiếm" class="form-control mr-lg-2">
                    <input class="btn btn-success" name="btnSearch" type="submit" value="search">
                </form>
            </div>
        </nav>
</header>

    <div class="row">
        <div class="col-12">
            <div class="modal fade" id="modalcart">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content" >
                        <form action="">
                            <div class="modal-header">
                                <h3 class="modal-title">Giỏ hàng</h3>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
        
                            <div class="modal-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr style="text-align: center;">
                                            <th class="col-1">STT</th>
                                            <th class="col-3">Sản phẩm</th>
                                            <th class="col-3">Tên sản phẩm</th>
                                            <th class="col-1">Số lượng</th>
                                            <th class="col-1">Giá tiền</th>
                                            <th class="col-2">Tổng cộng</th>
                                            <th class="col-1">Xóa</th>
                                            
                                        </tr>
                                    </thead>
                                        <tr style="text-align: center;">
                                            <th>1</th>
                                            <th><img src="" alt=""></th>
                                            <th>Macbook</th>
                                            <th><input class="col-7" type="number" name="cartsoluong" id="cartsoluong" value="1"></th>
                                            <th>10000000</th>
                                            <th>10000000</th>
                                            <th><a href=""><i class="fa fa-trash"></i></a></th>
                                        </tr>
                                    <tbody>

                                    </tbody>
                                    
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" value="đăng nhập" name="btnSubmit" data-dismiss="modal" data-toggle="modal">Thanh toán</button>
                                <button type="button" class="btn btn-info" value="cancel" data-dismiss="modal">Cancel</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text" id="1">
        <div class="owl-banner owl-carousel">
            <div class="banner-item-01">
                <div class="text-content">
                    <h4>Best Offer</h4>
                    <h2>New Arrivals On Sale</h2>
                </div>
            </div>
            <div class="banner-item-02">
                <div class="text-content">
                    <h4>Flash Deals</h4>
                    <h2>Get your best products</h2>
                </div>
            </div>
            <div class="banner-item-03">
                <div class="text-content">
                    <h4>Last Minute</h4>
                    <h2>Grab last minute deals</h2>
                </div>
            </div>
            <div class="banner-item-04">
                <div class="text-content">
                    <h4>Last Minute</h4>
                    <h2>Grab last minute deals</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2 style="text-transform: uppercase;">Khuyến mãi hot</h2>
                        <a href="products.html">Tất cả khuyến mãi <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <a href="">
                        <div class="product-item" style="height: 300px;">
                                <img src="./images/product_01.jpg" alt="">
                                <div class="down-content">
                                    <h6>Macbook Pro Pro Pro Pro Pro Pro</h6>
                                    <h5>11,259,000 VNĐ</h5>
                                    <h4>10,159,000 VNĐ</h4>
                                    <i class="fa fa-star"></i>
                                    <span>Chi tiết</span>
                                </div>
                        </div>
                    </a>
                </div>
                               
                
                <div class="col-md-3">
                    <a href="">
                        <div class="product-item" style="height: 300px;">
                                <img src="./images/product_01.jpg" alt="">
                                <div class="down-content">
                                    <h6>Macbook Pro Pro Pro Pro Pro Pro</h6>
                                    <h5>11,259,000 VNĐ</h5>
                                    <h4>10,159,000 VNĐ</h4>
                                    <i class="fa fa-star"></i>
                                    <span>Chi tiết</span>
                                </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="">
                        <div class="product-item" style="height: 300px;">
                                <img src="./images/product_01.jpg" alt="">
                                <div class="down-content">
                                    <h6>Macbook Pro Pro Pro Pro Pro Pro</h6>
                                    <h5>11,259,000 VNĐ</h5>
                                    <h4>10,159,000 VNĐ</h4>
                                    <i class="fa fa-star"></i>
                                    <span>Chi tiết</span>
                                </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="">
                        <div class="product-item" style="height: 300px;">
                                <img src="./images/product_01.jpg" alt="">
                                <div class="down-content">
                                    <h6>Macbook Pro Pro Pro Pro Pro Pro</h6>
                                    <h5>11,259,000 VNĐ</h5>
                                    <h4>10,159,000 VNĐ</h4>
                                    <i class="fa fa-star"></i>
                                    <span>Chi tiết</span>
                                </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="">
                        <div class="product-item" style="height: 300px;">
                                <img src="./images/product_01.jpg" alt="">
                                <div class="down-content">
                                    <h6>Macbook Pro Pro Pro Pro Pro Pro</h6>
                                    <h5>11,259,000 VNĐ</h5>
                                    <h4>10,159,000 VNĐ</h4>
                                    <i class="fa fa-star"></i>
                                    <span>Chi tiết</span>
                                </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="">
                        <div class="product-item" style="height: 300px;">
                                <img src="./images/product_01.jpg" alt="">
                                <div class="down-content">
                                    <h6>Macbook Pro Pro Pro Pro Pro Pro</h6>
                                    <h5>11,259,000 VNĐ</h5>
                                    <h4>10,159,000 VNĐ</h4>
                                    <i class="fa fa-star"></i>
                                    <span>Chi tiết</span>
                                </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="">
                        <div class="product-item" style="height: 300px;">
                                <img src="./images/product_01.jpg" alt="">
                                <div class="down-content">
                                    <h6>Macbook Pro Pro Pro Pro Pro Pro</h6>
                                    <h5>11,259,000 VNĐ</h5>
                                    <h4>10,159,000 VNĐ</h4>
                                    <i class="fa fa-star"></i>
                                    <span>Chi tiết</span>
                                </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="">
                        <div class="product-item" style="height: 300px;">
                                <img src="./images/product_01.jpg" alt="">
                                <div class="down-content">
                                    <h6>Macbook Pro Pro Pro Pro Pro Pro</h6>
                                    <h5>11,259,000 VNĐ</h5>
                                    <h4>10,159,000 VNĐ</h4>
                                    <i class="fa fa-star"></i>
                                    <span>Chi tiết</span>
                                </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2 style="text-transform: uppercase;">Laptop Apple</h2>
                        <a href="">Tất cả sản phẩm <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <a href="">
                        <div class="product-item" style="height: 300px;">
                                <img src="./images/product_01.jpg" alt="">
                                <div class="down-content">
                                    <h6>Macbook Pro Pro Pro Pro Pro Pro</h6>
                                    <h4>10,159,000 VNĐ</h4>
                                    <span>Chi tiết</span>
                                </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <div class="best-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Laptop chất lượng với <b>Utimate Laptop</b></h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="left-content">
                        <h4>Bạn đang tìm kiếm 1 chiếc laptop chất lượng phù hợp với nhu cầu sử dụng?</h4>
                        <h6><b>Địa chỉ:</b> 12 Nguyễn Văn Bảo, phường 4, quận Gò Vấp, thành phố Hồ Chí Minh</h6>
                        <h6><b>Email:</b> <a href="mailto:ultimate-laptop@gmail.com" class="fa fa-mail-forward"> &nbsp; ultimate-laptop@gmail.com</a> </h6>
                        <h6><b>Hotline:</b> 190019xx </h6>

                        <a href="" class="filled-button">Về chúng tôi</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="middle-content">
                        <h3>Hệ thống tổng đài miễn phí: <p>(Làm việc từ 9h-18h)</p></h3>
                        <p>- Gọi mua hàng: <b>1900100x</b></p>
                        <p>- Chăm sóc khách hàng: <b>1900190x</b></p>
                        <ul class="featured-list">
                            <li><a href="#">Chính sách bảo hành</a></li>
                            <li><a href="#">Chính sách vận chuyển</a></li>
                            <li><a href="#">Chính sách thanh toán</a></li>
                            <li><a href="#">Chính sách bảo mật</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="right-image">
                        <img src="images/feature-image.jpg" alt="">
                    </div>
                </div>
            </div>
            
        </div>
    </div>


    <div class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="./images/dathongbaobocongthuong.png" height="150px" width="310" alt="">
                            </div>
                            <div class="col-md-4">
                                <iframe width="504" height="283" src="https://www.youtube.com/embed/J2X5mJ3HDYE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="col-md-4">
                                <a href="#1" class="filled-button">Về đầu trang
                                    <i class="fa fa-chevron-circle-up"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                        <p>Copyright &copy; 2021 Ultimate Laptop Co., Ltd.
                            - Design: <a rel="nofollow noopener" href="" target="_blank">NOTME</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="./js/layout.js"></script>
    <script src="./js/owl.js"></script>
    <script src="./js/slick.js"></script>
    <script src="./js/isotope.js"></script>
    <script src="./js/accordions.js"></script>


    <script language="text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0;
        function clearField(t) {
            if (!cleared[t.id]) {                      // function makes it static and global
                cleared[t.id] = 1;
                t.value = '';
                t.style.color = '#fff';
            }
        }
    </script>
    <?php
    if (isset($_POST['add']))
       {    echo "<script> alert('thangcong')</script>";
            $user= $_POST['txtUser'];
            $sdt= $_POST['txtSDT'];
            $email= $_POST['txtEmail'];
            $sex= $_POST['txtSex'];
            $date= $_POST['txtDate'];
            $pass= $_POST['txtPass'];
  
             //$PASS = md5($pass);
            if ($connect->query("INSERT INTO dangki (User ,sodienthoai ,mail ,gioitinh ,ngaysinh ,matkhau)VALUES (' $user', '$sdt', '$email', '$sex', '$date', '$pass')"))
              {
              echo  "<script> alert('thangcong')</script>";
               }
          else
            {
                echo  "<script> alert('that bai')</script>";
            }
       }
    ?>
</body>
</html>