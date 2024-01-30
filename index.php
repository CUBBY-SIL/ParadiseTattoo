<?

    session_start();
    
    include('config.php');
    include('functions.php');

    $fileContent = DIR_INCLUDE_SECTIONS.'section0.php';

    $title = 'Paradise Tattoo';

    if(isset($_GET[GET_ID_SECTION])){
        
        $idContent = $_GET[GET_ID_SECTION];
        //Определяем путь к возможному подключаемому содержимому
        $fileContentTemp = DIR_INCLUDE_SECTIONS.'section'.$idContent.'.php';
        //Проверяем наличие файла на сервере
        if (file_exists($fileContentTemp)){
            //Если файл существует, то меняем значение переменной, отвечающей за путь к включаемому файлу и формируем значение переменной, значение которой в последующем включается в заголовок страницы.
            $fileContent = $fileContentTemp;
            $title.= ' '.getTitle($GLOBALS['arrContent'], $idContent);
        }
        else{
            $fileContent = ERR_FILE_NO_EXISTS;
        }
    }

    include('index.html');
?>

    

