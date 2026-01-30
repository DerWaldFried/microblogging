<?php

class HomeController extends Controller
{
    public function index(): string
    {
        Asset::addCss('/assets/css/main.css');
        Asset::addCss('/assets/css/home.css');

        return $this->view('home', [
            'title' => 'FabelMicroblog - Startseite',
            'message' => 'Welcome to FabelMicroblog!'
        ]);
    }
}
