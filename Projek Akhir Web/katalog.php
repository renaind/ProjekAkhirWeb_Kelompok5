<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Katalog</title>
</head>
<body class="body">
    <!-- NAVIGATION BAR -->
    <div class="container">
        <nav class="wrapper">
            <div class="brand">
                <div class="logoi">Samarinda</div>
                <div class="logod"> Dessert</div>
            </div>
            <input type="checkbox" onclick="ubahMode()">
            <div class="header-search-bar"><input type="text" placeholder="Cari Dessert..." class="resizedTextbox" /></div>
            <ul class="navigation">
                <li><a href="tentang.html">Tentang</a></li>
                <li><a href="transaksi.html">Pemesanan</a></li>
                <li><a href="#aboutme">Log Out</a></li>
            </ul>
            
        </nav>
    </div>
    <!-- NAVIGATION BAR-END -->

    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="main"> <br>
            <!-- <div><img src="img_satuu.png" alt="img-satu" height="100%" width="100%"></div> -->
            <div class="section-title"> <p><b>Dessert Food</b></p> </div> <br>
            <div class="food-content">
              <div class="img-content"> <img src="food/food-01.png" alt="food-satu" width="197px" height="197px"></div>
              <div class="img-content"> <img src="food/food-02.png" alt="food-dua" width="197px" height="197px"></div>
              <div class="img-content"> <img src="food/food-03.png" alt="food-tiga" width="197px" height="197px"></div>
              <div class="img-content"> <img src="food/food-04.png" alt="food-empat" width="197px" height="197px"></div>
              <div class="img-content"> <img src="food/food-05.png" alt="food-lima" width="197px" height="197px"></div>
              <div class="img-content"> <img src="food/food-06.png" alt="food-enam" width="197px" height="197px"></div>
            </div> 

            <br>

            <div class="section-title"> <p><b>Dessert Drink</b></p></div> <br>
            <div class="drink-content"> 
              <div class="img-content"> <img src="drink/drink-01.png" alt="drink-satu" width="197px" height="197px"></div>
              <div class="img-content"> <img src="drink/drink-02.png" alt="drink-dua" width="197px" height="197px"></div>
              <div class="img-content"> <img src="drink/drink-03.png" alt="drink-tiga" width="197px" height="197px"></div>
              <div class="img-content"> <img src="drink/drink-04.png" alt="drink-empat" width="197px" height="197px"></div>
              <div class="img-content"> <img src="drink/drink-05.png" alt="drink-lima" width="197px" height="197px"></div>
              <div class="img-content"> <img src="drink/drink-06.png" alt="drink-enam" width="197px" height="197px"></div>
            </div> <br>
    </div>
    <!-- MAIN CONTENT-END -->

    <!-- FOOTER -->
    <div class="footer">
        <div class="copyright">
            <div> <p><b>Copyright 2022 @Kelompok_5_C1</b></p></div> <br> 
        </div>
    </div>
    <!-- FOOTER-END -->

    <script>
        function ubahMode(){
            const ubah = document.body;
            ubah.classList.toggle("dark");
        }
    </script>
</body>
</html>
