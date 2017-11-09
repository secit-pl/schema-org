<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RiverBodyOfWaterType.
 * 
 * @method RiverBodyOfWaterType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method RiverBodyOfWaterType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method RiverBodyOfWaterType setAddress(Property\AddressProperty $address)
 * @method RiverBodyOfWaterType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method RiverBodyOfWaterType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method RiverBodyOfWaterType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method RiverBodyOfWaterType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method RiverBodyOfWaterType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method RiverBodyOfWaterType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method RiverBodyOfWaterType setDescription(Property\DescriptionProperty $description)
 * @method RiverBodyOfWaterType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method RiverBodyOfWaterType setEvent(Property\EventProperty $event)
 * @method RiverBodyOfWaterType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method RiverBodyOfWaterType setGeo(Property\GeoProperty $geo)
 * @method RiverBodyOfWaterType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method RiverBodyOfWaterType setHasMap(Property\HasMapProperty $hasMap)
 * @method RiverBodyOfWaterType setIdentifier(Property\IdentifierProperty $identifier)
 * @method RiverBodyOfWaterType setImage(Property\ImageProperty $image)
 * @method RiverBodyOfWaterType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method RiverBodyOfWaterType setIsicV4(Property\IsicV4Property $isicV4)
 * @method RiverBodyOfWaterType setLogo(Property\LogoProperty $logo)
 * @method RiverBodyOfWaterType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method RiverBodyOfWaterType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method RiverBodyOfWaterType setName(Property\NameProperty $name)
 * @method RiverBodyOfWaterType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method RiverBodyOfWaterType setPhoto(Property\PhotoProperty $photo)
 * @method RiverBodyOfWaterType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method RiverBodyOfWaterType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method RiverBodyOfWaterType setReview(Property\ReviewProperty $review)
 * @method RiverBodyOfWaterType setSameAs(Property\SameAsProperty $sameAs)
 * @method RiverBodyOfWaterType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method RiverBodyOfWaterType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method RiverBodyOfWaterType setTelephone(Property\TelephoneProperty $telephone)
 * @method RiverBodyOfWaterType setUrl(Property\UrlProperty $url)
 */
class RiverBodyOfWaterType extends BodyOfWaterType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RiverBodyOfWater';
	}
}