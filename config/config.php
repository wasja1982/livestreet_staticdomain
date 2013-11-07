<?php
/**
 * Domain for static - перенос статических файлов на отдельный домен
 *
 * Версия:	1.0.0
 * Автор:	Александр Вереник
 * Профиль:	http://livestreet.ru/profile/Wasja/
 * GitHub:	https://github.com/wasja1982/livestreet_newsocialcomments
 *
 **/

// Домен для статики
$config['static_web']='___path.static.root___';

// Путь к каталогу для статических файлов
$config['static_server']='___path.root.server___/img';

// Привязать JS и CSS к статическому домену
$config['use_static_cache']=false;

return $config;
?>