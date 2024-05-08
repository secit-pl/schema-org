<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A hotel is an establishment that provides lodging paid on a short-term basis (source: Wikipedia, the free encyclopedia, see http://en.wikipedia.org/wiki/Hotel). See also the dedicated document on the use of schema.org for marking up hotels and other forms of accommodations.
 * 
 * @method HotelType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method HotelType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method HotelType setAddress(Property\AddressProperty $address)
 * @method HotelType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method HotelType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method HotelType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method HotelType setAudience(Property\AudienceProperty $audience)
 * @method HotelType setAvailableLanguage(Property\AvailableLanguageProperty $availableLanguage)
 * @method HotelType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method HotelType setCheckinTime(Property\CheckinTimeProperty $checkinTime)
 * @method HotelType setCheckoutTime(Property\CheckoutTimeProperty $checkoutTime)
 * @method HotelType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method HotelType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method HotelType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method HotelType setDescription(Property\DescriptionProperty $description)
 * @method HotelType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method HotelType setEvent(Property\EventProperty $event)
 * @method HotelType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method HotelType setGeo(Property\GeoProperty $geo)
 * @method HotelType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method HotelType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method HotelType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method HotelType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method HotelType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method HotelType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method HotelType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method HotelType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method HotelType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method HotelType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method HotelType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method HotelType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method HotelType setHasMap(Property\HasMapProperty $hasMap)
 * @method HotelType setIdentifier(Property\IdentifierProperty $identifier)
 * @method HotelType setImage(Property\ImageProperty $image)
 * @method HotelType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method HotelType setIsicV4(Property\IsicV4Property $isicV4)
 * @method HotelType setKeywords(Property\KeywordsProperty $keywords)
 * @method HotelType setLatitude(Property\LatitudeProperty $latitude)
 * @method HotelType setLogo(Property\LogoProperty $logo)
 * @method HotelType setLongitude(Property\LongitudeProperty $longitude)
 * @method HotelType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method HotelType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method HotelType setName(Property\NameProperty $name)
 * @method HotelType setNumberOfRooms(Property\NumberOfRoomsProperty $numberOfRooms)
 * @method HotelType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method HotelType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method HotelType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method HotelType setPetsAllowed(Property\PetsAllowedProperty $petsAllowed)
 * @method HotelType setPhoto(Property\PhotoProperty $photo)
 * @method HotelType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method HotelType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method HotelType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method HotelType setReview(Property\ReviewProperty $review)
 * @method HotelType setSameAs(Property\SameAsProperty $sameAs)
 * @method HotelType setSlogan(Property\SloganProperty $slogan)
 * @method HotelType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method HotelType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method HotelType setStarRating(Property\StarRatingProperty $starRating)
 * @method HotelType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method HotelType setTelephone(Property\TelephoneProperty $telephone)
 * @method HotelType setUrl(Property\UrlProperty $url)
 */
class HotelType extends LodgingBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Hotel';
	}
}