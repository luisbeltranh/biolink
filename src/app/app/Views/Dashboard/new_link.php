<div class="app-content"> <!--begin::Container-->
    <div class="container-fluid"> <!--begin::Row-->
        <div class="row justify-content-center pb-4">
            <div class="col-lg-5">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <div class="card-title">
                            Nuevo Enlace
                        </div>
                    </div>
                    <?php echo form_open('dashboard/new_link') ?>

                    <div class="card-body">
                        <div class="mb-3">
                            <?= form_label('Título', 'tituloEnlace', ['class' => 'form-label']) ?>
                            <?= form_input('tituloEnlace', set_value('nombre_empresa'), ['class' => 'form-control', 'id' => 'tituloEnlace']) ?>
                        </div>
                        <div class="mb-3">
                            <?= form_label('URL del enlace', 'urlEnlace', ['class' => 'form-label']) ?>
                            <?= form_input('urlEnlace', '', ['class' => 'form-control', 'id' => 'urlEnlace']) ?>
                            <?= form_hidden('tipoEnlace', '1') ?>
                        </div>
                    </div>
                    <div class="card-footer">
                        <?= form_submit('guardar', 'Guardar', ['class' => 'btn btn-primary']) ?>
                    </div>

                    <?php echo form_close() ?>
                </div>

            </div>
        </div>
    </div> <!--end::Container-->
</div> <!--end::App Content-->
</main> <!--end::App Main--> <!--begin::Footer-->

</div> <!--end::App Wrapper--> <!--begin::Script-->