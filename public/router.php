<?php



$page_uri = $_SERVER['REQUEST_URI'];

class AppRouter
{

    public function __construct(
        public string $page_title = "My Website",
    ) {
    }

    public function get_page_title()
    {
        return $this->page_title;
    }
}



readonly class ExampleClass
{

    public function __construct()
    {
        echo "This is the constructor";
    }

    public function example_method(): void
    {
        echo "This is an example method";
    }

    public static function example_static_method(): void
    {
        echo "<h1> This is an h1 tag!  </h1>";
    }
}