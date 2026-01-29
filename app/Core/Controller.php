<?php

abstract class Controller
{
    protected function view(string $template, array $data = []) {
        $view = new View($template, $data);
        return $view->render();
    }
}