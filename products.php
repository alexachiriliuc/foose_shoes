<?php
include("head.php");
?>
<?php
include("header.php"); ?>

<?php
include("navigation.php"); ?>

<div class="container">
    <div class="product_details">

        <img class="pinkshoose_pro" src="assets/images/product_page_intro.png" alt="img">

        <div class="description">
            <div class="first">
                <span class="price-box"></span>
                <div class="main_text">
                    <h2 class="text_maintitle">Pink Shoes </h2>
                    <h2 class="tex_title">2013 Collection</h2>
                </div>
            </div>
            <h2 class="desk__title">Nunc non fermentum nunc. Sed ut ante eget leo tempor consequa sit amet eu
                orci.Donec dignissim dolor eget..</h2>
        </div>
    </div>

</div>

<div class="nav">
    <div class="container">
        <div class="filter">
            <span class="shopby">Shop by</span>
            <div class="filter_inner">
                <button onclick="dropFunction()" class="dropbtn">
                    <span class="btntitle" >Brands</span>
                    <span class="circle_icon">
                        <i class="fa-sharp fa-solid fa-angle-down circle"></i>
                    </span>
                </button>
                <div id="myDropdown" class="dropdown-content">
                    <a href=""></a>
                    <a href=""></a>
                    <a href=""></a>
                    <a href=""></a>
                </div>
            </div>
            <div class="filter_inner">
                <button onclick="dropFunction()" class="dropbtn">
                    <span class="btntitle">Categories</span>
                    <span class="circle_icon">
                       <i class="fa-sharp fa-solid fa-angle-down circle"></i>
                    </span>

                </button>
                <div id="myDropdown" class="dropdown-content">
                    <a href=""></a>
                    <a href=""></a>
                    <a href=""></a>
                    <a href=""></a>
                </div>
            </div>

            <div class="filter_inner">
                <button onclick="dropFunction()" class="dropbtn">
                    <span class="btntitle">Price</span>
                    <span class="circle_icon">
                        <i class="fa-sharp fa-solid fa-angle-down circle"></i>
                    </span>
                </button>
                <div id="myDropdown" class="dropdown-content">
                    <a href=""></a>
                    <a href=""></a>
                    <a href=""></a>
                    <a href=""></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <?php
    include("addon.php")
    ?>
</div>


<?php
include("footer.php")
?>

