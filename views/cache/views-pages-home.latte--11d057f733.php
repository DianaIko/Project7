<?php

use Latte\Runtime as LR;

/** source: /Users/mac/untitled10/views/pages/home.latte */
final class Template11d057f733 extends Latte\Runtime\Template
{
	public const Source = '/Users/mac/untitled10/views/pages/home.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo LR\Filters::escapeHtmlText($content) /* line 1 */;
		echo '
<br>
';
		foreach ($data as $student) /* line 3 */ {
			echo '    ';
			echo LR\Filters::escapeHtmlText($student) /* line 4 */;
			echo '<br>
';

		}
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['student' => '3'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}
}
