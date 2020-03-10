<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\UserRegister;
use App\Utility;

/**
 * Register Controller:
 *
 * @author Sergey Lukin <contact@lukin.site>
 */
class Reg extends Controller
{

    /**
     * Index: Renders the register view.
     * @access public
     * @return void
     * @example register/index
     */
    public function index()
    {

        // Check that the user is unauthenticated.
        Utility\Auth::checkUnauthenticated();

        // Set any dependencies, data and render the view.
        $this->view->render("reg", [
            "page" => "reg",
            "title" => LANG_REGISTRATION_TITLE
        ]);
    }

    /**
     * Register: Processes a create account request.
     * @access public
     * @return void
     * @example register/_register
     */
    public function _register()
    {

        // Check that the user is unauthenticated.
        Utility\Auth::checkUnauthenticated();

        // Process the register request, redirecting to the login controller if
        // successful or back to the register controller if not.
        if (UserRegister::register()) {
            Utility\Redirect::to(APP_URL . "login");
        }
        Utility\Redirect::to(APP_URL . "reg");
    }

}
