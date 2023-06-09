<?php

namespace App\Http\Middleware;

use App\Models\Users\User;
use Auth;
use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;


class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }

    public function handle($request, Closure $next, ...$guards)
    {
        $guards = collect($guards)->flatten()->first();

        $handle = parent::handle($request, $next, $guards);

        if (extension_loaded('newrelic')) {
            /** @var User $user */
            $user = Auth::user();
            newrelic_add_custom_parameter('user.id', $user->id);
            newrelic_set_user_attributes($user->email, $user->name, 'Urbit');
        }

        return $handle;
    }
}
