<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A grocery store.
 * 
 * @method GroceryStoreType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method GroceryStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method GroceryStoreType setAddress(Property\AddressProperty $address)
 * @method GroceryStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method GroceryStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method GroceryStoreType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method GroceryStoreType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method GroceryStoreType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method GroceryStoreType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method GroceryStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method GroceryStoreType setDescription(Property\DescriptionProperty $description)
 * @method GroceryStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method GroceryStoreType setEvent(Property\EventProperty $event)
 * @method GroceryStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method GroceryStoreType setGeo(Property\GeoProperty $geo)
 * @method GroceryStoreType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method GroceryStoreType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method GroceryStoreType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method GroceryStoreType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method GroceryStoreType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method GroceryStoreType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method GroceryStoreType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method GroceryStoreType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method GroceryStoreType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method GroceryStoreType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method GroceryStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method GroceryStoreType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method GroceryStoreType setHasMap(Property\HasMapProperty $hasMap)
 * @method GroceryStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method GroceryStoreType setImage(Property\ImageProperty $image)
 * @method GroceryStoreType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method GroceryStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method GroceryStoreType setKeywords(Property\KeywordsProperty $keywords)
 * @method GroceryStoreType setLatitude(Property\LatitudeProperty $latitude)
 * @method GroceryStoreType setLogo(Property\LogoProperty $logo)
 * @method GroceryStoreType setLongitude(Property\LongitudeProperty $longitude)
 * @method GroceryStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method GroceryStoreType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method GroceryStoreType setName(Property\NameProperty $name)
 * @method GroceryStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method GroceryStoreType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method GroceryStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method GroceryStoreType setPhoto(Property\PhotoProperty $photo)
 * @method GroceryStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method GroceryStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method GroceryStoreType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method GroceryStoreType setReview(Property\ReviewProperty $review)
 * @method GroceryStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method GroceryStoreType setSlogan(Property\SloganProperty $slogan)
 * @method GroceryStoreType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method GroceryStoreType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method GroceryStoreType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method GroceryStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method GroceryStoreType setUrl(Property\UrlProperty $url)
 */
class GroceryStoreType extends StoreType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/GroceryStore';
	}
}