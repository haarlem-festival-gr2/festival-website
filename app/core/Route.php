<?php
/*
 * This is a library which handles routing
 * Static functions are used to maximise the
 * developer experience. It is inspired by
 * Laravel, however I do take my own approach
 */

namespace Core\Route;

use Jenssegers\Blade\Blade;

enum Method
{
    case GET;
    case POST;
}

class MethodImpl
{
    public static function compare(Method $method): bool {
        $req_method = $_SERVER["REQUEST_METHOD"];
        switch ($method) {
            case Method::GET:
                return $req_method == "GET";
            case Method::POST:
                return $req_method == "POST";
            default:
                return false;
        }
    }
}

class Route
{
    private static Blade $blade;

    private function __construct()
    {
    }

    private static function get_blade(): Blade
    {
        if (! isset(self::$blade)) {
            self::$blade = new Blade(__DIR__.'/../pages', '/tmp/festival');
        }

        return self::$blade;
    }

    private static function buffer_cb(string $buffer): string
    {
        return $buffer;
    }

    public static function end_buffer(): void
    {
        ob_end_flush();
        exit;
    }

    public static function start_router(): void
    {
        ob_start(self::class.'::buffer_cb');
        $routes = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
    }

    /**
     * @param  callable(array): void  $callback
     */
    public static function serve(string $path, callable $callback, Method $method = Method::GET): void
    {
        if (MethodImpl::compare($method)) {
            $callback([]);
            self::end_buffer();
        }
    }

    /**
     * @param  array<string,mixed>  $data
     */
    public static function render(string $page, array $data): void
    {
        $blade = self::get_blade();
        echo $blade->render($page, $data);
    }

    public static function redirect(): void
    {
    }
}
