<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A golf course.
 * 
 * @method GolfCourseType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method GolfCourseType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method GolfCourseType setAddress(Property\AddressProperty $address)
 * @method GolfCourseType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method GolfCourseType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method GolfCourseType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method GolfCourseType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method GolfCourseType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method GolfCourseType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method GolfCourseType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method GolfCourseType setDescription(Property\DescriptionProperty $description)
 * @method GolfCourseType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method GolfCourseType setEvent(Property\EventProperty $event)
 * @method GolfCourseType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method GolfCourseType setGeo(Property\GeoProperty $geo)
 * @method GolfCourseType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method GolfCourseType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method GolfCourseType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method GolfCourseType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method GolfCourseType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method GolfCourseType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method GolfCourseType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method GolfCourseType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method GolfCourseType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method GolfCourseType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method GolfCourseType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method GolfCourseType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method GolfCourseType setHasMap(Property\HasMapProperty $hasMap)
 * @method GolfCourseType setIdentifier(Property\IdentifierProperty $identifier)
 * @method GolfCourseType setImage(Property\ImageProperty $image)
 * @method GolfCourseType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method GolfCourseType setIsicV4(Property\IsicV4Property $isicV4)
 * @method GolfCourseType setKeywords(Property\KeywordsProperty $keywords)
 * @method GolfCourseType setLatitude(Property\LatitudeProperty $latitude)
 * @method GolfCourseType setLogo(Property\LogoProperty $logo)
 * @method GolfCourseType setLongitude(Property\LongitudeProperty $longitude)
 * @method GolfCourseType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method GolfCourseType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method GolfCourseType setName(Property\NameProperty $name)
 * @method GolfCourseType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method GolfCourseType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method GolfCourseType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method GolfCourseType setPhoto(Property\PhotoProperty $photo)
 * @method GolfCourseType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method GolfCourseType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method GolfCourseType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method GolfCourseType setReview(Property\ReviewProperty $review)
 * @method GolfCourseType setSameAs(Property\SameAsProperty $sameAs)
 * @method GolfCourseType setSlogan(Property\SloganProperty $slogan)
 * @method GolfCourseType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method GolfCourseType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method GolfCourseType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method GolfCourseType setTelephone(Property\TelephoneProperty $telephone)
 * @method GolfCourseType setUrl(Property\UrlProperty $url)
 */
class GolfCourseType extends SportsActivityLocationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/GolfCourse';
	}
}