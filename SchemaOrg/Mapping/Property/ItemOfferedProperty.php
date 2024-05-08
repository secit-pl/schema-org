<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * An item being offered (or demanded). The transactional nature of the offer or demand is documented using businessFunction, e.g. sell, lease etc. While several common expected types are listed explicitly in this definition, others can be used. Using a second type, such as Product or a subtype of Product, can clarify the nature of the offer.
 * 
 * @method ItemOfferedProperty setValue($value)
 */
class ItemOfferedProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/itemOffered';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\AggregateOfferType || $value instanceof Type\CreativeWorkType || $value instanceof Type\EventType || $value instanceof Type\MenuItemType || $value instanceof Type\ProductType || $value instanceof Type\ServiceType || $value instanceof Type\TripType;
	}
}