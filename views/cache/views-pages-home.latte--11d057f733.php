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

		echo '<div class="w3-panel w3-blue-gray w3-leftbar w3-border-black">
    ';
		echo LR\Filters::escapeHtmlText($content) /* line 2 */;
		echo '
</div>

<table class="w3-table-all">
    <tr class="w3-blue-gray">
        <th>ID</th>
        <th>Назва товару</th>
        <th>Кількість товару</th>
        <th>Дія</th>
    </tr>
';
		foreach ($data as $product) /* line 12 */ {
			echo '        <tr class="w3-hover-light-grey">
            <td>';
			echo LR\Filters::escapeHtmlText($product['id']) /* line 14 */;
			echo '</td>
            <td>';
			echo LR\Filters::escapeHtmlText($product['name']) /* line 15 */;
			echo '</td>
            <td>';
			echo LR\Filters::escapeHtmlText($product['age'] ?? '0') /* line 16 */;
			echo '</td>
            <td>
                <a href="/home/delete?id=';
			echo LR\Filters::escapeHtmlAttr($product['id']) /* line 18 */;
			echo '" class="w3-button w3-red">Видалити</a>
            </td>
        </tr>
';

		}

		echo '</table>

<div class="w3-container w3-blue-gray w3-padding-16 w3-margin-top">
';
		$this->createTemplate('../form.latte', $this->params, 'include')->renderToContentType('html') /* line 25 */;
		echo '</div>';
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['product' => '12'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}
}
