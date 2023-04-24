<?php
class Page {
    // create all attributes are private
    private $page;
    private $title;
    private $year;
    private $copyright;


    public function __construct($title, $year, $copyright) {
        $this->title = $title;
        $this->year = $year;
        $this->copyright = $copyright;
        $this->addHeader();
    }

    private function addHeader() {
        $this->page .= "<html>\n\t<head><title>$this->title</title></head>\n\t<body>";
    }

    private function addFooter() {
        $this->page .= "\n\t<hr>\n\t<p>&copy; $this->year $this->copyright</p>\n\t</body>\n</html>";
    }

    public function addContent($content) {
        $this->page .= "\n\t" . $content;
    }

    public function getPage() {
        $this->addFooter();
        return $this->page;
    }

}

// test website
// $page = new Page("My Page", "2010", "My Company");
// $page->addContent("<h1>My Page</h1>");
// $page->addContent("<p>This is my page.</p>");
// echo $page->getPage();

// personal blog website
$blog = new Page("My Blog", "2023", "VietNQ");
$blog->addContent("<h1>My Blog</h1>");
$blog->addContent("<p>This is my blog.</p>");

$blog->addContent("<h2>My First Blog Post</h2>");
$blog->addContent("<p>Here's some content for my first blog post.</p>");

$blog->addContent("<h2>My Second Blog Post</h2>");
$blog->addContent("<p>Here's some content for my second blog post.</p>");

$blog->addContent("<div class='sidebar'>");
$blog->addContent("<h3>About Me</h3>");
$blog->addContent("<p>Hi, my name is VietNQ and I'm a blogger.</p>");
$blog->addContent("</div>");

$blog->addContent("<style>");
$blog->addContent("body { font-family: Arial, sans-serif; }");
$blog->addContent("h1, h2, h3 { color: #333; }");
$blog->addContent(".sidebar { background-color: #f2f2f2; padding: 10px; }");
$blog->addContent("</style>");

echo $blog->getPage();


?>
