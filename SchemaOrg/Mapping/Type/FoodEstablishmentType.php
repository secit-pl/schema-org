<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A food-related business.
 * 
 * @method FoodEstablishmentType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method FoodEstablishmentType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method FoodEstablishmentType setAddress(Property\AddressProperty $address)
 * @method FoodEstablishmentType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method FoodEstablishmentType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method FoodEstablishmentType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method FoodEstablishmentType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method FoodEstablishmentType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method FoodEstablishmentType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method FoodEstablishmentType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method FoodEstablishmentType setDescription(Property\DescriptionProperty $description)
 * @method FoodEstablishmentType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method FoodEstablishmentType setEvent(Property\EventProperty $event)
 * @method FoodEstablishmentType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method FoodEstablishmentType setGeo(Property\GeoProperty $geo)
 * @method FoodEstablishmentType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method FoodEstablishmentType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method FoodEstablishmentType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method FoodEstablishmentType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method FoodEstablishmentType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method FoodEstablishmentType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method FoodEstablishmentType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method FoodEstablishmentType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method FoodEstablishmentType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method FoodEstablishmentType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method FoodEstablishmentType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method FoodEstablishmentType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method FoodEstablishmentType setHasMap(Property\HasMapProperty $hasMap)
 * @method FoodEstablishmentType setIdentifier(Property\IdentifierProperty $identifier)
 * @method FoodEstablishmentType setImage(Property\ImageProperty $image)
 * @method FoodEstablishmentType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method FoodEstablishmentType setIsicV4(Property\IsicV4Property $isicV4)
 * @method FoodEstablishmentType setKeywords(Property\KeywordsProperty $keywords)
 * @method FoodEstablishmentType setLatitude(Property\LatitudeProperty $latitude)
 * @method FoodEstablishmentType setLogo(Property\LogoProperty $logo)
 * @method FoodEstablishmentType setLongitude(Property\LongitudeProperty $longitude)
 * @method FoodEstablishmentType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method FoodEstablishmentType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method FoodEstablishmentType setName(Property\NameProperty $name)
 * @method FoodEstablishmentType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method FoodEstablishmentType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method FoodEstablishmentType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method FoodEstablishmentType setPhoto(Property\PhotoProperty $photo)
 * @method FoodEstablishmentType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method FoodEstablishmentType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method FoodEstablishmentType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method FoodEstablishmentType setReview(Property\ReviewProperty $review)
 * @method FoodEstablishmentType setSameAs(Property\SameAsProperty $sameAs)
 * @method FoodEstablishmentType setSlogan(Property\SloganProperty $slogan)
 * @method FoodEstablishmentType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method FoodEstablishmentType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method FoodEstablishmentType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method FoodEstablishmentType setTelephone(Property\TelephoneProperty $telephone)
 * @method FoodEstablishmentType setUrl(Property\UrlProperty $url)
 */
class FoodEstablishmentType extends LocalBusinessType {

	/**
	 * @var Property\AcceptsReservationsProperty
	 */
	private $acceptsReservations;

	/**
	 * @var Property\HasMenuProperty
	 */
	private $hasMenu;

	/**
	 * @var Property\ServesCuisineProperty
	 */
	private $servesCuisine;

	/**
	 * @var Property\StarRatingProperty
	 */
	private $starRating;

	/**
	 * Get accepts reservations.
	 *
	 * @return Property\AcceptsReservationsProperty
	 */
	public function getAcceptsReservations() {
		return $this->acceptsReservations;
	}

	/**
	 * Get has menu.
	 *
	 * @return Property\HasMenuProperty
	 */
	public function getHasMenu() {
		return $this->hasMenu;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/FoodEstablishment';
	}

	/**
	 * Get serves cuisine.
	 *
	 * @return Property\ServesCuisineProperty
	 */
	public function getServesCuisine() {
		return $this->servesCuisine;
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
	 * Set accepts reservations.
	 *
	 * @param Property\AcceptsReservationsProperty $acceptsReservations
	 * @return FoodEstablishmentType
	 */
	public function setAcceptsReservations(Property\AcceptsReservationsProperty $acceptsReservations) {
		$this->acceptsReservations = $acceptsReservations;

		return $this;
	}

	/**
	 * Set has menu.
	 *
	 * @param Property\HasMenuProperty $hasMenu
	 * @return FoodEstablishmentType
	 */
	public function setHasMenu(Property\HasMenuProperty $hasMenu) {
		$this->hasMenu = $hasMenu;

		return $this;
	}

	/**
	 * Set serves cuisine.
	 *
	 * @param Property\ServesCuisineProperty $servesCuisine
	 * @return FoodEstablishmentType
	 */
	public function setServesCuisine(Property\ServesCuisineProperty $servesCuisine) {
		$this->servesCuisine = $servesCuisine;

		return $this;
	}

	/**
	 * Set star rating.
	 *
	 * @param Property\StarRatingProperty $starRating
	 * @return FoodEstablishmentType
	 */
	public function setStarRating(Property\StarRatingProperty $starRating) {
		$this->starRating = $starRating;

		return $this;
	}
}