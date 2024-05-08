<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A motel. See also the dedicated document on the use of schema.org for marking up hotels and other forms of accommodations.
 * 
 * @method MotelType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method MotelType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MotelType setAddress(Property\AddressProperty $address)
 * @method MotelType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method MotelType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MotelType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method MotelType setAudience(Property\AudienceProperty $audience)
 * @method MotelType setAvailableLanguage(Property\AvailableLanguageProperty $availableLanguage)
 * @method MotelType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method MotelType setCheckinTime(Property\CheckinTimeProperty $checkinTime)
 * @method MotelType setCheckoutTime(Property\CheckoutTimeProperty $checkoutTime)
 * @method MotelType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method MotelType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method MotelType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method MotelType setDescription(Property\DescriptionProperty $description)
 * @method MotelType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MotelType setEvent(Property\EventProperty $event)
 * @method MotelType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method MotelType setGeo(Property\GeoProperty $geo)
 * @method MotelType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method MotelType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method MotelType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method MotelType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method MotelType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method MotelType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method MotelType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method MotelType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method MotelType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method MotelType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method MotelType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method MotelType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method MotelType setHasMap(Property\HasMapProperty $hasMap)
 * @method MotelType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MotelType setImage(Property\ImageProperty $image)
 * @method MotelType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method MotelType setIsicV4(Property\IsicV4Property $isicV4)
 * @method MotelType setKeywords(Property\KeywordsProperty $keywords)
 * @method MotelType setLatitude(Property\LatitudeProperty $latitude)
 * @method MotelType setLogo(Property\LogoProperty $logo)
 * @method MotelType setLongitude(Property\LongitudeProperty $longitude)
 * @method MotelType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MotelType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method MotelType setName(Property\NameProperty $name)
 * @method MotelType setNumberOfRooms(Property\NumberOfRoomsProperty $numberOfRooms)
 * @method MotelType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method MotelType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method MotelType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method MotelType setPetsAllowed(Property\PetsAllowedProperty $petsAllowed)
 * @method MotelType setPhoto(Property\PhotoProperty $photo)
 * @method MotelType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MotelType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method MotelType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method MotelType setReview(Property\ReviewProperty $review)
 * @method MotelType setSameAs(Property\SameAsProperty $sameAs)
 * @method MotelType setSlogan(Property\SloganProperty $slogan)
 * @method MotelType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method MotelType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method MotelType setStarRating(Property\StarRatingProperty $starRating)
 * @method MotelType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MotelType setTelephone(Property\TelephoneProperty $telephone)
 * @method MotelType setUrl(Property\UrlProperty $url)
 */
class MotelType extends LodgingBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Motel';
	}
}