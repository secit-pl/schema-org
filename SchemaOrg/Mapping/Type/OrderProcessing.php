<?php

namespace SecIT\SchemaOrg\Mapping\Type;

/**
 * Class OrderProcessing.
 */
class OrderProcessing extends OrderStatus {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OrderProcessing';
	}
}