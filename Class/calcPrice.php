<?php 

class calcPrice{
    public $numDinner   = 30;
    public $numDessert  = 10;
    public $numDrink    = 10;
    public $bill;

 public function Dinner($person)
{
   $this->bill += $this->numDinner * $person;// عدد الاشخاص في سعر العشاء
   return $this;
}

public function Dessert($person)
{
   $this->bill += $this->numDessert * $person;// عدد الاشخاص في سعر الحلا
   return $this;
}

public function Drink($person)
{
   $this->bill += $this->numDrink * $person;// عدد الاشخاص في سعر المشروبات
   return $this;
}

}


?>


