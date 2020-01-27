<?php
declare(strict_types=1);

namespace In2it\Drinks;

class Coffee
{
    private const COFFEE_CUP_IS_FULL = true;

    /**
     * @var bool
     */
    private $coffee;

    /**
     * Coffee constructor. We always start with a full
     * cup of steaming coffee.
     */
    public function __construct()
    {
        $this->coffee = self::COFFEE_CUP_IS_FULL;
    }

    /**
     * As long the cup is full, we are not empty.
     *
     * @return bool
     */
    public function isEmpty(): bool
    {
        return ! $this->coffee;
    }

    /**
     * Refill the cup only when the coffee is not full,
     * otherwise throw an exception.
     *
     * @throws \DomainException
     */
    public function refill(): void
    {
        if (self::COFFEE_CUP_IS_FULL === $this->coffee) {
            throw new \DomainException('We can not refill your cup of coffee as it is still filled.');
        }
        $this->coffee = self::COFFEE_CUP_IS_FULL;
    }

    /**
     * When the cup is full you can drink it
     *
     * @throws \DomainException
     */
    public function drink(): void
    {
        if (! $this->coffee) {
            throw new \DomainException('We can not drink from an empty cup, please refill first');
        }
        $this->coffee = false;
    }
}
