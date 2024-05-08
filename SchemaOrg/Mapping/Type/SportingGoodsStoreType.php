<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A sporting goods store.
 * 
 * @method SportingGoodsStoreType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method SportingGoodsStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SportingGoodsStoreType setAddress(Property\AddressProperty $address)
 * @method SportingGoodsStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method SportingGoodsStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SportingGoodsStoreType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method SportingGoodsStoreType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method SportingGoodsStoreType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method SportingGoodsStoreType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method SportingGoodsStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method SportingGoodsStoreType setDescription(Property\DescriptionProperty $description)
 * @method SportingGoodsStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SportingGoodsStoreType setEvent(Property\EventProperty $event)
 * @method SportingGoodsStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method SportingGoodsStoreType setGeo(Property\GeoProperty $geo)
 * @method SportingGoodsStoreType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method SportingGoodsStoreType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method SportingGoodsStoreType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method SportingGoodsStoreType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method SportingGoodsStoreType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method SportingGoodsStoreType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method SportingGoodsStoreType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method SportingGoodsStoreType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method SportingGoodsStoreType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method SportingGoodsStoreType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method SportingGoodsStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method SportingGoodsStoreType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method SportingGoodsStoreType setHasMap(Property\HasMapProperty $hasMap)
 * @method SportingGoodsStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SportingGoodsStoreType setImage(Property\ImageProperty $image)
 * @method SportingGoodsStoreType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method SportingGoodsStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method SportingGoodsStoreType setKeywords(Property\KeywordsProperty $keywords)
 * @method SportingGoodsStoreType setLatitude(Property\LatitudeProperty $latitude)
 * @method SportingGoodsStoreType setLogo(Property\LogoProperty $logo)
 * @method SportingGoodsStoreType setLongitude(Property\LongitudeProperty $longitude)
 * @method SportingGoodsStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SportingGoodsStoreType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method SportingGoodsStoreType setName(Property\NameProperty $name)
 * @method SportingGoodsStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method SportingGoodsStoreType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method SportingGoodsStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method SportingGoodsStoreType setPhoto(Property\PhotoProperty $photo)
 * @method SportingGoodsStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SportingGoodsStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method SportingGoodsStoreType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method SportingGoodsStoreType setReview(Property\ReviewProperty $review)
 * @method SportingGoodsStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method SportingGoodsStoreType setSlogan(Property\SloganProperty $slogan)
 * @method SportingGoodsStoreType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method SportingGoodsStoreType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method SportingGoodsStoreType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method SportingGoodsStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method SportingGoodsStoreType setUrl(Property\UrlProperty $url)
 */
class SportingGoodsStoreType extends StoreType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SportingGoodsStore';
	}
}