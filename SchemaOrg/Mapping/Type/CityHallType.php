<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CityHallType.
 * 
 * @method CityHallType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method CityHallType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CityHallType setAddress(Property\AddressProperty $address)
 * @method CityHallType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method CityHallType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CityHallType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method CityHallType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method CityHallType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method CityHallType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method CityHallType setDescription(Property\DescriptionProperty $description)
 * @method CityHallType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CityHallType setEvent(Property\EventProperty $event)
 * @method CityHallType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method CityHallType setGeo(Property\GeoProperty $geo)
 * @method CityHallType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method CityHallType setHasMap(Property\HasMapProperty $hasMap)
 * @method CityHallType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CityHallType setImage(Property\ImageProperty $image)
 * @method CityHallType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method CityHallType setIsicV4(Property\IsicV4Property $isicV4)
 * @method CityHallType setLogo(Property\LogoProperty $logo)
 * @method CityHallType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CityHallType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method CityHallType setName(Property\NameProperty $name)
 * @method CityHallType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method CityHallType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method CityHallType setPhoto(Property\PhotoProperty $photo)
 * @method CityHallType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CityHallType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method CityHallType setReview(Property\ReviewProperty $review)
 * @method CityHallType setSameAs(Property\SameAsProperty $sameAs)
 * @method CityHallType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method CityHallType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method CityHallType setTelephone(Property\TelephoneProperty $telephone)
 * @method CityHallType setUrl(Property\UrlProperty $url)
 */
class CityHallType extends GovernmentBuildingType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CityHall';
	}
}