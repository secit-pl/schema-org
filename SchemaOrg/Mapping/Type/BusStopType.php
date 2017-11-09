<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BusStopType.
 * 
 * @method BusStopType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method BusStopType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BusStopType setAddress(Property\AddressProperty $address)
 * @method BusStopType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method BusStopType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BusStopType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method BusStopType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method BusStopType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method BusStopType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method BusStopType setDescription(Property\DescriptionProperty $description)
 * @method BusStopType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BusStopType setEvent(Property\EventProperty $event)
 * @method BusStopType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method BusStopType setGeo(Property\GeoProperty $geo)
 * @method BusStopType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method BusStopType setHasMap(Property\HasMapProperty $hasMap)
 * @method BusStopType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BusStopType setImage(Property\ImageProperty $image)
 * @method BusStopType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method BusStopType setIsicV4(Property\IsicV4Property $isicV4)
 * @method BusStopType setLogo(Property\LogoProperty $logo)
 * @method BusStopType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BusStopType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method BusStopType setName(Property\NameProperty $name)
 * @method BusStopType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method BusStopType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method BusStopType setPhoto(Property\PhotoProperty $photo)
 * @method BusStopType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BusStopType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method BusStopType setReview(Property\ReviewProperty $review)
 * @method BusStopType setSameAs(Property\SameAsProperty $sameAs)
 * @method BusStopType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method BusStopType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method BusStopType setTelephone(Property\TelephoneProperty $telephone)
 * @method BusStopType setUrl(Property\UrlProperty $url)
 */
class BusStopType extends CivicStructureType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BusStop';
	}
}