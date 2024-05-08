<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A sports location, such as a playing field.
 * 
 * @method SportsActivityLocationType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method SportsActivityLocationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SportsActivityLocationType setAddress(Property\AddressProperty $address)
 * @method SportsActivityLocationType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method SportsActivityLocationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SportsActivityLocationType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method SportsActivityLocationType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method SportsActivityLocationType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method SportsActivityLocationType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method SportsActivityLocationType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method SportsActivityLocationType setDescription(Property\DescriptionProperty $description)
 * @method SportsActivityLocationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SportsActivityLocationType setEvent(Property\EventProperty $event)
 * @method SportsActivityLocationType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method SportsActivityLocationType setGeo(Property\GeoProperty $geo)
 * @method SportsActivityLocationType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method SportsActivityLocationType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method SportsActivityLocationType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method SportsActivityLocationType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method SportsActivityLocationType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method SportsActivityLocationType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method SportsActivityLocationType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method SportsActivityLocationType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method SportsActivityLocationType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method SportsActivityLocationType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method SportsActivityLocationType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method SportsActivityLocationType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method SportsActivityLocationType setHasMap(Property\HasMapProperty $hasMap)
 * @method SportsActivityLocationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SportsActivityLocationType setImage(Property\ImageProperty $image)
 * @method SportsActivityLocationType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method SportsActivityLocationType setIsicV4(Property\IsicV4Property $isicV4)
 * @method SportsActivityLocationType setKeywords(Property\KeywordsProperty $keywords)
 * @method SportsActivityLocationType setLatitude(Property\LatitudeProperty $latitude)
 * @method SportsActivityLocationType setLogo(Property\LogoProperty $logo)
 * @method SportsActivityLocationType setLongitude(Property\LongitudeProperty $longitude)
 * @method SportsActivityLocationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SportsActivityLocationType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method SportsActivityLocationType setName(Property\NameProperty $name)
 * @method SportsActivityLocationType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method SportsActivityLocationType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method SportsActivityLocationType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method SportsActivityLocationType setPhoto(Property\PhotoProperty $photo)
 * @method SportsActivityLocationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SportsActivityLocationType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method SportsActivityLocationType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method SportsActivityLocationType setReview(Property\ReviewProperty $review)
 * @method SportsActivityLocationType setSameAs(Property\SameAsProperty $sameAs)
 * @method SportsActivityLocationType setSlogan(Property\SloganProperty $slogan)
 * @method SportsActivityLocationType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method SportsActivityLocationType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method SportsActivityLocationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method SportsActivityLocationType setTelephone(Property\TelephoneProperty $telephone)
 * @method SportsActivityLocationType setUrl(Property\UrlProperty $url)
 */
class SportsActivityLocationType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SportsActivityLocation';
	}
}