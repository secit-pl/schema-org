<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A gym.
 * 
 * @method ExerciseGymType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method ExerciseGymType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ExerciseGymType setAddress(Property\AddressProperty $address)
 * @method ExerciseGymType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ExerciseGymType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ExerciseGymType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method ExerciseGymType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method ExerciseGymType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method ExerciseGymType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method ExerciseGymType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method ExerciseGymType setDescription(Property\DescriptionProperty $description)
 * @method ExerciseGymType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ExerciseGymType setEvent(Property\EventProperty $event)
 * @method ExerciseGymType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method ExerciseGymType setGeo(Property\GeoProperty $geo)
 * @method ExerciseGymType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method ExerciseGymType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method ExerciseGymType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method ExerciseGymType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method ExerciseGymType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method ExerciseGymType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method ExerciseGymType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method ExerciseGymType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method ExerciseGymType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method ExerciseGymType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method ExerciseGymType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method ExerciseGymType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method ExerciseGymType setHasMap(Property\HasMapProperty $hasMap)
 * @method ExerciseGymType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ExerciseGymType setImage(Property\ImageProperty $image)
 * @method ExerciseGymType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method ExerciseGymType setIsicV4(Property\IsicV4Property $isicV4)
 * @method ExerciseGymType setKeywords(Property\KeywordsProperty $keywords)
 * @method ExerciseGymType setLatitude(Property\LatitudeProperty $latitude)
 * @method ExerciseGymType setLogo(Property\LogoProperty $logo)
 * @method ExerciseGymType setLongitude(Property\LongitudeProperty $longitude)
 * @method ExerciseGymType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ExerciseGymType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method ExerciseGymType setName(Property\NameProperty $name)
 * @method ExerciseGymType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method ExerciseGymType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method ExerciseGymType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method ExerciseGymType setPhoto(Property\PhotoProperty $photo)
 * @method ExerciseGymType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ExerciseGymType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method ExerciseGymType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method ExerciseGymType setReview(Property\ReviewProperty $review)
 * @method ExerciseGymType setSameAs(Property\SameAsProperty $sameAs)
 * @method ExerciseGymType setSlogan(Property\SloganProperty $slogan)
 * @method ExerciseGymType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method ExerciseGymType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method ExerciseGymType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ExerciseGymType setTelephone(Property\TelephoneProperty $telephone)
 * @method ExerciseGymType setUrl(Property\UrlProperty $url)
 */
class ExerciseGymType extends SportsActivityLocationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ExerciseGym';
	}
}