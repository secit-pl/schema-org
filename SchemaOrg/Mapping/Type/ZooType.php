<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ZooType.
 * 
 * @method ZooType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method ZooType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ZooType setAddress(Property\AddressProperty $address)
 * @method ZooType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ZooType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ZooType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method ZooType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method ZooType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method ZooType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method ZooType setDescription(Property\DescriptionProperty $description)
 * @method ZooType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ZooType setEvent(Property\EventProperty $event)
 * @method ZooType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method ZooType setGeo(Property\GeoProperty $geo)
 * @method ZooType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method ZooType setHasMap(Property\HasMapProperty $hasMap)
 * @method ZooType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ZooType setImage(Property\ImageProperty $image)
 * @method ZooType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method ZooType setIsicV4(Property\IsicV4Property $isicV4)
 * @method ZooType setLogo(Property\LogoProperty $logo)
 * @method ZooType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ZooType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method ZooType setName(Property\NameProperty $name)
 * @method ZooType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method ZooType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method ZooType setPhoto(Property\PhotoProperty $photo)
 * @method ZooType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ZooType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method ZooType setReview(Property\ReviewProperty $review)
 * @method ZooType setSameAs(Property\SameAsProperty $sameAs)
 * @method ZooType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method ZooType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method ZooType setTelephone(Property\TelephoneProperty $telephone)
 * @method ZooType setUrl(Property\UrlProperty $url)
 */
class ZooType extends CivicStructureType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Zoo';
	}
}