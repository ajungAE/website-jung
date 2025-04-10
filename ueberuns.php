<?php
require_once __DIR__ . '/config/twig.php'; // Include the Twig configuration file

echo $twig->render('pages/ueberuns.html.twig', [ // Render the template
    'title' => 'Über uns'
]);
