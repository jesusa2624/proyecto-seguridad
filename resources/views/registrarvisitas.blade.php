@extends('layouts.layout')

@section('registrarvisitas')
<div id="content">

    <div class="inner" style="margin-top:100px ; margin-left: 200px">
        <div class="row">
            <div class="col-lg-12" align="center" style="margin-right: 700px">
                <h1> REGISTRO DE VISITAS  DIRIN - PNP</h1>
            </div>
        </div>
        <hr>
        <form class="form-horizontal" style="margin-top:30px ; margin-left: 500px; "  method="POST" name="frmdocumentovisita"
            id="frmdocumentovisita">
            <div class="form-group " >
                <label class="control-label col-lg-4">TIPO</label>
                <div class="col-lg-4">
                    <select class="form-control" onchange="mostrarTipo(this.value);" name="tipo">
                        <option value="1">PERSONA NATURAL</option>
                        <option value="2">EXTRANJEROS</option>
                        <option value="3">SIN SERVICIO RENIEC</option>
                    </select>
                </div>
            </div>
            <div class="form-group" id="tipoExtran" style="display: none">
                <label class="control-label col-lg-4">EXTRANJEROS</label>
                <div class="col-lg-4">
                    <select class="form-control" name="tipodoc">
                        <option value="pasaporte">PASAPORTE</option>
                        <option value="otros">OTROS</option>
                    </select>
                    <input class="form-control" type="hidden" name="solicitante" id="solicitante" value="31997791">
                    <input class="form-control" type="text" name="nrodocex" id="nrodocex" value=""
                        placeholder="Ingrese el Nro. de documento">
                    <input class="form-control" name="nombreex" type="text" id="nombreex" value="" size="80"
                        placeholder="Ingrese sus Nombres y Apellidos">
                    <input class="form-control" type="hidden" name="estado" id="estado" value="1">
                </div>
            </div>
            <div class="form-group" id="tipoPerson">
                <label class="control-label col-lg-4">PERSONA</label>
                <div class="col-lg-4">
                    <input class="form-control" type="hidden" name="solicitante" id="solicitante" value="31997791">
                    <input class="form-control" type="hidden" name="nrodni" id="nrodni" value="">
                    <input class="form-control" type="hidden" name="estado" id="estado" value="1">
                    <input class="form-control" name="nombrereniec" type="text" id="nombrereniec" value="Busque..."
                        size="80" readonly="" align="right">
                    <a href="busqueda_per_reniec.php?iduser=31997791" rel="shadowbox;height=350;width=800">Buscar</a>
                </div>
            </div>
            <div class="form-group" id="tipoSinReniec" style="display: none">
                <label class="control-label col-lg-4">INGRESE LOS DATOS</label>
                <div class="col-lg-4">
                    <input class="form-control" type="hidden" name="solicitante" id="solicitante" value="31997791">
                    <input class="form-control" type="number" name="nrodni2" id="nrodni2"
                        placeholder="Ingrese el numero de DNI">
                    <input class="form-control" type="hidden" name="estado" id="estado" value="1">
                    <input class="form-control" name="nombrereniec2" type="text" id="nombrereniec2"
                        placeholder="Ingrese los Nombres y Apellidos">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-lg-4">VINCULO</label>

                <div class="col-lg-4">
                    <select class="form-control" onchange="mostrarDiv(this.value);" name="vinculo">
                        <option value="1">Familiar</option>
                        <option value="2">Empresa</option>
                        <option value="3">Policía</option>
                        <option value="4">Visita</option>
                    </select>
                </div>
            </div>

            <div class="form-group" id="empresa" style="display:none">
                <label class="control-label col-lg-4">EMPRESA</label>
                <div class="col-lg-4">
                    <strong style="color: #AA0002">Busque la empresa</strong>
                    <input class="form-control" type="hidden" name="nroruc" id="nroruc" value="">
                    <input class="form-control" name="nombresunat" type="text" id="nombresunat" value="Busque..."
                        readonly="" align="right">
                    <a href="busqueda_per_sunat.php?iduser=31997791" rel="shadowbox;height=350;width=800">Buscar</a>
                </div>

            </div>
            <div class="form-group" style="display: none">
                <label for="autosize" class="control-label col-lg-4">SEDE</label>
                <div class="col-lg-4">
                    <select class="form-control" id="sede" name="sede" readonly="">

                        Notice: Undefined variable: rowMotivo in /var/www/html/sophie/seguridad/registro_visita.php on
                        line 320

                        Notice: Trying to get property of non-object in
                        /var/www/html/sophie/seguridad/registro_visita.php on line 320

                        <option value="">Central</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-lg-4">PISO</label>

                <div class="col-lg-4">
                    <select class="form-control" id="piso" name="piso" required="">
                        <option>1 </option>
                        <option>2 </option>
                        <option>3 </option>
                        <option>4 </option>
                        <option>5 </option>
                        <option>6 </option>
                        <option>7 </option>
                        <option>8 </option>
                        <option>9 </option>
                        <option>10 </option>
                        <option>11 </option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-lg-4">OFICINA</label>
                <div class="col-lg-4">
                    <select data-placeholder="SELECCIONE UNIDAD..." name="oficina" id="oficina"
                        class="form-control input-xxlarge chosen-select" tabindex="2" required="">
                        <option value=""></option>
                        <option value="11"> AYUDANTIA </option>
                        <option value="4"> DEPARTAMENTO DE INDICACIONES </option>
                        <option value="1"> DIRECCION </option>
                        <option value="469"> DIRIN - SECRETARIA - OFICINA DE ADMINISTRACION - AREA DE ECONOMIA </option>
                        <option value="468"> DIRIN - SECRETARIA - OFICINA DE ADMINISTRACION - AREA DE LOGISTICA
                        </option>
                        <option value="467"> DIRIN - SECRETARIA - OFICINA DE ADMINISTRACION - AREA DE LOGISTICA -
                            COMEDOR </option>
                        <option value="470"> DIRIN - SECRETARIA - UNIDAD DE COMUNICACION E IMAGEN </option>
                        <option value="215"> DIVBUS - DEPASCRI 3- SECCION DE BUSQUEDA ESPECIAL 2 </option>
                        <option value="257"> DIVBUS-DEPARTAMENTO DE ASUNTOS CRIMINALES 1 </option>
                        <option value="438"> DIVBUS-DEPARTAMENTO DE ASUNTOS CRIMINALES 2 </option>
                        <option value="349"> DIVBUS-DEPARTAMENTO DE ASUNTOS CRIMINALES 3 </option>
                        <option value="500"> DIVBUS-DEPARTAMENTO ESPECIAL DE APOYO TECNOLOGICO </option>
                        <option value="346"> DIVBUS-DEPASCRI 1 - SECCION 3 </option>
                        <option value="344"> DIVBUS-DEPASCRI 1-SECCION 1 </option>
                        <option value="343"> DIVBUS-DEPASCRI 1-SECCION 2 </option>
                        <option value="263"> DIVBUS-DEPASCRI-SECCION 2 </option>
                        <option value="261"> DIVBUS-DEPASCRI-SECCION DE ACTIVIDADES TACTICAS </option>
                        <option value="260"> DIVBUS-DPTO DE BASES TERRITORIALES </option>
                        <option value="1149"> DIVBUS-OFICINA DE ANALISIS TACTICO OPERATIVO </option>
                        <option value="496"> DIVCON - DEPARTAMENTO DE ASUNTOS INTERNOS </option>
                        <option value="499"> DIVCON - DEPARTAMENTO DE CONFIABILIDAD Y EVALUACION DE LA CREDIBILIDAD
                        </option>
                        <option value="497"> DIVCON - DEPARTAMENTO DE GESTION DE RIESGOS </option>
                        <option value="498"> DIVCON - DEPARTAMENTO DE SEGURIDAD NACIONAL </option>
                        <option value="259"> DIVISION DE BUSQUEDA </option>
                        <option value="461"> DIVISION DE COORDINACION Y EVALUACION SIPOL-DEPARTAMENTO DE COORDINACION
                            OPERACIONAL </option>
                        <option value="417"> DIVISION DE PRODUCCION DE INTELIGENCIA </option>
                        <option value="418"> DIVISION DE SEGURIDAD DIGITAL </option>
                        <option value="337"> DIVISION DE TRATAMIENTO DE LA INFORMACION </option>
                        <option value="456"> DIVPRINT - DEPARTAMENTO DE INTELIGENCIA ESTRATEGICA Y PROSPECTIVA </option>
                        <option value="5"> DIVPRINT-DEPARTAMENTO DE INTELIGENCIA EN ASUNTOS CRIMINALES </option>
                        <option value="348"> DIVPRINT-DEPARTAMENTO DE INTELIGENCIA EN ASUNTOS DE ORDEN INTERNO </option>
                        <option value="7"> DIVPRINT-DEPARTAMENTO DE INTELIGENCIA EN ASUNTOS DE SEGURIDAD CIUDADANA
                        </option>
                        <option value="335"> DIVPRINT-DEPARTAMENTO DE INTELIGENCIA EN ASUNTOS DE SEGURIDAD GUBERNAMENTAL
                        </option>
                        <option value="6"> DIVPRINT-DEPARTAMENTO DE INTELIGENCIA EN ASUNTOS SOCIALES </option>
                        <option value="336"> DIVPRINT-DEPIEP - SECCION DE ANTICIPACION ESTRATEGICA </option>
                        <option value="443"> DIVPRINT-DEPPIAC-SECCION DE CRIMEN ORGANIZADO </option>
                        <option value="450"> DIVPRINT-DEPPISG-SECCION DE SEGURIDAD GUBERNAMENTAL NACIONAL </option>
                        <option value="643"> DIVSEDIG - DEPARTAMENTO DE GESTION DE LA INFORMACION - GESTION DE BASE DE
                            DATOS </option>
                        <option value="649"> DIVSEDIG - DEPARTAMENTO DE GESTION DE LA INFORMACION - REPORTES ESPECIALES
                        </option>
                        <option value="465"> DIVSEDIG - DEPARTAMENTO DE INTEROPERABILIDAD Y SOPORTE TECNICO </option>
                        <option value="647"> DIVSEDIG - DEPARTAMENTO DE INTEROPERABILIDAD Y SOPORTE TECNICO -
                            INTELIGENCIA GEO ESPACIAL </option>
                        <option value="648"> DIVSEDIG -DEPARTAMENTO DE INTEROPERABILIDAD Y SOPORTE TECNICO -
                            INTELIGENCIA DE NEGOCIOS </option>
                        <option value="347"> DIVSEDIG- DEPARTAMENTO DE CIBERINTELIGENCIA </option>
                        <option value="14"> DIVSEDIG-DEPARTAMENTO DE GESTION DE LA INFORMACION </option>
                        <option value="10"> DIVSEDIG-DEPARTAMENTO DE TECNOLOGIA DE LA INFORMACION Y COMUNICACIONES
                        </option>
                        <option value="340"> ESCUELA DE INTELIGENCIA POLICIAL </option>
                        <option value="13"> OFICINA DE ADMINISTRACIÓN </option>
                        <option value="3"> SEC-UNIDAD DE PLANEAMIENTO Y EDUCACION </option>
                        <option value="253"> SECCION MARTE </option>
                        <option value="2"> SECRETARIA </option>
                        <option value="345"> TESORERIA </option>
                        <option value="586"> UNIDAD DE ASESORIA JURIDICA - DIRIN </option>
                        <option value="12"> UNIDAD DE SEGURIDAD - DIRIN </option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-lg-4">FECHA </label>
                <div class="col-lg-4">
                    <input type="date" id="fecha" name="fecha" class="form-control" placeholder="Fecha" required="">
                    <span class="fa fa-calendar txt-danger form-control-feedback"></span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-lg-4">HORA </label>
                <div class="col-lg-4">
                    <div class="time_pick"><input type="text" id="hora" name="hora" value="" class="form-control"
                            required="">
                        <div class="timepicker_wrap ">
                            <div class="arrow_top"></div>
                            <div class="time">
                                <div class="prev action-next"></div>
                                <div class="ti_tx"><input type="text" class="timepicki-input"></div>
                                <div class="next action-prev"></div>
                            </div>
                            <div class="mins">
                                <div class="prev action-next"></div>
                                <div class="mi_tx"><input type="text" class="timepicki-input"></div>
                                <div class="next action-prev"></div>
                            </div>
                            <div class="meridian">
                                <div class="prev action-next"></div>
                                <div class="mer_tx"><input type="text" class="timepicki-input" readonly=""></div>
                                <div class="next action-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="autosize" class="control-label col-lg-4">MOTIVO</label>
                <div class="col-lg-4">
                    <select class="form-control" id="motivo" name="motivo" required="">
                        <option value="1">Reunión de comando</option>
                        <option value="2">Reunión con el proveedor</option>
                        <option value="3">Reunión para asesoria</option>
                        <option value="4">Citado por oficial de control</option>
                        <option value="5">Creación de usuario de Pi3</option>
                        <option value="6">Entrega de documentos</option>
                        <option value="7">Creación de usuarios SIDPOL o Reniec</option>
                        <option value="8">capacitacion o charlas</option>
                        <option value="9">Familiar y/o amistades</option>
                        <option value="10">Trabajo y Mantenimiento</option>
                        <option value="11">Abastecimiento/Mantenimiento</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="autosize" class="control-label col-lg-4"> PERTENENCIAS </label>
                <div class="col-lg-4">
                    <strong style="color: #AA0002">Seleccione los objetos que traera</strong>
                    <div class="checkbox">
                        <label><input type="checkbox" name="pertenencias[]" id="pertencias" value="1">laptop</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="pertenencias[]" id="pertencias" value="2">celular</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="pertenencias[]" id="pertencias" value="3">tablet</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="pertenencias[]" id="pertencias" value="4">dispositivos de
                            almacenaje</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="pertenencias[]" id="pertencias" value="5">equipos de
                            filmacion</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="pertenencias[]" id="pertencias" value="6">armamento</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="pertenencias[]" id="pertencias" value="7">drone</label>
                    </div>

                </div>
            </div>
            <div class="form-group">
                <label for="autosize" class="control-label col-lg-4">DESCRIBA EL DETALLE DE LAS PERTENENCIAS</label>
                <div class="col-lg-4">
                    <textarea class="form-control" name="detalle_pertenencias" id="" cols="30" rows="3"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="autosize" class="control-label col-lg-4">NRO DE PASE</label>
                <div class="col-lg-4">
                    <select class="form-control" id="nropase" name="nropase">

                        <option value="1">Pase Nro. 1</option>

                        <option value="3">Pase Nro. 3</option>

                        <option value="4">Pase Nro. 4</option>

                        <option value="5">Pase Nro. 5</option>

                        <option value="6">Pase Nro. 6</option>

                        <option value="7">Pase Nro. 7</option>

                        <option value="9">Pase Nro. 9</option>

                        <option value="10">Pase Nro. 10</option>

                        <option value="11">Pase Nro. 11</option>

                        <option value="12">Pase Nro. 12</option>

                        <option value="13">Pase Nro. 13</option>

                        <option value="14">Pase Nro. 14</option>

                        <option value="15">Pase Nro. 15</option>

                        <option value="16">Pase Nro. 16</option>

                        <option value="17">Pase Nro. 17</option>

                        <option value="18">Pase Nro. 18</option>

                        <option value="19">Pase Nro. 19</option>

                        <option value="20">Pase Nro. 20</option>

                        <option value="21">Pase Nro. 21</option>

                        <option value="22">Pase Nro. 22</option>

                        <option value="23">Pase Nro. 23</option>

                        <option value="24">Pase Nro. 24</option>

                        <option value="25">Pase Nro. 25</option>

                        <option value="26">Pase Nro. 26</option>

                        <option value="27">Pase Nro. 27</option>

                        <option value="28">Pase Nro. 28</option>

                        <option value="29">Pase Nro. 29</option>

                        <option value="30">Pase Nro. 30</option>

                        <option value="31">Pase Nro. 31</option>

                        <option value="32">Pase Nro. 32</option>

                        <option value="33">Pase Nro. 33</option>

                        <option value="34">Pase Nro. 34</option>

                        <option value="35">Pase Nro. 35</option>

                        <option value="36">Pase Nro. 36</option>

                        <option value="37">Pase Nro. 37</option>

                        <option value="38">Pase Nro. 38</option>

                        <option value="39">Pase Nro. 39</option>

                        <option value="40">Pase Nro. 40</option>

                        <option value="41">Pase Nro. 41</option>

                        <option value="42">Pase Nro. 42</option>

                        <option value="43">Pase Nro. 43</option>

                        <option value="44">Pase Nro. 44</option>

                        <option value="45">Pase Nro. 45</option>

                        <option value="46">Pase Nro. 46</option>

                        <option value="47">Pase Nro. 47</option>

                        <option value="48">Pase Nro. 48</option>

                        <option value="49">Pase Nro. 49</option>

                        <option value="50">Pase Nro. 50</option>

                        <option value="51">Pase Nro. 51</option>

                        <option value="52">Pase Nro. 52</option>

                        <option value="53">Pase Nro. 53</option>

                        <option value="55">Pase Nro. 55</option>

                        <option value="56">Pase Nro. 56</option>

                        <option value="57">Pase Nro. 57</option>

                        <option value="58">Pase Nro. 58</option>

                        <option value="59">Pase Nro. 59</option>

                        <option value="60">Pase Nro. 60</option>

                        <option value="61">Pase Nro. 61</option>

                        <option value="62">Pase Nro. 62</option>

                        <option value="63">Pase Nro. 63</option>

                        <option value="64">Pase Nro. 64</option>

                        <option value="65">Pase Nro. 65</option>

                        <option value="66">Pase Nro. 66</option>

                        <option value="67">Pase Nro. 67</option>

                        <option value="68">Pase Nro. 68</option>

                        <option value="69">Pase Nro. 69</option>

                        <option value="70">Pase Nro. 70</option>

                        <option value="71">Pase Nro. 71</option>

                        <option value="72">Pase Nro. 72</option>

                        <option value="73">Pase Nro. 73</option>

                        <option value="74">Pase Nro. 74</option>

                        <option value="75">Pase Nro. 75</option>

                        <option value="76">Pase Nro. 76</option>
                    </select>

                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-lg-4">RESPONSABLE</label>
                <div class="col-lg-4">
                    <input class="form-control" type="hidden" name="cipRespon" id="cipRespon" value="">
                    <input class="form-control" name="nombreRespon" type="text" id="nombreRespon" value=""
                        placeholder="Busque..." readonly="" align="right">
                    <a href="busqueda_respon.php?iduser=31997791" rel="shadowbox;height=350;width=800">Buscar</a>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-lg-4">QUIEN AUTORIZA?</label>
                <div class="col-lg-4">
                    <input class="form-control" type="hidden" name="cipAutor" id="cipAutor" value="">
                    <input class="form-control" name="nombreAutor" type="text" id="nombreAutor" value=""
                        placeholder="Busque..." readonly="" align="right">
                    <a href="busqueda_autoriza.php?iduser=31997791" rel="shadowbox;height=350;width=800">Buscar</a>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg">AGENDAR CITA</button>
            </div>
        </form>
    </div>

</div>
@endsection