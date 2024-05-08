<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A recycling center.
 * 
 * @method RecyclingCenterType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method RecyclingCenterType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method RecyclingCenterType setAddress(Property\AddressProperty $address)
 * @method RecyclingCenterType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method RecyclingCenterType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method RecyclingCenterType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method RecyclingCenterType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method RecyclingCenterType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method RecyclingCenterType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method RecyclingCenterType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method RecyclingCenterType setDescription(Property\DescriptionProperty $description)
 * @method RecyclingCenterType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method RecyclingCenterType setEvent(Property\EventProperty $event)
 * @method RecyclingCenterType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method RecyclingCenterType setGeo(Property\GeoProperty $geo)
 * @method RecyclingCenterType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method RecyclingCenterType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method RecyclingCenterType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method RecyclingCenterType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method RecyclingCenterType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method RecyclingCenterType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method RecyclingCenterType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method RecyclingCenterType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method RecyclingCenterType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method RecyclingCenterType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method RecyclingCenterType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method RecyclingCenterType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method RecyclingCenterType setHasMap(Property\HasMapProperty $hasMap)
 * @method RecyclingCenterType setIdentifier(Property\IdentifierProperty $identifier)
 * @method RecyclingCenterType setImage(Property\ImageProperty $image)
 * @method RecyclingCenterType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method RecyclingCenterType setIsicV4(Property\IsicV4Property $isicV4)
 * @method RecyclingCenterType setKeywords(Property\KeywordsProperty $keywords)
 * @method RecyclingCenterType setLatitude(Property\LatitudeProperty $latitude)
 * @method RecyclingCenterType setLogo(Property\LogoProperty $logo)
 * @method RecyclingCenterType setLongitude(Property\LongitudeProperty $longitude)
 * @method RecyclingCenterType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method RecyclingCenterType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method RecyclingCenterType setName(Property\NameProperty $name)
 * @method RecyclingCenterType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method RecyclingCenterType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method RecyclingCenterType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method RecyclingCenterType setPhoto(Property\PhotoProperty $photo)
 * @method RecyclingCenterType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method RecyclingCenterType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method RecyclingCenterType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method RecyclingCenterType setReview(Property\ReviewProperty $review)
 * @method RecyclingCenterType setSameAs(Property\SameAsProperty $sameAs)
 * @method RecyclingCenterType setSlogan(Property\SloganProperty $slogan)
 * @method RecyclingCenterType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method RecyclingCenterType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method RecyclingCenterType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method RecyclingCenterType setTelephone(Property\TelephoneProperty $telephone)
 * @method RecyclingCenterType setUrl(Property\UrlProperty $url)
 */
class RecyclingCenterType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RecyclingCenter';
	}
}