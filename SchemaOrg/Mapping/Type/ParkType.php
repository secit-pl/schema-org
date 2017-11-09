<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ParkType.
 * 
 * @method ParkType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method ParkType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ParkType setAddress(Property\AddressProperty $address)
 * @method ParkType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ParkType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ParkType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method ParkType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method ParkType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method ParkType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method ParkType setDescription(Property\DescriptionProperty $description)
 * @method ParkType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ParkType setEvent(Property\EventProperty $event)
 * @method ParkType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method ParkType setGeo(Property\GeoProperty $geo)
 * @method ParkType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method ParkType setHasMap(Property\HasMapProperty $hasMap)
 * @method ParkType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ParkType setImage(Property\ImageProperty $image)
 * @method ParkType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method ParkType setIsicV4(Property\IsicV4Property $isicV4)
 * @method ParkType setLogo(Property\LogoProperty $logo)
 * @method ParkType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ParkType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method ParkType setName(Property\NameProperty $name)
 * @method ParkType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method ParkType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method ParkType setPhoto(Property\PhotoProperty $photo)
 * @method ParkType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ParkType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method ParkType setReview(Property\ReviewProperty $review)
 * @method ParkType setSameAs(Property\SameAsProperty $sameAs)
 * @method ParkType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method ParkType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method ParkType setTelephone(Property\TelephoneProperty $telephone)
 * @method ParkType setUrl(Property\UrlProperty $url)
 */
class ParkType extends CivicStructureType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Park';
	}
}