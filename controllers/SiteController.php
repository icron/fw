<?php

class SiteController extends Controller {

    public function indexAction()
    {
       $this->title = 'Главная страница';
       $this->render('site/index');
    }

    public function createQuestionAction()
    {
        //isset($_POST['...']);
        $pdo->execute('INSERT questions ....');
        //...
        $this->render('..');
    }

    public function aboutAction()
    {
        $this->title = 'Об авторе';
        $this->render('site/about');
    }
}