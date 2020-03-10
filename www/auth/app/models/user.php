<?php

namespace App\Models;

use App\Core\Model;
use Exception;


/**
 * User Model:
 *
 * @author Sergey Lukin <contact@lukin.site>
 */
class User extends Model
{

    /**
     * Create User: Inserts a new user into the database, returning the unique
     * user if successful, otherwise returns false.
     * @access public
     * @param array $fields
     * @return string|boolean
     * @throws Exception
     */
    public function createUser(array $fields)
    {
        if (!$userID = $this->create("users", $fields)) {
            throw new Exception("Ошибка создания юзера");
        }
        return $userID;
    }

    /**
     * Get Instance: Returns an instance of the User model if the specified user
     * exists in the database.
     * @access public
     * @param string $user
     * @return User|null
     */
    public static function getInstance($user)
    {
        $User = new User();
        if ($User->findUser($user)->exists()) {
            return $User;
        }
        return null;
    }

    /**
     * Find User: Retrieves and stores a specified user record from the database
     * into a class property. Returns true if the record was found, or false if
     * not.
     * @access public
     * @param string $user
     * @return Model
     */
    public function findUser($user)
    {
        $field = filter_var($user, FILTER_VALIDATE_EMAIL) ? "email" : (is_numeric($user) ? "id" : "username");
        return ($this->find("users", [$field, "=", $user]));
    }


    /**
     * Update User: Updates a specified user record in the database.
     * @access public
     * @param array $fields
     * @param integer $userID [optional]
     * @return void
     * @throws Exception
     */
    public function updateUser(array $fields, $userID = null)
    {
        if (!$this->update("users", $fields, $userID)) {
            throw new Exception("Ошибка обновления юзера");
        }
    }

    /**
     * Update Avatar: Updates user avatar
     * @access public
     * @param object
     * @return string
     * @throws Exception
     */
    public function updateAvatar($file)
    {
        $type = "";
        $hash = \App\Utility\Hash::generate(rand());
        switch ($file["type"]) {
            case "image/jpeg":
                $type = ".jpg";
                break;
            case "image/png":
                $type = ".png";
                break;
            case "image/gif":
                $type = ".gif";
                break;
            default:
                \App\Utility\Flash::danger(LANG_UPLOAD_ERROR);
        }
        if (!move_uploaded_file($file["tmp_name"], __DIR__ . "/../../public/images/avatars/" . $hash . $type)) {
            \App\Utility\Flash::danger(LANG_UPLOAD_ERROR);
            return "";
        } else return $hash . $type;
    }

}
