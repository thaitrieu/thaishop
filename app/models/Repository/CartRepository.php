<?php

class CartRepository implements CartRepositoryInterface
{
	public $cart;

	public function __construct(Cart $cart)
	{
		$this->cart = $cart;
	}

	public function addItems()
	{
		
	}
}