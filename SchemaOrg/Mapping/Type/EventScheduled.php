<?php

namespace SecIT\SchemaOrg\Mapping\Type;

/**
 * Class EventScheduled.
 */
class EventScheduled extends EventStatusType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EventScheduled';
	}
}