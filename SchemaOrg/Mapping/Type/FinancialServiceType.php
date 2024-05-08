<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Financial services business.
 * 
 * @method FinancialServiceType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method FinancialServiceType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method FinancialServiceType setAddress(Property\AddressProperty $address)
 * @method FinancialServiceType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method FinancialServiceType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method FinancialServiceType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method FinancialServiceType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method FinancialServiceType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method FinancialServiceType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method FinancialServiceType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method FinancialServiceType setDescription(Property\DescriptionProperty $description)
 * @method FinancialServiceType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method FinancialServiceType setEvent(Property\EventProperty $event)
 * @method FinancialServiceType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method FinancialServiceType setGeo(Property\GeoProperty $geo)
 * @method FinancialServiceType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method FinancialServiceType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method FinancialServiceType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method FinancialServiceType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method FinancialServiceType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method FinancialServiceType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method FinancialServiceType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method FinancialServiceType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method FinancialServiceType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method FinancialServiceType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method FinancialServiceType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method FinancialServiceType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method FinancialServiceType setHasMap(Property\HasMapProperty $hasMap)
 * @method FinancialServiceType setIdentifier(Property\IdentifierProperty $identifier)
 * @method FinancialServiceType setImage(Property\ImageProperty $image)
 * @method FinancialServiceType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method FinancialServiceType setIsicV4(Property\IsicV4Property $isicV4)
 * @method FinancialServiceType setKeywords(Property\KeywordsProperty $keywords)
 * @method FinancialServiceType setLatitude(Property\LatitudeProperty $latitude)
 * @method FinancialServiceType setLogo(Property\LogoProperty $logo)
 * @method FinancialServiceType setLongitude(Property\LongitudeProperty $longitude)
 * @method FinancialServiceType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method FinancialServiceType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method FinancialServiceType setName(Property\NameProperty $name)
 * @method FinancialServiceType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method FinancialServiceType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method FinancialServiceType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method FinancialServiceType setPhoto(Property\PhotoProperty $photo)
 * @method FinancialServiceType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method FinancialServiceType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method FinancialServiceType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method FinancialServiceType setReview(Property\ReviewProperty $review)
 * @method FinancialServiceType setSameAs(Property\SameAsProperty $sameAs)
 * @method FinancialServiceType setSlogan(Property\SloganProperty $slogan)
 * @method FinancialServiceType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method FinancialServiceType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method FinancialServiceType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method FinancialServiceType setTelephone(Property\TelephoneProperty $telephone)
 * @method FinancialServiceType setUrl(Property\UrlProperty $url)
 */
class FinancialServiceType extends LocalBusinessType {

	/**
	 * @var Property\FeesAndCommissionsSpecificationProperty
	 */
	private $feesAndCommissionsSpecification;

	/**
	 * Get fees and commissions specification.
	 *
	 * @return Property\FeesAndCommissionsSpecificationProperty
	 */
	public function getFeesAndCommissionsSpecification() {
		return $this->feesAndCommissionsSpecification;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/FinancialService';
	}

	/**
	 * Set fees and commissions specification.
	 *
	 * @param Property\FeesAndCommissionsSpecificationProperty $feesAndCommissionsSpecification
	 * @return FinancialServiceType
	 */
	public function setFeesAndCommissionsSpecification(Property\FeesAndCommissionsSpecificationProperty $feesAndCommissionsSpecification) {
		$this->feesAndCommissionsSpecification = $feesAndCommissionsSpecification;

		return $this;
	}
}