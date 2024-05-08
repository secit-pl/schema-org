<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A car wash business.
 * 
 * @method AutoWashType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method AutoWashType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AutoWashType setAddress(Property\AddressProperty $address)
 * @method AutoWashType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method AutoWashType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AutoWashType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method AutoWashType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method AutoWashType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method AutoWashType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method AutoWashType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method AutoWashType setDescription(Property\DescriptionProperty $description)
 * @method AutoWashType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AutoWashType setEvent(Property\EventProperty $event)
 * @method AutoWashType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method AutoWashType setGeo(Property\GeoProperty $geo)
 * @method AutoWashType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method AutoWashType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method AutoWashType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method AutoWashType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method AutoWashType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method AutoWashType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method AutoWashType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method AutoWashType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method AutoWashType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method AutoWashType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method AutoWashType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method AutoWashType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method AutoWashType setHasMap(Property\HasMapProperty $hasMap)
 * @method AutoWashType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AutoWashType setImage(Property\ImageProperty $image)
 * @method AutoWashType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method AutoWashType setIsicV4(Property\IsicV4Property $isicV4)
 * @method AutoWashType setKeywords(Property\KeywordsProperty $keywords)
 * @method AutoWashType setLatitude(Property\LatitudeProperty $latitude)
 * @method AutoWashType setLogo(Property\LogoProperty $logo)
 * @method AutoWashType setLongitude(Property\LongitudeProperty $longitude)
 * @method AutoWashType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AutoWashType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method AutoWashType setName(Property\NameProperty $name)
 * @method AutoWashType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method AutoWashType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method AutoWashType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method AutoWashType setPhoto(Property\PhotoProperty $photo)
 * @method AutoWashType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AutoWashType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method AutoWashType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method AutoWashType setReview(Property\ReviewProperty $review)
 * @method AutoWashType setSameAs(Property\SameAsProperty $sameAs)
 * @method AutoWashType setSlogan(Property\SloganProperty $slogan)
 * @method AutoWashType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method AutoWashType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method AutoWashType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method AutoWashType setTelephone(Property\TelephoneProperty $telephone)
 * @method AutoWashType setUrl(Property\UrlProperty $url)
 */
class AutoWashType extends AutomotiveBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AutoWash';
	}
}