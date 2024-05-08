<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A resort is a place used for relaxation or recreation, attracting visitors for holidays or vacations. Resorts are places, towns or sometimes commercial establishments operated by a single company (source: Wikipedia, the free encyclopedia, see http://en.wikipedia.org/wiki/Resort). See also the dedicated document on the use of schema.org for marking up hotels and other forms of accommodations.
 * 
 * @method ResortType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method ResortType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ResortType setAddress(Property\AddressProperty $address)
 * @method ResortType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ResortType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ResortType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method ResortType setAudience(Property\AudienceProperty $audience)
 * @method ResortType setAvailableLanguage(Property\AvailableLanguageProperty $availableLanguage)
 * @method ResortType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method ResortType setCheckinTime(Property\CheckinTimeProperty $checkinTime)
 * @method ResortType setCheckoutTime(Property\CheckoutTimeProperty $checkoutTime)
 * @method ResortType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method ResortType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method ResortType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method ResortType setDescription(Property\DescriptionProperty $description)
 * @method ResortType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ResortType setEvent(Property\EventProperty $event)
 * @method ResortType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method ResortType setGeo(Property\GeoProperty $geo)
 * @method ResortType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method ResortType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method ResortType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method ResortType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method ResortType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method ResortType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method ResortType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method ResortType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method ResortType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method ResortType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method ResortType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method ResortType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method ResortType setHasMap(Property\HasMapProperty $hasMap)
 * @method ResortType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ResortType setImage(Property\ImageProperty $image)
 * @method ResortType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method ResortType setIsicV4(Property\IsicV4Property $isicV4)
 * @method ResortType setKeywords(Property\KeywordsProperty $keywords)
 * @method ResortType setLatitude(Property\LatitudeProperty $latitude)
 * @method ResortType setLogo(Property\LogoProperty $logo)
 * @method ResortType setLongitude(Property\LongitudeProperty $longitude)
 * @method ResortType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ResortType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method ResortType setName(Property\NameProperty $name)
 * @method ResortType setNumberOfRooms(Property\NumberOfRoomsProperty $numberOfRooms)
 * @method ResortType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method ResortType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method ResortType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method ResortType setPetsAllowed(Property\PetsAllowedProperty $petsAllowed)
 * @method ResortType setPhoto(Property\PhotoProperty $photo)
 * @method ResortType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ResortType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method ResortType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method ResortType setReview(Property\ReviewProperty $review)
 * @method ResortType setSameAs(Property\SameAsProperty $sameAs)
 * @method ResortType setSlogan(Property\SloganProperty $slogan)
 * @method ResortType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method ResortType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method ResortType setStarRating(Property\StarRatingProperty $starRating)
 * @method ResortType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ResortType setTelephone(Property\TelephoneProperty $telephone)
 * @method ResortType setUrl(Property\UrlProperty $url)
 */
class ResortType extends LodgingBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Resort';
	}
}