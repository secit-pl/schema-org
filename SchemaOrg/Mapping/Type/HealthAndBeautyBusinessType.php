<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Health and beauty.
 * 
 * @method HealthAndBeautyBusinessType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method HealthAndBeautyBusinessType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method HealthAndBeautyBusinessType setAddress(Property\AddressProperty $address)
 * @method HealthAndBeautyBusinessType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method HealthAndBeautyBusinessType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method HealthAndBeautyBusinessType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method HealthAndBeautyBusinessType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method HealthAndBeautyBusinessType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method HealthAndBeautyBusinessType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method HealthAndBeautyBusinessType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method HealthAndBeautyBusinessType setDescription(Property\DescriptionProperty $description)
 * @method HealthAndBeautyBusinessType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method HealthAndBeautyBusinessType setEvent(Property\EventProperty $event)
 * @method HealthAndBeautyBusinessType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method HealthAndBeautyBusinessType setGeo(Property\GeoProperty $geo)
 * @method HealthAndBeautyBusinessType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method HealthAndBeautyBusinessType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method HealthAndBeautyBusinessType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method HealthAndBeautyBusinessType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method HealthAndBeautyBusinessType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method HealthAndBeautyBusinessType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method HealthAndBeautyBusinessType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method HealthAndBeautyBusinessType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method HealthAndBeautyBusinessType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method HealthAndBeautyBusinessType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method HealthAndBeautyBusinessType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method HealthAndBeautyBusinessType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method HealthAndBeautyBusinessType setHasMap(Property\HasMapProperty $hasMap)
 * @method HealthAndBeautyBusinessType setIdentifier(Property\IdentifierProperty $identifier)
 * @method HealthAndBeautyBusinessType setImage(Property\ImageProperty $image)
 * @method HealthAndBeautyBusinessType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method HealthAndBeautyBusinessType setIsicV4(Property\IsicV4Property $isicV4)
 * @method HealthAndBeautyBusinessType setKeywords(Property\KeywordsProperty $keywords)
 * @method HealthAndBeautyBusinessType setLatitude(Property\LatitudeProperty $latitude)
 * @method HealthAndBeautyBusinessType setLogo(Property\LogoProperty $logo)
 * @method HealthAndBeautyBusinessType setLongitude(Property\LongitudeProperty $longitude)
 * @method HealthAndBeautyBusinessType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method HealthAndBeautyBusinessType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method HealthAndBeautyBusinessType setName(Property\NameProperty $name)
 * @method HealthAndBeautyBusinessType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method HealthAndBeautyBusinessType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method HealthAndBeautyBusinessType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method HealthAndBeautyBusinessType setPhoto(Property\PhotoProperty $photo)
 * @method HealthAndBeautyBusinessType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method HealthAndBeautyBusinessType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method HealthAndBeautyBusinessType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method HealthAndBeautyBusinessType setReview(Property\ReviewProperty $review)
 * @method HealthAndBeautyBusinessType setSameAs(Property\SameAsProperty $sameAs)
 * @method HealthAndBeautyBusinessType setSlogan(Property\SloganProperty $slogan)
 * @method HealthAndBeautyBusinessType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method HealthAndBeautyBusinessType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method HealthAndBeautyBusinessType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method HealthAndBeautyBusinessType setTelephone(Property\TelephoneProperty $telephone)
 * @method HealthAndBeautyBusinessType setUrl(Property\UrlProperty $url)
 */
class HealthAndBeautyBusinessType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HealthAndBeautyBusiness';
	}
}