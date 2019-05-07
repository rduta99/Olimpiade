<!-- 
<nav class="uk-navbar-container uk-visible@m uk-padding uk-padding-remove-vertical" uk-navbar>
    <div class="uk-navbar-left">
        <a class="uk-navbar-item uk-logo" href="#">T E C H P H O R I A</a>
    </div>
    
    <div class="uk-navbar-right">
        <ul class="uk-navbar-nav uk-visible@m">
            <li><a href="<?= base_url() ?>">Beranda</a></li>
        </ul>

        <div class="uk-navbar-item uk-visible@m">
            <?php $user = $this->session->userdata('username'); if(!isset($user)) { ?>
            <button class="uk-button uk-button-primary" type="button" uk-toggle="target: #login-modal">
                Masuk
            </button>
            <?php } else { ?>
            <a class="uk-button uk-button-primary" href="<?= site_url('logout') ?>">
                Keluar
            </a>
            <?php } ?>
            -->
            <div id="login-modal" uk-modal>
                <div class="uk-modal-dialog uk-margin-auto-vertical">
                    <button class="uk-modal-close-default" type="button" uk-close></button>
                    <div class="uk-modal-header">
                        <legend class="uk-text-center uk-legend">Masuk</legend>
                    </div>

                    <div class="uk-modal-body">
                        <form action="<?= site_url('login') ?>" id="login" method="post">
                            <div class="uk-margin">
                                <input type="text" placeholder="NIM" id="login_user" name="nim" class="uk-input">
                            </div>
                            <div class="uk-margin">
                                <input type="password" placeholder="Password" id="login_pass" name="password" class="uk-input">
                            </div>
                            <div class="uk-margin uk-text-center">
                                <button type="button" onclick="login()" class="uk-button uk-button-primary uk-width-100">Masuk</button>
                            </div>
                        </form>
                    </div>

                    <div class="uk-modal-footer uk-text-center">
                        Belum punya akun? <a href="#register-modal" uk-toggle>Daftar di sini</a>
                    </div>
                </div>
            </div>

            <div id="register-modal" uk-modal>
                <div class="uk-modal-dialog uk-margin-auto-vertical">
                    <button class="uk-modal-close-default" type="button" uk-close></button>
                    <div class="uk-modal-header">
                        <legend class="uk-text-center uk-legend">Daftar</legend>
                    </div>

                    <div class="uk-modal-body">
                        <form action="<?= site_url('register') ?>" id="register" method="post">
                            <div class="uk-margin">
                                <input type="text" id="nim" name="nim" placeholder="NIM" class="uk-input">
                            </div>
                            <div class="uk-margin">
                                <input type="password" id="password" name="password" placeholder="Password" class="uk-input">
                            </div>
                            <div class="uk-margin">
                                <input type="password" id="conf_password" placeholder="Confirm Password" class="uk-input">
                            </div>
                            <div class="uk-margin uk-text-center">
                                <button type="button" onclick="confirm_password()" class="uk-button uk-button-primary uk-width-100">Daftar</button>
                            </div>
                        </form>
                    </div>

                    <div class="uk-modal-footer uk-text-center">
                        Sudah punya akun? <a href="#login-modal" uk-toggle>Masuk di sini</a>
                    </div>
                </div>
            </div> <!--
        </div>
    </div>
</nav>

<nav class="uk-navbar-container uk-navbar-transparent uk-hidden@l" uk-navbar>
    <div class="uk-navbar-left">
        <a class="uk-navbar-item uk-logo" href="#">T E C H P H O R I A</a>
    </div>
    
    <div class="uk-navbar-right">
        <a class="uk-navbar-toggle" uk-toggle="target: #offcanvas-slide">
            <span uk-navbar-toggle-icon></span>
        </a>
    </div>
</nav>

<div id="offcanvas-slide" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar" style="background-color: #472639">
        <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
            <li class="uk-nav-header">Menu Utama</li>
            <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: home"></span> Beranda</a></li>
            <li class="uk-nav-divider"></li>
            <?php if(!isset($user)) { ?>
            <li><a uk-toggle="target: #login-modal"><span class="uk-margin-small-right" uk-icon="icon: sign-in"></span> Masuk</a></li>
            <?php } else { ?>
            <li><a href="<?= site_url('logout') ?>"><span class="uk-margin-small-right" uk-icon="icon: sign-out"></span> Keluar</a></li>
            <?php } ?>
        </ul>
    </div> -->
    <button type="button" onclick="UIkit.notification({message: 'Password dan konfirmasi tidak sama', status: 'warning', pos: 'top-right', timeout: 5000 })" id="alerts" class="uk-hidden"></button>
    <button type="button" onclick="UIkit.notification({message: 'Username/password salah', status: 'danger', pos: 'top-right', timeout: 5000 })" id="alerts3" class="uk-hidden"></button>
    <button type="button" onclick="UIkit.notification({message: 'Password tidak boleh kosong', status: 'danger', pos: 'top-right', timeout: 5000 })" id="alerts4" class="uk-hidden"></button>
    <button type="button" onclick="UIkit.notification({message: 'NIM harus diisi', status: 'warning', pos: 'top-right', timeout: 5000 })" id="alerts1" class="uk-hidden"></button>
    <button type="button" onclick="UIkit.notification({message: 'NIM telah digunakan', status: 'warning', pos: 'top-right', timeout: 5000 })" id="alerts2" class="uk-hidden"></button>
<!-- </div> -->

