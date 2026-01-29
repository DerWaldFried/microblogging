<?php

class HomeController extends Controller
{
    public function index(): string {
        return $this->view('home', [
                'title' => 'FabelMicroblog - Startseite',
                'message' => 'Welcome to FabelMicroblog!'
            ]);
    }
}