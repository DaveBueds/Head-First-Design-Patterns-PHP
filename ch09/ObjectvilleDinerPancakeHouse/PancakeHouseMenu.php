<?php

class PancakeHouseMenu {

    private $menuItems = array(); // arrayList ;)

    public function __construct() {

        $this->addItem("K&B’s Pancake Breakfast",
            "Pancakes with scrambled eggs, and toast ",
            true,
            2.99);

        $this->addItem("Regular Pancake Breakfast",
            "Pancakes with fried eggs, sausage",
            false,
            2.99);

        $this->addItem("Blueberry Pancakes",
            "Pancakes made with fresh blueberries",
            true,
            3.49);

        $this->addItem("Waffles",
            "Waffles, with your choice of blueberries or strawberries",
            true,
            3.59);
    }

    public function addItem(string $name,
        string $description,
        bool $vegetarian,
        float $price) {

        $item = new MenuItem($name, $description, $vegetarian, $price);
        array_push($this->menuItems, $item);
    }

    public function getMenuItems() : array {
        return $this->menuItems;
    }


    public function createIterator() {
        return new PancakeHouseMenuIterator($this->menuItems);
    }
}