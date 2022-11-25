<!DOCTYPE html>
<html lang="en">
<?php
include("head.php");
?>

<body>
<?php
include("header.php"); ?>
<!--Intro-->
<div class="intro">
    <?php
    include("navigation.php"); ?>
    <div class="container flex_desk">
        <div class="pinkshoose">
            <img class="pinkshoose" src="assets/images/introimg.png" alt="img">
        </div>
        <div class="item_details">
            <span class="price-box"></span>

            <h2 class="desk_maintitle">Pink Shoes </h2>
            <h2 class="second_title">2013 Collection</h2>
            <h2 class="desk__title">Nunc non fermentum nunc. Sed ut ante eget leo tempor consequa sit amet eu
                orci.Donec dignissim dolor eget..</h2>

            <div class="action_menu">

                <div class="box_icon">
                    <i class="fa-regular fa-eye icon"></i>
                </div>

                <div class="box_icon">
                    <i class="fa fa-star-o icon  " aria-hidden="true"></i>
                </div>

                <div class="box_icon">
                    <i class="fa-solid fa-share-from-square icon "></i>
                </div>

                <div class="box_icon">
                    <i class="fa-sharp fa-solid fa-cart-shopping icon "></i>
                </div>

            </div>

        </div>
    </div>
</div>
<!--navigation-->
<div class="nav">
    <div class="container flex_cont">
        <div class="pos">
        </div>
        <div class="subnav">
            <div class="nav_item ">
                <a href="#" class="link_nav">Pink Shoes</a>
                <span class="link_navtext">Now at $145.99</span>
            </div>
            <div class="nav_item">
                <a href="#" class="link_nav">Anna Field</a>
                <span class="link_navtext">Lomited Edition</span>
            </div>
            <div class="nav_item">
                <a href="#" class="link_nav">Prada</a>
                <span class="link_navtext">Summer is comming</span>
            </div>
            <div class="nav_item">
                <a href="#" class="link_nav">Casadet</a>
                <span class="link_navtext">All colors available</span>
            </div>
            <div class="nav_item">
                <a href="#" class="link_nav">Melow Yellow</a>
                <span class="link_navtext">Free delivery</span>
                <div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--specials -->
<div class="speccont">
    <div class="container ">
        <div class="speccont_inner">
            <div class="spec_item">
                <img src="assets/images/onsale.png" alt class="spec_png">
                <span class="spec_text">ON SALE</span>
            </div>
            <div class="spec_item">
                <img src="assets/images/specialoffer.png" alt class="spec_png">
                <span class="spec_text">SPECIAL OFFERS</span>
            </div>
            <div class="spec_item">
                <img src="assets/images/musthave.png" alt class="spec_png">
                <span class="spec_text">MUST HAVE</span>
            </div>
        </div>

    </div>
</div>
<!--gallery-->
<div class="products">
    <div class="container product">
        <div class="newarrivals">
            <div class="new__container">
                <h2 class="product__title">New arrivals on FooseShoes</h2>
                <button class="show-all" style="font-size: 14pt ">Show All</button>
            </div>
            <div class="prod_img">
                <div class="wrapper_shoe">

                    <img class="shoe" src="assets/images/Item 3.png" alt>
                    <div class="devider_shoe"></div>
                    <div class="shoe_price">
                        <div class="price_num"> $145.99</div>
                    </div>
                </div>
                <div class="wrapper_shoe">

                    <img class="shoe" src="assets/images/Item 3.png" alt>
                    <div class="devider_shoe"></div>
                    <div class="shoe_price">
                        <div class="price_num"> $145.99</div>
                    </div>
                </div>
                <div class="wrapper_shoe">

                    <img class="shoe" src="assets/images/Item 3.png" alt>
                    <div class="devider_shoe"></div>
                    <div class="shoe_price">
                        <div class="price_num"> $145.99</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bestselers">
            <div class="new__container">
                <h2 class="product__title">Best sellers of the month</h2>
                <button class="show-all ">Show All</button>
            </div>
            <div class="prod_img">
                <div class="wrapper_shoe">

                    <img class="shoe" src="assets/images/Item 3.png" alt>
                    <div class="devider_shoe"></div>
                    <div class="shoe_price">
                        <div class="price_num"> $145.99</div>
                    </div>
                </div>
                <div class="wrapper_shoe">

                    <img class="shoe" src="assets/images/Item 3.png" alt>
                    <div class="devider_shoe"></div>
                    <div class="shoe_price">
                        <div class="price_num"> $145.99</div>
                    </div>
                </div>
                <div class="wrapper_shoe">

                    <img class="shoe" src="assets/images/Item 3.png" alt>
                    <div class="devider_shoe"></div>
                    <div class="shoe_price">
                        <div class="price_num"> $145.99</div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include("addon.php")
        ?>
    </div>
</div>

<?php
include("footer.php")
?>


</body>
</html>