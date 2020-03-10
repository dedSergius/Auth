<?php

namespace App\Controllers;

/**
 * Language Controller:
 *
 * @author Sergey Lukin <contact@lukin.site>
 */
class Lang extends \App\Core\Controller
{
    /**
     * Change: Changes the language of the site.
     * @access public
     * @return void
     * @example lang/change?l=langcode
     */
    function change()
    {
        \App\Core\Lang::changeLanguage($_GET['l']);
    }
}

?>