<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Seguridad Guardia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">

    <!-- third party css -->
    <link href="{{asset('libs/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('libs/datatables/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('libs/datatables/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('libs/datatables/select.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
    <!-- third party css end -->

    <!-- Plugins css -->
    <link href="{{asset('libs/bootstrap-tagsinput/bootstrap-tagsinput.css')}}" rel="stylesheet" />
    <link href="{{asset('libs/switchery/switchery.min.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('libs/multiselect/multi-select.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />
    <link href="{{asset('libs/switchery/switchery.min.css')}}" rel="stylesheet" />
    <link href="{{asset('libs/bootstrap-timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('libs/bootstrap-datepicker/bootstrap-datepicker.css')}}" rel="stylesheet">
    <link href="{{asset('libs/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!--Morris Chart-->
    <link rel="stylesheet" href="{{asset('libs/morris-js/morris.css')}}" />

    <!-- App css -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/app.min.css')}}" rel="stylesheet" type="text/css" />

</head>


<body class="authentication-bg">

<div class="home-btn d-none d-sm-block">
    <a href="index.html"><i class="fas fa-home h2 text-dark"></i></a>
</div>

<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="text-center">
                    <a href="index.html">
                        <span><img src="{{asset('images/logo-light.png')}}" alt="" height="22"></span>
                    </a>
                    <p class="text-muted mt-2 mb-4">Responsive Admin Dashboard</p>
                </div>
                <div class="card">

                    <div class="card-body p-4">

                        <div class="text-center mb-4">
                            <h4 class="text-uppercase mt-0">REGISTRARSE</h4>
                        </div>

                        <form action="#">

                            <div class="form-group mb-3">
                                <label for="emailaddress">Direccion de correo electronico</label>
                                <input class="form-control" type="email" id="emailaddress" required="" placeholder="Introduce tu correo electronico">
                            </div>

                            <div class="form-group mb-3">
                                <label for="password">Contraseña</label>
                                <input class="form-control" type="password" required="" id="password" placeholder="Ingresa tu contraseña">
                            </div>

                            <div class="form-group mb-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                    <label class="custom-control-label" for="checkbox-signin">Recuerdame</label>
                                </div>
                            </div>

                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary btn-block" type="submit"> Iniciar Sesion </button>
                            </div>

                        </form>

                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p> <a href="pages-recoverpw.html" class="text-muted ml-1"><i class="fa fa-lock mr-1"></i>¿Olvidaste tu contraseña</a></p>
                        <p class="text-muted">¿No tienes cuenta? <a href="pages-register.html" class="text-dark ml-1"><b>Registrarte</b></a></p>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->


<!-- ============================================================== -->
<!-- EMPIEZAN LOS SCRIPTS -->
<!-- ============================================================== -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- Vendor js -->
<script src="{{asset('js/vendor.min.js')}}"></script>

<!-- Plugins Js -->
<script src="{{asset('libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js')}}"></script>
<script src="{{asset('libs/switchery/switchery.min.js')}}"></script>
<script src="{{asset('libs/multiselect/jquery.multi-select.js')}}"></script>
<script src="{{asset('libs/jquery-quicksearch/jquery.quicksearch.min.js')}}"></script>

<script src="{{asset('libs/select2/select2.min.js')}}"></script>
<script src="{{asset('libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>
<script src="{{asset('libs/jquery-mask-plugin/jquery.mask.min.js')}}"></script>
<script src="{{asset('libs/moment/moment.js')}}"></script>
<script src="{{asset('libs/bootstrap-timepicker/bootstrap-timepicker.min.js')}}"></script>
<script src="{{asset('libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js')}}"></script>
<script src="{{asset('libs/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('libs/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>

<!-- third party js -->
<script src="{{asset('libs/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('libs/datatables/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('libs/datatables/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('libs/datatables/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('libs/datatables/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('libs/datatables/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('libs/datatables/buttons.html5.min.js')}}"></script>
<script src="{{asset('libs/datatables/buttons.flash.min.js')}}"></script>
<script src="{{asset('libs/datatables/buttons.print.min.js')}}"></script>
<script src="{{asset('libs/datatables/dataTables.keyTable.min.js')}}"></script>
<script src="{{asset('libs/datatables/dataTables.select.min.js')}}"></script>
<script src="{{asset('libs/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('libs/pdfmake/vfs_fonts.js')}}"></script>
<!-- third party js ends -->

<!-- Init js-->
<script src="{{asset('js/pages/form-advanced.init.js')}}"></script>

<!-- Datatables init -->
<script src="{{asset('js/pages/datatables.init.js')}}"></script>

<!-- knob plugin -->
<script src="{{asset('libs/jquery-knob/jquery.knob.min.js')}}"></script>

<!--Morris Chart-->
<script src="{{asset('libs/morris-js/morris.min.js')}}"></script>
<script src="{{asset('libs/raphael/raphael.min.js')}}"></script>

<!-- Dashboard init js-->
<script src="{{asset('js/pages/dashboard.init.js')}}"></script>

<!-- App js -->
<script src="{{asset('js/app.min.js')}}"></script>

</body>
</html>
