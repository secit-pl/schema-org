<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A fire station. With firemen.
 * 
 * @method FireStationType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method FireStationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method FireStationType setAddress(Property\AddressProperty $address)
 * @method FireStationType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method FireStationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method FireStationType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method FireStationType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method FireStationType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method FireStationType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method FireStationType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method FireStationType setDescription(Property\DescriptionProperty $description)
 * @method FireStationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method FireStationType setEvent(Property\EventProperty $event)
 * @method FireStationType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method FireStationType setGeo(Property\GeoProperty $geo)
 * @method FireStationType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method FireStationType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method FireStationType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method FireStationType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method FireStationType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method FireStationType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method FireStationType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method FireStationType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method FireStationType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method FireStationType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method FireStationType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method FireStationType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method FireStationType setHasMap(Property\HasMapProperty $hasMap)
 * @method FireStationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method FireStationType setImage(Property\ImageProperty $image)
 * @method FireStationType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method FireStationType setIsicV4(Property\IsicV4Property $isicV4)
 * @method FireStationType setKeywords(Property\KeywordsProperty $keywords)
 * @method FireStationType setLatitude(Property\LatitudeProperty $latitude)
 * @method FireStationType setLogo(Property\LogoProperty $logo)
 * @method FireStationType setLongitude(Property\LongitudeProperty $longitude)
 * @method FireStationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method FireStationType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method FireStationType setName(Property\NameProperty $name)
 * @method FireStationType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method FireStationType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method FireStationType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method FireStationType setPhoto(Property\PhotoProperty $photo)
 * @method FireStationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method FireStationType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method FireStationType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method FireStationType setReview(Property\ReviewProperty $review)
 * @method FireStationType setSameAs(Property\SameAsProperty $sameAs)
 * @method FireStationType setSlogan(Property\SloganProperty $slogan)
 * @method FireStationType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method FireStationType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method FireStationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method FireStationType setTelephone(Property\TelephoneProperty $telephone)
 * @method FireStationType setUrl(Property\UrlProperty $url)
 */
class FireStationType extends EmergencyServiceType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/FireStation';
	}
}