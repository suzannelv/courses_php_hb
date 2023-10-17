<?php

require_once 'Email.php';
require_once 'EmailError.php';
require_once 'Utils.php';
class EmailFile
{
    public function add(Email $email, string $filePath)
    {
        $emails = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        if(in_array($email->getEmail(), $emails)) {
            throw new InvalidArgumentException(code:EmailError::DUPLICATE);
        } else {
            Utils::redirect('subscription_confirm.php');
        }
    }

}
