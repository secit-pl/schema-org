<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A locksmith.
 * 
 * @method LocksmithType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method LocksmithType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method LocksmithType setAddress(Property\AddressProperty $address)
 * @method LocksmithType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method LocksmithType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method LocksmithType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method LocksmithType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method LocksmithType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method LocksmithType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method LocksmithType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method LocksmithType setDescription(Property\DescriptionProperty $description)
 * @method LocksmithType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method LocksmithType setEvent(Property\EventProperty $event)
 * @method LocksmithType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method LocksmithType setGeo(Property\GeoProperty $geo)
 * @method LocksmithType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method LocksmithType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method LocksmithType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method LocksmithType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method LocksmithType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method LocksmithType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method LocksmithType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method LocksmithType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method LocksmithType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method LocksmithType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method LocksmithType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method LocksmithType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method LocksmithType setHasMap(Property\HasMapProperty $hasMap)
 * @method LocksmithType setIdentifier(Property\IdentifierProperty $identifier)
 * @method LocksmithType setImage(Property\ImageProperty $image)
 * @method LocksmithType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method LocksmithType setIsicV4(Property\IsicV4Property $isicV4)
 * @method LocksmithType setKeywords(Property\KeywordsProperty $keywords)
 * @method LocksmithType setLatitude(Property\LatitudeProperty $latitude)
 * @method LocksmithType setLogo(Property\LogoProperty $logo)
 * @method LocksmithType setLongitude(Property\LongitudeProperty $longitude)
 * @method LocksmithType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method LocksmithType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method LocksmithType setName(Property\NameProperty $name)
 * @method LocksmithType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method LocksmithType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method LocksmithType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method LocksmithType setPhoto(Property\PhotoProperty $photo)
 * @method LocksmithType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method LocksmithType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method LocksmithType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method LocksmithType setReview(Property\ReviewProperty $review)
 * @method LocksmithType setSameAs(Property\SameAsProperty $sameAs)
 * @method LocksmithType setSlogan(Property\SloganProperty $slogan)
 * @method LocksmithType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method LocksmithType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method LocksmithType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method LocksmithType setTelephone(Property\TelephoneProperty $telephone)
 * @method LocksmithType setUrl(Property\UrlProperty $url)
 */
class LocksmithType extends HomeAndConstructionBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Locksmith';
	}
}