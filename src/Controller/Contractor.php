<?php
namespace App\Controller;

require 'Employe.php';

class Contractor extends Employe
{

    private int $hoursTotal;
    private float $hourValue;

    public function __construct($name, $position)
    {
        parent::__construct($name, $position);
    }

    public function calculry($hourValue, $hoursTotal)
    {
        $this->salary = $hourValue * $hoursTotal;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of position
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Get the value of salary
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Get the value of hoursTotal
     */
    public function getHoursTotal()
    {
        return $this->hoursTotal;
    }

    /**
     * Get the value of hourValue
     */
    public function getHourValue()
    {
        return $this->hourValue;
    }

    /**
     * Set the value of hoursTotal
     *
     * @return  self
     */
    public function setHoursTotal($hoursTotal)
    {
        $this->hoursTotal = $hoursTotal;

        return $this;
    }

    /**
     * Set the value of hourValue
     *
     * @return  self
     */
    public function setHourValue($hourValue)
    {
        $this->hourValue = $hourValue;

        return $this;
    }
}
