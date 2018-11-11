<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gallary</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
	    <div class="page-header">
	        <h1>ЦВЕТОВЫЕ РЕШЕНИЯ</h1>
	    </div>
		
	<?php
    
    include "../config/main.php";
        $img = "IMAGES_DIR";
    $img_sm = "IMAGES_SMALL_DIR";

    
    function scanDirectory(){
// Определает, является ли файл директорией
    	if (is_dir($img_sm)) { 
    // Открыть каталог	
		    if ($di = opendir($img_sm)) {
		    //Получить элемент каталога по его дескриптору	
		        while (($file = readdir($di)) !== false) {
		        	// Разбивает строку на подстроки
		            $fileType = explode("/", mime_content_type( //Возвращает MIME content type/тип содержимого файла
		            	$img_sm . $file))[0];
	                if ($fileType == "image") {
	                    $files[] = $file;
	                }
	            }
	        }
	        //Закрывает поток, связанный с каталогом
	        closedir($img_sm);
	        return $files;
		}
    }

    function renderGallery(){ 
    	
		echo '<div class="gallery">';
    	$files = scanDirectory();
        if(count($files) > 0) {
            foreach ($files as $fileName) {
                $fileSmall = $fileName;
				echo '<a href="' . $fileOriginal . '" target="_blank">';
                echo '<img src="' . $fileSmall . '"/></a>';
            }
        } 
       echo '</div>';
    }
    renderGallery();
    ?>
    </div>
	
</body>
</html>