<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PlaygroundType.
 * 
 * @method PlaygroundType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method PlaygroundType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PlaygroundType setAddress(Property\AddressProperty $address)
 * @method PlaygroundType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method PlaygroundType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PlaygroundType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method PlaygroundType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method PlaygroundType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method PlaygroundType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method PlaygroundType setDescription(Property\DescriptionProperty $description)
 * @method PlaygroundType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PlaygroundType setEvent(Property\EventProperty $event)
 * @method PlaygroundType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method PlaygroundType setGeo(Property\GeoProperty $geo)
 * @method PlaygroundType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method PlaygroundType setHasMap(Property\HasMapProperty $hasMap)
 * @method PlaygroundType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PlaygroundType setImage(Property\ImageProperty $image)
 * @method PlaygroundType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method PlaygroundType setIsicV4(Property\IsicV4Property $isicV4)
 * @method PlaygroundType setLogo(Property\LogoProperty $logo)
 * @method PlaygroundType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PlaygroundType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method PlaygroundType setName(Property\NameProperty $name)
 * @method PlaygroundType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method PlaygroundType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method PlaygroundType setPhoto(Property\PhotoProperty $photo)
 * @method PlaygroundType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PlaygroundType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method PlaygroundType setReview(Property\ReviewProperty $review)
 * @method PlaygroundType setSameAs(Property\SameAsProperty $sameAs)
 * @method PlaygroundType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method PlaygroundType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method PlaygroundType setTelephone(Property\TelephoneProperty $telephone)
 * @method PlaygroundType setUrl(Property\UrlProperty $url)
 */
class PlaygroundType extends CivicStructureType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Playground';
	}
}