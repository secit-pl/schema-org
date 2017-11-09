<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MountainType.
 * 
 * @method MountainType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method MountainType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MountainType setAddress(Property\AddressProperty $address)
 * @method MountainType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method MountainType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MountainType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method MountainType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method MountainType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method MountainType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method MountainType setDescription(Property\DescriptionProperty $description)
 * @method MountainType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MountainType setEvent(Property\EventProperty $event)
 * @method MountainType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method MountainType setGeo(Property\GeoProperty $geo)
 * @method MountainType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method MountainType setHasMap(Property\HasMapProperty $hasMap)
 * @method MountainType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MountainType setImage(Property\ImageProperty $image)
 * @method MountainType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method MountainType setIsicV4(Property\IsicV4Property $isicV4)
 * @method MountainType setLogo(Property\LogoProperty $logo)
 * @method MountainType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MountainType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method MountainType setName(Property\NameProperty $name)
 * @method MountainType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method MountainType setPhoto(Property\PhotoProperty $photo)
 * @method MountainType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MountainType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method MountainType setReview(Property\ReviewProperty $review)
 * @method MountainType setSameAs(Property\SameAsProperty $sameAs)
 * @method MountainType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method MountainType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method MountainType setTelephone(Property\TelephoneProperty $telephone)
 * @method MountainType setUrl(Property\UrlProperty $url)
 */
class MountainType extends LandformType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Mountain';
	}
}