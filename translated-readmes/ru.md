Простое расширение для MediaWiki, которое добавляет тэг ```<spoiler>```.
# Установка
1. Скачайте расширение в папку **extensions** вашей копии MediaWiki ```git clone https://github.com/Antarktidov/mediawiki-extensions-SpoilerSpan```

2. Измените навзание **mediawiki-extensions-SpoilerSpan** на **SpoilerSpan**

3. Подключите расширение, добавив код ```wfLoadExtension( 'ToDoList' );``` в файл **LocalSettings.php**

# Использование
В режиме исходного кода добавте следующий код:
```wikitext
<spoiler>Текст под спойлером</spoiler>
```
После сохранения страницы текст под спойлером будет скрыт. Чтобы увидеть его, нажмите на спойлер.

# Сообщения об ошибках
О найденых в расширении ошибках просьба сообщать [на github-странице с багами расширения](https://github.com/Antarktidov/mediawiki-extensions-SpoilerSpan/issues).