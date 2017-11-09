<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OceanBodyOfWaterType.
 * 
 * @method OceanBodyOfWaterType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method OceanBodyOfWaterType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method OceanBodyOfWaterType setAddress(Property\AddressProperty $address)
 * @method OceanBodyOfWaterType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method OceanBodyOfWaterType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method OceanBodyOfWaterType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method OceanBodyOfWaterType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method OceanBodyOfWaterType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method OceanBodyOfWaterType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method OceanBodyOfWaterType setDescription(Property\DescriptionProperty $description)
 * @method OceanBodyOfWaterType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method OceanBodyOfWaterType setEvent(Property\EventProperty $event)
 * @method OceanBodyOfWaterType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method OceanBodyOfWaterType setGeo(Property\GeoProperty $geo)
 * @method OceanBodyOfWaterType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method OceanBodyOfWaterType setHasMap(Property\HasMapProperty $hasMap)
 * @method OceanBodyOfWaterType setIdentifier(Property\IdentifierProperty $identifier)
 * @method OceanBodyOfWaterType setImage(Property\ImageProperty $image)
 * @method OceanBodyOfWaterType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method OceanBodyOfWaterType setIsicV4(Property\IsicV4Property $isicV4)
 * @method OceanBodyOfWaterType setLogo(Property\LogoProperty $logo)
 * @method OceanBodyOfWaterType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method OceanBodyOfWaterType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method OceanBodyOfWaterType setName(Property\NameProperty $name)
 * @method OceanBodyOfWaterType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method OceanBodyOfWaterType setPhoto(Property\PhotoProperty $photo)
 * @method OceanBodyOfWaterType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method OceanBodyOfWaterType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method OceanBodyOfWaterType setReview(Property\ReviewProperty $review)
 * @method OceanBodyOfWaterType setSameAs(Property\SameAsProperty $sameAs)
 * @method OceanBodyOfWaterType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method OceanBodyOfWaterType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method OceanBodyOfWaterType setTelephone(Property\TelephoneProperty $telephone)
 * @method OceanBodyOfWaterType setUrl(Property\UrlProperty $url)
 */
class OceanBodyOfWaterType extends BodyOfWaterType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OceanBodyOfWater';
	}
}