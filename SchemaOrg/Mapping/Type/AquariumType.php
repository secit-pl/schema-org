<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AquariumType.
 * 
 * @method AquariumType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method AquariumType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AquariumType setAddress(Property\AddressProperty $address)
 * @method AquariumType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method AquariumType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AquariumType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method AquariumType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method AquariumType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method AquariumType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method AquariumType setDescription(Property\DescriptionProperty $description)
 * @method AquariumType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AquariumType setEvent(Property\EventProperty $event)
 * @method AquariumType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method AquariumType setGeo(Property\GeoProperty $geo)
 * @method AquariumType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method AquariumType setHasMap(Property\HasMapProperty $hasMap)
 * @method AquariumType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AquariumType setImage(Property\ImageProperty $image)
 * @method AquariumType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method AquariumType setIsicV4(Property\IsicV4Property $isicV4)
 * @method AquariumType setLogo(Property\LogoProperty $logo)
 * @method AquariumType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AquariumType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method AquariumType setName(Property\NameProperty $name)
 * @method AquariumType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method AquariumType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method AquariumType setPhoto(Property\PhotoProperty $photo)
 * @method AquariumType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AquariumType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method AquariumType setReview(Property\ReviewProperty $review)
 * @method AquariumType setSameAs(Property\SameAsProperty $sameAs)
 * @method AquariumType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method AquariumType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method AquariumType setTelephone(Property\TelephoneProperty $telephone)
 * @method AquariumType setUrl(Property\UrlProperty $url)
 */
class AquariumType extends CivicStructureType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Aquarium';
	}
}