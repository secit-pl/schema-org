<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Car repair business.
 * 
 * @method AutoRepairType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method AutoRepairType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AutoRepairType setAddress(Property\AddressProperty $address)
 * @method AutoRepairType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method AutoRepairType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AutoRepairType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method AutoRepairType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method AutoRepairType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method AutoRepairType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method AutoRepairType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method AutoRepairType setDescription(Property\DescriptionProperty $description)
 * @method AutoRepairType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AutoRepairType setEvent(Property\EventProperty $event)
 * @method AutoRepairType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method AutoRepairType setGeo(Property\GeoProperty $geo)
 * @method AutoRepairType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method AutoRepairType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method AutoRepairType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method AutoRepairType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method AutoRepairType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method AutoRepairType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method AutoRepairType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method AutoRepairType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method AutoRepairType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method AutoRepairType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method AutoRepairType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method AutoRepairType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method AutoRepairType setHasMap(Property\HasMapProperty $hasMap)
 * @method AutoRepairType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AutoRepairType setImage(Property\ImageProperty $image)
 * @method AutoRepairType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method AutoRepairType setIsicV4(Property\IsicV4Property $isicV4)
 * @method AutoRepairType setKeywords(Property\KeywordsProperty $keywords)
 * @method AutoRepairType setLatitude(Property\LatitudeProperty $latitude)
 * @method AutoRepairType setLogo(Property\LogoProperty $logo)
 * @method AutoRepairType setLongitude(Property\LongitudeProperty $longitude)
 * @method AutoRepairType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AutoRepairType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method AutoRepairType setName(Property\NameProperty $name)
 * @method AutoRepairType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method AutoRepairType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method AutoRepairType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method AutoRepairType setPhoto(Property\PhotoProperty $photo)
 * @method AutoRepairType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AutoRepairType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method AutoRepairType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method AutoRepairType setReview(Property\ReviewProperty $review)
 * @method AutoRepairType setSameAs(Property\SameAsProperty $sameAs)
 * @method AutoRepairType setSlogan(Property\SloganProperty $slogan)
 * @method AutoRepairType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method AutoRepairType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method AutoRepairType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method AutoRepairType setTelephone(Property\TelephoneProperty $telephone)
 * @method AutoRepairType setUrl(Property\UrlProperty $url)
 */
class AutoRepairType extends AutomotiveBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AutoRepair';
	}
}