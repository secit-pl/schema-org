<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A police station.
 * 
 * @method PoliceStationType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method PoliceStationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PoliceStationType setAddress(Property\AddressProperty $address)
 * @method PoliceStationType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method PoliceStationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PoliceStationType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method PoliceStationType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method PoliceStationType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method PoliceStationType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method PoliceStationType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method PoliceStationType setDescription(Property\DescriptionProperty $description)
 * @method PoliceStationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PoliceStationType setEvent(Property\EventProperty $event)
 * @method PoliceStationType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method PoliceStationType setGeo(Property\GeoProperty $geo)
 * @method PoliceStationType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method PoliceStationType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method PoliceStationType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method PoliceStationType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method PoliceStationType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method PoliceStationType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method PoliceStationType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method PoliceStationType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method PoliceStationType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method PoliceStationType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method PoliceStationType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method PoliceStationType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method PoliceStationType setHasMap(Property\HasMapProperty $hasMap)
 * @method PoliceStationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PoliceStationType setImage(Property\ImageProperty $image)
 * @method PoliceStationType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method PoliceStationType setIsicV4(Property\IsicV4Property $isicV4)
 * @method PoliceStationType setKeywords(Property\KeywordsProperty $keywords)
 * @method PoliceStationType setLatitude(Property\LatitudeProperty $latitude)
 * @method PoliceStationType setLogo(Property\LogoProperty $logo)
 * @method PoliceStationType setLongitude(Property\LongitudeProperty $longitude)
 * @method PoliceStationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PoliceStationType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method PoliceStationType setName(Property\NameProperty $name)
 * @method PoliceStationType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method PoliceStationType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method PoliceStationType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method PoliceStationType setPhoto(Property\PhotoProperty $photo)
 * @method PoliceStationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PoliceStationType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method PoliceStationType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method PoliceStationType setReview(Property\ReviewProperty $review)
 * @method PoliceStationType setSameAs(Property\SameAsProperty $sameAs)
 * @method PoliceStationType setSlogan(Property\SloganProperty $slogan)
 * @method PoliceStationType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method PoliceStationType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method PoliceStationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PoliceStationType setTelephone(Property\TelephoneProperty $telephone)
 * @method PoliceStationType setUrl(Property\UrlProperty $url)
 */
class PoliceStationType extends EmergencyServiceType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PoliceStation';
	}
}