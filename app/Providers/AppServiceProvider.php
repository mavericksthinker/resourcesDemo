<?php

namespace App\Providers;

use Illuminate\Http\Resources\Json\Resource;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /** This will disable the wrapping of the data_structure with data returned in resources , but only if there is no additional siblings
         * Sample
         * {
             "id": 3,
             "name": "Sandy Will",
             "location": "7794 Rae Run Suite 764\nLake Tamia, NJ 99163"
           }
         * 
         * Rather than
         * 
         * {
             "data": {
                "id": 3,
                "name": "Sandy Will",
                "location": "7794 Rae Run Suite 764\nLake Tamia, NJ 99163"
              }
           }
         */
        
        //Resource::withoutWrapping();
        
        /**
         * If you want to control the name of the wrapper for the data_structure
         * 
         * Sample
         * {
             "items": {
                 "id": 3,
                 "name": "Sandy Will",
                 "location": "7794 Rae Run Suite 764\nLake Tamia, NJ 99163"
              }
            }
         * You can give any name as you desire based on the requirements
         */
        
        Resource::wrap('items');

    }
}
