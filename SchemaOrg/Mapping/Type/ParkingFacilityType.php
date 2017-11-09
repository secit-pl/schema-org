<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ParkingFacilityType.
 * 
 * @method ParkingFacilityType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method ParkingFacilityType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ParkingFacilityType setAddress(Property\AddressProperty $address)
 * @method ParkingFacilityType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ParkingFacilityType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ParkingFacilityType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method ParkingFacilityType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method ParkingFacilityType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method ParkingFacilityType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method ParkingFacilityType setDescription(Property\DescriptionProperty $description)
 * @method ParkingFacilityType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ParkingFacilityType setEvent(Property\EventProperty $event)
 * @method ParkingFacilityType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method ParkingFacilityType setGeo(Property\GeoProperty $geo)
 * @method ParkingFacilityType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method ParkingFacilityType setHasMap(Property\HasMapProperty $hasMap)
 * @method ParkingFacilityType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ParkingFacilityType setImage(Property\ImageProperty $image)
 * @method ParkingFacilityType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method ParkingFacilityType setIsicV4(Property\IsicV4Property $isicV4)
 * @method ParkingFacilityType setLogo(Property\LogoProperty $logo)
 * @method ParkingFacilityType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ParkingFacilityType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method ParkingFacilityType setName(Property\NameProperty $name)
 * @method ParkingFacilityType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method ParkingFacilityType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method ParkingFacilityType setPhoto(Property\PhotoProperty $photo)
 * @method ParkingFacilityType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ParkingFacilityType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method ParkingFacilityType setReview(Property\ReviewProperty $review)
 * @method ParkingFacilityType setSameAs(Property\SameAsProperty $sameAs)
 * @method ParkingFacilityType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method ParkingFacilityType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method ParkingFacilityType setTelephone(Property\TelephoneProperty $telephone)
 * @method ParkingFacilityType setUrl(Property\UrlProperty $url)
 */
class ParkingFacilityType extends CivicStructureType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ParkingFacility';
	}
}