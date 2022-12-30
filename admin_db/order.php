<?php 
require("inc/admin_outh.php");
require("inc/header.php");
?>
</head>

<body class="sb-nav-fixed">
<?php include("inc/nav.php"); ?>

    <div id="layoutSidenav">
        <?php include("inc/sidenav.php") ?>

        <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Order</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Order</li>
                        </ol>
                    </div>

                    <!-- Category content s-->
                    <div class="form-container">
        <form action="" method="post">
            <h3>CETAGORY</h3>

            <input type="text" name="name" required placeholder="category name">
           
            <textarea name="" id="" cols="30" rows="3" placeholder="driscription"></textarea>

            <input type="file" name="img-box" required>

            <input type="submit" name="submit" value="Submit" class="form-btn">

            <!-- <p>already have an account? <a href="login_form.php">login now</a></p> -->

        </form>
    </div>
                   <!-- Category content e-->
                </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2022</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>