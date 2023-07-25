namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ExtractId
{
    public function handle(Request $request, Closure $next)
    {
        $id = $request->id;

        if ($id) {
            $request->id = $id;
        }

        return $next($request);
    }
}
