<?php

namespace SecIT\SchemaOrg\Mapping\Type;

/**
 * Class PaymentPastDue.
 */
class PaymentPastDue extends PaymentStatusType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PaymentPastDue';
	}
}