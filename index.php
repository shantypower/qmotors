<?php
require_once ('core/functions.php');
require_once ('core/data.php');

$page_content = '';
$page_content = includeTemplate('news_list.php', [
    'news' => $news
]);

print(showContent($page_content, 'Услуги покраски авто'));

