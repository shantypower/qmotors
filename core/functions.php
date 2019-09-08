<?php
/**
* Отрисовывает страницу на основании переданных параметров и шаблона
* @param string $name Имя файла-шаблона, в которой передаем параметры
* @param array $data Данные в виде массива вида ключ->значение для подстановки в шаблон
* @return string Сформированный из шаблона html-код
*/
function includeTemplate($name, $data)
{
    $name = 'templates/' . $name;
    $result = '';

    if (!is_readable($name)) {
        return $result;
    }

    ob_start();
    extract($data);
    require $name;

    $result = ob_get_clean();

    return $result;
}

/**
* Собирает html-код для показа страницы
* @param array $categories Ассоциативный массив категорий товаров
* @param string $page_content Фрагмент html-кода
* @param array $user_data Данные текущего пользователя
* @param string $search Строка-запрос из поля поиска
* @param string $title Имя страницы
* @return string Сформированный из шаблона html-код
*/
function showContent($page_content, $title)
{
    $show_page = includeTemplate('layout.php', [
        'content' => $page_content,
        'title' => $title
    ]);
    return $show_page;
}

/**
 * Вернёт массив, содержащий имена файлов из указанной директории
 * (содержащиеся директории будут проигнорированы)
 * 
 * @param string $dirpath - путь к диретории 
 * @return array  - массив имён файлов
 */
function getFilesNames($dirpath) {
    $result = [];
     
    $cdir = scandir($dirpath); 
    foreach ($cdir as $value) {
        // если это "не точки" и не директория
        if (!in_array($value,array(".", "..")) 
            && !is_dir($dirpath . DIRECTORY_SEPARATOR . $value)) {
             
         $list[] = pathinfo($value)['filename'];
         }
    } 
    return $list;
}