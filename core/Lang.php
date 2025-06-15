<?php
// Language Loader
function t($key) {
    global $lang_data; // or use your lang loader logic
    return $lang_data[$key] ?? $key;
}
