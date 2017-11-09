<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class HinduTempleType.
 * 
 * @method HinduTempleType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method HinduTempleType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method HinduTempleType setAddress(Property\AddressProperty $address)
 * @method HinduTempleType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method HinduTempleType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method HinduTempleType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method HinduTempleType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method HinduTempleType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method HinduTempleType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method HinduTempleType setDescription(Property\DescriptionProperty $description)
 * @method HinduTempleType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method HinduTempleType setEvent(Property\EventProperty $event)
 * @method HinduTempleType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method HinduTempleType setGeo(Property\GeoProperty $geo)
 * @method HinduTempleType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method HinduTempleType setHasMap(Property\HasMapProperty $hasMap)
 * @method HinduTempleType setIdentifier(Property\IdentifierProperty $identifier)
 * @method HinduTempleType setImage(Property\ImageProperty $image)
 * @method HinduTempleType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method HinduTempleType setIsicV4(Property\IsicV4Property $isicV4)
 * @method HinduTempleType setLogo(Property\LogoProperty $logo)
 * @method HinduTempleType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method HinduTempleType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method HinduTempleType setName(Property\NameProperty $name)
 * @method HinduTempleType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method HinduTempleType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method HinduTempleType setPhoto(Property\PhotoProperty $photo)
 * @method HinduTempleType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method HinduTempleType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method HinduTempleType setReview(Property\ReviewProperty $review)
 * @method HinduTempleType setSameAs(Property\SameAsProperty $sameAs)
 * @method HinduTempleType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method HinduTempleType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method HinduTempleType setTelephone(Property\TelephoneProperty $telephone)
 * @method HinduTempleType setUrl(Property\UrlProperty $url)
 */
class HinduTempleType extends PlaceOfWorshipType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HinduTemple';
	}
}