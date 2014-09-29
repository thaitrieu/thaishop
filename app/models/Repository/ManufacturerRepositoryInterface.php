<?php
/**
 * Created by PhpStorm.
 * User: tt
 * Date: 29-09-2014
 * Time: 09:10
 */

interface ManufacturerRepositoryInterface {
    public function getAll();

    public function getManufacturerProducts($id);
} 