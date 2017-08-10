<?php

namespace SecIT\SchemaOrg\Mapping\Type;

/**
 * Class PaymentCard.
 */
class PaymentCard extends PaymentMethod {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PaymentCard';
	}
}