<?php
require_once ('core/functions.php');
require_once ('source/docx_reader.php');

$doc = new \docx_reader\Docx_reader();
$doc->setFile('docs/1.Покраска сколов на автомобиле Land Rover.docx');
$page_content = '';

if(!$doc->get_errors()) {
    $html = $doc->to_html();
} else {
    echo implode(', ',$doc->get_errors());
}
$page_content = includeTemplate('news_article.php', [
    'news' => $news,
    'html' => $html
]);
print(showContent($page_content, 'QMOTORS - Тестовое задание'));


