<?php

switch ($_GET['type']) {
    case 'html':
        require 'HtmlTopicFactory.php';
        $topicFactory = new HtmlTopicFactory();
        break;
    case 'json':
        require 'JsonTopicFactory.php';
        $topicFactory = new JsonTopicFactory();
        break;
    default:
        throw new Exception('Supposed content type is invalid');
}

$content = $topicFactory->topicCreate();