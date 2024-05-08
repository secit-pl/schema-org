<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A wholesale store.
 * 
 * @method WholesaleStoreType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method WholesaleStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method WholesaleStoreType setAddress(Property\AddressProperty $address)
 * @method WholesaleStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method WholesaleStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method WholesaleStoreType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method WholesaleStoreType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method WholesaleStoreType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method WholesaleStoreType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method WholesaleStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method WholesaleStoreType setDescription(Property\DescriptionProperty $description)
 * @method WholesaleStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method WholesaleStoreType setEvent(Property\EventProperty $event)
 * @method WholesaleStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method WholesaleStoreType setGeo(Property\GeoProperty $geo)
 * @method WholesaleStoreType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method WholesaleStoreType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method WholesaleStoreType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method WholesaleStoreType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method WholesaleStoreType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method WholesaleStoreType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method WholesaleStoreType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method WholesaleStoreType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method WholesaleStoreType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method WholesaleStoreType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method WholesaleStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method WholesaleStoreType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method WholesaleStoreType setHasMap(Property\HasMapProperty $hasMap)
 * @method WholesaleStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method WholesaleStoreType setImage(Property\ImageProperty $image)
 * @method WholesaleStoreType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method WholesaleStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method WholesaleStoreType setKeywords(Property\KeywordsProperty $keywords)
 * @method WholesaleStoreType setLatitude(Property\LatitudeProperty $latitude)
 * @method WholesaleStoreType setLogo(Property\LogoProperty $logo)
 * @method WholesaleStoreType setLongitude(Property\LongitudeProperty $longitude)
 * @method WholesaleStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method WholesaleStoreType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method WholesaleStoreType setName(Property\NameProperty $name)
 * @method WholesaleStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method WholesaleStoreType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method WholesaleStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method WholesaleStoreType setPhoto(Property\PhotoProperty $photo)
 * @method WholesaleStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method WholesaleStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method WholesaleStoreType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method WholesaleStoreType setReview(Property\ReviewProperty $review)
 * @method WholesaleStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method WholesaleStoreType setSlogan(Property\SloganProperty $slogan)
 * @method WholesaleStoreType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method WholesaleStoreType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method WholesaleStoreType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method WholesaleStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method WholesaleStoreType setUrl(Property\UrlProperty $url)
 */
class WholesaleStoreType extends StoreType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/WholesaleStore';
	}
}