<?php
require_once ('core/functions.php');
require_once ('core/docx_reader.php');

$page_content = '';
$id = $_GET['key'];
$doc = new \docx_reader\Docx_reader();
$source = 'docs/'.$news[$id].'.docx';
$doc->setFile($source);

if(!$doc->get_errors()) {
    $html = $doc->to_html();

    $needle = '</strong></span></span>';
    $title = substr($html, 0, strpos($html, $needle));
    $title = strip_tags($title);
} else {
    echo implode(', ',$doc->get_errors());
}
$page_content = includeTemplate('news_article.php', [
    'news' => $news,
    'html' => $html
]);
print(showContent($page_content, $title));


