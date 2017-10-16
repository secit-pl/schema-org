<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Motel.
 * 
 * @method Motel setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method Motel setAudience(Property\Audience $audience)
 * @method Motel setAvailableLanguage(Property\AvailableLanguage $availableLanguage)
 * @method Motel setCheckinTime(Property\CheckinTime $checkinTime)
 * @method Motel setCheckoutTime(Property\CheckoutTime $checkoutTime)
 * @method Motel setPetsAllowed(Property\PetsAllowed $petsAllowed)
 * @method Motel setStarRating(Property\StarRating $starRating)
 */
class Motel extends LodgingBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Motel';
	}
}