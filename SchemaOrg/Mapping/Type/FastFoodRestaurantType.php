<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A fast-food restaurant.
 * 
 * @method FastFoodRestaurantType setAcceptsReservations(Property\AcceptsReservationsProperty $acceptsReservations)
 * @method FastFoodRestaurantType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method FastFoodRestaurantType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method FastFoodRestaurantType setAddress(Property\AddressProperty $address)
 * @method FastFoodRestaurantType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method FastFoodRestaurantType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method FastFoodRestaurantType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method FastFoodRestaurantType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method FastFoodRestaurantType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method FastFoodRestaurantType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method FastFoodRestaurantType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method FastFoodRestaurantType setDescription(Property\DescriptionProperty $description)
 * @method FastFoodRestaurantType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method FastFoodRestaurantType setEvent(Property\EventProperty $event)
 * @method FastFoodRestaurantType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method FastFoodRestaurantType setGeo(Property\GeoProperty $geo)
 * @method FastFoodRestaurantType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method FastFoodRestaurantType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method FastFoodRestaurantType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method FastFoodRestaurantType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method FastFoodRestaurantType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method FastFoodRestaurantType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method FastFoodRestaurantType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method FastFoodRestaurantType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method FastFoodRestaurantType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method FastFoodRestaurantType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method FastFoodRestaurantType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method FastFoodRestaurantType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method FastFoodRestaurantType setHasMap(Property\HasMapProperty $hasMap)
 * @method FastFoodRestaurantType setHasMenu(Property\HasMenuProperty $hasMenu)
 * @method FastFoodRestaurantType setIdentifier(Property\IdentifierProperty $identifier)
 * @method FastFoodRestaurantType setImage(Property\ImageProperty $image)
 * @method FastFoodRestaurantType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method FastFoodRestaurantType setIsicV4(Property\IsicV4Property $isicV4)
 * @method FastFoodRestaurantType setKeywords(Property\KeywordsProperty $keywords)
 * @method FastFoodRestaurantType setLatitude(Property\LatitudeProperty $latitude)
 * @method FastFoodRestaurantType setLogo(Property\LogoProperty $logo)
 * @method FastFoodRestaurantType setLongitude(Property\LongitudeProperty $longitude)
 * @method FastFoodRestaurantType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method FastFoodRestaurantType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method FastFoodRestaurantType setName(Property\NameProperty $name)
 * @method FastFoodRestaurantType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method FastFoodRestaurantType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method FastFoodRestaurantType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method FastFoodRestaurantType setPhoto(Property\PhotoProperty $photo)
 * @method FastFoodRestaurantType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method FastFoodRestaurantType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method FastFoodRestaurantType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method FastFoodRestaurantType setReview(Property\ReviewProperty $review)
 * @method FastFoodRestaurantType setSameAs(Property\SameAsProperty $sameAs)
 * @method FastFoodRestaurantType setServesCuisine(Property\ServesCuisineProperty $servesCuisine)
 * @method FastFoodRestaurantType setSlogan(Property\SloganProperty $slogan)
 * @method FastFoodRestaurantType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method FastFoodRestaurantType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method FastFoodRestaurantType setStarRating(Property\StarRatingProperty $starRating)
 * @method FastFoodRestaurantType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method FastFoodRestaurantType setTelephone(Property\TelephoneProperty $telephone)
 * @method FastFoodRestaurantType setUrl(Property\UrlProperty $url)
 */
class FastFoodRestaurantType extends FoodEstablishmentType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/FastFoodRestaurant';
	}
}