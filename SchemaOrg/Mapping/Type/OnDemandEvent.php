<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OnDemandEvent.
 * 
 * @method OnDemandEvent setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method OnDemandEvent setPublishedOn(Property\PublishedOn $publishedOn)
 */
class OnDemandEvent extends PublicationEvent {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OnDemandEvent';
	}
}