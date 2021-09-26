<?php 

    function component($name, $folder = '') {
        require "views" . ("/$folder" ?? '') . "/components/$name.php";
    }

    include 'views/home.view.php';