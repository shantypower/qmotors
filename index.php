<?php
require_once ('core/functions.php');
$page_content = '';

$page_content = includeTemplate('news_list.php', [
    'news' => $news
]);

print(showContent($page_content, 'QMOTORS - Тестовое задание'));

