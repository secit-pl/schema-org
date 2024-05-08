<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Brewery.
 * 
 * @method BreweryType setAcceptsReservations(Property\AcceptsReservationsProperty $acceptsReservations)
 * @method BreweryType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method BreweryType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BreweryType setAddress(Property\AddressProperty $address)
 * @method BreweryType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method BreweryType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BreweryType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method BreweryType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method BreweryType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method BreweryType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method BreweryType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method BreweryType setDescription(Property\DescriptionProperty $description)
 * @method BreweryType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BreweryType setEvent(Property\EventProperty $event)
 * @method BreweryType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method BreweryType setGeo(Property\GeoProperty $geo)
 * @method BreweryType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method BreweryType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method BreweryType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method BreweryType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method BreweryType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method BreweryType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method BreweryType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method BreweryType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method BreweryType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method BreweryType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method BreweryType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method BreweryType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method BreweryType setHasMap(Property\HasMapProperty $hasMap)
 * @method BreweryType setHasMenu(Property\HasMenuProperty $hasMenu)
 * @method BreweryType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BreweryType setImage(Property\ImageProperty $image)
 * @method BreweryType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method BreweryType setIsicV4(Property\IsicV4Property $isicV4)
 * @method BreweryType setKeywords(Property\KeywordsProperty $keywords)
 * @method BreweryType setLatitude(Property\LatitudeProperty $latitude)
 * @method BreweryType setLogo(Property\LogoProperty $logo)
 * @method BreweryType setLongitude(Property\LongitudeProperty $longitude)
 * @method BreweryType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BreweryType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method BreweryType setName(Property\NameProperty $name)
 * @method BreweryType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method BreweryType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method BreweryType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method BreweryType setPhoto(Property\PhotoProperty $photo)
 * @method BreweryType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BreweryType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method BreweryType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method BreweryType setReview(Property\ReviewProperty $review)
 * @method BreweryType setSameAs(Property\SameAsProperty $sameAs)
 * @method BreweryType setServesCuisine(Property\ServesCuisineProperty $servesCuisine)
 * @method BreweryType setSlogan(Property\SloganProperty $slogan)
 * @method BreweryType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method BreweryType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method BreweryType setStarRating(Property\StarRatingProperty $starRating)
 * @method BreweryType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method BreweryType setTelephone(Property\TelephoneProperty $telephone)
 * @method BreweryType setUrl(Property\UrlProperty $url)
 */
class BreweryType extends FoodEstablishmentType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Brewery';
	}
}