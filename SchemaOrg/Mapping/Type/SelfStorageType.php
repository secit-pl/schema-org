<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A self-storage facility.
 * 
 * @method SelfStorageType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method SelfStorageType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SelfStorageType setAddress(Property\AddressProperty $address)
 * @method SelfStorageType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method SelfStorageType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SelfStorageType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method SelfStorageType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method SelfStorageType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method SelfStorageType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method SelfStorageType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method SelfStorageType setDescription(Property\DescriptionProperty $description)
 * @method SelfStorageType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SelfStorageType setEvent(Property\EventProperty $event)
 * @method SelfStorageType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method SelfStorageType setGeo(Property\GeoProperty $geo)
 * @method SelfStorageType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method SelfStorageType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method SelfStorageType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method SelfStorageType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method SelfStorageType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method SelfStorageType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method SelfStorageType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method SelfStorageType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method SelfStorageType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method SelfStorageType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method SelfStorageType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method SelfStorageType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method SelfStorageType setHasMap(Property\HasMapProperty $hasMap)
 * @method SelfStorageType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SelfStorageType setImage(Property\ImageProperty $image)
 * @method SelfStorageType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method SelfStorageType setIsicV4(Property\IsicV4Property $isicV4)
 * @method SelfStorageType setKeywords(Property\KeywordsProperty $keywords)
 * @method SelfStorageType setLatitude(Property\LatitudeProperty $latitude)
 * @method SelfStorageType setLogo(Property\LogoProperty $logo)
 * @method SelfStorageType setLongitude(Property\LongitudeProperty $longitude)
 * @method SelfStorageType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SelfStorageType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method SelfStorageType setName(Property\NameProperty $name)
 * @method SelfStorageType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method SelfStorageType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method SelfStorageType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method SelfStorageType setPhoto(Property\PhotoProperty $photo)
 * @method SelfStorageType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SelfStorageType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method SelfStorageType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method SelfStorageType setReview(Property\ReviewProperty $review)
 * @method SelfStorageType setSameAs(Property\SameAsProperty $sameAs)
 * @method SelfStorageType setSlogan(Property\SloganProperty $slogan)
 * @method SelfStorageType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method SelfStorageType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method SelfStorageType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method SelfStorageType setTelephone(Property\TelephoneProperty $telephone)
 * @method SelfStorageType setUrl(Property\UrlProperty $url)
 */
class SelfStorageType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SelfStorage';
	}
}