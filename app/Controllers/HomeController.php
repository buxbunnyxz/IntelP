<?php

class HomeController
{
    public function index()
    {
        // Set the page title (translation ready)
        $pageTitle = t('blank_page');
        // Optionally, set the current language (e.g., 'en')
        $lang = $_SESSION['lang'] ?? 'en';

        // Start output buffer for the main content
        ob_start();
        include __DIR__ . '/../Views/home/index.php'; // The view is pure content
        $content = ob_get_clean();

        // Now render the main layout with all variables available
        include __DIR__ . '/../Views/layouts/main.php';
    }
}
