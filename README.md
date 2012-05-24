# Markdown to HTML and HTML to Markdown converter thingy in PHP.

A combination of 

[PHP Markdown](http://michelf.com/projects/php-markdown/)
and
[Markdownify](http://milianw.de/projects/markdownify/)

all based on [Markdown](http://daringfireball.net/projects/markdown/syntax).

I needed a simple php library for converting both to and from Markdown, but there wasn't one, so I figured I'd hack it together. I'm cutting out (probably) all the WordPress/Smarty/etc support since that's not the goal of this. Simple is what I'm aiming for: two public methods: `toMarkdown($html)` and `toHTML($markdown)`. 

## Usage

    require 'Markdown.php';
    $someMarkdown = Markdown::toMarkdown($someHTML);
    $someHTML = Markdown::toHTML($someMarkdown);
    
