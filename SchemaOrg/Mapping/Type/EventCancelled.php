<?php

namespace SecIT\SchemaOrg\Mapping\Type;

/**
 * Class EventCancelled.
 */
class EventCancelled extends EventStatusType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EventCancelled';
	}
}