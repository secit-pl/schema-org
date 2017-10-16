<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Campground.
 * 
 * @method Campground setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method Campground setAudience(Property\Audience $audience)
 * @method Campground setAvailableLanguage(Property\AvailableLanguage $availableLanguage)
 * @method Campground setCheckinTime(Property\CheckinTime $checkinTime)
 * @method Campground setCheckoutTime(Property\CheckoutTime $checkoutTime)
 * @method Campground setPetsAllowed(Property\PetsAllowed $petsAllowed)
 * @method Campground setStarRating(Property\StarRating $starRating)
 */
class Campground extends LodgingBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Campground';
	}
}