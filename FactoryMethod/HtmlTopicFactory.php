<?php

use Src\Topic;
use Src\FactoryMethod;

class HtmlTopicFactory implements FactoryMethod
{
    public function topicCreate()
    {
        $topic = new Topic();
        
        $html = '
        <h1>' . $topic->getTitle() . '</h1>
        <p>' . $topic->getText() . '</p>
        <footer>
            <p>' . $topic->getDate() . '</p>
        </footer>
        ';
        
        return $html;
    }
}
