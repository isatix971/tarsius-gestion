
<script>
    //jquery

    $(function () {
        $("#nomEmpresa").autocomplete({
            source: "<?php echo site_url('utils/get_clientes'); ?>" // path to the get_birds method
        });

    });


</script>
<section class="main-content-wrapper">
    <section id="main-content">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Entrega de pedido</h3>

                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal form-border" method="post" action="<?php echo base_url(); ?>index.php/main/?fun=almacenarContactoCliente">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Pedido</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="nombre de cliente" required="" id="nomEmpresa" name="nomEmpresa" class="form-control" value="<?php echo $_SESSION["nombre"]; ?>">                                        
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">DETALLES</label>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Envases vacios devueltos</label>
                                <div class="col-sm-6">
                                    <input type="number" placeholder="Envases vacios devueltos" required="" id="nombreContacto" name="nombreContacto" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Ingresar Guia</label>
                                <div class="col-sm-6">
                                    <input type="number" placeholder="Ingresar Guia" required="" id="correoContacto" name="correoContacto" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Ingresar Factura</label>
                                <div class="col-sm-6">
                                    <input  type="number" placeholder="Ingresar Factura" required="" id="rutContacto" name="rutContacto" class="form-control">
                                </div>
                            </div>
<!--                            <div class="form-group">
                                <label class="col-sm-3 control-label">Telefono</label>
                                <div class="col-sm-6">
                                    <input type="number" placeholder="9 digitos" required="" id="telefonoContacto" name="telefonoContacto" class="form-control">
                                </div>
                            </div>-->

                            <div class="form-group">
                                <div class="col-sm-offset-8 col-sm-10">
                                    <input class="btn btn-primary" type="submit" value="Enviar" >
                                    <!--                                    <button type="" class="btn btn-primary" onclick="validar()">Enviar</button>-->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

    </section>
</section>

