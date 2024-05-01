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

		echo LR\Filters::escapeHtmlText($content) /* line 1 */;
		echo '

<h1>Contacts</h1>

';
		echo LR\Filters::escapeHtmlText($info) /* line 5 */;
	}
}
