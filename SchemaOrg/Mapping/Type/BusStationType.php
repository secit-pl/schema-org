<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BusStationType.
 * 
 * @method BusStationType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method BusStationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BusStationType setAddress(Property\AddressProperty $address)
 * @method BusStationType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method BusStationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BusStationType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method BusStationType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method BusStationType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method BusStationType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method BusStationType setDescription(Property\DescriptionProperty $description)
 * @method BusStationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BusStationType setEvent(Property\EventProperty $event)
 * @method BusStationType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method BusStationType setGeo(Property\GeoProperty $geo)
 * @method BusStationType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method BusStationType setHasMap(Property\HasMapProperty $hasMap)
 * @method BusStationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BusStationType setImage(Property\ImageProperty $image)
 * @method BusStationType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method BusStationType setIsicV4(Property\IsicV4Property $isicV4)
 * @method BusStationType setLogo(Property\LogoProperty $logo)
 * @method BusStationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BusStationType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method BusStationType setName(Property\NameProperty $name)
 * @method BusStationType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method BusStationType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method BusStationType setPhoto(Property\PhotoProperty $photo)
 * @method BusStationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BusStationType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method BusStationType setReview(Property\ReviewProperty $review)
 * @method BusStationType setSameAs(Property\SameAsProperty $sameAs)
 * @method BusStationType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method BusStationType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method BusStationType setTelephone(Property\TelephoneProperty $telephone)
 * @method BusStationType setUrl(Property\UrlProperty $url)
 */
class BusStationType extends CivicStructureType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BusStation';
	}
}