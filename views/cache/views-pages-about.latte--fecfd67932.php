<?php

use Latte\Runtime as LR;

/** source: /Users/mac/untitled10/views/pages/about.latte */
final class Templatefecfd67932 extends Latte\Runtime\Template
{
	public const Source = '/Users/mac/untitled10/views/pages/about.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo LR\Filters::escapeHtmlText($content) /* line 1 */;
		echo '

<h1>About</h1>

';
		echo LR\Filters::escapeHtmlText($info) /* line 5 */;
	}
}
