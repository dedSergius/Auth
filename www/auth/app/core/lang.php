<?php

namespace App\Core;

/**
 * Core Language:
 *
 * @author Sergey Lukin <contact@lukin.site>
 */
class Lang
{
    public static $lang = "ru";
    public static $langs = [];

    /**
     * Get Longuage: Gets language from user
     * @access public
     * @return string
     */
    public static function getLanguage()
    {
        if (isset($_COOKIE['lang'])) {
            return $_COOKIE['lang'];
        } else return self::$lang;
    }

    /**
     * Get Longuage Object: Retrieves a language object from a language file
     * @access public
     * @return object|boolean
     */
    public static function getLangObject($lang)
    {
        if (file_exists(__DIR__ . "/../langs/" . $lang . ".lang")) {
            return json_decode(file_get_contents(__DIR__ . "/../langs/" . $lang . ".lang"));
        }
        return false;
    }

    /**
     * Set Longuage: Sets the language
     * @access public
     * @return void
     */
    public static function setLanguage($lang)
    {
        if ($lang_object = self::getLangObject($lang)) {
            foreach (get_object_vars($lang_object->lang_array) as $key => $value) {
                define($key, $value);
            }
            setcookie("lang", $lang, time() + 3600, '/');
        } else setcookie("lang", self::$lang, time() + 3600, '/');
    }

    /**
     * Change Longuage: Changes language
     * @access public
     * @return void
     */
    public static function changeLanguage($lang)
    {
        self::setLanguage($lang);
    }

    /**
     * Load Longuage: Loads a list of languages
     * @access public
     * @return array
     */
    public static function loadLanguages()
    {
        $langs = [];
        $langfiles = scandir(__DIR__ . "/../langs/");
        foreach ($langfiles as $lang) {
            if (preg_match("/(.*)\.lang/", $lang, $math)) {
                $lang_object = self::getLangObject($math[1]);
                $lang_name = $lang_object->lang_name;
                $lang_code = $lang_object->lang_code;
                $langs[$lang_code] = $lang_name;
            }
        }

        return $langs;
    }

    /**
     * Get Longuage Locale: Gets the locale for the specified language
     * @access public
     * @return string
     */
    public static function getLangLocale($lang)
    {
        $lang_object = self::getLangObject($lang);
        return $lang_object->lang_locale;
    }
}

?>