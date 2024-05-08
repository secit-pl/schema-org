<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A music store.
 * 
 * @method MusicStoreType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method MusicStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MusicStoreType setAddress(Property\AddressProperty $address)
 * @method MusicStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method MusicStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MusicStoreType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method MusicStoreType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method MusicStoreType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method MusicStoreType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method MusicStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method MusicStoreType setDescription(Property\DescriptionProperty $description)
 * @method MusicStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MusicStoreType setEvent(Property\EventProperty $event)
 * @method MusicStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method MusicStoreType setGeo(Property\GeoProperty $geo)
 * @method MusicStoreType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method MusicStoreType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method MusicStoreType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method MusicStoreType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method MusicStoreType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method MusicStoreType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method MusicStoreType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method MusicStoreType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method MusicStoreType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method MusicStoreType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method MusicStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method MusicStoreType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method MusicStoreType setHasMap(Property\HasMapProperty $hasMap)
 * @method MusicStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MusicStoreType setImage(Property\ImageProperty $image)
 * @method MusicStoreType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method MusicStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method MusicStoreType setKeywords(Property\KeywordsProperty $keywords)
 * @method MusicStoreType setLatitude(Property\LatitudeProperty $latitude)
 * @method MusicStoreType setLogo(Property\LogoProperty $logo)
 * @method MusicStoreType setLongitude(Property\LongitudeProperty $longitude)
 * @method MusicStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MusicStoreType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method MusicStoreType setName(Property\NameProperty $name)
 * @method MusicStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method MusicStoreType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method MusicStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method MusicStoreType setPhoto(Property\PhotoProperty $photo)
 * @method MusicStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MusicStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method MusicStoreType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method MusicStoreType setReview(Property\ReviewProperty $review)
 * @method MusicStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method MusicStoreType setSlogan(Property\SloganProperty $slogan)
 * @method MusicStoreType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method MusicStoreType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method MusicStoreType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MusicStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method MusicStoreType setUrl(Property\UrlProperty $url)
 */
class MusicStoreType extends StoreType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MusicStore';
	}
}