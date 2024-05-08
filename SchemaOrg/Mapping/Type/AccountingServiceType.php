<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Accountancy business. As a LocalBusiness it can be described as a provider of one or more Service(s).
 * 
 * @method AccountingServiceType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method AccountingServiceType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AccountingServiceType setAddress(Property\AddressProperty $address)
 * @method AccountingServiceType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method AccountingServiceType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AccountingServiceType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method AccountingServiceType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method AccountingServiceType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method AccountingServiceType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method AccountingServiceType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method AccountingServiceType setDescription(Property\DescriptionProperty $description)
 * @method AccountingServiceType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AccountingServiceType setEvent(Property\EventProperty $event)
 * @method AccountingServiceType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method AccountingServiceType setFeesAndCommissionsSpecification(Property\FeesAndCommissionsSpecificationProperty $feesAndCommissionsSpecification)
 * @method AccountingServiceType setGeo(Property\GeoProperty $geo)
 * @method AccountingServiceType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method AccountingServiceType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method AccountingServiceType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method AccountingServiceType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method AccountingServiceType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method AccountingServiceType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method AccountingServiceType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method AccountingServiceType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method AccountingServiceType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method AccountingServiceType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method AccountingServiceType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method AccountingServiceType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method AccountingServiceType setHasMap(Property\HasMapProperty $hasMap)
 * @method AccountingServiceType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AccountingServiceType setImage(Property\ImageProperty $image)
 * @method AccountingServiceType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method AccountingServiceType setIsicV4(Property\IsicV4Property $isicV4)
 * @method AccountingServiceType setKeywords(Property\KeywordsProperty $keywords)
 * @method AccountingServiceType setLatitude(Property\LatitudeProperty $latitude)
 * @method AccountingServiceType setLogo(Property\LogoProperty $logo)
 * @method AccountingServiceType setLongitude(Property\LongitudeProperty $longitude)
 * @method AccountingServiceType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AccountingServiceType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method AccountingServiceType setName(Property\NameProperty $name)
 * @method AccountingServiceType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method AccountingServiceType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method AccountingServiceType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method AccountingServiceType setPhoto(Property\PhotoProperty $photo)
 * @method AccountingServiceType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AccountingServiceType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method AccountingServiceType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method AccountingServiceType setReview(Property\ReviewProperty $review)
 * @method AccountingServiceType setSameAs(Property\SameAsProperty $sameAs)
 * @method AccountingServiceType setSlogan(Property\SloganProperty $slogan)
 * @method AccountingServiceType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method AccountingServiceType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method AccountingServiceType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method AccountingServiceType setTelephone(Property\TelephoneProperty $telephone)
 * @method AccountingServiceType setUrl(Property\UrlProperty $url)
 */
class AccountingServiceType extends FinancialServiceType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AccountingService';
	}
}