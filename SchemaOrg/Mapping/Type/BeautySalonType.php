<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Beauty salon.
 * 
 * @method BeautySalonType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method BeautySalonType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BeautySalonType setAddress(Property\AddressProperty $address)
 * @method BeautySalonType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method BeautySalonType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BeautySalonType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method BeautySalonType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method BeautySalonType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method BeautySalonType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method BeautySalonType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method BeautySalonType setDescription(Property\DescriptionProperty $description)
 * @method BeautySalonType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BeautySalonType setEvent(Property\EventProperty $event)
 * @method BeautySalonType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method BeautySalonType setGeo(Property\GeoProperty $geo)
 * @method BeautySalonType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method BeautySalonType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method BeautySalonType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method BeautySalonType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method BeautySalonType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method BeautySalonType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method BeautySalonType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method BeautySalonType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method BeautySalonType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method BeautySalonType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method BeautySalonType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method BeautySalonType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method BeautySalonType setHasMap(Property\HasMapProperty $hasMap)
 * @method BeautySalonType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BeautySalonType setImage(Property\ImageProperty $image)
 * @method BeautySalonType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method BeautySalonType setIsicV4(Property\IsicV4Property $isicV4)
 * @method BeautySalonType setKeywords(Property\KeywordsProperty $keywords)
 * @method BeautySalonType setLatitude(Property\LatitudeProperty $latitude)
 * @method BeautySalonType setLogo(Property\LogoProperty $logo)
 * @method BeautySalonType setLongitude(Property\LongitudeProperty $longitude)
 * @method BeautySalonType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BeautySalonType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method BeautySalonType setName(Property\NameProperty $name)
 * @method BeautySalonType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method BeautySalonType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method BeautySalonType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method BeautySalonType setPhoto(Property\PhotoProperty $photo)
 * @method BeautySalonType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BeautySalonType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method BeautySalonType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method BeautySalonType setReview(Property\ReviewProperty $review)
 * @method BeautySalonType setSameAs(Property\SameAsProperty $sameAs)
 * @method BeautySalonType setSlogan(Property\SloganProperty $slogan)
 * @method BeautySalonType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method BeautySalonType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method BeautySalonType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method BeautySalonType setTelephone(Property\TelephoneProperty $telephone)
 * @method BeautySalonType setUrl(Property\UrlProperty $url)
 */
class BeautySalonType extends HealthAndBeautyBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BeautySalon';
	}
}