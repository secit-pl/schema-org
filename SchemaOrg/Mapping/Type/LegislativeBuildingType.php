<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LegislativeBuildingType.
 * 
 * @method LegislativeBuildingType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method LegislativeBuildingType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method LegislativeBuildingType setAddress(Property\AddressProperty $address)
 * @method LegislativeBuildingType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method LegislativeBuildingType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method LegislativeBuildingType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method LegislativeBuildingType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method LegislativeBuildingType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method LegislativeBuildingType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method LegislativeBuildingType setDescription(Property\DescriptionProperty $description)
 * @method LegislativeBuildingType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method LegislativeBuildingType setEvent(Property\EventProperty $event)
 * @method LegislativeBuildingType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method LegislativeBuildingType setGeo(Property\GeoProperty $geo)
 * @method LegislativeBuildingType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method LegislativeBuildingType setHasMap(Property\HasMapProperty $hasMap)
 * @method LegislativeBuildingType setIdentifier(Property\IdentifierProperty $identifier)
 * @method LegislativeBuildingType setImage(Property\ImageProperty $image)
 * @method LegislativeBuildingType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method LegislativeBuildingType setIsicV4(Property\IsicV4Property $isicV4)
 * @method LegislativeBuildingType setLogo(Property\LogoProperty $logo)
 * @method LegislativeBuildingType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method LegislativeBuildingType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method LegislativeBuildingType setName(Property\NameProperty $name)
 * @method LegislativeBuildingType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method LegislativeBuildingType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method LegislativeBuildingType setPhoto(Property\PhotoProperty $photo)
 * @method LegislativeBuildingType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method LegislativeBuildingType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method LegislativeBuildingType setReview(Property\ReviewProperty $review)
 * @method LegislativeBuildingType setSameAs(Property\SameAsProperty $sameAs)
 * @method LegislativeBuildingType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method LegislativeBuildingType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method LegislativeBuildingType setTelephone(Property\TelephoneProperty $telephone)
 * @method LegislativeBuildingType setUrl(Property\UrlProperty $url)
 */
class LegislativeBuildingType extends GovernmentBuildingType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LegislativeBuilding';
	}
}