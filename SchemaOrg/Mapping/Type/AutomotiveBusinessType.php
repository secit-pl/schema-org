<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Car repair, sales, or parts.
 * 
 * @method AutomotiveBusinessType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method AutomotiveBusinessType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AutomotiveBusinessType setAddress(Property\AddressProperty $address)
 * @method AutomotiveBusinessType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method AutomotiveBusinessType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AutomotiveBusinessType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method AutomotiveBusinessType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method AutomotiveBusinessType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method AutomotiveBusinessType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method AutomotiveBusinessType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method AutomotiveBusinessType setDescription(Property\DescriptionProperty $description)
 * @method AutomotiveBusinessType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AutomotiveBusinessType setEvent(Property\EventProperty $event)
 * @method AutomotiveBusinessType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method AutomotiveBusinessType setGeo(Property\GeoProperty $geo)
 * @method AutomotiveBusinessType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method AutomotiveBusinessType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method AutomotiveBusinessType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method AutomotiveBusinessType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method AutomotiveBusinessType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method AutomotiveBusinessType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method AutomotiveBusinessType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method AutomotiveBusinessType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method AutomotiveBusinessType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method AutomotiveBusinessType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method AutomotiveBusinessType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method AutomotiveBusinessType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method AutomotiveBusinessType setHasMap(Property\HasMapProperty $hasMap)
 * @method AutomotiveBusinessType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AutomotiveBusinessType setImage(Property\ImageProperty $image)
 * @method AutomotiveBusinessType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method AutomotiveBusinessType setIsicV4(Property\IsicV4Property $isicV4)
 * @method AutomotiveBusinessType setKeywords(Property\KeywordsProperty $keywords)
 * @method AutomotiveBusinessType setLatitude(Property\LatitudeProperty $latitude)
 * @method AutomotiveBusinessType setLogo(Property\LogoProperty $logo)
 * @method AutomotiveBusinessType setLongitude(Property\LongitudeProperty $longitude)
 * @method AutomotiveBusinessType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AutomotiveBusinessType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method AutomotiveBusinessType setName(Property\NameProperty $name)
 * @method AutomotiveBusinessType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method AutomotiveBusinessType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method AutomotiveBusinessType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method AutomotiveBusinessType setPhoto(Property\PhotoProperty $photo)
 * @method AutomotiveBusinessType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AutomotiveBusinessType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method AutomotiveBusinessType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method AutomotiveBusinessType setReview(Property\ReviewProperty $review)
 * @method AutomotiveBusinessType setSameAs(Property\SameAsProperty $sameAs)
 * @method AutomotiveBusinessType setSlogan(Property\SloganProperty $slogan)
 * @method AutomotiveBusinessType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method AutomotiveBusinessType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method AutomotiveBusinessType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method AutomotiveBusinessType setTelephone(Property\TelephoneProperty $telephone)
 * @method AutomotiveBusinessType setUrl(Property\UrlProperty $url)
 */
class AutomotiveBusinessType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AutomotiveBusiness';
	}
}