<?php

use MediaWiki\Parser\Parser;

class SpoilerSpanHooks {
    public static function onParserSetup(Parser $parser) {
		$parser->setHook( 'spoiler', 'SpoilerSpanHooks::renderTagSpoiler'  );
		return true;
	}

	public static function renderTagSpoiler( $input, array $args, Parser $parser, PPFrame $frame ) {
		$out = $parser->getOutput();
		$out->addModules(['ext.SpoilerSpan']);
		$out->addWikiMsg( 'SpoilerSpan-description' );
		$processedInput = $parser->recursiveTagParse($input, $frame);
        return '<span class="spoiler-span">' . $processedInput . '</span>';
	}
}
