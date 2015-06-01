<?php

use FormFramework\Classes\Formulaire;
//use FormFramework\Classes\Widget;
use FormFramework\Classes\Widget\WidgetText\WidgetText;
use FormFramework\Classes\Widget\WidgetText\WidgetTextConcret\WidgetPassword;
use FormFramework\Classes\Widget\WidgetText\WidgetTextConcret\WidgetDate;
use FormFramework\Classes\Widget\WidgetText\WidgetTextConcret\WidgetMail;
use FormFramework\Classes\Widget\WidgetText\WidgetTextConcret\WidgetSubmit;
use FormFramework\Classes\Widget\WidgetText\WidgetTextConcret\WidgetURL;
use FormFramework\Classes\Widget\WidgetText\WidgetTextConcret\WidgetTel;
use FormFramework\Classes\Widget\WidgetText\WidgetTextConcret\WidgetNumber;
use FormFramework\Classes\Widget\WidgetList\WidgetList;

// Fonction d'autoloading
spl_autoload_register(function ($class) {

    // project-specific namespace prefix
    $prefix = 'FormFramework';

    // base directory for the namespace prefix
    $base_dir = __DIR__;

    // does the class use the namespace prefix?
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        // no, move to the next registered autoloader
        return;
    }

    // get the relative class name
    $relative_class = substr($class, $len);

    // replace the namespace prefix with the base directory, replace namespace
    // separators with directory separators in the relative class name, append
    // with .php
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    // if the file exists, require it
    if (file_exists($file)) {
        require $file;
    }
});
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css" />
        <title>iTechSup - Formulaire</title>
    </head>
    <body>
        <?php
        
        $form = new Formulaire('post', '', 'Formulaire');
        
        // AJOUTER ICI LES WIDGETS AU FORMULAIRE : add_Widget(new Type(label, nom));
        $form->add_Widget(new WidgetText("Nom :", "nom"));
        $form->add_Widget(new WidgetText("Prenom :", "prenom"));
        $form->add_Widget(new WidgetPassword("Mot de passe :", "mdp"));
        $form->add_Widget(new WidgetDate("Date :", "date"));
        $form->add_Widget(new WidgetMail("Adresse mail :", "mail"));
        $form->add_Widget(new WidgetList("Liste bidon :", "list", array("1element", "2elements")));
        //$form->add_Widget(new WidgetURL("Site internet :", "url"));
        //$form->add_Widget(new WidgetTel("Telephone :", "tel"));
        //$form->add_Widget(new WidgetNumber("Nombre :", "num"));
        $form->add_Widget(new WidgetSubmit("Envoyer", "submit"));

        if (!empty($_POST)) {
            $form->bind($_POST);
        }
        
        echo $form->render();
        
        // en mode test
        $form->showTest();

        ?>
    </body>
</html>
