<?php

    require('../markdown.php');

    define('MARKDOWN', '## TEST!

**[a link to google][1] is useful sometimes.**

*   One
*   *TWO* also

### lol

 [1]: http://google.com "stuff to googols"');

    define('HTML', '<h2>TEST!</h2>

<p><strong><a href="http://google.com" title="stuff to googols">a link to google</a> is useful sometimes.</strong></p>

<ul>
<li>One</li>
<li><em>TWO</em> also</li>
</ul>

<h3>lol</h3>
');

    class PHPMarkdownTest extends PHPUnit_Framework_TestCase{

        public function test_toMarkdown(){
            $md = Markdown::toMarkdown(HTML);
            $this->assertEquals($md, MARKDOWN);
        }

        public function test_toHTML(){
            $h = Markdown::toHTML(MARKDOWN);
            $this->assertEquals($h, HTML);
        }
    }

?>