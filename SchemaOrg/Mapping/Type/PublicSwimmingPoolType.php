<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A public swimming pool.
 * 
 * @method PublicSwimmingPoolType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method PublicSwimmingPoolType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PublicSwimmingPoolType setAddress(Property\AddressProperty $address)
 * @method PublicSwimmingPoolType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method PublicSwimmingPoolType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PublicSwimmingPoolType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method PublicSwimmingPoolType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method PublicSwimmingPoolType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method PublicSwimmingPoolType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method PublicSwimmingPoolType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method PublicSwimmingPoolType setDescription(Property\DescriptionProperty $description)
 * @method PublicSwimmingPoolType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PublicSwimmingPoolType setEvent(Property\EventProperty $event)
 * @method PublicSwimmingPoolType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method PublicSwimmingPoolType setGeo(Property\GeoProperty $geo)
 * @method PublicSwimmingPoolType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method PublicSwimmingPoolType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method PublicSwimmingPoolType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method PublicSwimmingPoolType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method PublicSwimmingPoolType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method PublicSwimmingPoolType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method PublicSwimmingPoolType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method PublicSwimmingPoolType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method PublicSwimmingPoolType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method PublicSwimmingPoolType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method PublicSwimmingPoolType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method PublicSwimmingPoolType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method PublicSwimmingPoolType setHasMap(Property\HasMapProperty $hasMap)
 * @method PublicSwimmingPoolType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PublicSwimmingPoolType setImage(Property\ImageProperty $image)
 * @method PublicSwimmingPoolType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method PublicSwimmingPoolType setIsicV4(Property\IsicV4Property $isicV4)
 * @method PublicSwimmingPoolType setKeywords(Property\KeywordsProperty $keywords)
 * @method PublicSwimmingPoolType setLatitude(Property\LatitudeProperty $latitude)
 * @method PublicSwimmingPoolType setLogo(Property\LogoProperty $logo)
 * @method PublicSwimmingPoolType setLongitude(Property\LongitudeProperty $longitude)
 * @method PublicSwimmingPoolType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PublicSwimmingPoolType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method PublicSwimmingPoolType setName(Property\NameProperty $name)
 * @method PublicSwimmingPoolType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method PublicSwimmingPoolType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method PublicSwimmingPoolType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method PublicSwimmingPoolType setPhoto(Property\PhotoProperty $photo)
 * @method PublicSwimmingPoolType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PublicSwimmingPoolType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method PublicSwimmingPoolType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method PublicSwimmingPoolType setReview(Property\ReviewProperty $review)
 * @method PublicSwimmingPoolType setSameAs(Property\SameAsProperty $sameAs)
 * @method PublicSwimmingPoolType setSlogan(Property\SloganProperty $slogan)
 * @method PublicSwimmingPoolType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method PublicSwimmingPoolType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method PublicSwimmingPoolType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PublicSwimmingPoolType setTelephone(Property\TelephoneProperty $telephone)
 * @method PublicSwimmingPoolType setUrl(Property\UrlProperty $url)
 */
class PublicSwimmingPoolType extends SportsActivityLocationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PublicSwimmingPool';
	}
}