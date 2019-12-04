<?php

namespace App\Providers;

use App\Policies\ServicePolicy;
use App\Policies\CarPolicy;
use App\Policies\ImagePolicy;
use App\Models\Car;
use App\Models\Service;
use App\Models\Image;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider {

    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Post::class => PostPolicy::class,
        Service::class => ServicePolicy::class,
        Car::class => CarPolicy::class,
        Image::class => ImagePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot() {
        $this->registerPolicies();

        //
    }

}
