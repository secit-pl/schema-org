<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AdministrativeAreaType.
 * 
 * @method AdministrativeAreaType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method AdministrativeAreaType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AdministrativeAreaType setAddress(Property\AddressProperty $address)
 * @method AdministrativeAreaType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method AdministrativeAreaType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AdministrativeAreaType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method AdministrativeAreaType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method AdministrativeAreaType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method AdministrativeAreaType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method AdministrativeAreaType setDescription(Property\DescriptionProperty $description)
 * @method AdministrativeAreaType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AdministrativeAreaType setEvent(Property\EventProperty $event)
 * @method AdministrativeAreaType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method AdministrativeAreaType setGeo(Property\GeoProperty $geo)
 * @method AdministrativeAreaType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method AdministrativeAreaType setHasMap(Property\HasMapProperty $hasMap)
 * @method AdministrativeAreaType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AdministrativeAreaType setImage(Property\ImageProperty $image)
 * @method AdministrativeAreaType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method AdministrativeAreaType setIsicV4(Property\IsicV4Property $isicV4)
 * @method AdministrativeAreaType setLogo(Property\LogoProperty $logo)
 * @method AdministrativeAreaType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AdministrativeAreaType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method AdministrativeAreaType setName(Property\NameProperty $name)
 * @method AdministrativeAreaType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method AdministrativeAreaType setPhoto(Property\PhotoProperty $photo)
 * @method AdministrativeAreaType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AdministrativeAreaType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method AdministrativeAreaType setReview(Property\ReviewProperty $review)
 * @method AdministrativeAreaType setSameAs(Property\SameAsProperty $sameAs)
 * @method AdministrativeAreaType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method AdministrativeAreaType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method AdministrativeAreaType setTelephone(Property\TelephoneProperty $telephone)
 * @method AdministrativeAreaType setUrl(Property\UrlProperty $url)
 */
class AdministrativeAreaType extends PlaceType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AdministrativeArea';
	}
}