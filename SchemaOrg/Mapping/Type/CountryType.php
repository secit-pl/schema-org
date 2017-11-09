<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CountryType.
 * 
 * @method CountryType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method CountryType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CountryType setAddress(Property\AddressProperty $address)
 * @method CountryType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method CountryType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CountryType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method CountryType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method CountryType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method CountryType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method CountryType setDescription(Property\DescriptionProperty $description)
 * @method CountryType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CountryType setEvent(Property\EventProperty $event)
 * @method CountryType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method CountryType setGeo(Property\GeoProperty $geo)
 * @method CountryType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method CountryType setHasMap(Property\HasMapProperty $hasMap)
 * @method CountryType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CountryType setImage(Property\ImageProperty $image)
 * @method CountryType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method CountryType setIsicV4(Property\IsicV4Property $isicV4)
 * @method CountryType setLogo(Property\LogoProperty $logo)
 * @method CountryType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CountryType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method CountryType setName(Property\NameProperty $name)
 * @method CountryType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method CountryType setPhoto(Property\PhotoProperty $photo)
 * @method CountryType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CountryType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method CountryType setReview(Property\ReviewProperty $review)
 * @method CountryType setSameAs(Property\SameAsProperty $sameAs)
 * @method CountryType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method CountryType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method CountryType setTelephone(Property\TelephoneProperty $telephone)
 * @method CountryType setUrl(Property\UrlProperty $url)
 */
class CountryType extends AdministrativeAreaType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Country';
	}
}