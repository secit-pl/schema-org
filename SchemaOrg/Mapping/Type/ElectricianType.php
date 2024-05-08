<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An electrician.
 * 
 * @method ElectricianType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method ElectricianType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ElectricianType setAddress(Property\AddressProperty $address)
 * @method ElectricianType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ElectricianType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ElectricianType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method ElectricianType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method ElectricianType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method ElectricianType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method ElectricianType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method ElectricianType setDescription(Property\DescriptionProperty $description)
 * @method ElectricianType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ElectricianType setEvent(Property\EventProperty $event)
 * @method ElectricianType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method ElectricianType setGeo(Property\GeoProperty $geo)
 * @method ElectricianType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method ElectricianType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method ElectricianType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method ElectricianType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method ElectricianType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method ElectricianType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method ElectricianType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method ElectricianType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method ElectricianType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method ElectricianType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method ElectricianType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method ElectricianType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method ElectricianType setHasMap(Property\HasMapProperty $hasMap)
 * @method ElectricianType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ElectricianType setImage(Property\ImageProperty $image)
 * @method ElectricianType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method ElectricianType setIsicV4(Property\IsicV4Property $isicV4)
 * @method ElectricianType setKeywords(Property\KeywordsProperty $keywords)
 * @method ElectricianType setLatitude(Property\LatitudeProperty $latitude)
 * @method ElectricianType setLogo(Property\LogoProperty $logo)
 * @method ElectricianType setLongitude(Property\LongitudeProperty $longitude)
 * @method ElectricianType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ElectricianType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method ElectricianType setName(Property\NameProperty $name)
 * @method ElectricianType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method ElectricianType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method ElectricianType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method ElectricianType setPhoto(Property\PhotoProperty $photo)
 * @method ElectricianType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ElectricianType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method ElectricianType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method ElectricianType setReview(Property\ReviewProperty $review)
 * @method ElectricianType setSameAs(Property\SameAsProperty $sameAs)
 * @method ElectricianType setSlogan(Property\SloganProperty $slogan)
 * @method ElectricianType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method ElectricianType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method ElectricianType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ElectricianType setTelephone(Property\TelephoneProperty $telephone)
 * @method ElectricianType setUrl(Property\UrlProperty $url)
 */
class ElectricianType extends HomeAndConstructionBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Electrician';
	}
}