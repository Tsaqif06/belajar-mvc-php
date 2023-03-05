<?php 
class App {
    public function __construct() {
        $url = rtrim($this->getParseURL(), '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode("/", $url);
        var_dump($url);
    }

    public function getParseURL() {
        if (isset($_GET['url'])) {
            return $_GET['url'];
        }
    }
}
