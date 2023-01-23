<?php 

class Customer{
    private $firstname = "Arka";
    private $lastname = "Bumantara";

    public function __call($first, $last)
    {
        $this->firstname = $first;
        $this->lastname = $last;
        
    }
}

$customer = new Customer;
var_dump($customer);

?>