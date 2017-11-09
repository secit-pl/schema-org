<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PlaceOfWorshipType.
 * 
 * @method PlaceOfWorshipType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method PlaceOfWorshipType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PlaceOfWorshipType setAddress(Property\AddressProperty $address)
 * @method PlaceOfWorshipType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method PlaceOfWorshipType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PlaceOfWorshipType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method PlaceOfWorshipType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method PlaceOfWorshipType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method PlaceOfWorshipType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method PlaceOfWorshipType setDescription(Property\DescriptionProperty $description)
 * @method PlaceOfWorshipType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PlaceOfWorshipType setEvent(Property\EventProperty $event)
 * @method PlaceOfWorshipType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method PlaceOfWorshipType setGeo(Property\GeoProperty $geo)
 * @method PlaceOfWorshipType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method PlaceOfWorshipType setHasMap(Property\HasMapProperty $hasMap)
 * @method PlaceOfWorshipType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PlaceOfWorshipType setImage(Property\ImageProperty $image)
 * @method PlaceOfWorshipType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method PlaceOfWorshipType setIsicV4(Property\IsicV4Property $isicV4)
 * @method PlaceOfWorshipType setLogo(Property\LogoProperty $logo)
 * @method PlaceOfWorshipType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PlaceOfWorshipType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method PlaceOfWorshipType setName(Property\NameProperty $name)
 * @method PlaceOfWorshipType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method PlaceOfWorshipType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method PlaceOfWorshipType setPhoto(Property\PhotoProperty $photo)
 * @method PlaceOfWorshipType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PlaceOfWorshipType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method PlaceOfWorshipType setReview(Property\ReviewProperty $review)
 * @method PlaceOfWorshipType setSameAs(Property\SameAsProperty $sameAs)
 * @method PlaceOfWorshipType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method PlaceOfWorshipType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method PlaceOfWorshipType setTelephone(Property\TelephoneProperty $telephone)
 * @method PlaceOfWorshipType setUrl(Property\UrlProperty $url)
 */
class PlaceOfWorshipType extends CivicStructureType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PlaceOfWorship';
	}
}