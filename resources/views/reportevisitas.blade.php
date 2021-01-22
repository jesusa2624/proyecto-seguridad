@extends('layouts.layout')

@section('registrarvisitas')
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container">

            <div class="row">
                
                <div class="col-xl-12">
                    <div class="card-box">

                        <h3 style="color:rgb(255, 196, 0)">REPORTE DE VISITAS DIRIN-PNP</h3>
                        <br>
                        <h5>*SELECCIONAR LAS UNIDADES DE CONSULTA*</h5>
                        <div class="form-group row">
                            <label class="col-sm-2  col-form-label" for="example-date">DESTINO</label>
                            <div class="col-sm-10">
                                <select class="form-control select2">
                                    <option>SELECCIONAR</option>
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2  col-form-label" for="example-date">FECHA</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="example-date" type="date" name="date">
                            </div>
                        </div>
                        

                    </div>
                </div><!-- end col -->
            </div>

            <div class="form-group" align="center">
                <button type="submit" class="btn btn-warning btn-lg">BUSCAR</button>
            </div>
            <!-- end row -->
        </div> <!-- container-fluid -->
    </div> <!-- content -->

    

</div>
@endsection