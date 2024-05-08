<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A bar or pub.
 * 
 * @method BarOrPubType setAcceptsReservations(Property\AcceptsReservationsProperty $acceptsReservations)
 * @method BarOrPubType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method BarOrPubType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BarOrPubType setAddress(Property\AddressProperty $address)
 * @method BarOrPubType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method BarOrPubType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BarOrPubType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method BarOrPubType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method BarOrPubType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method BarOrPubType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method BarOrPubType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method BarOrPubType setDescription(Property\DescriptionProperty $description)
 * @method BarOrPubType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BarOrPubType setEvent(Property\EventProperty $event)
 * @method BarOrPubType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method BarOrPubType setGeo(Property\GeoProperty $geo)
 * @method BarOrPubType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method BarOrPubType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method BarOrPubType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method BarOrPubType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method BarOrPubType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method BarOrPubType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method BarOrPubType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method BarOrPubType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method BarOrPubType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method BarOrPubType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method BarOrPubType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method BarOrPubType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method BarOrPubType setHasMap(Property\HasMapProperty $hasMap)
 * @method BarOrPubType setHasMenu(Property\HasMenuProperty $hasMenu)
 * @method BarOrPubType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BarOrPubType setImage(Property\ImageProperty $image)
 * @method BarOrPubType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method BarOrPubType setIsicV4(Property\IsicV4Property $isicV4)
 * @method BarOrPubType setKeywords(Property\KeywordsProperty $keywords)
 * @method BarOrPubType setLatitude(Property\LatitudeProperty $latitude)
 * @method BarOrPubType setLogo(Property\LogoProperty $logo)
 * @method BarOrPubType setLongitude(Property\LongitudeProperty $longitude)
 * @method BarOrPubType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BarOrPubType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method BarOrPubType setName(Property\NameProperty $name)
 * @method BarOrPubType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method BarOrPubType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method BarOrPubType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method BarOrPubType setPhoto(Property\PhotoProperty $photo)
 * @method BarOrPubType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BarOrPubType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method BarOrPubType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method BarOrPubType setReview(Property\ReviewProperty $review)
 * @method BarOrPubType setSameAs(Property\SameAsProperty $sameAs)
 * @method BarOrPubType setServesCuisine(Property\ServesCuisineProperty $servesCuisine)
 * @method BarOrPubType setSlogan(Property\SloganProperty $slogan)
 * @method BarOrPubType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method BarOrPubType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method BarOrPubType setStarRating(Property\StarRatingProperty $starRating)
 * @method BarOrPubType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method BarOrPubType setTelephone(Property\TelephoneProperty $telephone)
 * @method BarOrPubType setUrl(Property\UrlProperty $url)
 */
class BarOrPubType extends FoodEstablishmentType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BarOrPub';
	}
}