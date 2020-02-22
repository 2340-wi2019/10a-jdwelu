<?php

    /*
    Plugin Name: 2340 Sample Plugin
    Plugin URI: https://faculty.mccneb.edu/grosas/
    Description: A sample plugin for INFO 2340.
    Version: 1.0
    Author: Guillermo J. Rosas
    Author URI: https://faculty.mccneb.edu/grosas/
    License: GPL
    */

    add_shortcode("wittyquote", "get_quote");

    function get_quote($atts) {
        $quotes = array (
            "Whether you think you can or think \n you can't, you're right. \n  ~ Henry Ford",
            "It is far better to be alone, \n than to be in bad company. \n  ~ George Washington",
            "You can't build a reputation on \n what you're going to do. \n  ~ Henry Ford",
            "Genius is one percent inspiration, \n ninety-nine percent perspiration. \n  ~ Thomas Alva Edison",
            "Do your own thinking independently. \n Be the chess player, not the chess piece. \n  ~ Ralph Charell"
        );

        return $quotes[array_rand($quotes)];
    }