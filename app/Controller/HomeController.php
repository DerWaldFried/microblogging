<?php

class HomeController extends Controller
{
    public function index(): string
    {
        // Add necessary CSS assets
        Asset::addCss('/assets/css/main.css');
        Asset::addCss('/assets/css/home.css');

        // Render the home view with data
        return $this->view('home', [
            'title' => 'FabelMicroblog - Startseite',
            'message' => 'Welcome to FabelMicroblog!'
        ]);
    }
}
