<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RVParkType.
 * 
 * @method RVParkType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method RVParkType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method RVParkType setAddress(Property\AddressProperty $address)
 * @method RVParkType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method RVParkType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method RVParkType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method RVParkType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method RVParkType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method RVParkType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method RVParkType setDescription(Property\DescriptionProperty $description)
 * @method RVParkType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method RVParkType setEvent(Property\EventProperty $event)
 * @method RVParkType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method RVParkType setGeo(Property\GeoProperty $geo)
 * @method RVParkType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method RVParkType setHasMap(Property\HasMapProperty $hasMap)
 * @method RVParkType setIdentifier(Property\IdentifierProperty $identifier)
 * @method RVParkType setImage(Property\ImageProperty $image)
 * @method RVParkType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method RVParkType setIsicV4(Property\IsicV4Property $isicV4)
 * @method RVParkType setLogo(Property\LogoProperty $logo)
 * @method RVParkType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method RVParkType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method RVParkType setName(Property\NameProperty $name)
 * @method RVParkType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method RVParkType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method RVParkType setPhoto(Property\PhotoProperty $photo)
 * @method RVParkType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method RVParkType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method RVParkType setReview(Property\ReviewProperty $review)
 * @method RVParkType setSameAs(Property\SameAsProperty $sameAs)
 * @method RVParkType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method RVParkType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method RVParkType setTelephone(Property\TelephoneProperty $telephone)
 * @method RVParkType setUrl(Property\UrlProperty $url)
 */
class RVParkType extends CivicStructureType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RVPark';
	}
}