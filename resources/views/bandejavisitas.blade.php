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


                        <table id="bandeja_visitas" class="table table-striped table-bordered dt-responsive nowrap">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Tipo de visita</th>
                                <th>Piso</th>
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
@push('scripts_personalizados')
    <script>


    $(document).ready( function () {

        window.axios.get('/obtener-visitas')
            .then((respuesta)=>{
                console.log(respuesta);
                 let data = respuesta.data;
                console.log(data);
                obtenerVisitas(data)

            })

        function obtenerVisitas(visitas){
            let tableVisitas = $("#bandeja_visitas");

            tableVisitas.DataTable({
                lengthChange: !1,
                buttons: ["copy", "excel", "pdf"],
                destroy : true,
                data : visitas,
                columns : [
                    { render : function (data, type, row, meta){
                        return `${row.relacion_visitante.grado} PNP ${row.relacion_visitante.nombres} ${row.relacion_visitante.apellido_paterno} ${row.relacion_visitante.apellido_materno}`
                        }},
                    { data : 'pases_id'},
                    { data : 'pases_id'},
                    { data : 'pases_id'},
                    { data : 'pases_id'},
                    { render : function (data, type, row, meta){
                        return `<button class="btn btn-warning btn-block btn-sm">Editar</button>
                                <button class="btn btn-info btn-block btn-sm">Ver</button>`
                        }}
                ]
            });
        }



    });

    </script>

@endpush
