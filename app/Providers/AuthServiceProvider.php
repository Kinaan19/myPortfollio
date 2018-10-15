<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\ServiceTitle;
use App\ServiceItem;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('serviceSectionTitle', function() {
            $services = ServiceTitle::find(1);
            return $service->state == 1;
        });
        Gate::define('serviceItemIcon', function() {
            $services = ServiceItem::find($id);
            return $service->state_icon == 1;
        });
        Gate::define('serviceItemTitle', function() {
            $services = ServiceItem::find($id);
            return $service->state_title == 1;
        });
        Gate::define('serviceItemText', function() {
            $services = ServiceItem::find($id);
            return $service->state_text == 1;
        });
    }
}
