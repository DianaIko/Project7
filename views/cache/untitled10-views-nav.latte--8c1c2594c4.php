<?php

use Latte\Runtime as LR;

/** source: /Users/mac/untitled10/views/nav.latte */
final class Template8c1c2594c4 extends Latte\Runtime\Template
{
	public const Source = '/Users/mac/untitled10/views/nav.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<nav class="w3-bar w3-black">
    <a href="/" class="w3-bar-item w3-hover-blue-gray">
        HOME
    </a>
    <a href="/about" class="w3-bar-item w3-hover-blue-gray">
        ABOUT
    </a>
    <a href="/contacts" class="w3-bar-item w3-hover-blue-gray">
        CONTACTS
    </a>
    <a href="/catalogue" class="w3-bar-item w3-hover-blue-gray">
        CATALOGUE
    </a>

';
		if ($isUserLoggedIn) /* line 15 */ {
			echo '        <a href="/logout" class="w3-bar-item w3-right">
            LOGOUT
        </a>
';
		} else /* line 19 */ {
			echo '        <a href="/login" class="w3-bar-item w3-right">
            LOGIN
        </a>
';
		}
		echo '</nav>';
	}
}
