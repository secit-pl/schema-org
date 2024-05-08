<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A television station.
 * 
 * @method TelevisionStationType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method TelevisionStationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method TelevisionStationType setAddress(Property\AddressProperty $address)
 * @method TelevisionStationType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method TelevisionStationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method TelevisionStationType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method TelevisionStationType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method TelevisionStationType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method TelevisionStationType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method TelevisionStationType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method TelevisionStationType setDescription(Property\DescriptionProperty $description)
 * @method TelevisionStationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method TelevisionStationType setEvent(Property\EventProperty $event)
 * @method TelevisionStationType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method TelevisionStationType setGeo(Property\GeoProperty $geo)
 * @method TelevisionStationType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method TelevisionStationType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method TelevisionStationType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method TelevisionStationType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method TelevisionStationType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method TelevisionStationType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method TelevisionStationType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method TelevisionStationType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method TelevisionStationType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method TelevisionStationType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method TelevisionStationType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method TelevisionStationType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method TelevisionStationType setHasMap(Property\HasMapProperty $hasMap)
 * @method TelevisionStationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method TelevisionStationType setImage(Property\ImageProperty $image)
 * @method TelevisionStationType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method TelevisionStationType setIsicV4(Property\IsicV4Property $isicV4)
 * @method TelevisionStationType setKeywords(Property\KeywordsProperty $keywords)
 * @method TelevisionStationType setLatitude(Property\LatitudeProperty $latitude)
 * @method TelevisionStationType setLogo(Property\LogoProperty $logo)
 * @method TelevisionStationType setLongitude(Property\LongitudeProperty $longitude)
 * @method TelevisionStationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method TelevisionStationType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method TelevisionStationType setName(Property\NameProperty $name)
 * @method TelevisionStationType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method TelevisionStationType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method TelevisionStationType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method TelevisionStationType setPhoto(Property\PhotoProperty $photo)
 * @method TelevisionStationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method TelevisionStationType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method TelevisionStationType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method TelevisionStationType setReview(Property\ReviewProperty $review)
 * @method TelevisionStationType setSameAs(Property\SameAsProperty $sameAs)
 * @method TelevisionStationType setSlogan(Property\SloganProperty $slogan)
 * @method TelevisionStationType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method TelevisionStationType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method TelevisionStationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method TelevisionStationType setTelephone(Property\TelephoneProperty $telephone)
 * @method TelevisionStationType setUrl(Property\UrlProperty $url)
 */
class TelevisionStationType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TelevisionStation';
	}
}