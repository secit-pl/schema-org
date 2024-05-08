<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A tire shop.
 * 
 * @method TireShopType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method TireShopType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method TireShopType setAddress(Property\AddressProperty $address)
 * @method TireShopType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method TireShopType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method TireShopType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method TireShopType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method TireShopType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method TireShopType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method TireShopType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method TireShopType setDescription(Property\DescriptionProperty $description)
 * @method TireShopType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method TireShopType setEvent(Property\EventProperty $event)
 * @method TireShopType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method TireShopType setGeo(Property\GeoProperty $geo)
 * @method TireShopType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method TireShopType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method TireShopType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method TireShopType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method TireShopType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method TireShopType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method TireShopType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method TireShopType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method TireShopType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method TireShopType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method TireShopType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method TireShopType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method TireShopType setHasMap(Property\HasMapProperty $hasMap)
 * @method TireShopType setIdentifier(Property\IdentifierProperty $identifier)
 * @method TireShopType setImage(Property\ImageProperty $image)
 * @method TireShopType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method TireShopType setIsicV4(Property\IsicV4Property $isicV4)
 * @method TireShopType setKeywords(Property\KeywordsProperty $keywords)
 * @method TireShopType setLatitude(Property\LatitudeProperty $latitude)
 * @method TireShopType setLogo(Property\LogoProperty $logo)
 * @method TireShopType setLongitude(Property\LongitudeProperty $longitude)
 * @method TireShopType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method TireShopType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method TireShopType setName(Property\NameProperty $name)
 * @method TireShopType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method TireShopType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method TireShopType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method TireShopType setPhoto(Property\PhotoProperty $photo)
 * @method TireShopType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method TireShopType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method TireShopType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method TireShopType setReview(Property\ReviewProperty $review)
 * @method TireShopType setSameAs(Property\SameAsProperty $sameAs)
 * @method TireShopType setSlogan(Property\SloganProperty $slogan)
 * @method TireShopType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method TireShopType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method TireShopType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method TireShopType setTelephone(Property\TelephoneProperty $telephone)
 * @method TireShopType setUrl(Property\UrlProperty $url)
 */
class TireShopType extends StoreType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TireShop';
	}
}