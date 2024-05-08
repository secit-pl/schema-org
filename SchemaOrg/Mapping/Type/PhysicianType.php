<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An individual physician or a physician's office considered as a MedicalOrganization.
 * 
 * @method PhysicianType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method PhysicianType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PhysicianType setAddress(Property\AddressProperty $address)
 * @method PhysicianType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method PhysicianType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PhysicianType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method PhysicianType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method PhysicianType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method PhysicianType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method PhysicianType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method PhysicianType setDescription(Property\DescriptionProperty $description)
 * @method PhysicianType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PhysicianType setEvent(Property\EventProperty $event)
 * @method PhysicianType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method PhysicianType setGeo(Property\GeoProperty $geo)
 * @method PhysicianType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method PhysicianType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method PhysicianType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method PhysicianType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method PhysicianType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method PhysicianType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method PhysicianType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method PhysicianType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method PhysicianType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method PhysicianType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method PhysicianType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method PhysicianType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method PhysicianType setHasMap(Property\HasMapProperty $hasMap)
 * @method PhysicianType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PhysicianType setImage(Property\ImageProperty $image)
 * @method PhysicianType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method PhysicianType setIsicV4(Property\IsicV4Property $isicV4)
 * @method PhysicianType setKeywords(Property\KeywordsProperty $keywords)
 * @method PhysicianType setLatitude(Property\LatitudeProperty $latitude)
 * @method PhysicianType setLogo(Property\LogoProperty $logo)
 * @method PhysicianType setLongitude(Property\LongitudeProperty $longitude)
 * @method PhysicianType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PhysicianType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method PhysicianType setName(Property\NameProperty $name)
 * @method PhysicianType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method PhysicianType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method PhysicianType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method PhysicianType setPhoto(Property\PhotoProperty $photo)
 * @method PhysicianType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PhysicianType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method PhysicianType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method PhysicianType setReview(Property\ReviewProperty $review)
 * @method PhysicianType setSameAs(Property\SameAsProperty $sameAs)
 * @method PhysicianType setSlogan(Property\SloganProperty $slogan)
 * @method PhysicianType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method PhysicianType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method PhysicianType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PhysicianType setTelephone(Property\TelephoneProperty $telephone)
 * @method PhysicianType setUrl(Property\UrlProperty $url)
 */
class PhysicianType extends MedicalBusinessType {

	/**
	 * @var Property\AvailableServiceProperty
	 */
	private $availableService;

	/**
	 * @var Property\HospitalAffiliationProperty
	 */
	private $hospitalAffiliation;

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
	 * Get hospital affiliation.
	 *
	 * @return Property\HospitalAffiliationProperty
	 */
	public function getHospitalAffiliation() {
		return $this->hospitalAffiliation;
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
		return 'https://schema.org/Physician';
	}

	/**
	 * Set available service.
	 *
	 * @param Property\AvailableServiceProperty $availableService
	 * @return PhysicianType
	 */
	public function setAvailableService(Property\AvailableServiceProperty $availableService) {
		$this->availableService = $availableService;

		return $this;
	}

	/**
	 * Set hospital affiliation.
	 *
	 * @param Property\HospitalAffiliationProperty $hospitalAffiliation
	 * @return PhysicianType
	 */
	public function setHospitalAffiliation(Property\HospitalAffiliationProperty $hospitalAffiliation) {
		$this->hospitalAffiliation = $hospitalAffiliation;

		return $this;
	}

	/**
	 * Set medical specialty.
	 *
	 * @param Property\MedicalSpecialtyProperty $medicalSpecialty
	 * @return PhysicianType
	 */
	public function setMedicalSpecialty(Property\MedicalSpecialtyProperty $medicalSpecialty) {
		$this->medicalSpecialty = $medicalSpecialty;

		return $this;
	}
}