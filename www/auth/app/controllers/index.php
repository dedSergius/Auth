<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\User;
use App\Utility;

/**
 * Mainpage Controller:
 *
 * @author Sergey Lukin <contact@lukin.site>
 */
class Index extends Controller
{
    /**
     * Index: Renders the mainpage (profile) view.
     * @access public
     * @return void
     * @example register/index
     */
    function index()
    {
        // Check that the user is authenticated.
        Utility\Auth::checkAuthenticated();

        // Get an instance of the user model using the ID stored in the session.
        $userID = Utility\Session::get(Utility\Config::get("SESSION_USER"));
        if (!$User = User::getInstance($userID)) {
            Utility\Redirect::to(APP_URL);
        }
        $this->view->render("profile", [
            "title" => $User->data()->firstname . " " . $User->data()->surname,
            "user" => $User->data()
        ]);
    }

}

?>