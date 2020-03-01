<?php

namespace App\Helpers;

class ViewHelper
{
    public const DEFAULT = 'app';

    public static function showPage(string $view, array $var = []): void
    {
        ob_start();
        require './Resources/Views/' . $view . '.php';
        $content = ob_get_clean();
        require './Resources/Views/' . self::DEFAULT . '.php';
    }
}