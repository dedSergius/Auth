<?php

namespace App\Models;

use Exception;
use App\Utility;

/**
 * User Register Model:
 *
 * @author Sergey Lukin <contact@lukin.site>
 */
class UserRegister
{

    /** @var array The register form inputs. */
    private static $_inputs = [
        "username" => [
            "required" => true,
            "unique" => "users"
        ],
        "email" => [
            "filter" => "email",
            "unique" => "users"
        ],
        "password" => [
            "min_characters" => 6,
            "required" => true
        ],
        "password_repeat" => [
            "matches" => "password",
            "required" => true
        ],
        "agreement" => [
            "required" => true
        ]
    ];

    /**
     * Register: Validates the register form inputs, creates a new user in the
     * database and writes all necessary data into the session if the
     * registration was successful. Returns the new user's ID if everything is
     * okay, otherwise turns false.
     * @access public
     * @return boolean
     */
    public static function register()
    {

        // Validate the register form inputs.
        if (!Utility\Input::check($_POST, self::$_inputs)) {
            return false;
        }
        try {

            // Generate a salt, which will be applied to the during the password
            // hashing process.
            $salt = Utility\Hash::generateSalt(32);

            // Insert the new user record into the database, storing the unique
            // ID which will be returned on success.
            $User = new User;
            if (Utility\Input::file("avatar")) {
                $avatar_name = $User->updateAvatar(Utility\Input::file("avatar"));
            }

            $userID = $User->createUser([
                "username" => Utility\Input::post("username"),
                "firstname" => Utility\Input::post("firstname"),
                "password" => Utility\Hash::generate(Utility\Input::post("password"), $salt),
                "email" => Utility\Input::post("email"),
                "salt" => $salt,
                "surname" => Utility\Input::post("surname"),
                "dob" => date('Y-m-d', strtotime(str_replace('-', '/', Utility\Input::post("dob")))),
                "gender" => Utility\Input::post("gender"),
                "avatar" => $avatar_name
            ]);

            // Write all necessary data into the session as the user has been
            // successfully registered and return the user's unique ID.
            Utility\Flash::success(Utility\Text::get("REGISTER_USER_CREATED"));
            return $userID;
        } catch (Exception $ex) {
            Utility\Flash::danger($ex->getMessage());
        }
        return false;
    }

}
