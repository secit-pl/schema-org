<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Bed and breakfast. See also the dedicated document on the use of schema.org for marking up hotels and other forms of accommodations.
 * 
 * @method BedAndBreakfastType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method BedAndBreakfastType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BedAndBreakfastType setAddress(Property\AddressProperty $address)
 * @method BedAndBreakfastType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method BedAndBreakfastType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BedAndBreakfastType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method BedAndBreakfastType setAudience(Property\AudienceProperty $audience)
 * @method BedAndBreakfastType setAvailableLanguage(Property\AvailableLanguageProperty $availableLanguage)
 * @method BedAndBreakfastType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method BedAndBreakfastType setCheckinTime(Property\CheckinTimeProperty $checkinTime)
 * @method BedAndBreakfastType setCheckoutTime(Property\CheckoutTimeProperty $checkoutTime)
 * @method BedAndBreakfastType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method BedAndBreakfastType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method BedAndBreakfastType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method BedAndBreakfastType setDescription(Property\DescriptionProperty $description)
 * @method BedAndBreakfastType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BedAndBreakfastType setEvent(Property\EventProperty $event)
 * @method BedAndBreakfastType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method BedAndBreakfastType setGeo(Property\GeoProperty $geo)
 * @method BedAndBreakfastType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method BedAndBreakfastType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method BedAndBreakfastType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method BedAndBreakfastType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method BedAndBreakfastType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method BedAndBreakfastType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method BedAndBreakfastType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method BedAndBreakfastType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method BedAndBreakfastType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method BedAndBreakfastType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method BedAndBreakfastType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method BedAndBreakfastType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method BedAndBreakfastType setHasMap(Property\HasMapProperty $hasMap)
 * @method BedAndBreakfastType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BedAndBreakfastType setImage(Property\ImageProperty $image)
 * @method BedAndBreakfastType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method BedAndBreakfastType setIsicV4(Property\IsicV4Property $isicV4)
 * @method BedAndBreakfastType setKeywords(Property\KeywordsProperty $keywords)
 * @method BedAndBreakfastType setLatitude(Property\LatitudeProperty $latitude)
 * @method BedAndBreakfastType setLogo(Property\LogoProperty $logo)
 * @method BedAndBreakfastType setLongitude(Property\LongitudeProperty $longitude)
 * @method BedAndBreakfastType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BedAndBreakfastType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method BedAndBreakfastType setName(Property\NameProperty $name)
 * @method BedAndBreakfastType setNumberOfRooms(Property\NumberOfRoomsProperty $numberOfRooms)
 * @method BedAndBreakfastType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method BedAndBreakfastType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method BedAndBreakfastType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method BedAndBreakfastType setPetsAllowed(Property\PetsAllowedProperty $petsAllowed)
 * @method BedAndBreakfastType setPhoto(Property\PhotoProperty $photo)
 * @method BedAndBreakfastType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BedAndBreakfastType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method BedAndBreakfastType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method BedAndBreakfastType setReview(Property\ReviewProperty $review)
 * @method BedAndBreakfastType setSameAs(Property\SameAsProperty $sameAs)
 * @method BedAndBreakfastType setSlogan(Property\SloganProperty $slogan)
 * @method BedAndBreakfastType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method BedAndBreakfastType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method BedAndBreakfastType setStarRating(Property\StarRatingProperty $starRating)
 * @method BedAndBreakfastType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method BedAndBreakfastType setTelephone(Property\TelephoneProperty $telephone)
 * @method BedAndBreakfastType setUrl(Property\UrlProperty $url)
 */
class BedAndBreakfastType extends LodgingBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BedAndBreakfast';
	}
}