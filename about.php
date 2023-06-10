<!-- Memanggil file sesion.php untuk mengidentifikasikan user -->
<?php include 'layouts/session.php'; ?>

<head>
    
    <title>Tentang  |  MatabelX - Memantau Barang Elektronik Jarak Jauh</title>
    <!-- Memangil file head.php yang ber isi main head -->
    <?php include 'layouts/head.php'; ?>
    <?php include 'layouts/head-style.php'; ?>

</head>

<?php include 'layouts/body.php'; ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'layouts/menu.php'; ?>

    <!-- ============================================================== -->
    <!-- Start - Isi konten dalam halaman Tentang -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18"><?php echo $language["About"]; ?></h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);"><?php echo $n_apps?></a></li>
                                    <li class="breadcrumb-item active"><?php echo $language["About"]; ?></li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-9 col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm order-2 order-sm-1">
                                        <div class="d-flex align-items-start mt-3 mt-sm-0">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-xl me-3">
                                                    <img src="https://matabelx.my.id/assets/images/logo-sm.svg" alt="" class="img-fluid d-block">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div>
                                                    <h5 class="font-size-16 mb-1">MatabelX</h5>
                                                    <p class="text-muted font-size-13">Memantau Barang Elektronik Jarak Jauh</p>

                                                    <div class="d-flex flex-wrap align-items-start gap-2 gap-lg-3 text-muted font-size-13">
                                                        <div><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>08-16-2023</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
         
                                </div>

                                <ul class="nav nav-tabs-custom card-header-tabs border-top mt-4" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link px-3 active" data-bs-toggle="tab" href="#about" role="tab">Tentang Website</a>
                                    </li>

                                </ul>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                        <div class="tab-content">
                            <div class="tab-pane" id="overview" role="tabpanel">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Tentang Website</h5>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <div class="pb-3">
                                                <div class="row">
                                                    <div class="col-xl-2">
                                                        <div>
                                                            <h5 class="font-size-15">Bio :</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl">
                                                        <div class="text-muted">
                                                            <p class="mb-2">Hi I'm Phyllis Gatlin, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages</p>
                                                            <p class="mb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at it has a more-or-less normal distribution of letters</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="py-3">
                                                <div class="row">
                                                    <div class="col-xl-2">
                                                        <div>
                                                            <h5 class="font-size-15">Experience :</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl">
                                                        <div class="text-muted">
                                                            <p>If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc</p>

                                                            <ul class="list-unstyled mb-0">
                                                                <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Donec vitae sapien ut libero venenatis faucibus</li>
                                                                <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Quisque rutrum aenean imperdiet</li>
                                                                <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Integer ante a consectetuer eget</li>
                                                                <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Phasellus nec sem in justo pellentesque</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->

                                <div class="card">
                                    <div class="card-header">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <h5 class="card-title mb-0">Post</h5>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <a href="#post">View All</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <div class="row">
                                                <div class="col-xl-4">
                                                    <div class="card p-1 mb-xl-0">
                                                        <div class="p-3">
                                                            <div class="d-flex align-items-start">
                                                                <div class="flex-grow-1 overflow-hidden">
                                                                    <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Beautiful Day with Friends</a></h5>
                                                                    <p class="font-size-13 text-muted mb-0">10 Apr, 2020</p>
                                                                </div>
                                                                <div class="flex-shrink-0 ms-2">
                                                                    <div class="dropdown">
                                                                        <a class="btn btn-link text-muted font-size-16 p-1 py-0 dropdown-toggle shadow-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="position-relative">
                                                            <img src="assets/images/small/img-3.jpg" alt="" class="img-thumbnail">
                                                        </div>

                                                        <div class="p-3">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item me-3">
                                                                    <a href="javascript: void(0);" class="text-muted">
                                                                        <i class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i> Project
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item me-3">
                                                                    <a href="javascript: void(0);" class="text-muted">
                                                                        <i class="bx bx-comment-dots align-middle text-muted me-1"></i> 12 Comments
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <p class="text-muted">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</p>

                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->

                                                <div class="col-xl-4">
                                                    <div class="card p-1 mb-xl-0">
                                                        <div class="p-3">
                                                            <div class="d-flex align-items-start">
                                                                <div class="flex-grow-1 overflow-hidden">
                                                                    <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Drawing a sketch</a></h5>
                                                                    <p class="font-size-13 text-muted mb-0">24 Mar, 2020</p>
                                                                </div>
                                                                <div class="flex-shrink-0 ms-2">
                                                                    <div class="dropdown">
                                                                        <a class="btn btn-link text-muted font-size-16 p-1 py-0 dropdown-toggle shadow-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="position-relative">
                                                            <img src="assets/images/small/img-1.jpg" alt="" class="img-thumbnail">
                                                        </div>

                                                        <div class="p-3">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item me-3">
                                                                    <a href="javascript: void(0);" class="text-muted">
                                                                        <i class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i> Development
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item me-3">
                                                                    <a href="javascript: void(0);" class="text-muted">
                                                                        <i class="bx bx-comment-dots align-middle text-muted me-1"></i> 08 Comments
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <p class="text-muted">At vero eos et accusamus et iusto odio dignissimos ducimus quos</p>

                                                            
                                                        </div>
                                                    </div>
                                                    <!-- end card -->
                                                </div>
                                                <!-- end col -->

                                                <div class="col-xl-4">
                                                    <div class="card p-1 mb-sm-0">
                                                        <div class="p-3">
                                                            <div class="d-flex align-items-start">
                                                                <div class="flex-grow-1 overflow-hidden">
                                                                    <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Project discussion with team</a></h5>
                                                                    <p class="font-size-13 text-muted mb-0">20 Mar, 2020</p>
                                                                </div>
                                                                <div class="flex-shrink-0 ms-2">
                                                                    <div class="dropdown">
                                                                        <a class="btn btn-link text-muted font-size-16 p-1 py-0 dropdown-toggle shadow-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="position-relative">
                                                            <img src="assets/images/small/img-5.jpg" alt="" class="img-thumbnail">
                                                        </div>

                                                        <div class="p-3">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item me-3">
                                                                    <a href="javascript: void(0);" class="text-muted">
                                                                        <i class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i> Project
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item me-3">
                                                                    <a href="javascript: void(0);" class="text-muted">
                                                                        <i class="bx bx-comment-dots align-middle text-muted me-1"></i> 08 Comments
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <p class="text-muted">Itaque earum rerum hic tenetur a sapiente delectus ut aut</p>

                                                            
                                                        </div>
                                                    </div>
                                                    <!-- end card -->
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end tab pane -->

                            <div class="tab-pane active" id="about" role="tabpanel">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Tentang Website</h5>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <div class="pb-3">
                                                <h5 class="font-size-15"></h5>
                                                <div class="text-muted">
                                                    <p class="mb-2">Website ini dibangun untuk melakukan kontrol dan memantau perangkat-perangkat elektronik dari jarak jauh</p>
                                                    <p class="mb-2">Fitur dari website ini antralain sebagai berikut :</p>

                                                    <ul class="list-unstyled mb-0">
                                                        <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Menampilakan situasi ruangan kosong / berisi.</li>
                                                        <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Mengkontrol / memonitoring apakah perangkat masih menyala atau sudah tidak menyala.</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="pt-3">
                                                <h5 class="font-size-15">Sistem Kerja Website :</h5>
                                                <div class="text-muted">
                                                    <p>Website terkoneksi dengan Perangkat (ESP 32) melalui rest api.</p>

                                                    <ul class="list-unstyled mb-0">
                                                        <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Website menerima value/nilai yang diberikan dari sensor melalui ESP 32 untuk ditampilkan di halaman website.</li>
                                                        <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Website mengirimkan perintah kepada Relay melalui ESP 32 untuk mengkontol perangkat elektronik.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end tab pane -->

							   <div class="tab-pane" id="about-device" role="tabpanel">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Tentang Perangkat</h5>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <div class="pb-3">
                                                <h5 class="font-size-15"></h5>
                                                <div class="text-muted">
                                                    <p class="mb-2">Website ini dibangun untuk melakukan kontrol dan memantau perangkat-perangkat elektronik dari jarak jauh</p>
                                                    <p class="mb-2">Fitur dari website ini antralain sebagai berikut :</p>

                                                    <ul class="list-unstyled mb-0">
                                                        <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Menampilakan situasi ruangan kosong / berisi.</li>
                                                        <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Mengkontrol / memonitoring apakah perangkat masih menyala atau sudah tidak menyala.</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="pt-3">
                                                <h5 class="font-size-15">Sistem Kerja Website :</h5>
                                                <div class="text-muted">
                                                    <p>Website terkoneksi dengan Perangkat (ESP 32) melalui rest api.</p>

                                                    <ul class="list-unstyled mb-0">
                                                        <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Website menerima value/nilai yang diberikan dari sensor melalui ESP 32 untuk ditampilkan di halaman website.</li>
                                                        <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Website mengirimkan perintah kepada Relay melalui ESP 32 untuk mengkontol perangkat elektronik.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end tab pane -->

                            <div class="tab-pane" id="post" role="tabpanel">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Post</h5>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <div class="row justify-content-center">
                                                <div class="col-xl-8">


                                                    <div class="mt-5">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Project discussion with team</a></h5>
                                                                <p class="font-size-13 text-muted mb-0">24 Mar, 2020</p>
                                                            </div>
                                                            <div class="flex-shrink-0 ms-2">
                                                                <div class="dropdown">
                                                                    <a class="btn btn-link text-muted font-size-16 p-1 py-0 dropdown-toggle shadow-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                                                    </a>
                                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="pt-3">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item me-3">
                                                                    <a href="javascript: void(0);" class="text-muted">
                                                                        <i class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i> Development
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item me-3">
                                                                    <a href="javascript: void(0);" class="text-muted">
                                                                        <i class="bx bx-comment-dots align-middle text-muted me-1"></i> 08 Comments
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <p class="text-muted">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>

                                                            
                                                        </div>
                                                    </div>
                                                    <!-- end post -->

                                                    <hr class="my-5">

                                                    <div>
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Beautiful Day with Friends</a></h5>
                                                                <p class="font-size-13 text-muted mb-0">10 Apr, 2020</p>
                                                            </div>
                                                            <div class="flex-shrink-0 ms-2">
                                                                <div class="dropdown">
                                                                    <a class="btn btn-link text-muted font-size-16 p-1 py-0 dropdown-toggle shadow-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                                                    </a>
                                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="position-relative mt-3">
                                                            <img src="assets/images/small/img-3.jpg" alt="" class="img-thumbnail">
                                                        </div>

                                                        <div class="pt-3">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item me-3">
                                                                    <a href="javascript: void(0);" class="text-muted">
                                                                        <i class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i> Project
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item me-3">
                                                                    <a href="javascript: void(0);" class="text-muted">
                                                                        <i class="bx bx-comment-dots align-middle text-muted me-1"></i> 12 Comments
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <p class="text-muted">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, aliquam quaerat voluptatem. Ut enim ad minima veniam, quis</p>

                                                          
                                                        </div>
                                                    </div>
                                                    <!-- end post -->

                                                    <hr class="my-5">

                                                    <div>
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Drawing a sketch</a></h5>
                                                                <p class="font-size-13 text-muted mb-0">20 Mar, 2020</p>
                                                            </div>
                                                            <div class="flex-shrink-0 ms-2">
                                                                <div class="dropdown">
                                                                    <a class="btn btn-link text-muted font-size-16 p-1 py-0 dropdown-toggle shadow-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                                                    </a>
                                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="pt-3">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item me-3">
                                                                    <a href="javascript: void(0);" class="text-muted">
                                                                        <i class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i> Project
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item me-3">
                                                                    <a href="javascript: void(0);" class="text-muted">
                                                                        <i class="bx bx-comment-dots align-middle text-muted me-1"></i> 12 Comments
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <p class="text-muted">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, aliquam quaerat voluptatem. Ut enim ad minima veniam, quis</p>

                                                            
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                </div>
                                                <!-- end col -->

                                            </div>
                                            <!-- end row -->

                                            <div class="row g-0 mt-4">
                                                <div class="col-sm-6">
                                                    <div>
                                                        <p class="mb-sm-0">Showing 1 to 10 of 57 entries</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="float-sm-end">
                                                        <ul class="pagination mb-sm-0">
                                                            <li class="page-item disabled">
                                                                <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a href="#" class="page-link">1</a>
                                                            </li>
                                                            <li class="page-item active">
                                                                <a href="#" class="page-link">2</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a href="#" class="page-link">3</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a href="#" class="page-link">4</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a href="#" class="page-link">5</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end row -->
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end tab pane -->
                        </div>
                        <!-- end tab content -->
                    </div>
                    <!-- end col -->

                    <div class="col-xl-3 col-lg-4">
                    <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-3">Tim Kami</h5>
           
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm flex-shrink-0 me-3">
                                                <div class="avatar-title bg-soft-light text-light rounded-circle font-size-22">
                                                    <i class="bx bxs-user-circle"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div>
                                                    <h5 class="font-size-14 mb-1">Afifah Nurhayati</h5>
                                                    <p class="font-size-13 text-muted mb-0">NIM 20042015</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
									<a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm flex-shrink-0 me-3">
                                                <div class="avatar-title bg-soft-light text-light rounded-circle font-size-22">
                                                    <i class="bx bxs-user-circle"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div>
                                                    <h5 class="font-size-14 mb-1">Alfan Muhayat</h5>
                                                    <p class="font-size-13 text-muted mb-0">NIM 20041034</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            </div>
                            <!-- end card body -->

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-3">Bahasa Pemrograman</h5>

                                <div class="d-flex flex-wrap gap-2 font-size-16">
                                  	<a href="https://www.php.net/" class="badge badge-soft-primary">PHP</a>
                                    <a href="https://id.wikipedia.org/wiki/Cascading_Style_Sheets" class="badge badge-soft-primary">CSS</a>
                                    <a href="https://www.javascript.com/" class="badge badge-soft-primary">Javascript</a>
                                    <a href="https://id.wikipedia.org/wiki/C%2B%2B" class="badge badge-soft-primary">C++</a>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->


                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <!-- ============================================================== -->
        <!-- End - Isi konten dalam halaman beranda/Home -->
        <!-- ============================================================== -->


            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


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

</body>

</html>