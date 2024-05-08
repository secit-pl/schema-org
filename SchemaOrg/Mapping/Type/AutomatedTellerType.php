<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * ATM/cash machine.
 * 
 * @method AutomatedTellerType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method AutomatedTellerType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AutomatedTellerType setAddress(Property\AddressProperty $address)
 * @method AutomatedTellerType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method AutomatedTellerType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AutomatedTellerType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method AutomatedTellerType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method AutomatedTellerType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method AutomatedTellerType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method AutomatedTellerType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method AutomatedTellerType setDescription(Property\DescriptionProperty $description)
 * @method AutomatedTellerType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AutomatedTellerType setEvent(Property\EventProperty $event)
 * @method AutomatedTellerType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method AutomatedTellerType setFeesAndCommissionsSpecification(Property\FeesAndCommissionsSpecificationProperty $feesAndCommissionsSpecification)
 * @method AutomatedTellerType setGeo(Property\GeoProperty $geo)
 * @method AutomatedTellerType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method AutomatedTellerType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method AutomatedTellerType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method AutomatedTellerType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method AutomatedTellerType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method AutomatedTellerType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method AutomatedTellerType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method AutomatedTellerType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method AutomatedTellerType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method AutomatedTellerType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method AutomatedTellerType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method AutomatedTellerType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method AutomatedTellerType setHasMap(Property\HasMapProperty $hasMap)
 * @method AutomatedTellerType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AutomatedTellerType setImage(Property\ImageProperty $image)
 * @method AutomatedTellerType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method AutomatedTellerType setIsicV4(Property\IsicV4Property $isicV4)
 * @method AutomatedTellerType setKeywords(Property\KeywordsProperty $keywords)
 * @method AutomatedTellerType setLatitude(Property\LatitudeProperty $latitude)
 * @method AutomatedTellerType setLogo(Property\LogoProperty $logo)
 * @method AutomatedTellerType setLongitude(Property\LongitudeProperty $longitude)
 * @method AutomatedTellerType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AutomatedTellerType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method AutomatedTellerType setName(Property\NameProperty $name)
 * @method AutomatedTellerType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method AutomatedTellerType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method AutomatedTellerType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method AutomatedTellerType setPhoto(Property\PhotoProperty $photo)
 * @method AutomatedTellerType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AutomatedTellerType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method AutomatedTellerType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method AutomatedTellerType setReview(Property\ReviewProperty $review)
 * @method AutomatedTellerType setSameAs(Property\SameAsProperty $sameAs)
 * @method AutomatedTellerType setSlogan(Property\SloganProperty $slogan)
 * @method AutomatedTellerType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method AutomatedTellerType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method AutomatedTellerType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method AutomatedTellerType setTelephone(Property\TelephoneProperty $telephone)
 * @method AutomatedTellerType setUrl(Property\UrlProperty $url)
 */
class AutomatedTellerType extends FinancialServiceType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AutomatedTeller';
	}
}