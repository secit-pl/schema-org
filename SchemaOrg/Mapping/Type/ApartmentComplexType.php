<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Residence type: Apartment complex.
 * 
 * @method ApartmentComplexType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method ApartmentComplexType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ApartmentComplexType setAddress(Property\AddressProperty $address)
 * @method ApartmentComplexType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ApartmentComplexType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ApartmentComplexType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method ApartmentComplexType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method ApartmentComplexType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method ApartmentComplexType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method ApartmentComplexType setDescription(Property\DescriptionProperty $description)
 * @method ApartmentComplexType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ApartmentComplexType setEvent(Property\EventProperty $event)
 * @method ApartmentComplexType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method ApartmentComplexType setGeo(Property\GeoProperty $geo)
 * @method ApartmentComplexType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method ApartmentComplexType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method ApartmentComplexType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method ApartmentComplexType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method ApartmentComplexType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method ApartmentComplexType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method ApartmentComplexType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method ApartmentComplexType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method ApartmentComplexType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method ApartmentComplexType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method ApartmentComplexType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method ApartmentComplexType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method ApartmentComplexType setHasMap(Property\HasMapProperty $hasMap)
 * @method ApartmentComplexType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ApartmentComplexType setImage(Property\ImageProperty $image)
 * @method ApartmentComplexType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method ApartmentComplexType setIsicV4(Property\IsicV4Property $isicV4)
 * @method ApartmentComplexType setKeywords(Property\KeywordsProperty $keywords)
 * @method ApartmentComplexType setLatitude(Property\LatitudeProperty $latitude)
 * @method ApartmentComplexType setLogo(Property\LogoProperty $logo)
 * @method ApartmentComplexType setLongitude(Property\LongitudeProperty $longitude)
 * @method ApartmentComplexType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ApartmentComplexType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method ApartmentComplexType setName(Property\NameProperty $name)
 * @method ApartmentComplexType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method ApartmentComplexType setPhoto(Property\PhotoProperty $photo)
 * @method ApartmentComplexType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ApartmentComplexType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method ApartmentComplexType setReview(Property\ReviewProperty $review)
 * @method ApartmentComplexType setSameAs(Property\SameAsProperty $sameAs)
 * @method ApartmentComplexType setSlogan(Property\SloganProperty $slogan)
 * @method ApartmentComplexType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method ApartmentComplexType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method ApartmentComplexType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ApartmentComplexType setTelephone(Property\TelephoneProperty $telephone)
 * @method ApartmentComplexType setUrl(Property\UrlProperty $url)
 */
class ApartmentComplexType extends ResidenceType {

	/**
	 * @var Property\PetsAllowedProperty
	 */
	private $petsAllowed;

	/**
	 * Get pets allowed.
	 *
	 * @return Property\PetsAllowedProperty
	 */
	public function getPetsAllowed() {
		return $this->petsAllowed;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ApartmentComplex';
	}

	/**
	 * Set pets allowed.
	 *
	 * @param Property\PetsAllowedProperty $petsAllowed
	 * @return ApartmentComplexType
	 */
	public function setPetsAllowed(Property\PetsAllowedProperty $petsAllowed) {
		$this->petsAllowed = $petsAllowed;

		return $this;
	}
}