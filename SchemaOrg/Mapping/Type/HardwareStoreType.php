<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A hardware store.
 * 
 * @method HardwareStoreType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method HardwareStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method HardwareStoreType setAddress(Property\AddressProperty $address)
 * @method HardwareStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method HardwareStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method HardwareStoreType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method HardwareStoreType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method HardwareStoreType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method HardwareStoreType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method HardwareStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method HardwareStoreType setDescription(Property\DescriptionProperty $description)
 * @method HardwareStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method HardwareStoreType setEvent(Property\EventProperty $event)
 * @method HardwareStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method HardwareStoreType setGeo(Property\GeoProperty $geo)
 * @method HardwareStoreType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method HardwareStoreType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method HardwareStoreType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method HardwareStoreType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method HardwareStoreType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method HardwareStoreType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method HardwareStoreType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method HardwareStoreType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method HardwareStoreType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method HardwareStoreType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method HardwareStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method HardwareStoreType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method HardwareStoreType setHasMap(Property\HasMapProperty $hasMap)
 * @method HardwareStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method HardwareStoreType setImage(Property\ImageProperty $image)
 * @method HardwareStoreType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method HardwareStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method HardwareStoreType setKeywords(Property\KeywordsProperty $keywords)
 * @method HardwareStoreType setLatitude(Property\LatitudeProperty $latitude)
 * @method HardwareStoreType setLogo(Property\LogoProperty $logo)
 * @method HardwareStoreType setLongitude(Property\LongitudeProperty $longitude)
 * @method HardwareStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method HardwareStoreType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method HardwareStoreType setName(Property\NameProperty $name)
 * @method HardwareStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method HardwareStoreType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method HardwareStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method HardwareStoreType setPhoto(Property\PhotoProperty $photo)
 * @method HardwareStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method HardwareStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method HardwareStoreType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method HardwareStoreType setReview(Property\ReviewProperty $review)
 * @method HardwareStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method HardwareStoreType setSlogan(Property\SloganProperty $slogan)
 * @method HardwareStoreType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method HardwareStoreType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method HardwareStoreType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method HardwareStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method HardwareStoreType setUrl(Property\UrlProperty $url)
 */
class HardwareStoreType extends StoreType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HardwareStore';
	}
}