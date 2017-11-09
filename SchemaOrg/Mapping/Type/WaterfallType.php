<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class WaterfallType.
 * 
 * @method WaterfallType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method WaterfallType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method WaterfallType setAddress(Property\AddressProperty $address)
 * @method WaterfallType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method WaterfallType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method WaterfallType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method WaterfallType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method WaterfallType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method WaterfallType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method WaterfallType setDescription(Property\DescriptionProperty $description)
 * @method WaterfallType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method WaterfallType setEvent(Property\EventProperty $event)
 * @method WaterfallType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method WaterfallType setGeo(Property\GeoProperty $geo)
 * @method WaterfallType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method WaterfallType setHasMap(Property\HasMapProperty $hasMap)
 * @method WaterfallType setIdentifier(Property\IdentifierProperty $identifier)
 * @method WaterfallType setImage(Property\ImageProperty $image)
 * @method WaterfallType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method WaterfallType setIsicV4(Property\IsicV4Property $isicV4)
 * @method WaterfallType setLogo(Property\LogoProperty $logo)
 * @method WaterfallType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method WaterfallType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method WaterfallType setName(Property\NameProperty $name)
 * @method WaterfallType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method WaterfallType setPhoto(Property\PhotoProperty $photo)
 * @method WaterfallType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method WaterfallType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method WaterfallType setReview(Property\ReviewProperty $review)
 * @method WaterfallType setSameAs(Property\SameAsProperty $sameAs)
 * @method WaterfallType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method WaterfallType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method WaterfallType setTelephone(Property\TelephoneProperty $telephone)
 * @method WaterfallType setUrl(Property\UrlProperty $url)
 */
class WaterfallType extends BodyOfWaterType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Waterfall';
	}
}