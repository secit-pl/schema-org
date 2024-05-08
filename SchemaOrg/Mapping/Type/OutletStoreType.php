<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An outlet store.
 * 
 * @method OutletStoreType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method OutletStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method OutletStoreType setAddress(Property\AddressProperty $address)
 * @method OutletStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method OutletStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method OutletStoreType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method OutletStoreType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method OutletStoreType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method OutletStoreType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method OutletStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method OutletStoreType setDescription(Property\DescriptionProperty $description)
 * @method OutletStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method OutletStoreType setEvent(Property\EventProperty $event)
 * @method OutletStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method OutletStoreType setGeo(Property\GeoProperty $geo)
 * @method OutletStoreType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method OutletStoreType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method OutletStoreType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method OutletStoreType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method OutletStoreType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method OutletStoreType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method OutletStoreType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method OutletStoreType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method OutletStoreType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method OutletStoreType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method OutletStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method OutletStoreType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method OutletStoreType setHasMap(Property\HasMapProperty $hasMap)
 * @method OutletStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method OutletStoreType setImage(Property\ImageProperty $image)
 * @method OutletStoreType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method OutletStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method OutletStoreType setKeywords(Property\KeywordsProperty $keywords)
 * @method OutletStoreType setLatitude(Property\LatitudeProperty $latitude)
 * @method OutletStoreType setLogo(Property\LogoProperty $logo)
 * @method OutletStoreType setLongitude(Property\LongitudeProperty $longitude)
 * @method OutletStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method OutletStoreType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method OutletStoreType setName(Property\NameProperty $name)
 * @method OutletStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method OutletStoreType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method OutletStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method OutletStoreType setPhoto(Property\PhotoProperty $photo)
 * @method OutletStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method OutletStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method OutletStoreType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method OutletStoreType setReview(Property\ReviewProperty $review)
 * @method OutletStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method OutletStoreType setSlogan(Property\SloganProperty $slogan)
 * @method OutletStoreType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method OutletStoreType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method OutletStoreType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method OutletStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method OutletStoreType setUrl(Property\UrlProperty $url)
 */
class OutletStoreType extends StoreType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OutletStore';
	}
}