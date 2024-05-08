<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A ski resort.
 * 
 * @method SkiResortType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method SkiResortType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SkiResortType setAddress(Property\AddressProperty $address)
 * @method SkiResortType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method SkiResortType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SkiResortType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method SkiResortType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method SkiResortType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method SkiResortType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method SkiResortType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method SkiResortType setDescription(Property\DescriptionProperty $description)
 * @method SkiResortType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SkiResortType setEvent(Property\EventProperty $event)
 * @method SkiResortType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method SkiResortType setGeo(Property\GeoProperty $geo)
 * @method SkiResortType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method SkiResortType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method SkiResortType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method SkiResortType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method SkiResortType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method SkiResortType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method SkiResortType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method SkiResortType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method SkiResortType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method SkiResortType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method SkiResortType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method SkiResortType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method SkiResortType setHasMap(Property\HasMapProperty $hasMap)
 * @method SkiResortType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SkiResortType setImage(Property\ImageProperty $image)
 * @method SkiResortType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method SkiResortType setIsicV4(Property\IsicV4Property $isicV4)
 * @method SkiResortType setKeywords(Property\KeywordsProperty $keywords)
 * @method SkiResortType setLatitude(Property\LatitudeProperty $latitude)
 * @method SkiResortType setLogo(Property\LogoProperty $logo)
 * @method SkiResortType setLongitude(Property\LongitudeProperty $longitude)
 * @method SkiResortType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SkiResortType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method SkiResortType setName(Property\NameProperty $name)
 * @method SkiResortType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method SkiResortType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method SkiResortType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method SkiResortType setPhoto(Property\PhotoProperty $photo)
 * @method SkiResortType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SkiResortType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method SkiResortType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method SkiResortType setReview(Property\ReviewProperty $review)
 * @method SkiResortType setSameAs(Property\SameAsProperty $sameAs)
 * @method SkiResortType setSlogan(Property\SloganProperty $slogan)
 * @method SkiResortType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method SkiResortType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method SkiResortType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method SkiResortType setTelephone(Property\TelephoneProperty $telephone)
 * @method SkiResortType setUrl(Property\UrlProperty $url)
 */
class SkiResortType extends SportsActivityLocationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SkiResort';
	}
}