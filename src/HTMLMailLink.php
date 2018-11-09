<?php

declare( strict_types = 1 );
namespace WaughJ\HTMLMailLink
{
	use WaughJ\HTMLLink\HTMLLink;
	use function WaughJ\TestHashItem\TestHashItemExists;

	class HTMLMailLink extends HTMLLink
	{
		public function __construct( string $email, array $other_attributes = [] )
		{
			$href = "mailto:$email";
			$value = TestHashItemExists( $other_attributes, 'value', $email );
			parent::__construct( $href, $value, $other_attributes );
		}
	}
}
