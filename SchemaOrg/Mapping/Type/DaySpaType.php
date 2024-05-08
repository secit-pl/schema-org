<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A day spa.
 * 
 * @method DaySpaType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method DaySpaType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DaySpaType setAddress(Property\AddressProperty $address)
 * @method DaySpaType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method DaySpaType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DaySpaType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method DaySpaType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method DaySpaType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method DaySpaType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method DaySpaType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method DaySpaType setDescription(Property\DescriptionProperty $description)
 * @method DaySpaType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DaySpaType setEvent(Property\EventProperty $event)
 * @method DaySpaType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method DaySpaType setGeo(Property\GeoProperty $geo)
 * @method DaySpaType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method DaySpaType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method DaySpaType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method DaySpaType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method DaySpaType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method DaySpaType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method DaySpaType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method DaySpaType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method DaySpaType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method DaySpaType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method DaySpaType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method DaySpaType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method DaySpaType setHasMap(Property\HasMapProperty $hasMap)
 * @method DaySpaType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DaySpaType setImage(Property\ImageProperty $image)
 * @method DaySpaType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method DaySpaType setIsicV4(Property\IsicV4Property $isicV4)
 * @method DaySpaType setKeywords(Property\KeywordsProperty $keywords)
 * @method DaySpaType setLatitude(Property\LatitudeProperty $latitude)
 * @method DaySpaType setLogo(Property\LogoProperty $logo)
 * @method DaySpaType setLongitude(Property\LongitudeProperty $longitude)
 * @method DaySpaType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DaySpaType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method DaySpaType setName(Property\NameProperty $name)
 * @method DaySpaType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method DaySpaType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method DaySpaType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method DaySpaType setPhoto(Property\PhotoProperty $photo)
 * @method DaySpaType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DaySpaType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method DaySpaType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method DaySpaType setReview(Property\ReviewProperty $review)
 * @method DaySpaType setSameAs(Property\SameAsProperty $sameAs)
 * @method DaySpaType setSlogan(Property\SloganProperty $slogan)
 * @method DaySpaType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method DaySpaType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method DaySpaType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method DaySpaType setTelephone(Property\TelephoneProperty $telephone)
 * @method DaySpaType setUrl(Property\UrlProperty $url)
 */
class DaySpaType extends HealthAndBeautyBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DaySpa';
	}
}