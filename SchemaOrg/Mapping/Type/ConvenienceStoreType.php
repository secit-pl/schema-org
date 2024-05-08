<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A convenience store.
 * 
 * @method ConvenienceStoreType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method ConvenienceStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ConvenienceStoreType setAddress(Property\AddressProperty $address)
 * @method ConvenienceStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ConvenienceStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ConvenienceStoreType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method ConvenienceStoreType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method ConvenienceStoreType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method ConvenienceStoreType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method ConvenienceStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method ConvenienceStoreType setDescription(Property\DescriptionProperty $description)
 * @method ConvenienceStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ConvenienceStoreType setEvent(Property\EventProperty $event)
 * @method ConvenienceStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method ConvenienceStoreType setGeo(Property\GeoProperty $geo)
 * @method ConvenienceStoreType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method ConvenienceStoreType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method ConvenienceStoreType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method ConvenienceStoreType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method ConvenienceStoreType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method ConvenienceStoreType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method ConvenienceStoreType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method ConvenienceStoreType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method ConvenienceStoreType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method ConvenienceStoreType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method ConvenienceStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method ConvenienceStoreType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method ConvenienceStoreType setHasMap(Property\HasMapProperty $hasMap)
 * @method ConvenienceStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ConvenienceStoreType setImage(Property\ImageProperty $image)
 * @method ConvenienceStoreType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method ConvenienceStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method ConvenienceStoreType setKeywords(Property\KeywordsProperty $keywords)
 * @method ConvenienceStoreType setLatitude(Property\LatitudeProperty $latitude)
 * @method ConvenienceStoreType setLogo(Property\LogoProperty $logo)
 * @method ConvenienceStoreType setLongitude(Property\LongitudeProperty $longitude)
 * @method ConvenienceStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ConvenienceStoreType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method ConvenienceStoreType setName(Property\NameProperty $name)
 * @method ConvenienceStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method ConvenienceStoreType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method ConvenienceStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method ConvenienceStoreType setPhoto(Property\PhotoProperty $photo)
 * @method ConvenienceStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ConvenienceStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method ConvenienceStoreType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method ConvenienceStoreType setReview(Property\ReviewProperty $review)
 * @method ConvenienceStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method ConvenienceStoreType setSlogan(Property\SloganProperty $slogan)
 * @method ConvenienceStoreType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method ConvenienceStoreType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method ConvenienceStoreType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ConvenienceStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method ConvenienceStoreType setUrl(Property\UrlProperty $url)
 */
class ConvenienceStoreType extends StoreType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ConvenienceStore';
	}
}