<?php
namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Support\ServiceProvider;

class FilamentServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Filament::serving(function () {
            $user = auth()->user();
            if (! $user || ! in_array($user->role, [
                'super_admin','admin','manajemen','pelatih','asisten_pelatih','manajer_tim'
            ])) {
                abort(403);
            }
        });
    }
}
