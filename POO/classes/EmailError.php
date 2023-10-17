<?php

class EmailError
{
    public const EMPTY     = 1;
    public const INVALID   = 2;
    public const DUPLICATE = 3;
    public const SPAM      = 4;

    public function getErrorMessage(int $errorCode): string
    {
        return match ($errorCode) {
            self::EMPTY => "L'email est obligatoire",
            self::INVALID => "Le format de l'email est incorrect",
            self::DUPLICATE => "L'email existe déjà dans la newsletter",
            self::SPAM => "Désolé, cet email n'est pas accepté dans notre newsletter",
            default => "Une erreur est survenue"
        };
    }
}
