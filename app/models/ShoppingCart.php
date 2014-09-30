<?php
/**
 * Created by PhpStorm.
 * User: tt
 * Date: 30-09-2014
 * Time: 14:32
 */

class ShoppingCart implements Iterator, Countable {

    protected $items = [];

    protected $position = 0;
    protected $ids = [];

    public function isEmpty()
    {
        return (empty($this->items));
    }

    public function addItem(Item $item) {
        // Need the item id:
        $id = $item->getId();

        //Throw an exception if there's no id:
        if(!$id){
            throw new Exception('Indkøbskurven skal bruge en unik ID');
        }

        if (isset($this->items[$id])) {
            $this->updateItem($item, $this->items[$item]['qty'] + 1);
        } else {
            $this->items[$id] = ['item' => $item, 'qty' => 1];
            $this->ids[] = $id; //er ikke sikker på den skal være her
        }
    }

    public function updateItem(Item $item, $qty) {
        // Need the unique item id:
        $id = $item->getId();

        // Delete or update accordingly:
        if ($qty === 0) {
            $this->deleteItem($item);
        } elseif (($qty > 0) && ($qty != $this->items[$id]['qty'])) {
            $this->items[$id]['qty'] = $qty;
        }
    }

    public function deleteItem(Item $item)
    {
        $id = $item->getId();

        if(isset($this->items[$id])) {
            unset($this->items[$id]);

            // er ikke sikker på det skal ind her
            $index = array_search($id, $this->ids);
            unset($this->ids[$index]);

            // same with this (ind her?)
            $this->ids = array_values($this->ids);
        }
    }

    /*
     * Metoder til Iterator og Countable
     */

    public function count()
    {
        return count($this->items); //tæller ikke alle samme, implementer en loop for at gøre dette
    }

    public function current()
    {
        $index = $this->ids[$this->position];
        return $this->items[$index];
    }

    public function key()
    {
        return $this->position;
    }

    public function next()
    {
        $this->position++;
    }

    public function rewind()
    {
        $this->position = 0;
    }

    public function valid()
    {
        return (isset($this->ids[$this->position]));
    }


} 