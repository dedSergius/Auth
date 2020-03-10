<?php

return [
    // 
    // Core Config
    // =========================================================================
    "DATABASE_HOST" => "192.168.99.100:3306",
    "DATABASE_NAME" => "test_db",
    "DATABASE_USERNAME" => "root",
    "DATABASE_PASSWORD" => "secret",
    // 
    // Cookie Config
    // =========================================================================
    "COOKIE_DEFAULT_EXPIRY" => 604800,
    "COOKIE_USER" => "user",
    "" => "",
    // 
    // Session Config
    // =========================================================================
    "SESSION_ERRORS" => "errors",
    "SESSION_FLASH_DANGER" => "danger",
    "SESSION_FLASH_INFO" => "info",
    "SESSION_FLASH_SUCCESS" => "success",
    "SESSION_FLASH_WARNING" => "warning",
    "SESSION_TOKEN" => "token",
    "SESSION_TOKEN_TIME" => "token_time",
    "SESSION_USER" => "user",
    "" => "",
    // 
    // Texts Config
    // =========================================================================
    "TEXTS" => [
        // 
        // Login Model Texts
        // =====================================================================
        "LOGIN_INVALID_PASSWORD" => LANG_LOGIN_INVALID_PASSWORD,
        "LOGIN_USER_NOT_FOUND" => LANG_LOGIN_USER_NOT_FOUND,
        "" => "",
        // 
        // Register Model Texts
        // =====================================================================
        "REGISTER_USER_CREATED" => LANG_REGISTER_USER_CREATED,
        "" => "",
        // 
        // User Model Texts
        // =====================================================================
        "USER_CREATE_EXCEPTION" => LANG_USER_CREATE_EXCEPTION,
        "USER_UPDATE_EXCEPTION" => LANG_USER_UPDATE_EXCEPTION,
        "" => "",
        // 
        // Input Utility Texts
        // =====================================================================
        "INPUT_INCORRECT_CSRF_TOKEN" => LANG_INPUT_INCORRECT_CSRF_TOKEN,
        "" => "",
        // 
        // Validate Utility Texts
        // =====================================================================
        "VALIDATE_FILTER_RULE" => "%ITEM% " . LANG_VALIDATE_FILTER_RULE . " %RULE_VALUE%!",
        "VALIDATE_MISSING_INPUT" => LANG_VALIDATE_MISSING_INPUT . " %ITEM%!",
        "VALIDATE_MISSING_METHOD" => LANG_VALIDATE_MISSING_METHOD . " %ITEM%!",
        "VALIDATE_MATCHES_RULE" => "%RULE_VALUE% " . LANG_VALIDATE_MATCHES_RULE . " %ITEM%.",
        "VALIDATE_MAX_CHARACTERS_RULE" => "%ITEM% " . LANG_VALIDATE_MAX_CHARACTERS_RULE_1 . " %RULE_VALUE% " . LANG_VALIDATE_MAX_CHARACTERS_RULE_2 . ".",
        "VALIDATE_MIN_CHARACTERS_RULE" => "%ITEM% " . LANG_VALIDATE_MIN_CHARACTERS_RULE_1 . " %RULE_VALUE% " . LANG_VALIDATE_MIN_CHARACTERS_RULE_2 . ".",
        "VALIDATE_REQUIRED_RULE" => LANG_VALIDATE_REQUIRED_RULE . " %ITEM%",
        "VALIDATE_UNIQUE_RULE" => "%ITEM% " . LANG_VALIDATE_UNIQUE_RULE . ".",
        "" => "",
        // 
        // Texts
        // =====================================================================
        "" => "",
    ],
    // 
    // Config
    // =========================================================================
    "" => "",
];
