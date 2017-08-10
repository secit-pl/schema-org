<?php

namespace SecIT\SchemaOrg\Mapping\Type;

/**
 * Class OrderCancelled.
 */
class OrderCancelled extends OrderStatus {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OrderCancelled';
	}
}