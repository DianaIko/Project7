<?php

use Latte\Runtime as LR;

/** source: /Users/mac/untitled10/views/form.latte */
final class Templateb9d1c144c0 extends Latte\Runtime\Template
{
	public const Source = '/Users/mac/untitled10/views/form.latte';


	public function main(array $ʟ_args): void
	{
		echo '<form method="POST" action="">
        <label>
                <select
                        style="display: inline-block;width: auto;"
                        name="name"
                        class="w3-select w3-border"
                        id="name">
                        <option value="Products" selected>Products</option>
                        <option value="Product1">Product1</option>
                        <option value="Product2">Product2</option>
                        <option value="Product3">Product3</option>
                </select>
        </label>
        <label>
                <input type="number" name="age" placeholder="Кількість">
        </label>

        <input type="submit" value="Додати">
</form>';
	}
}
