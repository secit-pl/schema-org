<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A health club.
 * 
 * @method HealthClubType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method HealthClubType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method HealthClubType setAddress(Property\AddressProperty $address)
 * @method HealthClubType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method HealthClubType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method HealthClubType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method HealthClubType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method HealthClubType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method HealthClubType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method HealthClubType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method HealthClubType setDescription(Property\DescriptionProperty $description)
 * @method HealthClubType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method HealthClubType setEvent(Property\EventProperty $event)
 * @method HealthClubType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method HealthClubType setGeo(Property\GeoProperty $geo)
 * @method HealthClubType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method HealthClubType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method HealthClubType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method HealthClubType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method HealthClubType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method HealthClubType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method HealthClubType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method HealthClubType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method HealthClubType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method HealthClubType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method HealthClubType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method HealthClubType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method HealthClubType setHasMap(Property\HasMapProperty $hasMap)
 * @method HealthClubType setIdentifier(Property\IdentifierProperty $identifier)
 * @method HealthClubType setImage(Property\ImageProperty $image)
 * @method HealthClubType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method HealthClubType setIsicV4(Property\IsicV4Property $isicV4)
 * @method HealthClubType setKeywords(Property\KeywordsProperty $keywords)
 * @method HealthClubType setLatitude(Property\LatitudeProperty $latitude)
 * @method HealthClubType setLogo(Property\LogoProperty $logo)
 * @method HealthClubType setLongitude(Property\LongitudeProperty $longitude)
 * @method HealthClubType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method HealthClubType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method HealthClubType setName(Property\NameProperty $name)
 * @method HealthClubType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method HealthClubType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method HealthClubType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method HealthClubType setPhoto(Property\PhotoProperty $photo)
 * @method HealthClubType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method HealthClubType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method HealthClubType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method HealthClubType setReview(Property\ReviewProperty $review)
 * @method HealthClubType setSameAs(Property\SameAsProperty $sameAs)
 * @method HealthClubType setSlogan(Property\SloganProperty $slogan)
 * @method HealthClubType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method HealthClubType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method HealthClubType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method HealthClubType setTelephone(Property\TelephoneProperty $telephone)
 * @method HealthClubType setUrl(Property\UrlProperty $url)
 */
class HealthClubType extends SportsActivityLocationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HealthClub';
	}
}