<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A bakery.
 * 
 * @method BakeryType setAcceptsReservations(Property\AcceptsReservationsProperty $acceptsReservations)
 * @method BakeryType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method BakeryType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BakeryType setAddress(Property\AddressProperty $address)
 * @method BakeryType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method BakeryType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BakeryType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method BakeryType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method BakeryType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method BakeryType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method BakeryType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method BakeryType setDescription(Property\DescriptionProperty $description)
 * @method BakeryType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BakeryType setEvent(Property\EventProperty $event)
 * @method BakeryType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method BakeryType setGeo(Property\GeoProperty $geo)
 * @method BakeryType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method BakeryType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method BakeryType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method BakeryType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method BakeryType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method BakeryType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method BakeryType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method BakeryType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method BakeryType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method BakeryType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method BakeryType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method BakeryType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method BakeryType setHasMap(Property\HasMapProperty $hasMap)
 * @method BakeryType setHasMenu(Property\HasMenuProperty $hasMenu)
 * @method BakeryType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BakeryType setImage(Property\ImageProperty $image)
 * @method BakeryType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method BakeryType setIsicV4(Property\IsicV4Property $isicV4)
 * @method BakeryType setKeywords(Property\KeywordsProperty $keywords)
 * @method BakeryType setLatitude(Property\LatitudeProperty $latitude)
 * @method BakeryType setLogo(Property\LogoProperty $logo)
 * @method BakeryType setLongitude(Property\LongitudeProperty $longitude)
 * @method BakeryType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BakeryType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method BakeryType setName(Property\NameProperty $name)
 * @method BakeryType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method BakeryType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method BakeryType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method BakeryType setPhoto(Property\PhotoProperty $photo)
 * @method BakeryType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BakeryType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method BakeryType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method BakeryType setReview(Property\ReviewProperty $review)
 * @method BakeryType setSameAs(Property\SameAsProperty $sameAs)
 * @method BakeryType setServesCuisine(Property\ServesCuisineProperty $servesCuisine)
 * @method BakeryType setSlogan(Property\SloganProperty $slogan)
 * @method BakeryType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method BakeryType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method BakeryType setStarRating(Property\StarRatingProperty $starRating)
 * @method BakeryType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method BakeryType setTelephone(Property\TelephoneProperty $telephone)
 * @method BakeryType setUrl(Property\UrlProperty $url)
 */
class BakeryType extends FoodEstablishmentType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Bakery';
	}
}