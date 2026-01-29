<?php
class Template
{
    public static function render(string $content, string $title = 'Meine Seite'): void
    {
        require __DIR__ . '/../../templates/layout.php';
    }
}
