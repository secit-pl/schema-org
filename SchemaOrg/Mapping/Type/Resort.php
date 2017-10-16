<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Resort.
 * 
 * @method Resort setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method Resort setAudience(Property\Audience $audience)
 * @method Resort setAvailableLanguage(Property\AvailableLanguage $availableLanguage)
 * @method Resort setCheckinTime(Property\CheckinTime $checkinTime)
 * @method Resort setCheckoutTime(Property\CheckoutTime $checkoutTime)
 * @method Resort setPetsAllowed(Property\PetsAllowed $petsAllowed)
 * @method Resort setStarRating(Property\StarRating $starRating)
 */
class Resort extends LodgingBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Resort';
	}
}