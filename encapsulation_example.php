<?php

/**
 * 
 * In this example, we have a Car class encapsulating the properties $model and $year. 
 * Both properties are marked as private, meaning they can only be accessed within the Car class itself.
 * This encapsulates the internal state of the Car object, preventing direct access from outside the class.
 * This demonstrates encapsulation by hiding the internal state of the Car object (the model and year properties) 
 * and providing controlled access to it through setter and getter methods
 */
class Car {
    private $model;  // hides object to set it private
    private $year;

    // Setter method for the model
    public function setModel($model) {  // exposes using public methods
        $this->model = $model;
    }

    // Getter method for the model
    public function getModel() {
        return $this->model;
    }

    // Setter method for the year
    public function setYear($year) {
        if ($year >= 1900 && $year <= date("Y")) {
            $this->year = $year;
        } else {
            echo "Invalid year!";
        }
    }

    // Getter method for the year
    public function getYear() {
        return $this->year;
    }
}

// Creating a new Car object
$car = new Car();

// Setting the model and year using setter methods
$car->setModel("Toyota Camry");
$car->setYear(2022);

// Retrieving the model and year using getter methods
echo "Model: " . $car->getModel() . "<br>"; // Output: Model: Toyota Camry
echo "Year: " . $car->getYear(); // Output: Year: 2022


// Encapsulation in real world
class BankAccount {
    private $balance;
    private $accountNumber;

    public function __construct($accountNumber, $initialBalance) {
        $this->accountNumber = $accountNumber;
        $this->balance = $initialBalance;
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Deposited $amount. New balance: $this->balance" . PHP_EOL;
        } else {
            echo "Invalid amount for deposit." . PHP_EOL;
        }
    }

    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            echo "Withdrawn $amount. New balance: $this->balance" . PHP_EOL;
        } else {
            echo "Invalid amount for withdrawal or insufficient balance." . PHP_EOL;
        }
    }

    public function getBalance() {
        return $this->balance;
    }

    // Example of encapsulation: hiding account number
    public function getAccountNumber() {
        return $this->accountNumber;
    }
}

// Usage
$account = new BankAccount('123456789', 1000);
echo "Account Number: " . $account->getAccountNumber() . PHP_EOL;
echo "Initial Balance: " . $account->getBalance() . PHP_EOL;

$account->deposit(500);
$account->withdraw(200);

