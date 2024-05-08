<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A casino.
 * 
 * @method CasinoType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method CasinoType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CasinoType setAddress(Property\AddressProperty $address)
 * @method CasinoType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method CasinoType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CasinoType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method CasinoType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method CasinoType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method CasinoType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method CasinoType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method CasinoType setDescription(Property\DescriptionProperty $description)
 * @method CasinoType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CasinoType setEvent(Property\EventProperty $event)
 * @method CasinoType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method CasinoType setGeo(Property\GeoProperty $geo)
 * @method CasinoType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method CasinoType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method CasinoType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method CasinoType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method CasinoType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method CasinoType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method CasinoType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method CasinoType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method CasinoType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method CasinoType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method CasinoType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method CasinoType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method CasinoType setHasMap(Property\HasMapProperty $hasMap)
 * @method CasinoType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CasinoType setImage(Property\ImageProperty $image)
 * @method CasinoType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method CasinoType setIsicV4(Property\IsicV4Property $isicV4)
 * @method CasinoType setKeywords(Property\KeywordsProperty $keywords)
 * @method CasinoType setLatitude(Property\LatitudeProperty $latitude)
 * @method CasinoType setLogo(Property\LogoProperty $logo)
 * @method CasinoType setLongitude(Property\LongitudeProperty $longitude)
 * @method CasinoType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CasinoType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method CasinoType setName(Property\NameProperty $name)
 * @method CasinoType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method CasinoType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method CasinoType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method CasinoType setPhoto(Property\PhotoProperty $photo)
 * @method CasinoType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CasinoType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method CasinoType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method CasinoType setReview(Property\ReviewProperty $review)
 * @method CasinoType setSameAs(Property\SameAsProperty $sameAs)
 * @method CasinoType setSlogan(Property\SloganProperty $slogan)
 * @method CasinoType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method CasinoType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method CasinoType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method CasinoType setTelephone(Property\TelephoneProperty $telephone)
 * @method CasinoType setUrl(Property\UrlProperty $url)
 */
class CasinoType extends EntertainmentBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Casino';
	}
}