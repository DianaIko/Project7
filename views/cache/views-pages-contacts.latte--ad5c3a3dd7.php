<?php

use Latte\Runtime as LR;

/** source: /Users/mac/untitled10/views/pages/contacts.latte */
final class Templatead5c3a3dd7 extends Latte\Runtime\Template
{
	public const Source = '/Users/mac/untitled10/views/pages/contacts.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<div class="w3-panel w3-blue-gray w3-leftbar w3-border-black">
    ';
		echo LR\Filters::escapeHtmlText($content) /* line 2 */;
		echo '
</div>

<h1>Contacts</h1>

';
		echo LR\Filters::escapeHtmlText($info) /* line 7 */;
	}
}
