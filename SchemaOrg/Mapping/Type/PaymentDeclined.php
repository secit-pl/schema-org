<?php

namespace SecIT\SchemaOrg\Mapping\Type;

/**
 * Class PaymentDeclined.
 */
class PaymentDeclined extends PaymentStatusType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PaymentDeclined';
	}
}