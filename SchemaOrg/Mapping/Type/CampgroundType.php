<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A camping site, campsite, or Campground is a place used for overnight stay in the outdoors, typically containing individual CampingPitch locations. In British English a campsite is an area, usually divided into a number of pitches, where people can camp overnight using tents or camper vans or caravans; this British English use of the word is synonymous with the American English expression campground. In American English the term campsite generally means an area where an individual, family, group, or military unit can pitch a tent or park a camper; a campground may contain many campsites (source: Wikipedia, see https://en.wikipedia.org/wiki/Campsite). See also the dedicated document on the use of schema.org for marking up hotels and other forms of accommodations.
 * 
 * @method CampgroundType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method CampgroundType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CampgroundType setAddress(Property\AddressProperty $address)
 * @method CampgroundType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method CampgroundType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CampgroundType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method CampgroundType setAudience(Property\AudienceProperty $audience)
 * @method CampgroundType setAvailableLanguage(Property\AvailableLanguageProperty $availableLanguage)
 * @method CampgroundType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method CampgroundType setCheckinTime(Property\CheckinTimeProperty $checkinTime)
 * @method CampgroundType setCheckoutTime(Property\CheckoutTimeProperty $checkoutTime)
 * @method CampgroundType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method CampgroundType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method CampgroundType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method CampgroundType setDescription(Property\DescriptionProperty $description)
 * @method CampgroundType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CampgroundType setEvent(Property\EventProperty $event)
 * @method CampgroundType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method CampgroundType setGeo(Property\GeoProperty $geo)
 * @method CampgroundType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method CampgroundType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method CampgroundType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method CampgroundType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method CampgroundType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method CampgroundType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method CampgroundType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method CampgroundType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method CampgroundType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method CampgroundType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method CampgroundType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method CampgroundType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method CampgroundType setHasMap(Property\HasMapProperty $hasMap)
 * @method CampgroundType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CampgroundType setImage(Property\ImageProperty $image)
 * @method CampgroundType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method CampgroundType setIsicV4(Property\IsicV4Property $isicV4)
 * @method CampgroundType setKeywords(Property\KeywordsProperty $keywords)
 * @method CampgroundType setLatitude(Property\LatitudeProperty $latitude)
 * @method CampgroundType setLogo(Property\LogoProperty $logo)
 * @method CampgroundType setLongitude(Property\LongitudeProperty $longitude)
 * @method CampgroundType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CampgroundType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method CampgroundType setName(Property\NameProperty $name)
 * @method CampgroundType setNumberOfRooms(Property\NumberOfRoomsProperty $numberOfRooms)
 * @method CampgroundType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method CampgroundType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method CampgroundType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method CampgroundType setPetsAllowed(Property\PetsAllowedProperty $petsAllowed)
 * @method CampgroundType setPhoto(Property\PhotoProperty $photo)
 * @method CampgroundType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CampgroundType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method CampgroundType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method CampgroundType setReview(Property\ReviewProperty $review)
 * @method CampgroundType setSameAs(Property\SameAsProperty $sameAs)
 * @method CampgroundType setSlogan(Property\SloganProperty $slogan)
 * @method CampgroundType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method CampgroundType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method CampgroundType setStarRating(Property\StarRatingProperty $starRating)
 * @method CampgroundType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method CampgroundType setTelephone(Property\TelephoneProperty $telephone)
 * @method CampgroundType setUrl(Property\UrlProperty $url)
 */
class CampgroundType extends LodgingBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Campground';
	}
}