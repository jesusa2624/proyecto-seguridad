@extends('layouts.layout')

@section('bandejavisitas')
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">


            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <h3 style="color:rgb(255, 196, 0)">BANDEJA DE VISITAS DIRIN-PNP</h3>


                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Empresa</th>
                                <th>Oficina</th>
                                <th>DNI</th>
                                <th>Fecha</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>


                            <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                                <td>$170,750</td>
                            </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div> <!-- content -->

</div>
@endsection
