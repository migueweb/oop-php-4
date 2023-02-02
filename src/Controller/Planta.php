<?php
namespace App\Controller;

require 'Employe.php';

class Planta extends Employe
{

    private float $deductions;
    private float $basicSalary;
    private float $extraValue;

    public function __construct($name, $position)
    {
        parent::__construct($name, $position);
    }

    public function calculateSalary()
    {
        return $this->salary = $this->basicSalary + $this->extraValue - $this->deductions;
    }


    /**
     * Get the value of deductions
     */
    public function getDeductions()
    {
        return $this->deductions;
    }

    /**
     * Get the value of basicSalary
     */
    public function getBasicSalary()
    {
        return $this->basicSalary;
    }

    /**
     * Get the value of extraValue
     */
    public function getExtraValue()
    {
        return $this->extraValue;
    }

    /**
     * Set the value of deductions
     *
     * @return  self
     */
    public function setDeductions($deductions)
    {
        $this->deductions = $deductions;

        return $this;
    }

    /**
     * Set the value of basicSalary
     *
     * @return  self
     */
    public function setBasicSalary($basicSalary)
    {
        $this->basicSalary = $basicSalary;

        return $this;
    }

    /**
     * Set the value of extraValue
     *
     * @return  self
     */
    public function setExtraValue($extraValue)
    {
        $this->extraValue = $extraValue;

        return $this;
    }
}
