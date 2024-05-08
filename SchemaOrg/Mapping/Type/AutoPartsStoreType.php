<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An auto parts store.
 * 
 * @method AutoPartsStoreType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method AutoPartsStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AutoPartsStoreType setAddress(Property\AddressProperty $address)
 * @method AutoPartsStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method AutoPartsStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AutoPartsStoreType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method AutoPartsStoreType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method AutoPartsStoreType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method AutoPartsStoreType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method AutoPartsStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method AutoPartsStoreType setDescription(Property\DescriptionProperty $description)
 * @method AutoPartsStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AutoPartsStoreType setEvent(Property\EventProperty $event)
 * @method AutoPartsStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method AutoPartsStoreType setGeo(Property\GeoProperty $geo)
 * @method AutoPartsStoreType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method AutoPartsStoreType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method AutoPartsStoreType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method AutoPartsStoreType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method AutoPartsStoreType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method AutoPartsStoreType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method AutoPartsStoreType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method AutoPartsStoreType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method AutoPartsStoreType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method AutoPartsStoreType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method AutoPartsStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method AutoPartsStoreType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method AutoPartsStoreType setHasMap(Property\HasMapProperty $hasMap)
 * @method AutoPartsStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AutoPartsStoreType setImage(Property\ImageProperty $image)
 * @method AutoPartsStoreType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method AutoPartsStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method AutoPartsStoreType setKeywords(Property\KeywordsProperty $keywords)
 * @method AutoPartsStoreType setLatitude(Property\LatitudeProperty $latitude)
 * @method AutoPartsStoreType setLogo(Property\LogoProperty $logo)
 * @method AutoPartsStoreType setLongitude(Property\LongitudeProperty $longitude)
 * @method AutoPartsStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AutoPartsStoreType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method AutoPartsStoreType setName(Property\NameProperty $name)
 * @method AutoPartsStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method AutoPartsStoreType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method AutoPartsStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method AutoPartsStoreType setPhoto(Property\PhotoProperty $photo)
 * @method AutoPartsStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AutoPartsStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method AutoPartsStoreType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method AutoPartsStoreType setReview(Property\ReviewProperty $review)
 * @method AutoPartsStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method AutoPartsStoreType setSlogan(Property\SloganProperty $slogan)
 * @method AutoPartsStoreType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method AutoPartsStoreType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method AutoPartsStoreType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method AutoPartsStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method AutoPartsStoreType setUrl(Property\UrlProperty $url)
 */
class AutoPartsStoreType extends StoreType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AutoPartsStore';
	}
}