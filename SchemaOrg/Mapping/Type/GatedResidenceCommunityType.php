<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class GatedResidenceCommunityType.
 * 
 * @method GatedResidenceCommunityType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method GatedResidenceCommunityType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method GatedResidenceCommunityType setAddress(Property\AddressProperty $address)
 * @method GatedResidenceCommunityType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method GatedResidenceCommunityType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method GatedResidenceCommunityType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method GatedResidenceCommunityType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method GatedResidenceCommunityType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method GatedResidenceCommunityType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method GatedResidenceCommunityType setDescription(Property\DescriptionProperty $description)
 * @method GatedResidenceCommunityType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method GatedResidenceCommunityType setEvent(Property\EventProperty $event)
 * @method GatedResidenceCommunityType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method GatedResidenceCommunityType setGeo(Property\GeoProperty $geo)
 * @method GatedResidenceCommunityType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method GatedResidenceCommunityType setHasMap(Property\HasMapProperty $hasMap)
 * @method GatedResidenceCommunityType setIdentifier(Property\IdentifierProperty $identifier)
 * @method GatedResidenceCommunityType setImage(Property\ImageProperty $image)
 * @method GatedResidenceCommunityType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method GatedResidenceCommunityType setIsicV4(Property\IsicV4Property $isicV4)
 * @method GatedResidenceCommunityType setLogo(Property\LogoProperty $logo)
 * @method GatedResidenceCommunityType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method GatedResidenceCommunityType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method GatedResidenceCommunityType setName(Property\NameProperty $name)
 * @method GatedResidenceCommunityType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method GatedResidenceCommunityType setPhoto(Property\PhotoProperty $photo)
 * @method GatedResidenceCommunityType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method GatedResidenceCommunityType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method GatedResidenceCommunityType setReview(Property\ReviewProperty $review)
 * @method GatedResidenceCommunityType setSameAs(Property\SameAsProperty $sameAs)
 * @method GatedResidenceCommunityType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method GatedResidenceCommunityType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method GatedResidenceCommunityType setTelephone(Property\TelephoneProperty $telephone)
 * @method GatedResidenceCommunityType setUrl(Property\UrlProperty $url)
 */
class GatedResidenceCommunityType extends ResidenceType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/GatedResidenceCommunity';
	}
}