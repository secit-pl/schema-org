<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An internet cafe.
 * 
 * @method InternetCafeType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method InternetCafeType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method InternetCafeType setAddress(Property\AddressProperty $address)
 * @method InternetCafeType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method InternetCafeType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method InternetCafeType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method InternetCafeType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method InternetCafeType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method InternetCafeType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method InternetCafeType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method InternetCafeType setDescription(Property\DescriptionProperty $description)
 * @method InternetCafeType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method InternetCafeType setEvent(Property\EventProperty $event)
 * @method InternetCafeType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method InternetCafeType setGeo(Property\GeoProperty $geo)
 * @method InternetCafeType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method InternetCafeType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method InternetCafeType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method InternetCafeType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method InternetCafeType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method InternetCafeType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method InternetCafeType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method InternetCafeType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method InternetCafeType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method InternetCafeType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method InternetCafeType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method InternetCafeType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method InternetCafeType setHasMap(Property\HasMapProperty $hasMap)
 * @method InternetCafeType setIdentifier(Property\IdentifierProperty $identifier)
 * @method InternetCafeType setImage(Property\ImageProperty $image)
 * @method InternetCafeType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method InternetCafeType setIsicV4(Property\IsicV4Property $isicV4)
 * @method InternetCafeType setKeywords(Property\KeywordsProperty $keywords)
 * @method InternetCafeType setLatitude(Property\LatitudeProperty $latitude)
 * @method InternetCafeType setLogo(Property\LogoProperty $logo)
 * @method InternetCafeType setLongitude(Property\LongitudeProperty $longitude)
 * @method InternetCafeType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method InternetCafeType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method InternetCafeType setName(Property\NameProperty $name)
 * @method InternetCafeType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method InternetCafeType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method InternetCafeType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method InternetCafeType setPhoto(Property\PhotoProperty $photo)
 * @method InternetCafeType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method InternetCafeType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method InternetCafeType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method InternetCafeType setReview(Property\ReviewProperty $review)
 * @method InternetCafeType setSameAs(Property\SameAsProperty $sameAs)
 * @method InternetCafeType setSlogan(Property\SloganProperty $slogan)
 * @method InternetCafeType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method InternetCafeType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method InternetCafeType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method InternetCafeType setTelephone(Property\TelephoneProperty $telephone)
 * @method InternetCafeType setUrl(Property\UrlProperty $url)
 */
class InternetCafeType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/InternetCafe';
	}
}