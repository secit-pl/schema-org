<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A restaurant.
 * 
 * @method RestaurantType setAcceptsReservations(Property\AcceptsReservationsProperty $acceptsReservations)
 * @method RestaurantType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method RestaurantType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method RestaurantType setAddress(Property\AddressProperty $address)
 * @method RestaurantType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method RestaurantType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method RestaurantType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method RestaurantType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method RestaurantType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method RestaurantType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method RestaurantType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method RestaurantType setDescription(Property\DescriptionProperty $description)
 * @method RestaurantType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method RestaurantType setEvent(Property\EventProperty $event)
 * @method RestaurantType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method RestaurantType setGeo(Property\GeoProperty $geo)
 * @method RestaurantType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method RestaurantType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method RestaurantType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method RestaurantType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method RestaurantType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method RestaurantType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method RestaurantType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method RestaurantType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method RestaurantType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method RestaurantType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method RestaurantType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method RestaurantType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method RestaurantType setHasMap(Property\HasMapProperty $hasMap)
 * @method RestaurantType setHasMenu(Property\HasMenuProperty $hasMenu)
 * @method RestaurantType setIdentifier(Property\IdentifierProperty $identifier)
 * @method RestaurantType setImage(Property\ImageProperty $image)
 * @method RestaurantType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method RestaurantType setIsicV4(Property\IsicV4Property $isicV4)
 * @method RestaurantType setKeywords(Property\KeywordsProperty $keywords)
 * @method RestaurantType setLatitude(Property\LatitudeProperty $latitude)
 * @method RestaurantType setLogo(Property\LogoProperty $logo)
 * @method RestaurantType setLongitude(Property\LongitudeProperty $longitude)
 * @method RestaurantType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method RestaurantType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method RestaurantType setName(Property\NameProperty $name)
 * @method RestaurantType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method RestaurantType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method RestaurantType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method RestaurantType setPhoto(Property\PhotoProperty $photo)
 * @method RestaurantType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method RestaurantType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method RestaurantType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method RestaurantType setReview(Property\ReviewProperty $review)
 * @method RestaurantType setSameAs(Property\SameAsProperty $sameAs)
 * @method RestaurantType setServesCuisine(Property\ServesCuisineProperty $servesCuisine)
 * @method RestaurantType setSlogan(Property\SloganProperty $slogan)
 * @method RestaurantType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method RestaurantType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method RestaurantType setStarRating(Property\StarRatingProperty $starRating)
 * @method RestaurantType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method RestaurantType setTelephone(Property\TelephoneProperty $telephone)
 * @method RestaurantType setUrl(Property\UrlProperty $url)
 */
class RestaurantType extends FoodEstablishmentType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Restaurant';
	}
}