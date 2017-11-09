<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PerformingArtsTheaterType.
 * 
 * @method PerformingArtsTheaterType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method PerformingArtsTheaterType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PerformingArtsTheaterType setAddress(Property\AddressProperty $address)
 * @method PerformingArtsTheaterType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method PerformingArtsTheaterType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PerformingArtsTheaterType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method PerformingArtsTheaterType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method PerformingArtsTheaterType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method PerformingArtsTheaterType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method PerformingArtsTheaterType setDescription(Property\DescriptionProperty $description)
 * @method PerformingArtsTheaterType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PerformingArtsTheaterType setEvent(Property\EventProperty $event)
 * @method PerformingArtsTheaterType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method PerformingArtsTheaterType setGeo(Property\GeoProperty $geo)
 * @method PerformingArtsTheaterType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method PerformingArtsTheaterType setHasMap(Property\HasMapProperty $hasMap)
 * @method PerformingArtsTheaterType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PerformingArtsTheaterType setImage(Property\ImageProperty $image)
 * @method PerformingArtsTheaterType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method PerformingArtsTheaterType setIsicV4(Property\IsicV4Property $isicV4)
 * @method PerformingArtsTheaterType setLogo(Property\LogoProperty $logo)
 * @method PerformingArtsTheaterType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PerformingArtsTheaterType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method PerformingArtsTheaterType setName(Property\NameProperty $name)
 * @method PerformingArtsTheaterType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method PerformingArtsTheaterType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method PerformingArtsTheaterType setPhoto(Property\PhotoProperty $photo)
 * @method PerformingArtsTheaterType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PerformingArtsTheaterType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method PerformingArtsTheaterType setReview(Property\ReviewProperty $review)
 * @method PerformingArtsTheaterType setSameAs(Property\SameAsProperty $sameAs)
 * @method PerformingArtsTheaterType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method PerformingArtsTheaterType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method PerformingArtsTheaterType setTelephone(Property\TelephoneProperty $telephone)
 * @method PerformingArtsTheaterType setUrl(Property\UrlProperty $url)
 */
class PerformingArtsTheaterType extends CivicStructureType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PerformingArtsTheater';
	}
}