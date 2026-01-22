namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddlewares
{
    public function handle(Request $request, Closure $next)
    {
        // 🔐 auth middleware ne user set kiya hota hai
        if (!auth()->check()) {
            abort(401);
        }

        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        return $next($request);
    }
}