<?php

class User
{
    // constante n'est pas obligé de les rendre privée vu qu'ils ne sont pas modifiables
    public const FIRSTNAME_THEN_NAME = 0;
    public const NAME_THEN_FIRSTNAME = 1;

    // propritété
    private string $name;
    private string $firstname;
    private DateTime $birthDate;
    private bool $isActive;

    public function __construct(string $name, string $firstname, DateTime $birthDate, bool $isActive=true)
    {
        $this->name = $name;
        $this->firstname=$firstname;
        $this->birthDate=$birthDate;
        $this->isActive =$isActive;
    }

    public function getBirthDate()
    {
        return $this->birthDate;
    }
    /**
     * return user's fullname
     *
     * @param int $order format order
     * @return string format 'name firstname'
     */
    public function getFullName(int $order=self::FIRSTNAME_THEN_NAME): string
    {

        if($order === self::NAME_THEN_FIRSTNAME) {
            return $this->name . ' ' . $this->firstname;
        }
        return $this->firstname . ' ' . $this->name;
    }

}
