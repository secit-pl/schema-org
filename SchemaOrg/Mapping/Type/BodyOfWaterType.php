<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BodyOfWaterType.
 * 
 * @method BodyOfWaterType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method BodyOfWaterType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BodyOfWaterType setAddress(Property\AddressProperty $address)
 * @method BodyOfWaterType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method BodyOfWaterType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BodyOfWaterType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method BodyOfWaterType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method BodyOfWaterType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method BodyOfWaterType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method BodyOfWaterType setDescription(Property\DescriptionProperty $description)
 * @method BodyOfWaterType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BodyOfWaterType setEvent(Property\EventProperty $event)
 * @method BodyOfWaterType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method BodyOfWaterType setGeo(Property\GeoProperty $geo)
 * @method BodyOfWaterType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method BodyOfWaterType setHasMap(Property\HasMapProperty $hasMap)
 * @method BodyOfWaterType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BodyOfWaterType setImage(Property\ImageProperty $image)
 * @method BodyOfWaterType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method BodyOfWaterType setIsicV4(Property\IsicV4Property $isicV4)
 * @method BodyOfWaterType setLogo(Property\LogoProperty $logo)
 * @method BodyOfWaterType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BodyOfWaterType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method BodyOfWaterType setName(Property\NameProperty $name)
 * @method BodyOfWaterType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method BodyOfWaterType setPhoto(Property\PhotoProperty $photo)
 * @method BodyOfWaterType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BodyOfWaterType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method BodyOfWaterType setReview(Property\ReviewProperty $review)
 * @method BodyOfWaterType setSameAs(Property\SameAsProperty $sameAs)
 * @method BodyOfWaterType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method BodyOfWaterType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method BodyOfWaterType setTelephone(Property\TelephoneProperty $telephone)
 * @method BodyOfWaterType setUrl(Property\UrlProperty $url)
 */
class BodyOfWaterType extends LandformType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BodyOfWater';
	}
}