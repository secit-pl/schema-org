<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A tourist information center.
 * 
 * @method TouristInformationCenterType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method TouristInformationCenterType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method TouristInformationCenterType setAddress(Property\AddressProperty $address)
 * @method TouristInformationCenterType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method TouristInformationCenterType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method TouristInformationCenterType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method TouristInformationCenterType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method TouristInformationCenterType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method TouristInformationCenterType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method TouristInformationCenterType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method TouristInformationCenterType setDescription(Property\DescriptionProperty $description)
 * @method TouristInformationCenterType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method TouristInformationCenterType setEvent(Property\EventProperty $event)
 * @method TouristInformationCenterType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method TouristInformationCenterType setGeo(Property\GeoProperty $geo)
 * @method TouristInformationCenterType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method TouristInformationCenterType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method TouristInformationCenterType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method TouristInformationCenterType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method TouristInformationCenterType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method TouristInformationCenterType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method TouristInformationCenterType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method TouristInformationCenterType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method TouristInformationCenterType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method TouristInformationCenterType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method TouristInformationCenterType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method TouristInformationCenterType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method TouristInformationCenterType setHasMap(Property\HasMapProperty $hasMap)
 * @method TouristInformationCenterType setIdentifier(Property\IdentifierProperty $identifier)
 * @method TouristInformationCenterType setImage(Property\ImageProperty $image)
 * @method TouristInformationCenterType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method TouristInformationCenterType setIsicV4(Property\IsicV4Property $isicV4)
 * @method TouristInformationCenterType setKeywords(Property\KeywordsProperty $keywords)
 * @method TouristInformationCenterType setLatitude(Property\LatitudeProperty $latitude)
 * @method TouristInformationCenterType setLogo(Property\LogoProperty $logo)
 * @method TouristInformationCenterType setLongitude(Property\LongitudeProperty $longitude)
 * @method TouristInformationCenterType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method TouristInformationCenterType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method TouristInformationCenterType setName(Property\NameProperty $name)
 * @method TouristInformationCenterType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method TouristInformationCenterType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method TouristInformationCenterType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method TouristInformationCenterType setPhoto(Property\PhotoProperty $photo)
 * @method TouristInformationCenterType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method TouristInformationCenterType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method TouristInformationCenterType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method TouristInformationCenterType setReview(Property\ReviewProperty $review)
 * @method TouristInformationCenterType setSameAs(Property\SameAsProperty $sameAs)
 * @method TouristInformationCenterType setSlogan(Property\SloganProperty $slogan)
 * @method TouristInformationCenterType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method TouristInformationCenterType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method TouristInformationCenterType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method TouristInformationCenterType setTelephone(Property\TelephoneProperty $telephone)
 * @method TouristInformationCenterType setUrl(Property\UrlProperty $url)
 */
class TouristInformationCenterType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TouristInformationCenter';
	}
}