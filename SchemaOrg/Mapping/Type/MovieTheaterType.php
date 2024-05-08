<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A movie theater.
 * 
 * @method MovieTheaterType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method MovieTheaterType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MovieTheaterType setAddress(Property\AddressProperty $address)
 * @method MovieTheaterType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method MovieTheaterType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MovieTheaterType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method MovieTheaterType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method MovieTheaterType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method MovieTheaterType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method MovieTheaterType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method MovieTheaterType setDescription(Property\DescriptionProperty $description)
 * @method MovieTheaterType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MovieTheaterType setEvent(Property\EventProperty $event)
 * @method MovieTheaterType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method MovieTheaterType setGeo(Property\GeoProperty $geo)
 * @method MovieTheaterType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method MovieTheaterType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method MovieTheaterType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method MovieTheaterType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method MovieTheaterType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method MovieTheaterType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method MovieTheaterType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method MovieTheaterType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method MovieTheaterType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method MovieTheaterType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method MovieTheaterType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method MovieTheaterType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method MovieTheaterType setHasMap(Property\HasMapProperty $hasMap)
 * @method MovieTheaterType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MovieTheaterType setImage(Property\ImageProperty $image)
 * @method MovieTheaterType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method MovieTheaterType setIsicV4(Property\IsicV4Property $isicV4)
 * @method MovieTheaterType setKeywords(Property\KeywordsProperty $keywords)
 * @method MovieTheaterType setLatitude(Property\LatitudeProperty $latitude)
 * @method MovieTheaterType setLogo(Property\LogoProperty $logo)
 * @method MovieTheaterType setLongitude(Property\LongitudeProperty $longitude)
 * @method MovieTheaterType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MovieTheaterType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method MovieTheaterType setName(Property\NameProperty $name)
 * @method MovieTheaterType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method MovieTheaterType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method MovieTheaterType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method MovieTheaterType setPhoto(Property\PhotoProperty $photo)
 * @method MovieTheaterType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MovieTheaterType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method MovieTheaterType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method MovieTheaterType setReview(Property\ReviewProperty $review)
 * @method MovieTheaterType setSameAs(Property\SameAsProperty $sameAs)
 * @method MovieTheaterType setSlogan(Property\SloganProperty $slogan)
 * @method MovieTheaterType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method MovieTheaterType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method MovieTheaterType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MovieTheaterType setTelephone(Property\TelephoneProperty $telephone)
 * @method MovieTheaterType setUrl(Property\UrlProperty $url)
 */
class MovieTheaterType extends EntertainmentBusinessType {

	/**
	 * @var Property\ScreenCountProperty
	 */
	private $screenCount;

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MovieTheater';
	}

	/**
	 * Get screen count.
	 *
	 * @return Property\ScreenCountProperty
	 */
	public function getScreenCount() {
		return $this->screenCount;
	}

	/**
	 * Set screen count.
	 *
	 * @param Property\ScreenCountProperty $screenCount
	 * @return MovieTheaterType
	 */
	public function setScreenCount(Property\ScreenCountProperty $screenCount) {
		$this->screenCount = $screenCount;

		return $this;
	}
}