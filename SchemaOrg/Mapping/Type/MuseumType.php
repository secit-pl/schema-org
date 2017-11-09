<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MuseumType.
 * 
 * @method MuseumType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method MuseumType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MuseumType setAddress(Property\AddressProperty $address)
 * @method MuseumType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method MuseumType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MuseumType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method MuseumType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method MuseumType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method MuseumType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method MuseumType setDescription(Property\DescriptionProperty $description)
 * @method MuseumType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MuseumType setEvent(Property\EventProperty $event)
 * @method MuseumType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method MuseumType setGeo(Property\GeoProperty $geo)
 * @method MuseumType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method MuseumType setHasMap(Property\HasMapProperty $hasMap)
 * @method MuseumType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MuseumType setImage(Property\ImageProperty $image)
 * @method MuseumType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method MuseumType setIsicV4(Property\IsicV4Property $isicV4)
 * @method MuseumType setLogo(Property\LogoProperty $logo)
 * @method MuseumType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MuseumType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method MuseumType setName(Property\NameProperty $name)
 * @method MuseumType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method MuseumType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method MuseumType setPhoto(Property\PhotoProperty $photo)
 * @method MuseumType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MuseumType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method MuseumType setReview(Property\ReviewProperty $review)
 * @method MuseumType setSameAs(Property\SameAsProperty $sameAs)
 * @method MuseumType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method MuseumType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method MuseumType setTelephone(Property\TelephoneProperty $telephone)
 * @method MuseumType setUrl(Property\UrlProperty $url)
 */
class MuseumType extends CivicStructureType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Museum';
	}
}