<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Else_;
use PhpParser\Node\Stmt\If_;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $path = $request->getPathInfo();
        $userRoles = Auth::user()->roles->pluck('name');
        If (!$userRoles->contains('admin') and $path == '/admin/user' or $path == '/admin/user/'){
            return redirect(route('loginadmin'))->withErrors(['error' => 'You do not have permission']);
        }

        return $next($request);
    }
}
