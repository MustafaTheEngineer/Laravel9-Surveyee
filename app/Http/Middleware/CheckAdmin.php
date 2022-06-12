<?php

namespace App\Http\Middleware;

use App\Models\survey;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Else_;
use PhpParser\Node\Stmt\ElseIf_;
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
        $survey = survey::find($request->id);
        $userID=0;
        if($survey)
            $userID = $survey->user_id;
        
        
        $userRoles = Auth::user()->roles->pluck('name');

        if(str_contains($path,'/admin') and !$userRoles->contains('admin') and !$userRoles->contains('creator')){
            return redirect(route('loginadmin'))->withErrors(['error' => 'You do not have permission']);
        }
        else if(str_contains($path,'/admin/survey/show')){
            if($userID != Auth::id() and !$userRoles->contains('admin')){
                return redirect(route('loginadmin'))->withErrors(['error' => 'You do not have permission']);
            }
        }
        else if(str_contains($path,'/admin/user/surveyfillers/')){
            if($userID != Auth::id() and !$userRoles->contains('admin')){
                return redirect(route('loginadmin'))->withErrors(['error' => 'You do not have permission to see surveyees']);
            }
        }
        else if(str_contains($path,'/admin/user/users')){
            if(!$userRoles->contains('admin')){
                return redirect(route('loginadmin'))->withErrors(['error' => 'You do not have permission to see users']);
            }
        }
        else if(str_contains($path,'/admin/user/creators')){
            if(!$userRoles->contains('admin') and !$userRoles->contains('creator')){
                return redirect(route('loginadmin'))->withErrors(['error' => 'You do not have permission to see all users']);
            }
        }
        else if(str_contains($path,'/admin/user')){
            if(!$userRoles->contains('admin')){
                return redirect(route('loginadmin'))->withErrors(['error' => 'You do not have permission to see all users']);
            }
        }

        return $next($request);
    }
}
