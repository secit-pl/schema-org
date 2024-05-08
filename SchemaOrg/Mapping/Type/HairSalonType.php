<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A hair salon.
 * 
 * @method HairSalonType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method HairSalonType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method HairSalonType setAddress(Property\AddressProperty $address)
 * @method HairSalonType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method HairSalonType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method HairSalonType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method HairSalonType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method HairSalonType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method HairSalonType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method HairSalonType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method HairSalonType setDescription(Property\DescriptionProperty $description)
 * @method HairSalonType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method HairSalonType setEvent(Property\EventProperty $event)
 * @method HairSalonType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method HairSalonType setGeo(Property\GeoProperty $geo)
 * @method HairSalonType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method HairSalonType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method HairSalonType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method HairSalonType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method HairSalonType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method HairSalonType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method HairSalonType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method HairSalonType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method HairSalonType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method HairSalonType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method HairSalonType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method HairSalonType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method HairSalonType setHasMap(Property\HasMapProperty $hasMap)
 * @method HairSalonType setIdentifier(Property\IdentifierProperty $identifier)
 * @method HairSalonType setImage(Property\ImageProperty $image)
 * @method HairSalonType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method HairSalonType setIsicV4(Property\IsicV4Property $isicV4)
 * @method HairSalonType setKeywords(Property\KeywordsProperty $keywords)
 * @method HairSalonType setLatitude(Property\LatitudeProperty $latitude)
 * @method HairSalonType setLogo(Property\LogoProperty $logo)
 * @method HairSalonType setLongitude(Property\LongitudeProperty $longitude)
 * @method HairSalonType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method HairSalonType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method HairSalonType setName(Property\NameProperty $name)
 * @method HairSalonType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method HairSalonType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method HairSalonType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method HairSalonType setPhoto(Property\PhotoProperty $photo)
 * @method HairSalonType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method HairSalonType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method HairSalonType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method HairSalonType setReview(Property\ReviewProperty $review)
 * @method HairSalonType setSameAs(Property\SameAsProperty $sameAs)
 * @method HairSalonType setSlogan(Property\SloganProperty $slogan)
 * @method HairSalonType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method HairSalonType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method HairSalonType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method HairSalonType setTelephone(Property\TelephoneProperty $telephone)
 * @method HairSalonType setUrl(Property\UrlProperty $url)
 */
class HairSalonType extends HealthAndBeautyBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HairSalon';
	}
}