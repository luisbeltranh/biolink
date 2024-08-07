<body>
    <div id="preloader">
        <div id="status">
            <div class="spinner">Loading...</div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg custom-nav">
        <div class="container" style="max-width: 680px">

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto" id="main_nav">
                    <li class="nav-item form-check form-switch">
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="container" style="max-width: 680px" id="header-section">
        <div class="col-lg-12">
            <div class="mt-0">
                <img class="rounded-circle img-fluid mx-auto d-block" src="/assets/user/images/1.jpg" alt="Profile Picture">
            </div>

            <div class="header-content text-center mx-auto">
                <h4 class="custom-text-color-primary header-text mb-2 mt-3">Bruce Parker </h4>
                <p class="custom-text-color-secondary subheader-text mb-2">Desarrollo de Software</p>
            </div>
        </div>
    </div>

    <div class="container" style="max-width: 680px" id="main-buttons">
        <div class="mt-3 pt-2">
            <a href="/ejemplo/square" style="width: 100%" class="btn btn-round btn-custom">Portafolio <i class="bi bi-code-square"></i></a>
        </div>
        <div class="mt-3 pt-2">
            <a href="/ejemplo/video" style="width: 100%" class="btn btn-round btn-custom">WhatsApp <i class="bi bi-whatsapp"></i></a>
        </div>
        <div class="mt-3 pt-2">
            <a href="/ejemplo/gradiente" style="width: 100%" class="btn btn-round btn-custom">Sitio Web <i class="bi bi-browser-chrome"></i></a>
        </div>
        <div class="mt-3 pt-2">
            <button style="width: 100%" class="btn btn-round btn-custom" data-bs-toggle="modal" data-bs-target="#exampleModal">Github <i class="bi bi-github"></i></button>
        </div>

    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title custom-text-color-primary" id="exampleModalLabel">Contact Me 📨</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mt-2">
                        <div class="col-lg-12">
                            <div class="form-treelink contact_form">
                                <div id="message"></div>
                                <form method="post" action="https://treelink.jperez.ca/assets/php/contact.php" name="contact-form" id="working_form">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group mt-2">
                                                <input name="name" id="name" type="text" class="form-control" placeholder="Name...">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mt-2">
                                                <input name="email" id="email" type="email" class="form-control" placeholder="Email Address...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group mt-2">
                                            <input type="text" class="form-control" id="subject" placeholder="Subject..." />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group mt-2">
                                                <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Message..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 text-center mt-3 mb-4">
                                            <button type="button" style="width: 30%;" class="btn btn-round btn-custom" data-bs-dismiss="modal">Close</button>
                                            <input type="reset" id="reset" name="reset" class="resetBnt btn btn-round btn-custom" value="Clear">
                                            <input type="submit" style="width: 30%;" id="submit" name="send" class="submitBnt btn btn-round btn-custom" value="Send">
                                            <div id="simple-msg"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="footer">
        <div class="col-md-12">
            <div class="mb-4 text-center">
                <div>
                    <ul class="about-social list-inline mt-5 text-center">
                        <li class="list-inline-item"><a href="#" target="_blank"><i class="bi bi-instagram"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="#" target="_blank"><i class="bi bi-twitter-x"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="#" target="_blank"><i class="bi bi-threads"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="#" target="_blank"><i class="bi bi-tiktok"></i></a></li>
                        <li class="list-inline-item"><a href="#" target="_blank"><i class="bi bi-meta"></i></a></li>
                    </ul>
                </div>
                <p class="custom-text-color-secondary footer-text mb-5 mt-3">©2023 - Bruce Wayne</p>
            </div>
        </div>
    </div>
    <a href="#home" class="back_top" style="border-radius: 50%;"><i class="bi bi-chevron-up"></i></a>