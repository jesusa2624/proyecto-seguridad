@extends('layouts.layout')

@section('registrarvisitas')
<div id="content">
    <div class="aling=center" style="margin-top:100px ;margin-left: 600px; margin-right: 300px">
        <div class="row">
            <div class="col-lg-12" align="center">
                <h1> REPORTE DE VISITAS DIRIN-PNP</h1>
            </div>
        </div>
        <hr>
        <span id="resultado"></span>
        {{-- <form class="form-horizontal" method="get" action="reporte_visitas.php" id="frm" name="frm" target="_blank" data-select2-id="frm"> --}}
            <div align="center">
                <h2> BUSQUEDA </h2>
            </div>
            <div class="form-group">
                <label class="control-label col-lg-4">DESTINO</label>
                <div class="col-lg-4" align="center">
                    <select name="unidad" class="input-xxlarge select2-hidden-accessible" data-select2-id="codunidad" tabindex="-1" aria-hidden="true">
                        <option> SELECCIONAR TODOS</option>
                        <option> DIRECCION </option>
                        <option> DIVTAS-DEPSIS-SECCION MARTE </option>
                        <option> DIVTAS-DEPTRASIT2 SECCION DE ASUNTOS DE CRIMEN ORGANIZADO </option>
                        <option> DIVPRINT-DEPPIAS-SECCION LABORAL </option>
                        <option> DIVTAS-DEPTRASIT1-SECCION DE ASUNTOS LABORALES</option>
                        <option> SECRETARIA </option>
                        <option> SEC-UNIDAD DE PLANEAMIENTO Y EDUCACION </option>
                        <option> ESCUELA DE INTELIGENCIA POLICIAL </option>
                        <option> AYUDANTIA </option>
                        <option> DEPARTAMENTO DE COMUNICACIONES </option>
                        <option> DIVISION DE TRATAMIENTO DE LA INFORMACION </option>
                        <option> DEPARTAMENTO DE INDICACIONES </option>
                        <option> DEPARTAMENTO DE TRATAMIENTO SITUACIONAL 1 </option>
                        <option> DIVTAS-DEPTRASIT1 SECCION DE ASUNTOS SOCIO CAMPESINADO</option>
                        <option> DIVTAS-DEPTRASIT1 SECCION DE ASUNTOS DE POBLACIONALES</option>
                        <option> DIVTAS-DEPTRASIT1 SECCION DE ASUNTOS SOCIO MINERIA</option>
                        <option> DIVTAS-DEPTRASIT1 SECCION DE ASUNTOS EDUCACIONALES</option>
                        <option> DIVTAS-DEPTRASIT1 SECCION DE ASUNTOS GUBERNAMENTALES</option>
                        <option> DEPARTAMENTO DE TRATAMIENTO SITUACIONAL 2 </option>
                        <option> DIVTAS-DEPTRASIT2 SECCION DE ASUNTOS DE DELINCUENCIA COMUN </option>
                        <option> DIVTAS-DEPTRASIT2 SECCION DE ASUNTOS ESPECIALES</option>
                        <option> DIVTAS-DEPTRASIT2 SECCION DE ASUNTOS DE LAVADO DE ACTIVOS </option>
                        <option> DIVTAS-DEPTRASIT2 SECCION DE ASUNTOS DE PENITENCIARIOS</option>
                        <option> DIVTAS-DEPTRASIT2 SECCION DE ASUNTOS DE TERRORISMO</option>
                        <option> DIVTAS-DEPTRASIT2 SECCION DE TID </option>
                        <option> DEPARTAMENTO DE SISTEMATIZACION DE LA INFORMACION</option>
                        <option> SECCION MARTE </option>
                        <option> DIVCON - DEPARTAMENTO DE SEGURIDAD NACIONAL </option>
                        <option> DIVCON - AGENTE COND. FUNC. INDEBIDA - DELITOS Y FALTAS </option>
                        <option> DIVCON - DEPARTAMENTO DE ASUNTOS INTERNOS </option>
                        <option> CEIND DIVISION DE CONTRAINTELIGENCIA </option>
                        <option> DIVCON- AGENTE EQUIPO ALPHA CONTRA D/C/A/P - COHECHO</option>
                        <option> AREA DE TRATAMIENTO - DIVCON - DEPARTAMENTO DE ASUNTOS INTERNOS </option>
                        <option> DIVCON - DEPARTAMENTO DE GESTION DE RIESGOS </option>
                        <option> DIVCON - AGENTE DE ASUNTOS INTERNOS </option>
                        <option> DIVCON - DEPGERI - SECCION DE MEDIDAS CONTRAINTELIGENCIA </option>
                        <option> DIVCON - EQUIPO COND. FUNC. INDEBIDA - DELITOS Y FALTAS </option>
                        <option> DIVCON - ANALISTA COND. FUNC. INDEBIDA - DELITOS Y FALTAS </option>
                        <option> DIVCON - SECCION DE ASUNTOS INTERNOS </option>
                        <option> DIVCON - DEPSENAC - SECCION DE ANALISIS </option>
                        <option> AREA DE TRATAMIENTO - DIVCON -DEPARTAMENTO DE CONFIABILIDAD Y EVALUACION DE LA CREDIBILIDAD </option>
                        <option> DIVCON - ANALISTA DE ASUNTOS INTERNOS </option>
                        <option> AREA DE TRATAMIENTO - DIVCON - DEPARTAMENTO DE SEGURIDAD NACIONAL </option>
                        <option> AREA DE TRATAMIENTO - DIVCON - DEPARTAMENTO DE GESTION DE RIESGOS </option>
                        <option> DIVCON - EQUIPO DE ASUNTOS INTERNOS </option>
                        <option> DIVCON - EQUIPO DE FRENTE INTERNO </option>
                        <option> DIVCON - DEPGERI - SECCION DE ANALISIS Y ESTADISTICA </option>
                        <option> DIVCON - ANALISTA DE ANALISIS Y ESTADISTICA </option>
                        <option> DIVCON - AGENTE DE ANALISIS Y ESTADISTICA </option>
                        <option> DIVCON - EQUIPO DE FRENTE EXTERNO </option>
                        <option> DIVCON - ANALISTA DE FRENTE EXTERNO </option>
                        <option> DIVCON - AGENTE DE FRENTE EXTERNO </option>
                        <option> DIVCON - DEPSENAC- SECCION DE GRUPO ESPECIAL </option>
                        <option> DIVCON - EQUIPO DE GRUPO ESPECIAL </option>
                        <option> DIVCON - ANALISTA DE GRUPO ESPECIAL </option>
                        <option> DIVCON - AGENTE DE GRUPO ESPECIAL </option>
                        <option> DIVCON - DEPSENAC- SECCION AEROPUERTO INTERNACIONAL JORGE CHAVEZ </option>
                        <option> DIVCON - EQUIPO DE AEROPUERTO INTERNACIONAL JORGE CHAVEZ </option>
                        <option> DIVCON - ANALISTA DE AEROPUERTO INTERNACIONAL JORGE CHAVEZ </option>
                        <option> DIVCON - AGENTE DE SEGURIDAD CONTRA CONDUCTA FUNC. INDEBIDA </option>
                        <option> DIVCON - ANALISTA DE SEGURIDAD CONTRA CONDUCTA FUNC. INDEBIDA </option>
                        <option> DIVCON - ANALISTA DE FRENTE INTERNO </option>
                        <option> DIVCON - AGENTE DE FRENTE INTERNO </option>
                        <option> DIVCON - SECCION DE CONFIABILIDAD Y EVALUACION DE LA CREDIBILIDAD </option>
                        <option> DIVCON - EQUIPO DE CONFIABILIDAD Y EVALUACION DE LA CREDIBILIDAD </option>
                        <option> DIVCON - ANALISTA DE CONFIABILIDAD Y EVALUACION DE LA CREDIBILIDAD </option>
                        <option> DIVCON - AGENTE DE CONFIABILIDAD Y EVALUACION DE LA CREDIBILIDAD </option>
                        <option> DIVCON- EQUIPO ALPHA CONTRA D/C/A/P - COHECHO</option>
                        <option> DIVCON- ANALISTA EQUIPO ALPHA CONTRA D/C/A/P - COHECHO</option>
                        <option> DIVCON- EQUIPO BETHA RQ </option>
                        <option> DIVCON- ANALISTA EQUIPO BETHA RQ </option>
                        <option> DIVCON- AGENTE EQUIPO BETHA RQ </option>
                        <option> DIVCON - DEPGERI - SECCION DE SEGURIDAD CONTRA CONDUCTA FUNC. INDEBIDA </option>
                        <option> DIVCON - EQUIPO DE SEGURIDAD CONTRA CONDUCTA FUNC. INDEBIDA </option>
                        <option> DIVCON - AGENTE DE AEROPUERTO INTERNACIONAL JORGE CHAVEZ </option>
                        <option> DIVISION DE PRODUCCION DE INTELIGENCIA </option>
                        <option> DIVCON - DEPARTAMENTO DE CONFIABILIDAD Y EVALUACION DE LA CREDIBILIDAD </option>
                        <option> DIVCON - EQUIPO DE ANALISIS Y ESTADISTICA </option>
                        <option> DIVISION DE CONTRAINTELIGENCIA </option>
                        <option"> DIVPRINT-DEPARTAMENTO DE INTELIGENCIA EN ASUNTOS CRIMINALES </option>
                        <option> DIVPRINT-DEPPIAC-SECCION DE CRIMEN ORGANIZADO</option>
                        <option> DIVPRINT-DEPPIAC-SECCION DE TID </option>
                        <option> DIVPRINT-DEPPIAC-SECCION DE TERRORISMO </option>
                        <option> DIVPRINT-DEPARTAMENTO DE INTELIGENCIA EN ASUNTOS SOCIALES </option>
                        <option> DIVPRINT-DEPPIAS-SECCION POBLACIONAL </option>
                        <option> DIVPRINT-DEPPIAS-SECCION EDUCACIONAL </option>
                        <option> DIVPRINT-DEPPIAS-SECCION MINERIA </option>
                        <option> DIVPRINT-DEPPIAS-SECCION CAMPESINADO </option>
                        <option> DIVPRINT-DEPARTAMENTO DE INTELIGENCIA EN ASUNTOS DE SEGURIDAD CIUDADANA </option>
                        <option> DEPASEC-SECCION DE DELINCUENCIA COMUN </option>
                        <option> DEPASEC-SECCION MICRO COMERCIALIZACION DE DROGA</option>
                        <option> DEPASEC-SECCION PANDILLAJE </option>
                        <option> DEPASEC-SECCION BARRIO Y VECINDARIO SEGURO </option>
                        <option> DIVPRINT-DEPARTAMENTO DE INTELIGENCIA EN ASUNTOS DE SEGURIDAD GUBERNAMENTAL</option>
                        <option> DIVPRINT-DEPPISG-SECCION DE ESTADISTICA Y PRODUCTIVIDAD </option>
                        <option> DIVPRINT-DEPPISG-SECCION DE ACTIVOS CRITICOS</option>
                        <option> DIVPRINT-DEPPISG-ORGANIZACIONES SOCIO POLITICOS</option>
                        <option> DIVPRINT-DEPPISG-SECCION DE SEGURIDAD GUBERNAMENTAL NACIONAL </option>
                        <option> DIVPRINT-DEPPISG-SECCION DE SEGURIDAD GUBERNAMENTAL INTERNACIONAL </option>
                        <option> DIVPRINT - DEPARTAMENTO DE INTELIGENCIA ESTRATEGICA Y PROSPECTIVA </option>
                        <option> DIVPRINT-DEPIEP - SECCION DE ANTICIPACION ESTRATEGICA</option>
                        <option> DIVPRINT-DEPIEP - SECCION DE ANALISIS ESTRATEGICO NACIONAL </option>
                        <option> DIVPRINT-DEPIEP - SECCION DE ANALISIS PROSPECTIVO</option>
                        <option> DIVISION DE BUSQUEDA </option>
                        <option> DIVBUS-DEPARTAMENTO DE ASUNTOS CRIMINALES 1 </option>
                        <option> DIVBUS-DEPASCRI-SECCION DE ACTIVIDADES TACTICAS</option>
                        <option> DIVBUS-DEPASCRI 1-SECCION 1 </option>
                        <option> DIVBUS-OFICINA DE ANALISIS TACTICO OPERATIVO</option>
                        <option> DIVBUS-DEPASCRI 1-SECCION 2 </option>
                        <option> DIVBUS-DEPASCRI 1 - SECCION 3 </option>
                        <option> DIVBUS-DEPARTAMENTO DE ASUNTOS CRIMINALES 2 </option>
                        <option> DIVBUS-DEPASCRI 2-BASE INT. PTE PIEDRA </option>
                        <option> DIVBUS-DEPARTAMENTO DE ASUNTOS CRIMINALES 3 </option>
                        <option> DIVBUS - DEPASCRI 3- SECCION DE BUSQUEDA ESPECIAL 2</option>
                        <option> DIVBUS - DEPARTAMENTO DE ASUNTOS SOCIALES </option>
                        <option> DIVBUS-DPTO DE BASES TERRITORIALES </option>
                        <option> DIVBUS-DEPASC-SECINOPE </option>
                        <option> DIVBUS-DEPASCRI-SECCION 2 </option>
                        <option> DIVISION DE SEGURIDAD DIGITAL </option>
                        <option> DIVSEDIG-DEPARTAMENTO DE GESTION DE LA INFORMACION</option>
                        <option> DIVSEDIG - DEPARTAMENTO DE GESTION DE LA INFORMACION - GESTION DE BASE DE DATOS </option>
                        <option> DIVSEDIG - DEPARTAMENTO DE INTEROPERABILIDAD Y SOPORTE TECNICO - INTELIGENCIA GEO ESPACIAL </option>
                        <option> DIVSEDIG -DEPARTAMENTO DE INTEROPERABILIDAD Y SOPORTE TECNICO - INTELIGENCIA DE NEGOCIOS </option>
                        <option> DIVSEDIG - DEPARTAMENTO DE GESTION DE LA INFORMACION - REPORTES ESPECIALES </option>
                        <option> DIVSEDIG-DEPARTAMENTO DE TECNOLOGIA DE LA INFORMACION Y COMUNICACIONES </option>
                        <option> DIVSEDIG - DEPARTAMENTO DE INTEROPERABILIDAD Y SOPORTE TECNICO </option>
                        <option> DIRIN - SECRETARIA - OFICINA DE ADMINISTRACION - AREA DE LOGISTICA - COMEDOR </option>
                        <option> DIVSEDIG- DEPARTAMENTO DE CIBERINTELIGENCIA </option>
                        <option> DIRIN - SECRETARIA - OFICINA DE ADMINISTRACION - AREA DE LOGISTICA </option>
                        <option> DIRIN - SECRETARIA - OFICINA DE ADMINISTRACION - AREA DE ECONOMIA </option>
                        <option> DIRIN - SECRETARIA - UNIDAD DE COMUNICACION E IMAGEN</option>
                        <option> OFICINA DE ADMINISTRACIÓN </option>
                        <option> DIVISION DE COORDINACION Y EVALUACION SIPOL </option>
                        <option> DIRIN-DIVISION DE COORDINACION Y EVALUACION SIPOL-DEPARTAMENTO DE COORDINACION ORGANIZACIONAL </option>
                        <option> DIVISION DE COORDINACION Y EVALUACION SIPOL-DEPARTAMENTO DE COORDINACION OPERACIONAL </option>
                        <option> DEPARTAMENTO DE TRAZABILIDAD, MEDICION E IMPACTO</option>
                        <option> UNIDAD DE ASESORIA JURIDICA - DIRIN </option>
                        <option> UNIDAD DE SEGURIDAD - DIRIN </option>
                        <option> DIVISION DE ASUNTOS ESPECIALES </option>
                        <option> DIVBUS-DEPARTAMENTO ESPECIAL DE APOYO TECNOLOGICO</option>
                        <option> DIVPRINT-DEPARTAMENTO DE INTELIGENCIA EN ASUNTOS DE ORDEN INTERNO </option>
                        <option> DIVBUS - DEPARTAMENTO DE BASES TERRITORIALES - NO VALE </option>
                        <option> DIVPOL 01 </option>
                        <option> DIVBUS- DEPARTAMENTO DE MANEJO DE FUENTES HUMANAS</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-lg-4" for="reservation"=>FECHA </label>
                <div class="col-lg-4">
                    <input type="date" id="fecha" name="fecha" class="form-control" placeholder="Fecha" required="">
                    {{-- <span class="fa fa-calendar txt-danger form-control-feedback"></span> --}}
                    <span class="input-group-addon"><i class="icon-calendar"></i></span>
                </div>
            </div>
            <div class="form-group" align="center">
                <button type="submit" class="btn btn-primary btn-lg">Buscar</button>
            </div>
        </form>
    </div>
</div>
@endsection