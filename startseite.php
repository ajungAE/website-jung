<?php
require_once __DIR__ . '/config/twig.php'; // Include the Twig configuration file
 
echo $twig->render('pages/startseite.html.twig', [ // Render the template
    'title' => 'Startseite'
]);
?>