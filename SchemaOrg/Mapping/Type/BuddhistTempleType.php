<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BuddhistTempleType.
 * 
 * @method BuddhistTempleType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method BuddhistTempleType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BuddhistTempleType setAddress(Property\AddressProperty $address)
 * @method BuddhistTempleType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method BuddhistTempleType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BuddhistTempleType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method BuddhistTempleType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method BuddhistTempleType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method BuddhistTempleType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method BuddhistTempleType setDescription(Property\DescriptionProperty $description)
 * @method BuddhistTempleType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BuddhistTempleType setEvent(Property\EventProperty $event)
 * @method BuddhistTempleType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method BuddhistTempleType setGeo(Property\GeoProperty $geo)
 * @method BuddhistTempleType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method BuddhistTempleType setHasMap(Property\HasMapProperty $hasMap)
 * @method BuddhistTempleType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BuddhistTempleType setImage(Property\ImageProperty $image)
 * @method BuddhistTempleType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method BuddhistTempleType setIsicV4(Property\IsicV4Property $isicV4)
 * @method BuddhistTempleType setLogo(Property\LogoProperty $logo)
 * @method BuddhistTempleType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BuddhistTempleType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method BuddhistTempleType setName(Property\NameProperty $name)
 * @method BuddhistTempleType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method BuddhistTempleType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method BuddhistTempleType setPhoto(Property\PhotoProperty $photo)
 * @method BuddhistTempleType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BuddhistTempleType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method BuddhistTempleType setReview(Property\ReviewProperty $review)
 * @method BuddhistTempleType setSameAs(Property\SameAsProperty $sameAs)
 * @method BuddhistTempleType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method BuddhistTempleType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method BuddhistTempleType setTelephone(Property\TelephoneProperty $telephone)
 * @method BuddhistTempleType setUrl(Property\UrlProperty $url)
 */
class BuddhistTempleType extends PlaceOfWorshipType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BuddhistTemple';
	}
}