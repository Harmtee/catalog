<?php
// BaseController.php
namespace App\Controllers;

class Controller {
    protected function render($page, $data = []) {
        $file = __DIR__ . '/../resources/views/' . $page . '.php';
        if (file_exists($file)) {
            extract($data);
            require $file;
        } else {
            $this->notFound();
        }
    }
    
    public function notFound()
    {
        header("HTTP/1.0 404 Not Found");
        $this->render('404');
    }
}
