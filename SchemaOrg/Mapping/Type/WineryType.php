<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A winery.
 * 
 * @method WineryType setAcceptsReservations(Property\AcceptsReservationsProperty $acceptsReservations)
 * @method WineryType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method WineryType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method WineryType setAddress(Property\AddressProperty $address)
 * @method WineryType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method WineryType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method WineryType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method WineryType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method WineryType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method WineryType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method WineryType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method WineryType setDescription(Property\DescriptionProperty $description)
 * @method WineryType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method WineryType setEvent(Property\EventProperty $event)
 * @method WineryType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method WineryType setGeo(Property\GeoProperty $geo)
 * @method WineryType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method WineryType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method WineryType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method WineryType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method WineryType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method WineryType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method WineryType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method WineryType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method WineryType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method WineryType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method WineryType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method WineryType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method WineryType setHasMap(Property\HasMapProperty $hasMap)
 * @method WineryType setHasMenu(Property\HasMenuProperty $hasMenu)
 * @method WineryType setIdentifier(Property\IdentifierProperty $identifier)
 * @method WineryType setImage(Property\ImageProperty $image)
 * @method WineryType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method WineryType setIsicV4(Property\IsicV4Property $isicV4)
 * @method WineryType setKeywords(Property\KeywordsProperty $keywords)
 * @method WineryType setLatitude(Property\LatitudeProperty $latitude)
 * @method WineryType setLogo(Property\LogoProperty $logo)
 * @method WineryType setLongitude(Property\LongitudeProperty $longitude)
 * @method WineryType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method WineryType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method WineryType setName(Property\NameProperty $name)
 * @method WineryType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method WineryType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method WineryType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method WineryType setPhoto(Property\PhotoProperty $photo)
 * @method WineryType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method WineryType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method WineryType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method WineryType setReview(Property\ReviewProperty $review)
 * @method WineryType setSameAs(Property\SameAsProperty $sameAs)
 * @method WineryType setServesCuisine(Property\ServesCuisineProperty $servesCuisine)
 * @method WineryType setSlogan(Property\SloganProperty $slogan)
 * @method WineryType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method WineryType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method WineryType setStarRating(Property\StarRatingProperty $starRating)
 * @method WineryType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method WineryType setTelephone(Property\TelephoneProperty $telephone)
 * @method WineryType setUrl(Property\UrlProperty $url)
 */
class WineryType extends FoodEstablishmentType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Winery';
	}
}