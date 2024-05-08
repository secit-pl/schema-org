<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A business providing entertainment.
 * 
 * @method EntertainmentBusinessType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method EntertainmentBusinessType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method EntertainmentBusinessType setAddress(Property\AddressProperty $address)
 * @method EntertainmentBusinessType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method EntertainmentBusinessType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method EntertainmentBusinessType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method EntertainmentBusinessType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method EntertainmentBusinessType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method EntertainmentBusinessType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method EntertainmentBusinessType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method EntertainmentBusinessType setDescription(Property\DescriptionProperty $description)
 * @method EntertainmentBusinessType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method EntertainmentBusinessType setEvent(Property\EventProperty $event)
 * @method EntertainmentBusinessType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method EntertainmentBusinessType setGeo(Property\GeoProperty $geo)
 * @method EntertainmentBusinessType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method EntertainmentBusinessType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method EntertainmentBusinessType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method EntertainmentBusinessType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method EntertainmentBusinessType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method EntertainmentBusinessType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method EntertainmentBusinessType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method EntertainmentBusinessType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method EntertainmentBusinessType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method EntertainmentBusinessType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method EntertainmentBusinessType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method EntertainmentBusinessType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method EntertainmentBusinessType setHasMap(Property\HasMapProperty $hasMap)
 * @method EntertainmentBusinessType setIdentifier(Property\IdentifierProperty $identifier)
 * @method EntertainmentBusinessType setImage(Property\ImageProperty $image)
 * @method EntertainmentBusinessType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method EntertainmentBusinessType setIsicV4(Property\IsicV4Property $isicV4)
 * @method EntertainmentBusinessType setKeywords(Property\KeywordsProperty $keywords)
 * @method EntertainmentBusinessType setLatitude(Property\LatitudeProperty $latitude)
 * @method EntertainmentBusinessType setLogo(Property\LogoProperty $logo)
 * @method EntertainmentBusinessType setLongitude(Property\LongitudeProperty $longitude)
 * @method EntertainmentBusinessType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method EntertainmentBusinessType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method EntertainmentBusinessType setName(Property\NameProperty $name)
 * @method EntertainmentBusinessType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method EntertainmentBusinessType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method EntertainmentBusinessType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method EntertainmentBusinessType setPhoto(Property\PhotoProperty $photo)
 * @method EntertainmentBusinessType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method EntertainmentBusinessType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method EntertainmentBusinessType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method EntertainmentBusinessType setReview(Property\ReviewProperty $review)
 * @method EntertainmentBusinessType setSameAs(Property\SameAsProperty $sameAs)
 * @method EntertainmentBusinessType setSlogan(Property\SloganProperty $slogan)
 * @method EntertainmentBusinessType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method EntertainmentBusinessType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method EntertainmentBusinessType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method EntertainmentBusinessType setTelephone(Property\TelephoneProperty $telephone)
 * @method EntertainmentBusinessType setUrl(Property\UrlProperty $url)
 */
class EntertainmentBusinessType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EntertainmentBusiness';
	}
}