@extends('layouts.layout')

@section('registrarvisitas')
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container">
            <div class="row">
                <div class=" col-sm-12 col-md-12 col-lg-9 col-xl-12">
                    <div class="card-box">
                        <h3 style="color:rgb(255, 196, 0)">REGISTRO DE VISITAS DIRIN-PNP</h3>

                        <div class="row">
                            <div class="col-12" >
                                <div class="p-2">
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group row">
                                            <label class="col-sm-2  col-form-label" for="simpleinput">TIPO</label>
                                            <div class="col-sm-10">
                                                <select class="form-control"  name="tipo" style="">
                                                    <option value="1">PERSONA NATURAL</option>
                                                    <option value="2">EXTRANJEROS</option>
                                                    <option value="3">SIN SERVICIO RENIEC</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2  col-form-label">PERSONA</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" disabled="" value="SE BUSCARA EL NOMBRE...">
                                                <!-- BOTON DEL MODAL -->
                                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
                                                    BUSCAR
                                                </button>

                                                <!-- MODAL -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"  id="exampleModalLabel" style="color:rgb(255, 196, 0)">INGRESE EL NUMERO DE DNI:</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            {{-- CUERPO DEL MODAL --}}
                                                            <div class="modal-body">
                                                                <div class="card border-primary mb-3" style="max-width: 30rem;">
                                                                    <input class="card-header">N° DE DNI</input>
                                                                    <div align="center"><img src="{{asset('images/gallery/dni.png')}}" alt="" height="200" width="300"></div>
                                                                    <div class="card-body text-primary">
                                                                        <h6 class="card-title" style="color:red">RELLENAR EL CAMPO OBLIGATORIO</h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>
                                                                <button type="button" class="btn btn-primary">BUSCAR</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-sm-2  col-form-label">¿QUIEN AUTORIZA?</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" disabled="" value="NOMBRE DE QUIEN AUTORIZA">
                                                <!-- BOTON DEL MODAL -->
                                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal2">
                                                    BUSCAR
                                                </button>

                                                <!-- MODAL -->
                                                <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel2" style="color:rgb(255, 196, 0)">INGRESE EL NUMERO DE CIP:</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            {{-- CUERPO DEL MODAL --}}
                                                            <div class="modal-body">
                                                                <div class="card border-primary mb-3" style="max-width: 30rem;">
                                                                    <input class="card-header">N° DE CIP</input>
                                                                    <div class="card-body text-primary">
                                                                        <h6 class="card-title" style="color:red">RELLENAR EL CAMPO OBLIGATORIO</h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>
                                                                <button type="button" class="btn btn-primary">BUSCAR</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2  col-form-label"
                                                for="example-password">VINCULO</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="vinculo" style="">
                                                    <option value="1">FAMILIAR</option>
                                                    <option value="2">EMPRESA</option>
                                                    <option value="3">POLICIA</option>
                                                    <option value="4">VISITA</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2  col-form-label"
                                                for="example-placeholder">PISO</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="vinculo" style="">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2  col-form-label" for="example-fileinput">SELECCIONAR FOTO</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" id="example-fileinput">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2  col-form-label" for="example-date">FECHA</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" id="example-date" type="date" name="date">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2  col-form-label" for="example-time">HORA</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="time" name="time" id="example-time">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2  col-form-label" for="example-number">NUMERO DE PASE</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="number" name="number"
                                                    id="example-number">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <!-- end row -->

                    </div> <!-- end card-box -->
                </div><!-- end col -->
            </div>
            <!-- end row -->


            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-9 col-xl-12">
                    <div class="card-box">
                        <div class="row">

                            <div class=" col-12">
                                <h4 class="header-title">PERTENENCIAS </h4>
                                <div class="mt-3">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1" name="customRadio"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio1">LAPTOP</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio2" name="customRadio"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio2">CELULAR</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio3">TABLET</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio4">DISPOSITIVO DE ALMACENAJE</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio5">EQUIPOS DE FILMACION</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio6" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio6">ARMAMENTO</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio7" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio7">DRONE</label>
                                    </div>
                                    <br>
                                    <div class="form-group row">
                                        <label class="col-sm-2  col-form-label" for="example-textarea">DESCRIBA LAS PERTENENCIAS:</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" rows="5" id="example-textarea"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group" align="center">
                                        <button type="submit" class="btn btn-warning btn-lg">AGENDAR CITA</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- end card-box -->
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div> <!-- container-fluid -->

    </div> <!-- content -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    2020 - 2021 &copy; Adminto theme by <a href="">DIRIN-PNP</a>
                </div>
                <div class="col-md-6">
                    <div class="text-md-right footer-links d-none d-sm-block">
                        <a href="javascript:void(0);">About Us</a>
                        <a href="javascript:void(0);">Help</a>
                        <a href="javascript:void(0);">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->

</div>
@endsection
