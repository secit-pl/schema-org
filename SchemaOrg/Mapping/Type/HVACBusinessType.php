<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A business that provides Heating, Ventilation and Air Conditioning services.
 * 
 * @method HVACBusinessType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method HVACBusinessType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method HVACBusinessType setAddress(Property\AddressProperty $address)
 * @method HVACBusinessType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method HVACBusinessType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method HVACBusinessType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method HVACBusinessType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method HVACBusinessType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method HVACBusinessType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method HVACBusinessType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method HVACBusinessType setDescription(Property\DescriptionProperty $description)
 * @method HVACBusinessType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method HVACBusinessType setEvent(Property\EventProperty $event)
 * @method HVACBusinessType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method HVACBusinessType setGeo(Property\GeoProperty $geo)
 * @method HVACBusinessType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method HVACBusinessType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method HVACBusinessType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method HVACBusinessType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method HVACBusinessType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method HVACBusinessType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method HVACBusinessType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method HVACBusinessType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method HVACBusinessType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method HVACBusinessType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method HVACBusinessType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method HVACBusinessType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method HVACBusinessType setHasMap(Property\HasMapProperty $hasMap)
 * @method HVACBusinessType setIdentifier(Property\IdentifierProperty $identifier)
 * @method HVACBusinessType setImage(Property\ImageProperty $image)
 * @method HVACBusinessType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method HVACBusinessType setIsicV4(Property\IsicV4Property $isicV4)
 * @method HVACBusinessType setKeywords(Property\KeywordsProperty $keywords)
 * @method HVACBusinessType setLatitude(Property\LatitudeProperty $latitude)
 * @method HVACBusinessType setLogo(Property\LogoProperty $logo)
 * @method HVACBusinessType setLongitude(Property\LongitudeProperty $longitude)
 * @method HVACBusinessType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method HVACBusinessType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method HVACBusinessType setName(Property\NameProperty $name)
 * @method HVACBusinessType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method HVACBusinessType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method HVACBusinessType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method HVACBusinessType setPhoto(Property\PhotoProperty $photo)
 * @method HVACBusinessType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method HVACBusinessType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method HVACBusinessType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method HVACBusinessType setReview(Property\ReviewProperty $review)
 * @method HVACBusinessType setSameAs(Property\SameAsProperty $sameAs)
 * @method HVACBusinessType setSlogan(Property\SloganProperty $slogan)
 * @method HVACBusinessType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method HVACBusinessType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method HVACBusinessType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method HVACBusinessType setTelephone(Property\TelephoneProperty $telephone)
 * @method HVACBusinessType setUrl(Property\UrlProperty $url)
 */
class HVACBusinessType extends HomeAndConstructionBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HVACBusiness';
	}
}