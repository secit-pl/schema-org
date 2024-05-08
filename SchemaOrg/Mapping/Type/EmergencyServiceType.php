<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An emergency service, such as a fire station or ER.
 * 
 * @method EmergencyServiceType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method EmergencyServiceType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method EmergencyServiceType setAddress(Property\AddressProperty $address)
 * @method EmergencyServiceType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method EmergencyServiceType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method EmergencyServiceType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method EmergencyServiceType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method EmergencyServiceType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method EmergencyServiceType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method EmergencyServiceType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method EmergencyServiceType setDescription(Property\DescriptionProperty $description)
 * @method EmergencyServiceType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method EmergencyServiceType setEvent(Property\EventProperty $event)
 * @method EmergencyServiceType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method EmergencyServiceType setGeo(Property\GeoProperty $geo)
 * @method EmergencyServiceType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method EmergencyServiceType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method EmergencyServiceType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method EmergencyServiceType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method EmergencyServiceType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method EmergencyServiceType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method EmergencyServiceType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method EmergencyServiceType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method EmergencyServiceType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method EmergencyServiceType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method EmergencyServiceType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method EmergencyServiceType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method EmergencyServiceType setHasMap(Property\HasMapProperty $hasMap)
 * @method EmergencyServiceType setIdentifier(Property\IdentifierProperty $identifier)
 * @method EmergencyServiceType setImage(Property\ImageProperty $image)
 * @method EmergencyServiceType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method EmergencyServiceType setIsicV4(Property\IsicV4Property $isicV4)
 * @method EmergencyServiceType setKeywords(Property\KeywordsProperty $keywords)
 * @method EmergencyServiceType setLatitude(Property\LatitudeProperty $latitude)
 * @method EmergencyServiceType setLogo(Property\LogoProperty $logo)
 * @method EmergencyServiceType setLongitude(Property\LongitudeProperty $longitude)
 * @method EmergencyServiceType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method EmergencyServiceType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method EmergencyServiceType setName(Property\NameProperty $name)
 * @method EmergencyServiceType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method EmergencyServiceType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method EmergencyServiceType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method EmergencyServiceType setPhoto(Property\PhotoProperty $photo)
 * @method EmergencyServiceType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method EmergencyServiceType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method EmergencyServiceType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method EmergencyServiceType setReview(Property\ReviewProperty $review)
 * @method EmergencyServiceType setSameAs(Property\SameAsProperty $sameAs)
 * @method EmergencyServiceType setSlogan(Property\SloganProperty $slogan)
 * @method EmergencyServiceType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method EmergencyServiceType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method EmergencyServiceType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method EmergencyServiceType setTelephone(Property\TelephoneProperty $telephone)
 * @method EmergencyServiceType setUrl(Property\UrlProperty $url)
 */
class EmergencyServiceType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EmergencyService';
	}
}