<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class IsAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        $id = Auth::id();
        $usernow = User::where('id', $id)->first();

        if ($usernow->role !== 'admin') {
            return redirect('/');
        }
        return $next($request);
    }
}
