<?php

namespace SecIT\SchemaOrg\Mapping\Type;

/**
 * Class OrderInTransit.
 */
class OrderInTransit extends OrderStatus {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OrderInTransit';
	}
}