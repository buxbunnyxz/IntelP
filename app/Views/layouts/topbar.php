<!-- app/Views/layouts/topbar.php -->
<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>
    <div class="navbar-collapse collapse justify-content-end">
        <ul class="navbar-nav navbar-align align-items-center">
            <!-- Language Switcher Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle" href="#" id="langDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <span style="font-size:1.2em;"><?= $_SESSION['lang'] === 'fr' ? '🇫🇷' : '🇺🇸' ?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="langDropdown">
                    <a class="dropdown-item" href="/lang/en"><span style="font-size:1.2em;">🇺🇸</span> English</a>
                    <a class="dropdown-item" href="/lang/fr"><span style="font-size:1.2em;">🇫🇷</span> Français</a>
                </div>
            </li>
            <!-- User initials and name, no dropdown -->
            <li class="nav-item d-flex align-items-center ms-3">
                <span class="avatar avatar-sm rounded-circle bg-primary text-white fw-bold d-flex justify-content-center align-items-center" style="width:32px; height:32px; font-size:1.1rem;">IM</span>
                <span class="ms-2 text-dark fw-semibold">Ismail Merdjaoui</span>
            </li>
            <!-- Logout button with power icon -->
            <li class="nav-item ms-3">
                <a href="/logout" class="btn btn-outline-secondary btn-sm" title="<?= t('logout') ?>">
                    <i class="align-middle" data-feather="power"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>
