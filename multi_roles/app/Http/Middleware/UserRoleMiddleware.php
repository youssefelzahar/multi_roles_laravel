<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Auth;

class UserRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     
    // Add custom parameter $role which pass from Route.php
    public function handle(Request $request, Closure $next, $role)
    {
        // Check & verify with route, you will more understand
        if(Auth::check() && Auth::user()->roles == $role)
        {
            return $next($request);
        }
        
        return response()->json(['You do not have permission to access for this page.']);
    }
}