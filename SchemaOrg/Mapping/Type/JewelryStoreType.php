<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A jewelry store.
 * 
 * @method JewelryStoreType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method JewelryStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method JewelryStoreType setAddress(Property\AddressProperty $address)
 * @method JewelryStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method JewelryStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method JewelryStoreType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method JewelryStoreType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method JewelryStoreType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method JewelryStoreType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method JewelryStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method JewelryStoreType setDescription(Property\DescriptionProperty $description)
 * @method JewelryStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method JewelryStoreType setEvent(Property\EventProperty $event)
 * @method JewelryStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method JewelryStoreType setGeo(Property\GeoProperty $geo)
 * @method JewelryStoreType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method JewelryStoreType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method JewelryStoreType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method JewelryStoreType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method JewelryStoreType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method JewelryStoreType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method JewelryStoreType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method JewelryStoreType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method JewelryStoreType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method JewelryStoreType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method JewelryStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method JewelryStoreType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method JewelryStoreType setHasMap(Property\HasMapProperty $hasMap)
 * @method JewelryStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method JewelryStoreType setImage(Property\ImageProperty $image)
 * @method JewelryStoreType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method JewelryStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method JewelryStoreType setKeywords(Property\KeywordsProperty $keywords)
 * @method JewelryStoreType setLatitude(Property\LatitudeProperty $latitude)
 * @method JewelryStoreType setLogo(Property\LogoProperty $logo)
 * @method JewelryStoreType setLongitude(Property\LongitudeProperty $longitude)
 * @method JewelryStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method JewelryStoreType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method JewelryStoreType setName(Property\NameProperty $name)
 * @method JewelryStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method JewelryStoreType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method JewelryStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method JewelryStoreType setPhoto(Property\PhotoProperty $photo)
 * @method JewelryStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method JewelryStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method JewelryStoreType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method JewelryStoreType setReview(Property\ReviewProperty $review)
 * @method JewelryStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method JewelryStoreType setSlogan(Property\SloganProperty $slogan)
 * @method JewelryStoreType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method JewelryStoreType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method JewelryStoreType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method JewelryStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method JewelryStoreType setUrl(Property\UrlProperty $url)
 */
class JewelryStoreType extends StoreType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/JewelryStore';
	}
}