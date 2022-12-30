<?php
require("inc/connection.php");
$selectQ = "select * from products where hot = '1' order by created_at desc limit 20";
$hotitem = $conn->query($selectQ);
?>
<?php include("inc/header.php");?>

</head>
<body>
  <div class="container">
        <!-- navbar start -->
      <?php include("inc/nevbar.php");?>
        <!-- navbar end -->
        <!-- carosel start  -->
      <?php include("inc/carosel.php"); ?>
        <!-- carosel end  -->
        <!-- owl carousel start -->
      <?php include("inc/owlcarosel.php"); ?>
        <!-- owl carousel end -->
        <!-- category start  -->
      <?php include("inc/category.php") ?> 
        <!-- category end  -->  
      

        <!-- footer star  --> 
      <?php include("inc/footer.php") ?>
        <!-- footer end  -->
    <script>
      $(document).ready(function () {
        const cart = new Cart();
        $("#cartLenght").html(cart.totalItems());
        // cart.addItem({ name: 'Item 1', price: 10 });
        $(".addToCart").click(function () {
          $t = $(this);
          let id = $t.data('id');
          let name = $t.parent().find(".pname").text();
          let price = $t.parent().find(".pprice").text();
          let image = $t.parent().parent().find(".card-img-top").attr("src");
          // alert(name +"("+price+")" + image);
          cart.addItem({id:id,name:name,price:price,image:image});
          alert("Item "+ name +" Added!");
          $("#cartLenght").html(cart.totalItems());
        });
      });
    </script>
</body>
</html>