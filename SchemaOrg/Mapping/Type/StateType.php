<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class StateType.
 * 
 * @method StateType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method StateType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method StateType setAddress(Property\AddressProperty $address)
 * @method StateType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method StateType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method StateType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method StateType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method StateType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method StateType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method StateType setDescription(Property\DescriptionProperty $description)
 * @method StateType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method StateType setEvent(Property\EventProperty $event)
 * @method StateType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method StateType setGeo(Property\GeoProperty $geo)
 * @method StateType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method StateType setHasMap(Property\HasMapProperty $hasMap)
 * @method StateType setIdentifier(Property\IdentifierProperty $identifier)
 * @method StateType setImage(Property\ImageProperty $image)
 * @method StateType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method StateType setIsicV4(Property\IsicV4Property $isicV4)
 * @method StateType setLogo(Property\LogoProperty $logo)
 * @method StateType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method StateType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method StateType setName(Property\NameProperty $name)
 * @method StateType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method StateType setPhoto(Property\PhotoProperty $photo)
 * @method StateType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method StateType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method StateType setReview(Property\ReviewProperty $review)
 * @method StateType setSameAs(Property\SameAsProperty $sameAs)
 * @method StateType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method StateType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method StateType setTelephone(Property\TelephoneProperty $telephone)
 * @method StateType setUrl(Property\UrlProperty $url)
 */
class StateType extends AdministrativeAreaType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/State';
	}
}