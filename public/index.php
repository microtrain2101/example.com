<?php
require '../core/bootstrap.php';

//Build the page metadata
$meta = [];
$meta['description'] = "Welcome to MicroTrain2101 For Web Development";
$meta['keywords'] = "Welcome, MicroTrain2101, development, web development";


$content = <<<EOT
<main>                
    <h1>Hello, I am MicroTrain2101</h1>
    <img class="rounded-circle" src="https://www.gravatar.com/avatar/4678a33bf44c38e54a58745033b4d5c6?d=mm&s=64" alt="Microtrain2101 Avatar">
    <p>Welcome to my web page. Microtrain Bootcamp page for class. Learn HTML, CSS, Bootstrap and other toolkits. Web and Hybrid Mobile development.</p>
    <h2>HTML Elements</h2>
    <p>
    To paraphrase the lesson text [...] For example &lt;h1&gt;h1&lt;h2&gt;title&lt;/h1&gt;... Notice the use of character entities when wanting show the tags in HTML.
    </p>
    <h2>Character Entities</h2>
    <p>Since the keyboard does not have a &copy; key we need a way to reference this so we say &amp;copy;. Additionally, greater than and less than are interpreted as HTML tags. These are examples of symbols that we may want to display but will not be able to with out a work around. This is where character entities come into play. </p>
    <ol>
        <li><a href="https://stackoverflow.com/questions/1016080/why-are-html-character-entities-necessary">A Stack Overflow thread on the topic.</a></li>
        <li><a href="https://en.wikipedia.org/wiki/List_of_XML_and_HTML_character_entity_references">A Wikipedia artcile on the topic.</a></li>
        <li><a href="https://dev.w3.org/html5/html-author/charref">The W3C reference.</a></li>
    </ol>
    <h2>Summary</h2>
    <p>In summation... learn, code, grow.</p>
</main>
EOT;
    
require '../core/layout.php';