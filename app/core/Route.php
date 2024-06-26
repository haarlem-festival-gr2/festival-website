<?php
/*
 * This is a library which handles routing
 * Static functions are used to maximise the
 * developer experience. It is inspired by
 * Laravel, however I do take my own approach
 */

namespace Core\Route;

use Jenssegers\Blade\Blade;
use Model\User;

require_once __DIR__.'/../model/User.php';

enum ErrorCode
{
    case NOT_FOUND;
}

enum Method
{
    case GET;
    case POST;
    case ALL;
    case DELETE;

    /**
     * @return array<mixed>
     */
    public function props(): array
    {
        switch ($this) {
            case Method::GET:
                return $_GET;
            case Method::POST:
                return $_POST;
            case Method::ALL:
                return ['get' => $_GET, 'post' => $_POST];
            case Method::DELETE:
                return $_GET;
        }
    }

    public function compare(): bool
    {
        $req_method = $_SERVER['REQUEST_METHOD'];
        switch ($this) {
            case Method::GET:
                return $req_method == 'GET';
            case Method::POST:
                return $req_method == 'POST';
            case Method::ALL:
                return true;
            case Method::DELETE:
                return $req_method == 'DELETE';
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
    }

    /*
     * @return array<string>
     */
    private static function get_paths(): array
    {
        $url = parse_url($_SERVER['REQUEST_URI']);

        return $url;
    }

    /**
     * @param  callable(array<string>): mixed  $callback
     */
    public static function start_router(callable $callback): void
    {
        $currentUrl = $_SERVER['REQUEST_URI'];

        // Remove query parameters if they exist
        if (($pos = strpos($currentUrl, '?')) !== false) {
            $currentUrl = substr($currentUrl, 0, $pos);
        }

        $routes = explode('/', trim($currentUrl, '/'));

        if ($routes[0] == '') {
            $routes[0] = 'index';
        }

        $callback($routes);
    }

    /**
     * @param  callable(array): void  $callback
     */
    public static function serve(string $path, callable $callback, Method $method = Method::GET): void
    {
        ob_start(self::class.'::buffer_cb');

        @session_start();
        if ($method->compare()) {
            $props = $method->props();
            $props['_headers'] = getallheaders();
            $props['_slots'] = 'TODO';
            $callback($props);
        }
        self::end_buffer();
    }

    public static function auth(): User|false
    {
        if (isset($_SESSION['auth'])) {
            return $_SESSION['auth'];
        } else {
            return false;
        }
    }

    /**
     * @param  array<string,mixed>  $data
     */
    public static function render(string $page, array $data): void
    {
        $blade = self::get_blade();

        $blade->directive('auth', function () {
            return '<?php if(isset($_SESSION[\'auth\'])): ?>';
        });

        $blade->directive('authguest', function () {
            return '<?php if(!isset($_SESSION[\'auth\'])): ?>';
        });

        $blade->directive('endauth', function () {
            return '<?php endif ?>';
        });

        echo $blade->render($page, $data);
    }

    /**
     * @param  array<string,mixed>  $data
     */
    public static function template(string $page, array $data): string
    {
        $blade = self::get_blade();

        return $blade->render($page, $data);
    }

    /**
     * @param  array<string,mixed>  $data
     */
    public static function json(array $data): void
    {
        header('Content-Type: application/json');
        echo json_encode($data);
    }

    /**
     * This function never returns
     */
    public static function redirect(string $route): void
    {
        if (isset(getallheaders()['Hx-Request'])) {
            header('Hx-Redirect: '.$route);
        } else {
            header('Location: '.$route);
        }
        exit;
    }

    public static function error(ErrorCode $code): void
    {
        switch ($code) {
            case ErrorCode::NOT_FOUND:
                header('HTTP/1.0 404 Not Found');
                echo '404 - Page Not Found';
                break;

            default:
                break;
        }
    }
}
