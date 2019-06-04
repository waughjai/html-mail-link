<?php

use PHPUnit\Framework\TestCase;
use WaughJ\HTMLMailLink\HTMLMailLink;

class HTMLMailLinkTest extends TestCase
{
	public function testBasicMailLink()
	{
		$link = new HTMLMailLink( 'waughjai@gmail.com' );
		$this->assertEquals( $link->getHTML(), '<a href="mailto:waughjai@gmail.com">waughjai@gmail.com</a>');
	}

	public function testMailLinkWithCustomValue()
	{
		$link = new HTMLMailLink( 'waughjai@gmail.com', [ "value" => "Send me an email." ] );
		$this->assertEquals( $link->getHTML(), '<a href="mailto:waughjai@gmail.com">Send me an email.</a>');
	}

	public function testMailLinkWithCustomValueAndOtherLinkAttributes()
	{
		$link = new HTMLMailLink( 'waughjai@gmail.com', [ "value" => "Send me an email.", "class" => "email-link" ] );
		$this->assertStringContainsString( ' href="mailto:waughjai@gmail.com', $link->getHTML() );
		$this->assertStringContainsString( ' class="email-link', $link->getHTML() );
		$this->assertThat( $link->getHTML(), $this->logicalNot( $this->stringContains( ' value="Send me an email."' ) ) );
	}
}
