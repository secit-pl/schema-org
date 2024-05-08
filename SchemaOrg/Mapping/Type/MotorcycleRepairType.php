<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A motorcycle repair shop.
 * 
 * @method MotorcycleRepairType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method MotorcycleRepairType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MotorcycleRepairType setAddress(Property\AddressProperty $address)
 * @method MotorcycleRepairType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method MotorcycleRepairType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MotorcycleRepairType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method MotorcycleRepairType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method MotorcycleRepairType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method MotorcycleRepairType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method MotorcycleRepairType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method MotorcycleRepairType setDescription(Property\DescriptionProperty $description)
 * @method MotorcycleRepairType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MotorcycleRepairType setEvent(Property\EventProperty $event)
 * @method MotorcycleRepairType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method MotorcycleRepairType setGeo(Property\GeoProperty $geo)
 * @method MotorcycleRepairType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method MotorcycleRepairType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method MotorcycleRepairType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method MotorcycleRepairType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method MotorcycleRepairType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method MotorcycleRepairType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method MotorcycleRepairType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method MotorcycleRepairType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method MotorcycleRepairType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method MotorcycleRepairType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method MotorcycleRepairType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method MotorcycleRepairType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method MotorcycleRepairType setHasMap(Property\HasMapProperty $hasMap)
 * @method MotorcycleRepairType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MotorcycleRepairType setImage(Property\ImageProperty $image)
 * @method MotorcycleRepairType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method MotorcycleRepairType setIsicV4(Property\IsicV4Property $isicV4)
 * @method MotorcycleRepairType setKeywords(Property\KeywordsProperty $keywords)
 * @method MotorcycleRepairType setLatitude(Property\LatitudeProperty $latitude)
 * @method MotorcycleRepairType setLogo(Property\LogoProperty $logo)
 * @method MotorcycleRepairType setLongitude(Property\LongitudeProperty $longitude)
 * @method MotorcycleRepairType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MotorcycleRepairType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method MotorcycleRepairType setName(Property\NameProperty $name)
 * @method MotorcycleRepairType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method MotorcycleRepairType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method MotorcycleRepairType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method MotorcycleRepairType setPhoto(Property\PhotoProperty $photo)
 * @method MotorcycleRepairType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MotorcycleRepairType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method MotorcycleRepairType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method MotorcycleRepairType setReview(Property\ReviewProperty $review)
 * @method MotorcycleRepairType setSameAs(Property\SameAsProperty $sameAs)
 * @method MotorcycleRepairType setSlogan(Property\SloganProperty $slogan)
 * @method MotorcycleRepairType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method MotorcycleRepairType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method MotorcycleRepairType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MotorcycleRepairType setTelephone(Property\TelephoneProperty $telephone)
 * @method MotorcycleRepairType setUrl(Property\UrlProperty $url)
 */
class MotorcycleRepairType extends AutomotiveBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MotorcycleRepair';
	}
}