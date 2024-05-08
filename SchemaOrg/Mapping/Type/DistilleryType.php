<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A distillery.
 * 
 * @method DistilleryType setAcceptsReservations(Property\AcceptsReservationsProperty $acceptsReservations)
 * @method DistilleryType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method DistilleryType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DistilleryType setAddress(Property\AddressProperty $address)
 * @method DistilleryType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method DistilleryType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DistilleryType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method DistilleryType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method DistilleryType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method DistilleryType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method DistilleryType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method DistilleryType setDescription(Property\DescriptionProperty $description)
 * @method DistilleryType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DistilleryType setEvent(Property\EventProperty $event)
 * @method DistilleryType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method DistilleryType setGeo(Property\GeoProperty $geo)
 * @method DistilleryType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method DistilleryType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method DistilleryType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method DistilleryType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method DistilleryType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method DistilleryType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method DistilleryType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method DistilleryType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method DistilleryType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method DistilleryType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method DistilleryType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method DistilleryType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method DistilleryType setHasMap(Property\HasMapProperty $hasMap)
 * @method DistilleryType setHasMenu(Property\HasMenuProperty $hasMenu)
 * @method DistilleryType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DistilleryType setImage(Property\ImageProperty $image)
 * @method DistilleryType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method DistilleryType setIsicV4(Property\IsicV4Property $isicV4)
 * @method DistilleryType setKeywords(Property\KeywordsProperty $keywords)
 * @method DistilleryType setLatitude(Property\LatitudeProperty $latitude)
 * @method DistilleryType setLogo(Property\LogoProperty $logo)
 * @method DistilleryType setLongitude(Property\LongitudeProperty $longitude)
 * @method DistilleryType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DistilleryType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method DistilleryType setName(Property\NameProperty $name)
 * @method DistilleryType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method DistilleryType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method DistilleryType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method DistilleryType setPhoto(Property\PhotoProperty $photo)
 * @method DistilleryType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DistilleryType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method DistilleryType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method DistilleryType setReview(Property\ReviewProperty $review)
 * @method DistilleryType setSameAs(Property\SameAsProperty $sameAs)
 * @method DistilleryType setServesCuisine(Property\ServesCuisineProperty $servesCuisine)
 * @method DistilleryType setSlogan(Property\SloganProperty $slogan)
 * @method DistilleryType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method DistilleryType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method DistilleryType setStarRating(Property\StarRatingProperty $starRating)
 * @method DistilleryType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method DistilleryType setTelephone(Property\TelephoneProperty $telephone)
 * @method DistilleryType setUrl(Property\UrlProperty $url)
 */
class DistilleryType extends FoodEstablishmentType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Distillery';
	}
}