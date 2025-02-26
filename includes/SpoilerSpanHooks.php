<?php

use MediaWiki\Parser\Parser;

class SpoilerSpanHooks {
    public static function onParserSetup(Parser $parser) {
		$parser->setHook( 'spoiler', 'SpoilerSpanHooks::renderTagSpoiler'  );
		return true;
	}

	public static function renderTagSpoiler( $input, array $args, Parser $parser, PPFrame $frame ) {

		return '<span class="spoiler-span>"' . $input . '</span>';
	}
}
