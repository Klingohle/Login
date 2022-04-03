<?php

function fetchEntries($reverse = false)
{
    if (file_exists(PATH)) {
        $entries = unserialize(file_get_contents(PATH));
        if ($reverse === true) {
            $entries = array_reverse($entries);
        }
    } else {
        $entries = [];
    }

    return $entries;
}

function redirect($url)
{
    header('Location: ' . $url);
    exit;
}

function isLoggedIn()
{
    return isset($_SESSION['logged_in']);
}

function logIn($username)
{
    $_SESSION['logged_in'] = $username;
}

function logOut()
{
    unset($_SESSION['logged_in']);
}
