<?php
/**
 * Created by PhpStorm.
 * User: tt
 * Date: 23-09-2014
 * Time: 15:18
 */

namespace Models\Providers;

use Illuminate\Support\ServiceProvider;


class RepositoryServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->app->bind(
            'Models\Repository\ProductRepositoryInterface',
            'Models\Repository\ProductRepository'
        );
    }
} 