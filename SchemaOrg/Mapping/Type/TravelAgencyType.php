<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A travel agency.
 * 
 * @method TravelAgencyType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method TravelAgencyType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method TravelAgencyType setAddress(Property\AddressProperty $address)
 * @method TravelAgencyType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method TravelAgencyType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method TravelAgencyType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method TravelAgencyType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method TravelAgencyType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method TravelAgencyType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method TravelAgencyType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method TravelAgencyType setDescription(Property\DescriptionProperty $description)
 * @method TravelAgencyType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method TravelAgencyType setEvent(Property\EventProperty $event)
 * @method TravelAgencyType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method TravelAgencyType setGeo(Property\GeoProperty $geo)
 * @method TravelAgencyType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method TravelAgencyType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method TravelAgencyType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method TravelAgencyType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method TravelAgencyType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method TravelAgencyType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method TravelAgencyType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method TravelAgencyType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method TravelAgencyType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method TravelAgencyType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method TravelAgencyType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method TravelAgencyType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method TravelAgencyType setHasMap(Property\HasMapProperty $hasMap)
 * @method TravelAgencyType setIdentifier(Property\IdentifierProperty $identifier)
 * @method TravelAgencyType setImage(Property\ImageProperty $image)
 * @method TravelAgencyType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method TravelAgencyType setIsicV4(Property\IsicV4Property $isicV4)
 * @method TravelAgencyType setKeywords(Property\KeywordsProperty $keywords)
 * @method TravelAgencyType setLatitude(Property\LatitudeProperty $latitude)
 * @method TravelAgencyType setLogo(Property\LogoProperty $logo)
 * @method TravelAgencyType setLongitude(Property\LongitudeProperty $longitude)
 * @method TravelAgencyType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method TravelAgencyType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method TravelAgencyType setName(Property\NameProperty $name)
 * @method TravelAgencyType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method TravelAgencyType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method TravelAgencyType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method TravelAgencyType setPhoto(Property\PhotoProperty $photo)
 * @method TravelAgencyType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method TravelAgencyType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method TravelAgencyType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method TravelAgencyType setReview(Property\ReviewProperty $review)
 * @method TravelAgencyType setSameAs(Property\SameAsProperty $sameAs)
 * @method TravelAgencyType setSlogan(Property\SloganProperty $slogan)
 * @method TravelAgencyType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method TravelAgencyType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method TravelAgencyType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method TravelAgencyType setTelephone(Property\TelephoneProperty $telephone)
 * @method TravelAgencyType setUrl(Property\UrlProperty $url)
 */
class TravelAgencyType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TravelAgency';
	}
}