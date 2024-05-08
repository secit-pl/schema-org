<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A tennis complex.
 * 
 * @method TennisComplexType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method TennisComplexType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method TennisComplexType setAddress(Property\AddressProperty $address)
 * @method TennisComplexType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method TennisComplexType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method TennisComplexType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method TennisComplexType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method TennisComplexType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method TennisComplexType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method TennisComplexType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method TennisComplexType setDescription(Property\DescriptionProperty $description)
 * @method TennisComplexType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method TennisComplexType setEvent(Property\EventProperty $event)
 * @method TennisComplexType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method TennisComplexType setGeo(Property\GeoProperty $geo)
 * @method TennisComplexType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method TennisComplexType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method TennisComplexType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method TennisComplexType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method TennisComplexType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method TennisComplexType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method TennisComplexType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method TennisComplexType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method TennisComplexType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method TennisComplexType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method TennisComplexType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method TennisComplexType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method TennisComplexType setHasMap(Property\HasMapProperty $hasMap)
 * @method TennisComplexType setIdentifier(Property\IdentifierProperty $identifier)
 * @method TennisComplexType setImage(Property\ImageProperty $image)
 * @method TennisComplexType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method TennisComplexType setIsicV4(Property\IsicV4Property $isicV4)
 * @method TennisComplexType setKeywords(Property\KeywordsProperty $keywords)
 * @method TennisComplexType setLatitude(Property\LatitudeProperty $latitude)
 * @method TennisComplexType setLogo(Property\LogoProperty $logo)
 * @method TennisComplexType setLongitude(Property\LongitudeProperty $longitude)
 * @method TennisComplexType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method TennisComplexType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method TennisComplexType setName(Property\NameProperty $name)
 * @method TennisComplexType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method TennisComplexType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method TennisComplexType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method TennisComplexType setPhoto(Property\PhotoProperty $photo)
 * @method TennisComplexType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method TennisComplexType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method TennisComplexType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method TennisComplexType setReview(Property\ReviewProperty $review)
 * @method TennisComplexType setSameAs(Property\SameAsProperty $sameAs)
 * @method TennisComplexType setSlogan(Property\SloganProperty $slogan)
 * @method TennisComplexType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method TennisComplexType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method TennisComplexType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method TennisComplexType setTelephone(Property\TelephoneProperty $telephone)
 * @method TennisComplexType setUrl(Property\UrlProperty $url)
 */
class TennisComplexType extends SportsActivityLocationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TennisComplex';
	}
}