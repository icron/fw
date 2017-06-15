<?php

class Controller {
    protected $layout = 'main';
    protected $title = '';

    protected function render($view)
    {
        $title = $this->title;
        $viewPath = App::getRoot() . 'views/' . $view . '.php';
        $content = View::renderFile($viewPath, true);
        require App::getRoot() . 'views/layouts/' . $this->layout . '.php';
    }
}