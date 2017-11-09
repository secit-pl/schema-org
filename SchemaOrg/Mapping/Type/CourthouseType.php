<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CourthouseType.
 * 
 * @method CourthouseType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method CourthouseType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CourthouseType setAddress(Property\AddressProperty $address)
 * @method CourthouseType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method CourthouseType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CourthouseType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method CourthouseType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method CourthouseType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method CourthouseType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method CourthouseType setDescription(Property\DescriptionProperty $description)
 * @method CourthouseType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CourthouseType setEvent(Property\EventProperty $event)
 * @method CourthouseType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method CourthouseType setGeo(Property\GeoProperty $geo)
 * @method CourthouseType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method CourthouseType setHasMap(Property\HasMapProperty $hasMap)
 * @method CourthouseType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CourthouseType setImage(Property\ImageProperty $image)
 * @method CourthouseType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method CourthouseType setIsicV4(Property\IsicV4Property $isicV4)
 * @method CourthouseType setLogo(Property\LogoProperty $logo)
 * @method CourthouseType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CourthouseType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method CourthouseType setName(Property\NameProperty $name)
 * @method CourthouseType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method CourthouseType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method CourthouseType setPhoto(Property\PhotoProperty $photo)
 * @method CourthouseType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CourthouseType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method CourthouseType setReview(Property\ReviewProperty $review)
 * @method CourthouseType setSameAs(Property\SameAsProperty $sameAs)
 * @method CourthouseType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method CourthouseType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method CourthouseType setTelephone(Property\TelephoneProperty $telephone)
 * @method CourthouseType setUrl(Property\UrlProperty $url)
 */
class CourthouseType extends GovernmentBuildingType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Courthouse';
	}
}