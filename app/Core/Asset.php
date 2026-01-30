<?php

class Asset
{
    private static array $css = [];

    public static function addCss(string $path): void
    {
        self::$css[] = $path;
    }

    public static function renderCss(): string
    {
        $html = '';

        foreach (array_unique(self::$css) as $css) {
            $html .= '<link rel="stylesheet" href="' 
                  . htmlspecialchars($css) 
                  . '">' . PHP_EOL;
        }

        return $html;
    }
}
