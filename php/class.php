<?php
// Encapsulation
class BanckAccount{
    private  $balance  = 0;
    public $testAmount = 99999;
    public function deposit($amount){
        if($amount > 0){
            $this->balance +=$amount;
        };
    }
    public function getBalance(){
        return $this->balance ;
    }
};
$account = new BanckAccount();
$account->deposit(1000);
echo $account->getBalance();
// echo $account->balance;//i cant access this because this is private variable
echo $account->testAmount;


// Inheritance
class Animal{
    public function eat(){
        echo "Animal is Eating"
    }
}

class Dog extends Animal{
    public function bark(){
        echo "Dog is Braking";
    }
}

$dog = new Dog();
$dog->eat();
$dog->brak();


// Polymorphism
class Animal
{
    public function sound()
    {
        echo "Some sound";
    }
}

class Dog extends Animal
{
    public function sound()
    {
        echo "Bark";
    }
}

class Cat extends Animal
{
    public function sound()
    {
        echo "Meow";
    }
}
?>


