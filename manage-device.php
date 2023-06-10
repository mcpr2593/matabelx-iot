<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>
<?php
    include 'layouts/config.php';
    $sql = mysqli_query($link, "SELECT * FROM controler");
    while($row = mysqli_fetch_assoc($sql)){
    ?>
	<script type="text/javascript" src="assets/jquery/jquery.min.js" ></script>
    

<head>
    
    <title><?php echo $language["Manage_Device"]; ?> | MatabelX - Memantau Barang Elektronik Jarak Jauh</title>
    <?php include 'layouts/head.php'; ?>

    <?php include 'layouts/head-style.php'; ?>

</head>

<?php include 'layouts/body.php'; ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'layouts/menu.php'; ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18"><?php echo $language["Manage_Device"]; ?></h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="index.php"><?php echo $n_apps?></a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);"><?php echo $language["Device"]; ?></a></li>
                                    <li class="breadcrumb-item active"><?php echo $language["Manage_Device"]; ?></li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"><?php echo $language["Device_List"]; ?> <span class="text-muted fw-normal ms-2">(4)</span></h5>
                        </div>
                    </div>

                <!-- end row -->

                <div class="row">
                    <div class="col-lg-2 col-sm-6">
                        <div class="card text-center">
                            <div class="card-body">
                                <?php  
                                        if($row['lampu1'] == '0') {
                                            $state = "";
                                        }else{
                                            $state = "checked";
                                        }
                                    ?>
                                <input type="checkbox" id="device1" switch="none" <?php echo $state ?> />
                                <label for="device1" data-on-label="On" data-off-label="Off"></label>
                                <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Chanel 1
                                </a></h5>
								<h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Lampu Dalam
                                </a></h5>
                                <p class="text-muted mb-2">Ruang Tilang Polres Tegal</p>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                    <div class="col-lg-2 col-sm-6">
                        <div class="card text-center">
                            <div class="card-body">
                                <?php  
                                        if($row['lampu2'] == '0') {
                                            $state = "";
                                        }else{
                                            $state = "checked";
                                        }
                                    ?>
                                <input type="checkbox" id="device2" switch="none" <?php echo $state ?> />
                                <label for="device2" data-on-label="On" data-off-label="Off"></label>
                                <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Chanel 2
                                </a></h5>
								<h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Lampu Luar
                                </a></h5>
                                <p class="text-muted mb-2">Ruang Tilang Polres Tegal</p>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-lg-2 col-sm-6">
                        <div class="card text-center">
                            <div class="card-body">
                                <?php  
                                        if($row['kipas'] == '0') {
                                            $state = "";
                                        }else{
                                            $state = "checked";
                                        }
                                    ?>
                                <input type="checkbox" id="device3" switch="none" <?php echo $state ?> />
                                <label for="device3" data-on-label="On" data-off-label="Off"></label>
                                <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Chanel 3
                                </a></h5>
								<h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Kipas
                                </a></h5>
                                <p class="text-muted mb-2">Ruang Tilang Polres Tegal</p>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-lg-2 col-sm-6">
                        <div class="card text-center">
                            <div class="card-body">
                                <?php  
                                        if($row['televisi'] == '0') {
                                            $state = "";
                                        }else{
                                            $state = "checked";
                                        }
                                    ?>
                                <input type="checkbox" id="device4" switch="none" <?php echo $state ?> />
                                <label for="device4" data-on-label="On" data-off-label="Off"></label>
                                <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Chanel 4
                                </a></h5>
								<h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Televisi
                                </a></h5>
                                <p class="text-muted mb-2">Ruang Tilang Polres Tegal</p>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    
                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
<?php
    }
?>

        <?php include 'layouts/footer.php'; ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->


<!-- Right Sidebar -->
<?php include 'layouts/right-sidebar.php'; ?>
<!-- /Right-bar -->

<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>
<script src="assets/js/app.js"></script>
<script src="assets/js/switch-control.js"></script>

</body>

</html>