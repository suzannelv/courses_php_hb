<?php

require_once __DIR__ . '/classes/Email.php';
require_once __DIR__ . '/classes/Utils.php';
require_once __DIR__ . '/classes/EmailError.php';
require_once __DIR__ . '/classes/SpamChecker.php';
require_once __DIR__ . '/classes/EmailFile.php';


if(!isset($_POST['email'])) {
    Utils::redirect('newsletter.php');
}


$emailsFilePath = __DIR__ . "/emails.txt";

try {
    $email = new Email($_POST['email']);
    // vérifier spam
    $spamChecker = new SpamChecker();
    if($spamChecker->isSpam($email)) {
        throw new InvalidArgumentException(code:EmailError::SPAM);
    }
    // ajouter + check doublon

    $emailFile = new EmailFile();
    $emailFile->add($email, $emailsFilePath);

} catch (InvalidArgumentException $e) {
    Utils::redirect('newsletter.php?error=' . $e->getCode());
}
