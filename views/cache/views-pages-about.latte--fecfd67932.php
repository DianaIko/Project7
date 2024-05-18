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

		echo '<div class="w3-panel w3-blue-gray w3-leftbar w3-border-black">
    ';
		echo LR\Filters::escapeHtmlText($content) /* line 2 */;
		echo '
</div>

<h1>About</h1>

';
		echo LR\Filters::escapeHtmlText($info) /* line 7 */;
	}
}
