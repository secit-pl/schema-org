<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A retail good store.
 * 
 * @method StoreType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method StoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method StoreType setAddress(Property\AddressProperty $address)
 * @method StoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method StoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method StoreType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method StoreType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method StoreType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method StoreType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method StoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method StoreType setDescription(Property\DescriptionProperty $description)
 * @method StoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method StoreType setEvent(Property\EventProperty $event)
 * @method StoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method StoreType setGeo(Property\GeoProperty $geo)
 * @method StoreType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method StoreType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method StoreType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method StoreType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method StoreType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method StoreType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method StoreType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method StoreType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method StoreType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method StoreType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method StoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method StoreType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method StoreType setHasMap(Property\HasMapProperty $hasMap)
 * @method StoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method StoreType setImage(Property\ImageProperty $image)
 * @method StoreType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method StoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method StoreType setKeywords(Property\KeywordsProperty $keywords)
 * @method StoreType setLatitude(Property\LatitudeProperty $latitude)
 * @method StoreType setLogo(Property\LogoProperty $logo)
 * @method StoreType setLongitude(Property\LongitudeProperty $longitude)
 * @method StoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method StoreType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method StoreType setName(Property\NameProperty $name)
 * @method StoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method StoreType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method StoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method StoreType setPhoto(Property\PhotoProperty $photo)
 * @method StoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method StoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method StoreType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method StoreType setReview(Property\ReviewProperty $review)
 * @method StoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method StoreType setSlogan(Property\SloganProperty $slogan)
 * @method StoreType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method StoreType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method StoreType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method StoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method StoreType setUrl(Property\UrlProperty $url)
 */
class StoreType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Store';
	}
}