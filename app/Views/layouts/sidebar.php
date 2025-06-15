<!-- app/Views/layouts/sidebar.php -->
<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="/">
            <span class="align-middle"><?= t('app_name') ?></span>
        </a>
        <ul class="sidebar-nav">
            <li class="sidebar-header">
                <?= t('pages') ?>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle"><?= t('dashboard') ?></span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/profile">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle"><?= t('profile') ?></span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/login">
                    <i class="align-middle" data-feather="log-in"></i> <span class="align-middle"><?= t('sign_in') ?></span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/signup">
                    <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle"><?= t('sign_up') ?></span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/blank">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle"><?= t('blank') ?></span>
                </a>
            </li>
            <li class="sidebar-header">
                <?= t('tools_components') ?>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/buttons">
                    <i class="align-middle" data-feather="square"></i> <span class="align-middle"><?= t('buttons') ?></span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/forms">
                    <i class="align-middle" data-feather="check-square"></i> <span class="align-middle"><?= t('forms') ?></span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/cards">
                    <i class="align-middle" data-feather="grid"></i> <span class="align-middle"><?= t('cards') ?></span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/typography">
                    <i class="align-middle" data-feather="align-left"></i> <span class="align-middle"><?= t('typography') ?></span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/icons">
                    <i class="align-middle" data-feather="coffee"></i> <span class="align-middle"><?= t('icons') ?></span>
                </a>
            </li>
            <li class="sidebar-header">
                <?= t('plugins_addons') ?>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/charts">
                    <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle"><?= t('charts') ?></span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/maps">
                    <i class="align-middle" data-feather="map"></i> <span class="align-middle"><?= t('maps') ?></span>
                </a>
            </li>
        </ul>
        <div class="sidebar-cta">
            <div class="sidebar-cta-content">
                <strong class="d-inline-block mb-2"><?= t('upgrade_to_pro') ?></strong>
                <div class="mb-3 text-sm">
                    <?= t('more_components_promo') ?>
                </div>
                <div class="d-grid">
                    <a href="https://adminkit.io/pro" class="btn btn-primary"><?= t('upgrade_to_pro_button') ?></a>
                </div>
            </div>
        </div>
    </div>
</nav>
