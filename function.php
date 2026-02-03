//functions.php
<?php
/* =========================
   READ USERS FROM FILE
========================= */
function getUsers($file) {
    $users = [];
    if (file_exists($file)) {
        $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            $parts = explode(":", $line);
            if (count($parts) === 4) {
                list($name, $email, $username, $hashedPassword) = $parts;
                $users[$username] = [
                    "name" => $name,
                    "email" => $email,
                    "password" => $hashedPassword
                ];
            }
        }
    }
    return $users;
}

/* =========================
   PASSWORD VALIDATION
   (using str_contains)
========================= */
function isValidPassword($password) {
    $hasUpper = false;
    $hasLower = false;
    $hasNumber = false;
    $hasSpecial = false;

    foreach (str_split($password) as $char) {
        if (str_contains("ABCDEFGHIJKLMNOPQRSTUVWXYZ", $char)) $hasUpper = true;
        if (str_contains("abcdefghijklmnopqrstuvwxyz", $char)) $hasLower = true;
        if (str_contains("0123456789", $char)) $hasNumber = true;
        if (str_contains("!@#$%^&*()-_=+[]{};:'\",.<>/?\\|`~", $char)) $hasSpecial = true;
    }

    return strlen($password) >= 6
        && $hasUpper
        && $hasLower
        && $hasNumber
        && $hasSpecial;
}