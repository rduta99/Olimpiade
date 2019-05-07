
<nav class="uk-navbar-container uk-visible@m uk-padding uk-padding-remove-vertical" uk-navbar>
    <div class="uk-navbar-left">
        <a class="uk-navbar-item uk-logo" href="#">O L M</a>
    </div>
    
    <div class="uk-navbar-right">
        <ul class="uk-navbar-nav uk-visible@m">
            <li><a href="<?= base_url() ?>">Beranda</a></li>
        </ul>

        <div class="uk-navbar-item uk-visible@m">
            
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
    </div>
    <button type="button" onclick="UIkit.notification({message: 'Password dan konfirmasi tidak sama', status: 'warning', pos: 'top-right', timeout: 5000 })" id="alerts" class="uk-hidden"></button>
    <button type="button" onclick="UIkit.notification({message: 'Username/password salah', status: 'danger', pos: 'top-right', timeout: 5000 })" id="alerts3" class="uk-hidden"></button>
    <button type="button" onclick="UIkit.notification({message: 'Password tidak boleh kosong', status: 'danger', pos: 'top-right', timeout: 5000 })" id="alerts4" class="uk-hidden"></button>
    <button type="button" onclick="UIkit.notification({message: 'NIM harus diisi', status: 'warning', pos: 'top-right', timeout: 5000 })" id="alerts1" class="uk-hidden"></button>
    <button type="button" onclick="UIkit.notification({message: 'NIM telah digunakan', status: 'warning', pos: 'top-right', timeout: 5000 })" id="alerts2" class="uk-hidden"></button>
</div>

