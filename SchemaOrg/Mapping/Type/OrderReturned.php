<?php

namespace SecIT\SchemaOrg\Mapping\Type;

/**
 * Class OrderReturned.
 */
class OrderReturned extends OrderStatus {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OrderReturned';
	}
}