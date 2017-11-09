<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class GovernmentBuildingType.
 * 
 * @method GovernmentBuildingType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method GovernmentBuildingType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method GovernmentBuildingType setAddress(Property\AddressProperty $address)
 * @method GovernmentBuildingType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method GovernmentBuildingType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method GovernmentBuildingType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method GovernmentBuildingType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method GovernmentBuildingType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method GovernmentBuildingType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method GovernmentBuildingType setDescription(Property\DescriptionProperty $description)
 * @method GovernmentBuildingType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method GovernmentBuildingType setEvent(Property\EventProperty $event)
 * @method GovernmentBuildingType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method GovernmentBuildingType setGeo(Property\GeoProperty $geo)
 * @method GovernmentBuildingType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method GovernmentBuildingType setHasMap(Property\HasMapProperty $hasMap)
 * @method GovernmentBuildingType setIdentifier(Property\IdentifierProperty $identifier)
 * @method GovernmentBuildingType setImage(Property\ImageProperty $image)
 * @method GovernmentBuildingType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method GovernmentBuildingType setIsicV4(Property\IsicV4Property $isicV4)
 * @method GovernmentBuildingType setLogo(Property\LogoProperty $logo)
 * @method GovernmentBuildingType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method GovernmentBuildingType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method GovernmentBuildingType setName(Property\NameProperty $name)
 * @method GovernmentBuildingType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method GovernmentBuildingType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method GovernmentBuildingType setPhoto(Property\PhotoProperty $photo)
 * @method GovernmentBuildingType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method GovernmentBuildingType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method GovernmentBuildingType setReview(Property\ReviewProperty $review)
 * @method GovernmentBuildingType setSameAs(Property\SameAsProperty $sameAs)
 * @method GovernmentBuildingType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method GovernmentBuildingType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method GovernmentBuildingType setTelephone(Property\TelephoneProperty $telephone)
 * @method GovernmentBuildingType setUrl(Property\UrlProperty $url)
 */
class GovernmentBuildingType extends CivicStructureType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/GovernmentBuilding';
	}
}