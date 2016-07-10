<?php

switch ($_GET['type']) {
    case 'html':
        $topicFactory = new HtmlTopicFactory();
        break;
    case 'json':
        $topicFactory = new JsonTopicFactory();
        break;
    default:
        throw new Exception('Supposed content type is invalid');
}

$content = $topicFactory->topicCreate();