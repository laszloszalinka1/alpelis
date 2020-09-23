<?php

/**
 * Class HomeController
 */
class HomeController
{

    public function index()
    {
    	require 'views/layout.php';
    	require 'views/sidebar.php';
    	require 'views/home.php';

    }
}