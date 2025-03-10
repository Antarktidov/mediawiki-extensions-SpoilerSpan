Простое расширение для MediaWiki, которое добавляет тэг ```<spoiler>```.
# Установка
1. Скачайте расширение в папку **extensions** вашей копии MediaWiki ```git clone https://github.com/Antarktidov/mediawiki-extensions-SpoilerSpan.git```

2. Измените название **mediawiki-extensions-SpoilerSpan** на **SpoilerSpan**

3. Подключите расширение, добавив код ```wfLoadExtension( 'SpoilerSpan' );``` в файл **LocalSettings.php**, который находится в папке с вашей копией MediaWiki
   
4. Если у вас не включено расширение **ParserFunctions**, подключите последнее, добавив код ```wfLoadExtension( 'ParserFunctions' );``` в файл **LocalSettings.php**

# Использование
В режиме исходного кода добавьте следующий код:
```wikitext
<spoiler>Текст под спойлером</spoiler>
```
После сохранения страницы текст под спойлером будет скрыт. Чтобы увидеть его, нажмите на спойлер.

# Сообщения об ошибках
О найденных в расширении ошибках просьба сообщать [на github-странице с багами расширения](https://github.com/Antarktidov/mediawiki-extensions-SpoilerSpan/issues).

# README на других языках:
* [English](https://github.com/Antarktidov/mediawiki-extensions-SpoilerSpan/blob/main/README.md)
