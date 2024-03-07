<?php

function verifyEmail(string $email): bool
{

    if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }

    $emailParts = explode('@', $email);
    $domain = $emailParts[1];
    $host = gethostbyname($domain);

    return $host != $domain;
}
