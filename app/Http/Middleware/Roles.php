<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Roles
{
    public function handle(Request $request, Closure $next, $role)
    {

        if (Auth::user()->$role != 1) {
            return redirect('admin')->with('warning', 'Operación no autorizada');
        }

        return $next($request);
    }
}
