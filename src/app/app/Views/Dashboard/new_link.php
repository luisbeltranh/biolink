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
                        <?= validation_list_errors() ?>

                        <div class="mb-3">
                            <?= form_label('Título (Campo requerido)', 'titulo', ['class' => 'form-label']) ?>
                            <?php
                            if (validation_show_error('titulo') == '') {
                                echo form_input('titulo', set_value('titulo'), ['class' => 'form-control', 'id' => 'titulo']);
                            } else {
                                echo form_input('titulo', set_value('titulo'), ['class' => 'form-control is-invalid', 'id' => 'titulo']);
                            }
                            ?>
                        </div>
                        <div class="mb-3">
                            <?= form_label('URL del enlace (Campo requerido)', 'enlace_url', ['class' => 'form-label']) ?>
                            <?php
                            if (validation_show_error('enlace_url') == '') {
                                echo form_input('enlace_url', set_value('enlace_url'), ['class' => 'form-control', 'id' => 'enlace_url']);
                            } else {
                                echo form_input('enlace_url', set_value('enlace_url'), ['class' => 'form-control is-invalid', 'id' => 'enlace_url']);
                            }
                            ?>

                            <?= form_hidden('tipo', '1') ?>
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