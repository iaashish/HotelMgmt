<?php

namespace App\Http\Middleware;

use Closure;
use Lavary\Menu\Menu;

class GenerateMenus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {


        \Menu::make('MyNavBar', function ($menu) {
        $menu->add('Home' ,'#home',['class' => 'active', 'id' => 'home']);
        $menu->add('About',['url' => 'managerhome#about']);
        $menu->add('Services', '#messages');
        $menu->add('Contact', '#settings');
    });


        return $next($request);
    }
}
