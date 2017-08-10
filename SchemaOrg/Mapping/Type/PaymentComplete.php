<?php

namespace SecIT\SchemaOrg\Mapping\Type;

/**
 * Class PaymentComplete.
 */
class PaymentComplete extends PaymentStatusType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PaymentComplete';
	}
}