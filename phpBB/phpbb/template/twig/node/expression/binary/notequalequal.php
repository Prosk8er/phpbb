<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

namespace phpbb\template\twig\node\expression\binary;

class notequalequal extends \Twig\Node\Expression\Binary\AbstractBinary
{
	public function operator(\Twig\Compiler $compiler) : \Twig\Compiler
	{
		return $compiler->raw('!==');
	}
}
