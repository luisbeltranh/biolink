<div class="app-content"> <!--begin::Container-->
    <div class="container-fluid"> <!--begin::Row-->
        <div class="row justify-content-center pb-4">
            <div class="col-lg-5">
                <a class="btn btn-primary btn-lg col-12" href="<?php echo base_url('dashboard/new_link') ?>">Nuevo Enlace</a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="list-group" id="enlaceid">
                    <?php
                    foreach ($enlaces as $enlace) {
                    ?>
                        <div class="info-box list-group-item"> <span class="info-box-icon"> <i class="bi bi-arrows-vertical handle"></i> </span>

                            <div class="info-box-content">
                                <span class="info-box-text"><?php echo $enlace['titulo']; ?></span>
                                <span class="info-box-number"><a href="<?php echo $enlace['enlace_url']; ?>"><?php echo $enlace['enlace_url']; ?></a></span>
                                <span class="progress-description">
                                    <a class="icon-link link-primary" href="#">
                                        <i class="bi bi-pencil-square" style="font-size: 1.2rem;"></i>
                                    </a>
                                    <a class="icon-link link-danger px-3" href="/dashboard/erase_link/<?= $enlace['id']; ?>">
                                        <i class="bi bi-trash3" style="font-size: 1.2rem;"></i>
                                    </a>
                                </span>
                            </div> <!-- /.info-box-content -->
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>


    </div> <!--end::Container-->
</div> <!--end::App Content-->
</main> <!--end::App Main--> <!--begin::Footer-->

</div> <!--end::App Wrapper--> <!--begin::Script-->