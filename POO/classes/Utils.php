<?php



// méthode statique dans la classe -> si c'est une méthode très généraliste
class Utils
{
    public static function redirect(string $location): void
    {
        header('Location: ' . $location);
        exit;
    }
}
