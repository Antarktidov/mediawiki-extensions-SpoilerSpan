Simple MediaWiki extension that adds tag ```<spoiler>``` to wikitext.
# Installation
1. Download extension to the **extensions** folder of your MediaWiki: ```git clone https://github.com/Antarktidov/mediawiki-extensions-SpoilerSpan.git```

2. Rename **mediawiki-extensions-SpoilerSpan** folder to **SpoilerSpan**

3. Load the extension in **LocalSettings.php** ```wfLoadExtension( 'SpoilerSpan' );```

# Usage
In source code editor insert the following code
```wikitext
<spoiler>Hidden text</spoiler>
```
After saving the page, the text under spoiler will be hidden. To see it, click on it.

# Bug reports
Please report about bugs on [Github extension issues page](https://github.com/Antarktidov/mediawiki-extensions-SpoilerSpan/issues).

# README in other languages:
* [Русский](https://github.com/Antarktidov/mediawiki-extensions-SpoilerSpan/blob/main/translated-readmes/ru.md)
