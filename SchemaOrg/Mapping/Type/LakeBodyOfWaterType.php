<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LakeBodyOfWaterType.
 * 
 * @method LakeBodyOfWaterType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method LakeBodyOfWaterType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method LakeBodyOfWaterType setAddress(Property\AddressProperty $address)
 * @method LakeBodyOfWaterType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method LakeBodyOfWaterType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method LakeBodyOfWaterType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method LakeBodyOfWaterType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method LakeBodyOfWaterType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method LakeBodyOfWaterType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method LakeBodyOfWaterType setDescription(Property\DescriptionProperty $description)
 * @method LakeBodyOfWaterType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method LakeBodyOfWaterType setEvent(Property\EventProperty $event)
 * @method LakeBodyOfWaterType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method LakeBodyOfWaterType setGeo(Property\GeoProperty $geo)
 * @method LakeBodyOfWaterType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method LakeBodyOfWaterType setHasMap(Property\HasMapProperty $hasMap)
 * @method LakeBodyOfWaterType setIdentifier(Property\IdentifierProperty $identifier)
 * @method LakeBodyOfWaterType setImage(Property\ImageProperty $image)
 * @method LakeBodyOfWaterType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method LakeBodyOfWaterType setIsicV4(Property\IsicV4Property $isicV4)
 * @method LakeBodyOfWaterType setLogo(Property\LogoProperty $logo)
 * @method LakeBodyOfWaterType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method LakeBodyOfWaterType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method LakeBodyOfWaterType setName(Property\NameProperty $name)
 * @method LakeBodyOfWaterType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method LakeBodyOfWaterType setPhoto(Property\PhotoProperty $photo)
 * @method LakeBodyOfWaterType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method LakeBodyOfWaterType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method LakeBodyOfWaterType setReview(Property\ReviewProperty $review)
 * @method LakeBodyOfWaterType setSameAs(Property\SameAsProperty $sameAs)
 * @method LakeBodyOfWaterType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method LakeBodyOfWaterType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method LakeBodyOfWaterType setTelephone(Property\TelephoneProperty $telephone)
 * @method LakeBodyOfWaterType setUrl(Property\UrlProperty $url)
 */
class LakeBodyOfWaterType extends BodyOfWaterType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LakeBodyOfWater';
	}
}