<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A particular physical business or branch of an organization. Examples of LocalBusiness include a restaurant, a particular branch of a restaurant chain, a branch of a bank, a medical practice, a club, a bowling alley, etc.
 * 
 * @method LocalBusinessType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method LocalBusinessType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method LocalBusinessType setAddress(Property\AddressProperty $address)
 * @method LocalBusinessType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method LocalBusinessType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method LocalBusinessType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method LocalBusinessType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method LocalBusinessType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method LocalBusinessType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method LocalBusinessType setDescription(Property\DescriptionProperty $description)
 * @method LocalBusinessType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method LocalBusinessType setEvent(Property\EventProperty $event)
 * @method LocalBusinessType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method LocalBusinessType setGeo(Property\GeoProperty $geo)
 * @method LocalBusinessType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method LocalBusinessType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method LocalBusinessType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method LocalBusinessType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method LocalBusinessType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method LocalBusinessType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method LocalBusinessType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method LocalBusinessType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method LocalBusinessType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method LocalBusinessType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method LocalBusinessType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method LocalBusinessType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method LocalBusinessType setHasMap(Property\HasMapProperty $hasMap)
 * @method LocalBusinessType setIdentifier(Property\IdentifierProperty $identifier)
 * @method LocalBusinessType setImage(Property\ImageProperty $image)
 * @method LocalBusinessType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method LocalBusinessType setIsicV4(Property\IsicV4Property $isicV4)
 * @method LocalBusinessType setKeywords(Property\KeywordsProperty $keywords)
 * @method LocalBusinessType setLatitude(Property\LatitudeProperty $latitude)
 * @method LocalBusinessType setLogo(Property\LogoProperty $logo)
 * @method LocalBusinessType setLongitude(Property\LongitudeProperty $longitude)
 * @method LocalBusinessType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method LocalBusinessType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method LocalBusinessType setName(Property\NameProperty $name)
 * @method LocalBusinessType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method LocalBusinessType setPhoto(Property\PhotoProperty $photo)
 * @method LocalBusinessType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method LocalBusinessType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method LocalBusinessType setReview(Property\ReviewProperty $review)
 * @method LocalBusinessType setSameAs(Property\SameAsProperty $sameAs)
 * @method LocalBusinessType setSlogan(Property\SloganProperty $slogan)
 * @method LocalBusinessType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method LocalBusinessType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method LocalBusinessType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method LocalBusinessType setTelephone(Property\TelephoneProperty $telephone)
 * @method LocalBusinessType setUrl(Property\UrlProperty $url)
 */
class LocalBusinessType extends PlaceType {

	/**
	 * @var Property\CurrenciesAcceptedProperty
	 */
	private $currenciesAccepted;

	/**
	 * @var Property\OpeningHoursProperty
	 */
	private $openingHours;

	/**
	 * @var Property\PaymentAcceptedProperty
	 */
	private $paymentAccepted;

	/**
	 * @var Property\PriceRangeProperty
	 */
	private $priceRange;

	/**
	 * Get currencies accepted.
	 *
	 * @return Property\CurrenciesAcceptedProperty
	 */
	public function getCurrenciesAccepted() {
		return $this->currenciesAccepted;
	}

	/**
	 * Get opening hours.
	 *
	 * @return Property\OpeningHoursProperty
	 */
	public function getOpeningHours() {
		return $this->openingHours;
	}

	/**
	 * Get payment accepted.
	 *
	 * @return Property\PaymentAcceptedProperty
	 */
	public function getPaymentAccepted() {
		return $this->paymentAccepted;
	}

	/**
	 * Get price range.
	 *
	 * @return Property\PriceRangeProperty
	 */
	public function getPriceRange() {
		return $this->priceRange;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LocalBusiness';
	}

	/**
	 * Set currencies accepted.
	 *
	 * @param Property\CurrenciesAcceptedProperty $currenciesAccepted
	 * @return LocalBusinessType
	 */
	public function setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted) {
		$this->currenciesAccepted = $currenciesAccepted;

		return $this;
	}

	/**
	 * Set opening hours.
	 *
	 * @param Property\OpeningHoursProperty $openingHours
	 * @return LocalBusinessType
	 */
	public function setOpeningHours(Property\OpeningHoursProperty $openingHours) {
		$this->openingHours = $openingHours;

		return $this;
	}

	/**
	 * Set payment accepted.
	 *
	 * @param Property\PaymentAcceptedProperty $paymentAccepted
	 * @return LocalBusinessType
	 */
	public function setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted) {
		$this->paymentAccepted = $paymentAccepted;

		return $this;
	}

	/**
	 * Set price range.
	 *
	 * @param Property\PriceRangeProperty $priceRange
	 * @return LocalBusinessType
	 */
	public function setPriceRange(Property\PriceRangeProperty $priceRange) {
		$this->priceRange = $priceRange;

		return $this;
	}
}