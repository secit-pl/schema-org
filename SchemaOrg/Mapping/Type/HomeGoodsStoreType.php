<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A home goods store.
 * 
 * @method HomeGoodsStoreType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method HomeGoodsStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method HomeGoodsStoreType setAddress(Property\AddressProperty $address)
 * @method HomeGoodsStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method HomeGoodsStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method HomeGoodsStoreType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method HomeGoodsStoreType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method HomeGoodsStoreType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method HomeGoodsStoreType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method HomeGoodsStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method HomeGoodsStoreType setDescription(Property\DescriptionProperty $description)
 * @method HomeGoodsStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method HomeGoodsStoreType setEvent(Property\EventProperty $event)
 * @method HomeGoodsStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method HomeGoodsStoreType setGeo(Property\GeoProperty $geo)
 * @method HomeGoodsStoreType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method HomeGoodsStoreType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method HomeGoodsStoreType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method HomeGoodsStoreType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method HomeGoodsStoreType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method HomeGoodsStoreType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method HomeGoodsStoreType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method HomeGoodsStoreType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method HomeGoodsStoreType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method HomeGoodsStoreType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method HomeGoodsStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method HomeGoodsStoreType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method HomeGoodsStoreType setHasMap(Property\HasMapProperty $hasMap)
 * @method HomeGoodsStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method HomeGoodsStoreType setImage(Property\ImageProperty $image)
 * @method HomeGoodsStoreType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method HomeGoodsStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method HomeGoodsStoreType setKeywords(Property\KeywordsProperty $keywords)
 * @method HomeGoodsStoreType setLatitude(Property\LatitudeProperty $latitude)
 * @method HomeGoodsStoreType setLogo(Property\LogoProperty $logo)
 * @method HomeGoodsStoreType setLongitude(Property\LongitudeProperty $longitude)
 * @method HomeGoodsStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method HomeGoodsStoreType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method HomeGoodsStoreType setName(Property\NameProperty $name)
 * @method HomeGoodsStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method HomeGoodsStoreType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method HomeGoodsStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method HomeGoodsStoreType setPhoto(Property\PhotoProperty $photo)
 * @method HomeGoodsStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method HomeGoodsStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method HomeGoodsStoreType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method HomeGoodsStoreType setReview(Property\ReviewProperty $review)
 * @method HomeGoodsStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method HomeGoodsStoreType setSlogan(Property\SloganProperty $slogan)
 * @method HomeGoodsStoreType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method HomeGoodsStoreType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method HomeGoodsStoreType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method HomeGoodsStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method HomeGoodsStoreType setUrl(Property\UrlProperty $url)
 */
class HomeGoodsStoreType extends StoreType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HomeGoodsStore';
	}
}