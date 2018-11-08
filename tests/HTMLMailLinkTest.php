<?php

use PHPUnit\Framework\TestCase;
use WaughJ\HTMLMailLink\HTMLMailLink;

class HTMLMailLinkTest extends TestCase
{
	public function testObjectWorks()
	{
		$object = new HTMLMailLink();
		$this->assertTrue( is_object( $object ) );
	}
}
