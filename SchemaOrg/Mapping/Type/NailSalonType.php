<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A nail salon.
 * 
 * @method NailSalonType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method NailSalonType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method NailSalonType setAddress(Property\AddressProperty $address)
 * @method NailSalonType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method NailSalonType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method NailSalonType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method NailSalonType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method NailSalonType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method NailSalonType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method NailSalonType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method NailSalonType setDescription(Property\DescriptionProperty $description)
 * @method NailSalonType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method NailSalonType setEvent(Property\EventProperty $event)
 * @method NailSalonType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method NailSalonType setGeo(Property\GeoProperty $geo)
 * @method NailSalonType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method NailSalonType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method NailSalonType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method NailSalonType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method NailSalonType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method NailSalonType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method NailSalonType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method NailSalonType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method NailSalonType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method NailSalonType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method NailSalonType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method NailSalonType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method NailSalonType setHasMap(Property\HasMapProperty $hasMap)
 * @method NailSalonType setIdentifier(Property\IdentifierProperty $identifier)
 * @method NailSalonType setImage(Property\ImageProperty $image)
 * @method NailSalonType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method NailSalonType setIsicV4(Property\IsicV4Property $isicV4)
 * @method NailSalonType setKeywords(Property\KeywordsProperty $keywords)
 * @method NailSalonType setLatitude(Property\LatitudeProperty $latitude)
 * @method NailSalonType setLogo(Property\LogoProperty $logo)
 * @method NailSalonType setLongitude(Property\LongitudeProperty $longitude)
 * @method NailSalonType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method NailSalonType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method NailSalonType setName(Property\NameProperty $name)
 * @method NailSalonType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method NailSalonType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method NailSalonType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method NailSalonType setPhoto(Property\PhotoProperty $photo)
 * @method NailSalonType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method NailSalonType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method NailSalonType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method NailSalonType setReview(Property\ReviewProperty $review)
 * @method NailSalonType setSameAs(Property\SameAsProperty $sameAs)
 * @method NailSalonType setSlogan(Property\SloganProperty $slogan)
 * @method NailSalonType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method NailSalonType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method NailSalonType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method NailSalonType setTelephone(Property\TelephoneProperty $telephone)
 * @method NailSalonType setUrl(Property\UrlProperty $url)
 */
class NailSalonType extends HealthAndBeautyBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/NailSalon';
	}
}