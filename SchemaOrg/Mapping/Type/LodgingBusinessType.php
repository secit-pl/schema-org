<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A lodging business, such as a motel, hotel, or inn.
 * 
 * @method LodgingBusinessType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method LodgingBusinessType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method LodgingBusinessType setAddress(Property\AddressProperty $address)
 * @method LodgingBusinessType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method LodgingBusinessType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method LodgingBusinessType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method LodgingBusinessType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method LodgingBusinessType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method LodgingBusinessType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method LodgingBusinessType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method LodgingBusinessType setDescription(Property\DescriptionProperty $description)
 * @method LodgingBusinessType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method LodgingBusinessType setEvent(Property\EventProperty $event)
 * @method LodgingBusinessType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method LodgingBusinessType setGeo(Property\GeoProperty $geo)
 * @method LodgingBusinessType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method LodgingBusinessType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method LodgingBusinessType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method LodgingBusinessType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method LodgingBusinessType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method LodgingBusinessType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method LodgingBusinessType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method LodgingBusinessType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method LodgingBusinessType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method LodgingBusinessType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method LodgingBusinessType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method LodgingBusinessType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method LodgingBusinessType setHasMap(Property\HasMapProperty $hasMap)
 * @method LodgingBusinessType setIdentifier(Property\IdentifierProperty $identifier)
 * @method LodgingBusinessType setImage(Property\ImageProperty $image)
 * @method LodgingBusinessType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method LodgingBusinessType setIsicV4(Property\IsicV4Property $isicV4)
 * @method LodgingBusinessType setKeywords(Property\KeywordsProperty $keywords)
 * @method LodgingBusinessType setLatitude(Property\LatitudeProperty $latitude)
 * @method LodgingBusinessType setLogo(Property\LogoProperty $logo)
 * @method LodgingBusinessType setLongitude(Property\LongitudeProperty $longitude)
 * @method LodgingBusinessType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method LodgingBusinessType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method LodgingBusinessType setName(Property\NameProperty $name)
 * @method LodgingBusinessType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method LodgingBusinessType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method LodgingBusinessType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method LodgingBusinessType setPhoto(Property\PhotoProperty $photo)
 * @method LodgingBusinessType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method LodgingBusinessType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method LodgingBusinessType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method LodgingBusinessType setReview(Property\ReviewProperty $review)
 * @method LodgingBusinessType setSameAs(Property\SameAsProperty $sameAs)
 * @method LodgingBusinessType setSlogan(Property\SloganProperty $slogan)
 * @method LodgingBusinessType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method LodgingBusinessType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method LodgingBusinessType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method LodgingBusinessType setTelephone(Property\TelephoneProperty $telephone)
 * @method LodgingBusinessType setUrl(Property\UrlProperty $url)
 */
class LodgingBusinessType extends LocalBusinessType {

	/**
	 * @var Property\AmenityFeatureProperty
	 */
	private $amenityFeature;

	/**
	 * @var Property\AudienceProperty
	 */
	private $audience;

	/**
	 * @var Property\AvailableLanguageProperty
	 */
	private $availableLanguage;

	/**
	 * @var Property\CheckinTimeProperty
	 */
	private $checkinTime;

	/**
	 * @var Property\CheckoutTimeProperty
	 */
	private $checkoutTime;

	/**
	 * @var Property\NumberOfRoomsProperty
	 */
	private $numberOfRooms;

	/**
	 * @var Property\PetsAllowedProperty
	 */
	private $petsAllowed;

	/**
	 * @var Property\StarRatingProperty
	 */
	private $starRating;

	/**
	 * Get amenity feature.
	 *
	 * @return Property\AmenityFeatureProperty
	 */
	public function getAmenityFeature() {
		return $this->amenityFeature;
	}

	/**
	 * Get audience.
	 *
	 * @return Property\AudienceProperty
	 */
	public function getAudience() {
		return $this->audience;
	}

	/**
	 * Get available language.
	 *
	 * @return Property\AvailableLanguageProperty
	 */
	public function getAvailableLanguage() {
		return $this->availableLanguage;
	}

	/**
	 * Get checkin time.
	 *
	 * @return Property\CheckinTimeProperty
	 */
	public function getCheckinTime() {
		return $this->checkinTime;
	}

	/**
	 * Get checkout time.
	 *
	 * @return Property\CheckoutTimeProperty
	 */
	public function getCheckoutTime() {
		return $this->checkoutTime;
	}

	/**
	 * Get number of rooms.
	 *
	 * @return Property\NumberOfRoomsProperty
	 */
	public function getNumberOfRooms() {
		return $this->numberOfRooms;
	}

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
		return 'https://schema.org/LodgingBusiness';
	}

	/**
	 * Get star rating.
	 *
	 * @return Property\StarRatingProperty
	 */
	public function getStarRating() {
		return $this->starRating;
	}

	/**
	 * Set amenity feature.
	 *
	 * @param Property\AmenityFeatureProperty $amenityFeature
	 * @return LodgingBusinessType
	 */
	public function setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature) {
		$this->amenityFeature = $amenityFeature;

		return $this;
	}

	/**
	 * Set audience.
	 *
	 * @param Property\AudienceProperty $audience
	 * @return LodgingBusinessType
	 */
	public function setAudience(Property\AudienceProperty $audience) {
		$this->audience = $audience;

		return $this;
	}

	/**
	 * Set available language.
	 *
	 * @param Property\AvailableLanguageProperty $availableLanguage
	 * @return LodgingBusinessType
	 */
	public function setAvailableLanguage(Property\AvailableLanguageProperty $availableLanguage) {
		$this->availableLanguage = $availableLanguage;

		return $this;
	}

	/**
	 * Set checkin time.
	 *
	 * @param Property\CheckinTimeProperty $checkinTime
	 * @return LodgingBusinessType
	 */
	public function setCheckinTime(Property\CheckinTimeProperty $checkinTime) {
		$this->checkinTime = $checkinTime;

		return $this;
	}

	/**
	 * Set checkout time.
	 *
	 * @param Property\CheckoutTimeProperty $checkoutTime
	 * @return LodgingBusinessType
	 */
	public function setCheckoutTime(Property\CheckoutTimeProperty $checkoutTime) {
		$this->checkoutTime = $checkoutTime;

		return $this;
	}

	/**
	 * Set number of rooms.
	 *
	 * @param Property\NumberOfRoomsProperty $numberOfRooms
	 * @return LodgingBusinessType
	 */
	public function setNumberOfRooms(Property\NumberOfRoomsProperty $numberOfRooms) {
		$this->numberOfRooms = $numberOfRooms;

		return $this;
	}

	/**
	 * Set pets allowed.
	 *
	 * @param Property\PetsAllowedProperty $petsAllowed
	 * @return LodgingBusinessType
	 */
	public function setPetsAllowed(Property\PetsAllowedProperty $petsAllowed) {
		$this->petsAllowed = $petsAllowed;

		return $this;
	}

	/**
	 * Set star rating.
	 *
	 * @param Property\StarRatingProperty $starRating
	 * @return LodgingBusinessType
	 */
	public function setStarRating(Property\StarRatingProperty $starRating) {
		$this->starRating = $starRating;

		return $this;
	}
}