<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A facility, often associated with a hospital or medical school, that is devoted to the specific diagnosis and/or healthcare. Previously limited to outpatients but with evolution it may be open to inpatients as well.
 * 
 * @method MedicalClinicType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method MedicalClinicType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MedicalClinicType setAddress(Property\AddressProperty $address)
 * @method MedicalClinicType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method MedicalClinicType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MedicalClinicType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method MedicalClinicType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method MedicalClinicType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method MedicalClinicType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method MedicalClinicType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method MedicalClinicType setDescription(Property\DescriptionProperty $description)
 * @method MedicalClinicType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MedicalClinicType setEvent(Property\EventProperty $event)
 * @method MedicalClinicType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method MedicalClinicType setGeo(Property\GeoProperty $geo)
 * @method MedicalClinicType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method MedicalClinicType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method MedicalClinicType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method MedicalClinicType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method MedicalClinicType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method MedicalClinicType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method MedicalClinicType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method MedicalClinicType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method MedicalClinicType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method MedicalClinicType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method MedicalClinicType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method MedicalClinicType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method MedicalClinicType setHasMap(Property\HasMapProperty $hasMap)
 * @method MedicalClinicType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MedicalClinicType setImage(Property\ImageProperty $image)
 * @method MedicalClinicType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method MedicalClinicType setIsicV4(Property\IsicV4Property $isicV4)
 * @method MedicalClinicType setKeywords(Property\KeywordsProperty $keywords)
 * @method MedicalClinicType setLatitude(Property\LatitudeProperty $latitude)
 * @method MedicalClinicType setLogo(Property\LogoProperty $logo)
 * @method MedicalClinicType setLongitude(Property\LongitudeProperty $longitude)
 * @method MedicalClinicType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MedicalClinicType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method MedicalClinicType setName(Property\NameProperty $name)
 * @method MedicalClinicType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method MedicalClinicType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method MedicalClinicType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method MedicalClinicType setPhoto(Property\PhotoProperty $photo)
 * @method MedicalClinicType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MedicalClinicType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method MedicalClinicType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method MedicalClinicType setReview(Property\ReviewProperty $review)
 * @method MedicalClinicType setSameAs(Property\SameAsProperty $sameAs)
 * @method MedicalClinicType setSlogan(Property\SloganProperty $slogan)
 * @method MedicalClinicType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method MedicalClinicType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method MedicalClinicType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MedicalClinicType setTelephone(Property\TelephoneProperty $telephone)
 * @method MedicalClinicType setUrl(Property\UrlProperty $url)
 */
class MedicalClinicType extends MedicalBusinessType {

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
		return 'https://schema.org/MedicalClinic';
	}

	/**
	 * Set available service.
	 *
	 * @param Property\AvailableServiceProperty $availableService
	 * @return MedicalClinicType
	 */
	public function setAvailableService(Property\AvailableServiceProperty $availableService) {
		$this->availableService = $availableService;

		return $this;
	}

	/**
	 * Set medical specialty.
	 *
	 * @param Property\MedicalSpecialtyProperty $medicalSpecialty
	 * @return MedicalClinicType
	 */
	public function setMedicalSpecialty(Property\MedicalSpecialtyProperty $medicalSpecialty) {
		$this->medicalSpecialty = $medicalSpecialty;

		return $this;
	}
}