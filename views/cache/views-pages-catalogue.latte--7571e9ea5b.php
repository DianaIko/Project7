<?php

use Latte\Runtime as LR;

/** source: /Users/mac/untitled10/views/pages/catalogue.latte */
final class Template7571e9ea5b extends Latte\Runtime\Template
{
	public const Source = '/Users/mac/untitled10/views/pages/catalogue.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo LR\Filters::escapeHtmlText($content) /* line 1 */;
		echo '
<br>
';
		foreach ($date as $item) /* line 3 */ {
			echo '    ';
			echo LR\Filters::escapeHtmlText($item) /* line 4 */;
			echo '<br>
';

		}
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['item' => '3'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}
}
