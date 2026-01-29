<?php

class View
{
    private string $template;
    private array $data;

    public function __construct(string $template, array $data = []) {
        $this->template = $template;
        $this->data = $data;
    }

    public function render():string {
        extract($this->data);
        
        ob_start();
        
        include __DIR__ . '/../../templates/' . $this->template . '.php';
        return ob_get_clean();
    }
}