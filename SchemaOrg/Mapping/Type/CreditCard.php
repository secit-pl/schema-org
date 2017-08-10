<?php

namespace SecIT\SchemaOrg\Mapping\Type;

/**
 * Class CreditCard.
 */
class CreditCard extends PaymentCard {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CreditCard';
	}
}