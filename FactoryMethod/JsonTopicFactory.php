<?php

use Src\Topic;
use Src\FactoryMethod;

class JsonTopicFactory implements FactoryMethod
{
    public function topicCreate()
    {
        $topic = new Topic();
        
        $json = '
        {
            "title": "' . $topic->getTitle() . '",
            "text": "' . $topic->getText() . '",
            "date": "' . $topic->getDate() . '"
        }
        ';
        
        return $json;
    }
}