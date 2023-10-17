<?php

require_once 'Email.php';


class SpamChecker
{
    private const SPAM_DOMAINS = ["test.com", "hello.fr", "demo.com", "free.cn"];

    public function isSpam(Email $email): bool
    {
        return array_search($email->getDomain(), self::SPAM_DOMAINS) !== false;
        //  return array_search($email->getDomain(), self::SPAM_DOMAINS)===true;

    }
}
