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
        //dd($survey);
        /*if(!str_contains($path,'/admin/user/surveyfillers/'.$survey)){
            return redirect(route('loginadmin'))->withErrors(['error' => 'You do not have permission']);
        }*/
        if(str_contains($path,'/admin/survey/show')){
            if($userID != Auth::id() and !$userRoles->contains('admin')){
                return redirect(route('loginadmin'))->withErrors(['error' => 'You do not have permission']);
            }
        }
        else if(str_contains($path,'/admin/user/surveyfillers/')){
            if($userID != Auth::id() and !$userRoles->contains('admin')){
                return redirect(route('loginadmin'))->withErrors(['error' => 'You do not have permission to see surveyees']);
            }
        }
        else if(str_contains($path,'survey/create') or str_contains($path,'category/create')){
            if(!$userRoles->contains('admin') and !$userRoles->contains('creator'))
                return redirect(route('loginadmin'))->withErrors(['error' => 'You do not have permission to create']);
        }
        else if (!$userRoles->contains('admin') and
        str_contains($path,'/admin/user')){
            return redirect(route('loginadmin'))->withErrors(['error' => 'You do not have permission']);
        }

        return $next($request);
    }
}
