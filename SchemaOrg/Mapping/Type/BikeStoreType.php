<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A bike store.
 * 
 * @method BikeStoreType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method BikeStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BikeStoreType setAddress(Property\AddressProperty $address)
 * @method BikeStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method BikeStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BikeStoreType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method BikeStoreType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method BikeStoreType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method BikeStoreType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method BikeStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method BikeStoreType setDescription(Property\DescriptionProperty $description)
 * @method BikeStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BikeStoreType setEvent(Property\EventProperty $event)
 * @method BikeStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method BikeStoreType setGeo(Property\GeoProperty $geo)
 * @method BikeStoreType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method BikeStoreType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method BikeStoreType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method BikeStoreType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method BikeStoreType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method BikeStoreType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method BikeStoreType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method BikeStoreType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method BikeStoreType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method BikeStoreType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method BikeStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method BikeStoreType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method BikeStoreType setHasMap(Property\HasMapProperty $hasMap)
 * @method BikeStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BikeStoreType setImage(Property\ImageProperty $image)
 * @method BikeStoreType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method BikeStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method BikeStoreType setKeywords(Property\KeywordsProperty $keywords)
 * @method BikeStoreType setLatitude(Property\LatitudeProperty $latitude)
 * @method BikeStoreType setLogo(Property\LogoProperty $logo)
 * @method BikeStoreType setLongitude(Property\LongitudeProperty $longitude)
 * @method BikeStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BikeStoreType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method BikeStoreType setName(Property\NameProperty $name)
 * @method BikeStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method BikeStoreType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method BikeStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method BikeStoreType setPhoto(Property\PhotoProperty $photo)
 * @method BikeStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BikeStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method BikeStoreType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method BikeStoreType setReview(Property\ReviewProperty $review)
 * @method BikeStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method BikeStoreType setSlogan(Property\SloganProperty $slogan)
 * @method BikeStoreType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method BikeStoreType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method BikeStoreType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method BikeStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method BikeStoreType setUrl(Property\UrlProperty $url)
 */
class BikeStoreType extends StoreType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BikeStore';
	}
}