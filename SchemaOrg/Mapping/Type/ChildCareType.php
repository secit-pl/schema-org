<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A Childcare center.
 * 
 * @method ChildCareType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method ChildCareType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ChildCareType setAddress(Property\AddressProperty $address)
 * @method ChildCareType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ChildCareType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ChildCareType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method ChildCareType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method ChildCareType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method ChildCareType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method ChildCareType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method ChildCareType setDescription(Property\DescriptionProperty $description)
 * @method ChildCareType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ChildCareType setEvent(Property\EventProperty $event)
 * @method ChildCareType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method ChildCareType setGeo(Property\GeoProperty $geo)
 * @method ChildCareType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method ChildCareType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method ChildCareType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method ChildCareType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method ChildCareType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method ChildCareType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method ChildCareType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method ChildCareType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method ChildCareType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method ChildCareType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method ChildCareType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method ChildCareType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method ChildCareType setHasMap(Property\HasMapProperty $hasMap)
 * @method ChildCareType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ChildCareType setImage(Property\ImageProperty $image)
 * @method ChildCareType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method ChildCareType setIsicV4(Property\IsicV4Property $isicV4)
 * @method ChildCareType setKeywords(Property\KeywordsProperty $keywords)
 * @method ChildCareType setLatitude(Property\LatitudeProperty $latitude)
 * @method ChildCareType setLogo(Property\LogoProperty $logo)
 * @method ChildCareType setLongitude(Property\LongitudeProperty $longitude)
 * @method ChildCareType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ChildCareType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method ChildCareType setName(Property\NameProperty $name)
 * @method ChildCareType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method ChildCareType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method ChildCareType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method ChildCareType setPhoto(Property\PhotoProperty $photo)
 * @method ChildCareType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ChildCareType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method ChildCareType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method ChildCareType setReview(Property\ReviewProperty $review)
 * @method ChildCareType setSameAs(Property\SameAsProperty $sameAs)
 * @method ChildCareType setSlogan(Property\SloganProperty $slogan)
 * @method ChildCareType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method ChildCareType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method ChildCareType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ChildCareType setTelephone(Property\TelephoneProperty $telephone)
 * @method ChildCareType setUrl(Property\UrlProperty $url)
 */
class ChildCareType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ChildCare';
	}
}