<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CrematoriumType.
 * 
 * @method CrematoriumType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method CrematoriumType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CrematoriumType setAddress(Property\AddressProperty $address)
 * @method CrematoriumType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method CrematoriumType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CrematoriumType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method CrematoriumType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method CrematoriumType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method CrematoriumType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method CrematoriumType setDescription(Property\DescriptionProperty $description)
 * @method CrematoriumType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CrematoriumType setEvent(Property\EventProperty $event)
 * @method CrematoriumType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method CrematoriumType setGeo(Property\GeoProperty $geo)
 * @method CrematoriumType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method CrematoriumType setHasMap(Property\HasMapProperty $hasMap)
 * @method CrematoriumType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CrematoriumType setImage(Property\ImageProperty $image)
 * @method CrematoriumType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method CrematoriumType setIsicV4(Property\IsicV4Property $isicV4)
 * @method CrematoriumType setLogo(Property\LogoProperty $logo)
 * @method CrematoriumType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CrematoriumType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method CrematoriumType setName(Property\NameProperty $name)
 * @method CrematoriumType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method CrematoriumType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method CrematoriumType setPhoto(Property\PhotoProperty $photo)
 * @method CrematoriumType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CrematoriumType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method CrematoriumType setReview(Property\ReviewProperty $review)
 * @method CrematoriumType setSameAs(Property\SameAsProperty $sameAs)
 * @method CrematoriumType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method CrematoriumType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method CrematoriumType setTelephone(Property\TelephoneProperty $telephone)
 * @method CrematoriumType setUrl(Property\UrlProperty $url)
 */
class CrematoriumType extends CivicStructureType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Crematorium';
	}
}