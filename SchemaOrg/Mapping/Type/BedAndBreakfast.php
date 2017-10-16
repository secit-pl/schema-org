<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BedAndBreakfast.
 * 
 * @method BedAndBreakfast setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method BedAndBreakfast setAudience(Property\Audience $audience)
 * @method BedAndBreakfast setAvailableLanguage(Property\AvailableLanguage $availableLanguage)
 * @method BedAndBreakfast setCheckinTime(Property\CheckinTime $checkinTime)
 * @method BedAndBreakfast setCheckoutTime(Property\CheckoutTime $checkoutTime)
 * @method BedAndBreakfast setPetsAllowed(Property\PetsAllowed $petsAllowed)
 * @method BedAndBreakfast setStarRating(Property\StarRating $starRating)
 */
class BedAndBreakfast extends LodgingBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BedAndBreakfast';
	}
}