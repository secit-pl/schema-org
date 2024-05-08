<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A gas station.
 * 
 * @method GasStationType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method GasStationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method GasStationType setAddress(Property\AddressProperty $address)
 * @method GasStationType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method GasStationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method GasStationType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method GasStationType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method GasStationType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method GasStationType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method GasStationType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method GasStationType setDescription(Property\DescriptionProperty $description)
 * @method GasStationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method GasStationType setEvent(Property\EventProperty $event)
 * @method GasStationType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method GasStationType setGeo(Property\GeoProperty $geo)
 * @method GasStationType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method GasStationType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method GasStationType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method GasStationType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method GasStationType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method GasStationType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method GasStationType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method GasStationType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method GasStationType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method GasStationType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method GasStationType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method GasStationType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method GasStationType setHasMap(Property\HasMapProperty $hasMap)
 * @method GasStationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method GasStationType setImage(Property\ImageProperty $image)
 * @method GasStationType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method GasStationType setIsicV4(Property\IsicV4Property $isicV4)
 * @method GasStationType setKeywords(Property\KeywordsProperty $keywords)
 * @method GasStationType setLatitude(Property\LatitudeProperty $latitude)
 * @method GasStationType setLogo(Property\LogoProperty $logo)
 * @method GasStationType setLongitude(Property\LongitudeProperty $longitude)
 * @method GasStationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method GasStationType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method GasStationType setName(Property\NameProperty $name)
 * @method GasStationType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method GasStationType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method GasStationType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method GasStationType setPhoto(Property\PhotoProperty $photo)
 * @method GasStationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method GasStationType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method GasStationType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method GasStationType setReview(Property\ReviewProperty $review)
 * @method GasStationType setSameAs(Property\SameAsProperty $sameAs)
 * @method GasStationType setSlogan(Property\SloganProperty $slogan)
 * @method GasStationType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method GasStationType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method GasStationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method GasStationType setTelephone(Property\TelephoneProperty $telephone)
 * @method GasStationType setUrl(Property\UrlProperty $url)
 */
class GasStationType extends AutomotiveBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/GasStation';
	}
}