<h1>Чтобы файлы из этого репозитория запустились нужно сделать следующее:</h1>
<ol>
    <li>
        Скачать Yii2 basic template: <a href="https://github.com/yiisoft/yii2/releases/download/2.0.49/yii-basic-app-2.0.49.tgz">
<span>Тык</span></a>
    </li>
    <li>Разархивировать содержимое папки basic в любую папку</li>
    <li>Скачать архив с файлами из репозитория (Рисунок 1)</li>
    <li>Скопировать с заменой все файлы из архива репозитория в папку с Yii</li>
</ol>

<img src="https://i.imgur.com/7wsK9lB.png"></img>

<h2>После установки требуется зайти в PhPMyAdmin и создать базу данных "Yii2basic", а так же несколько таблиц. Всё работает от пользователя root и без пароля. Код для таблиц представлен ниже. Всё это копируем в раздел SQL в БД.</h2>
<pre>
    <code>
        CREATE TABLE IF NOT EXISTS `user` (
          `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
          `username` varchar(255) NOT NULL,
          `password` varchar(255) NOT NULL,
          `role` varchar(255) NOT NULL DEFAULT 'user',
          PRIMARY KEY (`id`),
          UNIQUE KEY `username` (`username`)
        ) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
    </code>
</pre>
