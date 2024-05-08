<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A hospital.
 * 
 * @method HospitalType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method HospitalType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method HospitalType setAddress(Property\AddressProperty $address)
 * @method HospitalType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method HospitalType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method HospitalType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method HospitalType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method HospitalType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method HospitalType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method HospitalType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method HospitalType setDescription(Property\DescriptionProperty $description)
 * @method HospitalType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method HospitalType setEvent(Property\EventProperty $event)
 * @method HospitalType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method HospitalType setGeo(Property\GeoProperty $geo)
 * @method HospitalType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method HospitalType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method HospitalType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method HospitalType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method HospitalType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method HospitalType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method HospitalType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method HospitalType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method HospitalType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method HospitalType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method HospitalType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method HospitalType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method HospitalType setHasMap(Property\HasMapProperty $hasMap)
 * @method HospitalType setIdentifier(Property\IdentifierProperty $identifier)
 * @method HospitalType setImage(Property\ImageProperty $image)
 * @method HospitalType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method HospitalType setIsicV4(Property\IsicV4Property $isicV4)
 * @method HospitalType setKeywords(Property\KeywordsProperty $keywords)
 * @method HospitalType setLatitude(Property\LatitudeProperty $latitude)
 * @method HospitalType setLogo(Property\LogoProperty $logo)
 * @method HospitalType setLongitude(Property\LongitudeProperty $longitude)
 * @method HospitalType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method HospitalType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method HospitalType setName(Property\NameProperty $name)
 * @method HospitalType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method HospitalType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method HospitalType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method HospitalType setPhoto(Property\PhotoProperty $photo)
 * @method HospitalType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method HospitalType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method HospitalType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method HospitalType setReview(Property\ReviewProperty $review)
 * @method HospitalType setSameAs(Property\SameAsProperty $sameAs)
 * @method HospitalType setSlogan(Property\SloganProperty $slogan)
 * @method HospitalType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method HospitalType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method HospitalType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method HospitalType setTelephone(Property\TelephoneProperty $telephone)
 * @method HospitalType setUrl(Property\UrlProperty $url)
 */
class HospitalType extends EmergencyServiceType {

	/**
	 * @var Property\AvailableServiceProperty
	 */
	private $availableService;

	/**
	 * @var Property\MedicalSpecialtyProperty
	 */
	private $medicalSpecialty;

	/**
	 * Get available service.
	 *
	 * @return Property\AvailableServiceProperty
	 */
	public function getAvailableService() {
		return $this->availableService;
	}

	/**
	 * Get medical specialty.
	 *
	 * @return Property\MedicalSpecialtyProperty
	 */
	public function getMedicalSpecialty() {
		return $this->medicalSpecialty;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Hospital';
	}

	/**
	 * Set available service.
	 *
	 * @param Property\AvailableServiceProperty $availableService
	 * @return HospitalType
	 */
	public function setAvailableService(Property\AvailableServiceProperty $availableService) {
		$this->availableService = $availableService;

		return $this;
	}

	/**
	 * Set medical specialty.
	 *
	 * @param Property\MedicalSpecialtyProperty $medicalSpecialty
	 * @return HospitalType
	 */
	public function setMedicalSpecialty(Property\MedicalSpecialtyProperty $medicalSpecialty) {
		$this->medicalSpecialty = $medicalSpecialty;

		return $this;
	}
}