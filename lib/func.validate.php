<?php

if (!defined('IN_EZRPG'))
    exit;

/*
  Title: Validation functions
  This file contains functions you can use to validate player data: username, password, email, etc.
 */

/*
  Function: isUsername
  Checks the length and format of the username.

  Parameters:
  $username - The value to check if it's a username.

  Returns:
  Boolean - true or false
 */

function isUsername($username) {
    return (preg_match("/^[a-zA-Z0-9_]{4,16}$/", $username));
}

/*
  Function: isPassword
  Checks if the length of the password is long enough.

  Parameters:
  $password - The value to check

  Returns:
  Boolean - true or false
 */

function isPassword($password) {
    return (preg_match("/[a-zA-Z0-9\W]{6}+/", $password));
}

/*
  Function: isEmail
  Checks if the email is valid

  Parameters:
  $email - The value to check

  Returns:
  Boolean - true or false
 */

function isEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}