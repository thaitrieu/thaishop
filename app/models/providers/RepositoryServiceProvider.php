<?php
/**
 * Created by PhpStorm.
 * User: tt
 * Date: 23-09-2014
 * Time: 15:18
 */

//namespace Models\Providers;

use Illuminate\Support\ServiceProvider;


class RepositoryServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->app->bind(
            'ProductRepositoryInterface',
            function() {
                return new ProductRepository();
            }
        );

        $this->app->bind('UserRepositoryInterface', 'UserRepository');

        $this->app->bind('ManufacturerRepositoryInterface', 'ManufacturerRepository');

        $this->app->bind('CartRepositoryInterface', 'CartRepository');
    }
} 