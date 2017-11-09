<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CanalType.
 * 
 * @method CanalType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method CanalType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CanalType setAddress(Property\AddressProperty $address)
 * @method CanalType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method CanalType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CanalType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method CanalType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method CanalType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method CanalType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method CanalType setDescription(Property\DescriptionProperty $description)
 * @method CanalType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CanalType setEvent(Property\EventProperty $event)
 * @method CanalType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method CanalType setGeo(Property\GeoProperty $geo)
 * @method CanalType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method CanalType setHasMap(Property\HasMapProperty $hasMap)
 * @method CanalType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CanalType setImage(Property\ImageProperty $image)
 * @method CanalType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method CanalType setIsicV4(Property\IsicV4Property $isicV4)
 * @method CanalType setLogo(Property\LogoProperty $logo)
 * @method CanalType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CanalType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method CanalType setName(Property\NameProperty $name)
 * @method CanalType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method CanalType setPhoto(Property\PhotoProperty $photo)
 * @method CanalType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CanalType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method CanalType setReview(Property\ReviewProperty $review)
 * @method CanalType setSameAs(Property\SameAsProperty $sameAs)
 * @method CanalType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method CanalType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method CanalType setTelephone(Property\TelephoneProperty $telephone)
 * @method CanalType setUrl(Property\UrlProperty $url)
 */
class CanalType extends BodyOfWaterType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Canal';
	}
}