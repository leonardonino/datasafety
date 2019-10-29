<style>
    .active_element_collapse {
        color: silver !important;
        text-decoration: underline !important;
        cursor: pointer;
    }
</style>
<main class="main">
    <div class="card">
        <div class="row">
            <div class="col-md-2">
                <br>
                <ul class="list-group">
                    <li class="list-group-item"><a class="active_element_collapse" data-collapse="dc_1">Consultar</a></li>
                    <li class="list-group-item"><a class="active_element_collapse" data-collapse="dc_5">cancelar</a></li>
                </ul>
            </div>
            <!--inicio elements -->
            <div class="col-md-2">
                <div class="card-body">
                    <div class="card card-body ">

                        <!--contenido inicio -->

                        <!--contenido inicio -->

                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card-body">
                    <div class="card card-body ">

                        <!--contenido inicio -->

                        <!--contenido inicio -->

                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card-body">
                    <div class="card card-body ">

                        <!--contenido inicio -->

                        <!--contenido inicio -->

                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card-body">
                    <div class="card card-body ">

                        <!--contenido inicio -->

                        <!--contenido inicio -->

                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card-body">
                    <div class="card card-body ">

                        <!--contenido inicio -->

                        <!--contenido inicio -->

                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="collapse" id="dc_2" style="">
                    <div class="card card-body">

                        <!--contenido inicio -->
                        <div class="container-fluid">
                            <div class="animated fadeIn">
                                <div class="row">


                                    <div class="form-group row">
                                        <label class="col-md-6 col-form-label">Buscar</label>
                                        <div class="col-md-9 col-form-label">
                                            <div class="form-check">
                                                <input class="form-check-input" id="radio1" type="radio" value="radio1" name="radios">
                                                <label class="form-check-label" for="radio1">Cedula</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" id="radio2" type="radio" value="radio2" name="radios">
                                                <label class="form-check-label" for="radio2">Nombre/Correo/Cargo</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" id="radio3" type="radio" value="radio2" name="radios">
                                                <label class="form-check-label" for="radio3">Telefono</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label><strong>Criterio</strong></label>
                                        </div>
                                        <div class="col-md-8">
                                            <input class="form-control" name="Identificacion" value="">
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <button class="btn btn-brand btn-lg btn-spotify" type="button" style="margin-bottom: 4px">
                            <span>Buscar</span>
                        </button>



                        <!--contenido inicio -->

                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="collapse" id="dc_3" style="">
                    <div class="card card-body ">

                        <!--contenido inicio -->
                        <div class="container-fluid">
                            <div class="animated fadeIn">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h3>DATOS PERSONALES</h3>
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label class="col-form-label" for="select2">Tipo De Perfil</label>
                                                <div class="col-md-8">
                                                    <select class="form-control form-control-lg" id="select2" name="select2">
                                                        <option value="0"></option>
                                                        <option value="1">Guarda</option>
                                                        <option value="2">Administrador</option>
                                                        <option value="3">Otro</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label" for="select2">Tipo De Identificacion</label>
                                                <div class="col-md-4">
                                                    <select class="form-control form-control-lg" id="select2" name="select2">
                                                        <option value="0"></option>
                                                        <option value="1">CC</option>
                                                        <option value="2">CE</option>
                                                        <option value="2">TI</option>
                                                        <option value="3">Otro</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label><strong>Identificacion</strong></label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input class="form-control" name="Identificacion" value="">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label><strong>Nombres</strong></label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input class="form-control" name="Nombres" value="">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label><strong>Apellidos</strong></label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input class="form-control" name="Apellidos" value="">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label><strong>Correo</strong></label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input class="form-control" name="Correo" value=".com">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <br><label><strong>Cargo</strong></label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input class="form-control" name="Cargo" value="">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label><strong>Login</strong></label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input class="form-control" name="Login" value="">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label><strong>Password</strong></label>
                                                </div>

                                                <div class="col-md-8">
                                                    <input class="form-control" name="Cargo" value="">
                                                </div>

                                                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                                                    <button class="btn btn-outline-warning" type="button">Actualizar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-md-8-->
                                </div><!-- end row-->
                            </div>
                        </div>
                        <!--end container -->
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="collapse" id="dc_4" style="">
                    <div class="card card-body ">

                        <!--contenido inicio -->
                        <div class="container-fluid">
                            <div class="animated fadeIn">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h3>DATOS PERSONALES</h3>
                                        <div class="form-group">
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label" for="select2">Tipo De Perfil</label>
                                                <div class="col-md-8">
                                                    <select class="form-control form-control-lg" id="select2" name="select2">
                                                        <option value="0"></option>
                                                        <option value="1">Guarda</option>
                                                        <option value="2">Administrador</option>
                                                        <option value="3">Otro</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label" for="select2">Tipo De Identificacion</label>
                                                <div class="col-md-4">
                                                    <select class="form-control form-control-lg" id="select2" name="select2">
                                                        <option value="0"></option>
                                                        <option value="1">CC</option>
                                                        <option value="2">CE</option>
                                                        <option value="2">TI</option>
                                                        <option value="3">Otro</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label><strong>Identificacion</strong></label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input class="form-control" name="Identificacion" value="">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label><strong>Nombres</strong></label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input class="form-control" name="Nombres" value="">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label><strong>Apellidos</strong></label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input class="form-control" name="Apellidos" value="">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label><strong>Correo</strong></label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input class="form-control" name="Correo" value=".com">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <br><label><strong>Cargo</strong></label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input class="form-control" name="Cargo" value="">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label><strong>Login</strong></label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input class="form-control" name="Login" value="">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label><strong>Password</strong></label>
                                                </div>

                                                <div class="col-md-8">
                                                    <input class="form-control" name="Cargo" value="">
                                                </div>

                                                <label class="switch switch-label switch-pill switch-outline-primary-alt">
                                                    <input class="switch-input" type="checkbox" checked="">
                                                    <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                                                </label>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>



                        <!--contenido inicio -->

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-8">


        <div class="card-body">
            <div class="" id="dc_6" style="" href="?c=index&m=login">
                <div class="card card-body">

                    <!--contenido inicio -->
                    <a class="dropdown-item" href="?c=index&m=login">
                        <i class="fa fa-lock"></i> Cerrar Sesion</a>


                    <!--contenido inicio -->

                </div>
            </div>
        </div>





    </div>
    </form>
</main>