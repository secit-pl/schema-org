<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LandformType.
 * 
 * @method LandformType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method LandformType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method LandformType setAddress(Property\AddressProperty $address)
 * @method LandformType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method LandformType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method LandformType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method LandformType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method LandformType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method LandformType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method LandformType setDescription(Property\DescriptionProperty $description)
 * @method LandformType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method LandformType setEvent(Property\EventProperty $event)
 * @method LandformType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method LandformType setGeo(Property\GeoProperty $geo)
 * @method LandformType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method LandformType setHasMap(Property\HasMapProperty $hasMap)
 * @method LandformType setIdentifier(Property\IdentifierProperty $identifier)
 * @method LandformType setImage(Property\ImageProperty $image)
 * @method LandformType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method LandformType setIsicV4(Property\IsicV4Property $isicV4)
 * @method LandformType setLogo(Property\LogoProperty $logo)
 * @method LandformType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method LandformType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method LandformType setName(Property\NameProperty $name)
 * @method LandformType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method LandformType setPhoto(Property\PhotoProperty $photo)
 * @method LandformType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method LandformType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method LandformType setReview(Property\ReviewProperty $review)
 * @method LandformType setSameAs(Property\SameAsProperty $sameAs)
 * @method LandformType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method LandformType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method LandformType setTelephone(Property\TelephoneProperty $telephone)
 * @method LandformType setUrl(Property\UrlProperty $url)
 */
class LandformType extends PlaceType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Landform';
	}
}