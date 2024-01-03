<?php

function View($view)
{
    // On récupère le chemin du fichier de vue
    $path = dirname(__FILE__) . '/views/cars' . $view . '.php';

    // On vérifie que le fichier existe
    if (!file_exists($path)) {
        throw new Exception('Le fichier de vue "' . $view . '.php" n\'existe pas.');
    }

    // On inclut le fichier de vue
    ob_start();
    include $path;
    $content = ob_get_clean();

    // On retourne le contenu du fichier de vue
    return require $content;
}
