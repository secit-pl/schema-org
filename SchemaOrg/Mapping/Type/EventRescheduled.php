<?php

namespace SecIT\SchemaOrg\Mapping\Type;

/**
 * Class EventRescheduled.
 */
class EventRescheduled extends EventStatusType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EventRescheduled';
	}
}