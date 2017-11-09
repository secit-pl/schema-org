<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class EmbassyType.
 * 
 * @method EmbassyType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method EmbassyType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method EmbassyType setAddress(Property\AddressProperty $address)
 * @method EmbassyType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method EmbassyType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method EmbassyType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method EmbassyType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method EmbassyType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method EmbassyType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method EmbassyType setDescription(Property\DescriptionProperty $description)
 * @method EmbassyType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method EmbassyType setEvent(Property\EventProperty $event)
 * @method EmbassyType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method EmbassyType setGeo(Property\GeoProperty $geo)
 * @method EmbassyType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method EmbassyType setHasMap(Property\HasMapProperty $hasMap)
 * @method EmbassyType setIdentifier(Property\IdentifierProperty $identifier)
 * @method EmbassyType setImage(Property\ImageProperty $image)
 * @method EmbassyType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method EmbassyType setIsicV4(Property\IsicV4Property $isicV4)
 * @method EmbassyType setLogo(Property\LogoProperty $logo)
 * @method EmbassyType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method EmbassyType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method EmbassyType setName(Property\NameProperty $name)
 * @method EmbassyType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method EmbassyType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method EmbassyType setPhoto(Property\PhotoProperty $photo)
 * @method EmbassyType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method EmbassyType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method EmbassyType setReview(Property\ReviewProperty $review)
 * @method EmbassyType setSameAs(Property\SameAsProperty $sameAs)
 * @method EmbassyType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method EmbassyType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method EmbassyType setTelephone(Property\TelephoneProperty $telephone)
 * @method EmbassyType setUrl(Property\UrlProperty $url)
 */
class EmbassyType extends GovernmentBuildingType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Embassy';
	}
}