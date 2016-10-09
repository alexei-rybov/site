<?php
class Router
{

    private $routes;

    // Получает список маршрутов и записывает их в $routes
    public function __construct()
    {
        $scanned_directory = array_diff(scandir('works'), array('..', '.'));
        $this->routes = $scanned_directory;
    }

    // Получает вводимый пользователем uri
    private function getUri()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], "/");
        }
    }

    public function userInformation() {
        $ip = $_SERVER['REMOTE_ADDR'];
        $date = date('H:i d-m-Y', time() + 60*60*3);
        $browser = $_SERVER['HTTP_USER_AGENT'];
        $write_file = scandir('visitors');
        $file = $write_file[2];
        $file_name = explode('.', $file)[0] + 1;

        $resource = fopen('visitors/' . $file, 'a');
        fwrite($resource, $file_name . "\r\n" . $date  . "\r\n" . $_SERVER['REQUEST_URI'] . "\r\n" . $ip . "\r\n" . $browser . "\r\n" . " " . "\r\n". " " . "\r\n");
        fclose($resource);
        rename('visitors/' . $file, 'visitors/' . $file_name . ".txt");
    }

    public function run()
    {
        $uri = $this->getUri();
        $explode = explode('/', $uri);
        $first_part = $explode[0];
        // Проходимся по списку маршрутов и смотрим есть ли в них совпадение с введенным пользователем uri
        foreach ($this->routes as $path) {
            if($path == $first_part) {
                echo "yes";
            }

        }
    }

}
