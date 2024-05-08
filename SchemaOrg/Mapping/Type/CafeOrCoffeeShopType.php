<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A cafe or coffee shop.
 * 
 * @method CafeOrCoffeeShopType setAcceptsReservations(Property\AcceptsReservationsProperty $acceptsReservations)
 * @method CafeOrCoffeeShopType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method CafeOrCoffeeShopType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CafeOrCoffeeShopType setAddress(Property\AddressProperty $address)
 * @method CafeOrCoffeeShopType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method CafeOrCoffeeShopType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CafeOrCoffeeShopType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method CafeOrCoffeeShopType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method CafeOrCoffeeShopType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method CafeOrCoffeeShopType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method CafeOrCoffeeShopType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method CafeOrCoffeeShopType setDescription(Property\DescriptionProperty $description)
 * @method CafeOrCoffeeShopType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CafeOrCoffeeShopType setEvent(Property\EventProperty $event)
 * @method CafeOrCoffeeShopType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method CafeOrCoffeeShopType setGeo(Property\GeoProperty $geo)
 * @method CafeOrCoffeeShopType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method CafeOrCoffeeShopType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method CafeOrCoffeeShopType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method CafeOrCoffeeShopType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method CafeOrCoffeeShopType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method CafeOrCoffeeShopType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method CafeOrCoffeeShopType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method CafeOrCoffeeShopType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method CafeOrCoffeeShopType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method CafeOrCoffeeShopType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method CafeOrCoffeeShopType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method CafeOrCoffeeShopType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method CafeOrCoffeeShopType setHasMap(Property\HasMapProperty $hasMap)
 * @method CafeOrCoffeeShopType setHasMenu(Property\HasMenuProperty $hasMenu)
 * @method CafeOrCoffeeShopType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CafeOrCoffeeShopType setImage(Property\ImageProperty $image)
 * @method CafeOrCoffeeShopType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method CafeOrCoffeeShopType setIsicV4(Property\IsicV4Property $isicV4)
 * @method CafeOrCoffeeShopType setKeywords(Property\KeywordsProperty $keywords)
 * @method CafeOrCoffeeShopType setLatitude(Property\LatitudeProperty $latitude)
 * @method CafeOrCoffeeShopType setLogo(Property\LogoProperty $logo)
 * @method CafeOrCoffeeShopType setLongitude(Property\LongitudeProperty $longitude)
 * @method CafeOrCoffeeShopType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CafeOrCoffeeShopType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method CafeOrCoffeeShopType setName(Property\NameProperty $name)
 * @method CafeOrCoffeeShopType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method CafeOrCoffeeShopType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method CafeOrCoffeeShopType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method CafeOrCoffeeShopType setPhoto(Property\PhotoProperty $photo)
 * @method CafeOrCoffeeShopType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CafeOrCoffeeShopType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method CafeOrCoffeeShopType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method CafeOrCoffeeShopType setReview(Property\ReviewProperty $review)
 * @method CafeOrCoffeeShopType setSameAs(Property\SameAsProperty $sameAs)
 * @method CafeOrCoffeeShopType setServesCuisine(Property\ServesCuisineProperty $servesCuisine)
 * @method CafeOrCoffeeShopType setSlogan(Property\SloganProperty $slogan)
 * @method CafeOrCoffeeShopType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method CafeOrCoffeeShopType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method CafeOrCoffeeShopType setStarRating(Property\StarRatingProperty $starRating)
 * @method CafeOrCoffeeShopType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method CafeOrCoffeeShopType setTelephone(Property\TelephoneProperty $telephone)
 * @method CafeOrCoffeeShopType setUrl(Property\UrlProperty $url)
 */
class CafeOrCoffeeShopType extends FoodEstablishmentType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CafeOrCoffeeShop';
	}
}