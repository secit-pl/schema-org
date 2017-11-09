<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ReservoirType.
 * 
 * @method ReservoirType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method ReservoirType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ReservoirType setAddress(Property\AddressProperty $address)
 * @method ReservoirType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ReservoirType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ReservoirType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method ReservoirType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method ReservoirType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method ReservoirType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method ReservoirType setDescription(Property\DescriptionProperty $description)
 * @method ReservoirType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ReservoirType setEvent(Property\EventProperty $event)
 * @method ReservoirType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method ReservoirType setGeo(Property\GeoProperty $geo)
 * @method ReservoirType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method ReservoirType setHasMap(Property\HasMapProperty $hasMap)
 * @method ReservoirType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ReservoirType setImage(Property\ImageProperty $image)
 * @method ReservoirType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method ReservoirType setIsicV4(Property\IsicV4Property $isicV4)
 * @method ReservoirType setLogo(Property\LogoProperty $logo)
 * @method ReservoirType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ReservoirType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method ReservoirType setName(Property\NameProperty $name)
 * @method ReservoirType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method ReservoirType setPhoto(Property\PhotoProperty $photo)
 * @method ReservoirType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ReservoirType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method ReservoirType setReview(Property\ReviewProperty $review)
 * @method ReservoirType setSameAs(Property\SameAsProperty $sameAs)
 * @method ReservoirType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method ReservoirType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method ReservoirType setTelephone(Property\TelephoneProperty $telephone)
 * @method ReservoirType setUrl(Property\UrlProperty $url)
 */
class ReservoirType extends PlaceType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Reservoir';
	}
}