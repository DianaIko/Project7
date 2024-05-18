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

		echo '<div class="w3-panel w3-blue-gray w3-leftbar w3-border-black">
    ';
		echo LR\Filters::escapeHtmlText($content) /* line 2 */;
		echo '
</div>
<br>
';
		foreach ($date as $item) /* line 5 */ {
			echo '    ';
			echo LR\Filters::escapeHtmlText($item) /* line 6 */;
			echo '<br>
';

		}
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['item' => '5'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}
}
