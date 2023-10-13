<?php

// définition de la classe Product
// Structure générale
class Product
{
    private string $name;
    private float $priceVatFree;
    private int $quantity;
    private bool $discount;

    // Donner son prix TTC

    /**
     * gives product's price including taxes
     *
     * @param float $taxRate  between 0 and 1
     * @return float Full price (including given taxes)
     */
    public function getFullPrice(float $taxRate): float
    {
        if($taxRate >0 && $taxRate < 1) {
            return $this->priceVatFree * $taxRate;
        }
        return $this->priceVatFree;
    }

    public function getName(): string
    {
        return strtoupper($this->name);
    }
    // setter
    public function setPriceVatFree(float $price): void
    {
        if($price >=0) {
            $this->priceVatFree = $price;
        }

    }

    /**
     * Get the value of quantity
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * Set the value of quantity
     */
    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }
}
