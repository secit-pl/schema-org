<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A house painting service.
 * 
 * @method HousePainterType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method HousePainterType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method HousePainterType setAddress(Property\AddressProperty $address)
 * @method HousePainterType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method HousePainterType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method HousePainterType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method HousePainterType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method HousePainterType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method HousePainterType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method HousePainterType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method HousePainterType setDescription(Property\DescriptionProperty $description)
 * @method HousePainterType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method HousePainterType setEvent(Property\EventProperty $event)
 * @method HousePainterType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method HousePainterType setGeo(Property\GeoProperty $geo)
 * @method HousePainterType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method HousePainterType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method HousePainterType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method HousePainterType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method HousePainterType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method HousePainterType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method HousePainterType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method HousePainterType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method HousePainterType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method HousePainterType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method HousePainterType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method HousePainterType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method HousePainterType setHasMap(Property\HasMapProperty $hasMap)
 * @method HousePainterType setIdentifier(Property\IdentifierProperty $identifier)
 * @method HousePainterType setImage(Property\ImageProperty $image)
 * @method HousePainterType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method HousePainterType setIsicV4(Property\IsicV4Property $isicV4)
 * @method HousePainterType setKeywords(Property\KeywordsProperty $keywords)
 * @method HousePainterType setLatitude(Property\LatitudeProperty $latitude)
 * @method HousePainterType setLogo(Property\LogoProperty $logo)
 * @method HousePainterType setLongitude(Property\LongitudeProperty $longitude)
 * @method HousePainterType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method HousePainterType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method HousePainterType setName(Property\NameProperty $name)
 * @method HousePainterType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method HousePainterType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method HousePainterType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method HousePainterType setPhoto(Property\PhotoProperty $photo)
 * @method HousePainterType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method HousePainterType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method HousePainterType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method HousePainterType setReview(Property\ReviewProperty $review)
 * @method HousePainterType setSameAs(Property\SameAsProperty $sameAs)
 * @method HousePainterType setSlogan(Property\SloganProperty $slogan)
 * @method HousePainterType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method HousePainterType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method HousePainterType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method HousePainterType setTelephone(Property\TelephoneProperty $telephone)
 * @method HousePainterType setUrl(Property\UrlProperty $url)
 */
class HousePainterType extends HomeAndConstructionBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HousePainter';
	}
}