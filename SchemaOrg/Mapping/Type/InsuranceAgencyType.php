<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An Insurance agency.
 * 
 * @method InsuranceAgencyType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method InsuranceAgencyType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method InsuranceAgencyType setAddress(Property\AddressProperty $address)
 * @method InsuranceAgencyType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method InsuranceAgencyType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method InsuranceAgencyType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method InsuranceAgencyType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method InsuranceAgencyType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method InsuranceAgencyType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method InsuranceAgencyType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method InsuranceAgencyType setDescription(Property\DescriptionProperty $description)
 * @method InsuranceAgencyType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method InsuranceAgencyType setEvent(Property\EventProperty $event)
 * @method InsuranceAgencyType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method InsuranceAgencyType setFeesAndCommissionsSpecification(Property\FeesAndCommissionsSpecificationProperty $feesAndCommissionsSpecification)
 * @method InsuranceAgencyType setGeo(Property\GeoProperty $geo)
 * @method InsuranceAgencyType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method InsuranceAgencyType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method InsuranceAgencyType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method InsuranceAgencyType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method InsuranceAgencyType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method InsuranceAgencyType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method InsuranceAgencyType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method InsuranceAgencyType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method InsuranceAgencyType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method InsuranceAgencyType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method InsuranceAgencyType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method InsuranceAgencyType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method InsuranceAgencyType setHasMap(Property\HasMapProperty $hasMap)
 * @method InsuranceAgencyType setIdentifier(Property\IdentifierProperty $identifier)
 * @method InsuranceAgencyType setImage(Property\ImageProperty $image)
 * @method InsuranceAgencyType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method InsuranceAgencyType setIsicV4(Property\IsicV4Property $isicV4)
 * @method InsuranceAgencyType setKeywords(Property\KeywordsProperty $keywords)
 * @method InsuranceAgencyType setLatitude(Property\LatitudeProperty $latitude)
 * @method InsuranceAgencyType setLogo(Property\LogoProperty $logo)
 * @method InsuranceAgencyType setLongitude(Property\LongitudeProperty $longitude)
 * @method InsuranceAgencyType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method InsuranceAgencyType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method InsuranceAgencyType setName(Property\NameProperty $name)
 * @method InsuranceAgencyType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method InsuranceAgencyType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method InsuranceAgencyType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method InsuranceAgencyType setPhoto(Property\PhotoProperty $photo)
 * @method InsuranceAgencyType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method InsuranceAgencyType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method InsuranceAgencyType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method InsuranceAgencyType setReview(Property\ReviewProperty $review)
 * @method InsuranceAgencyType setSameAs(Property\SameAsProperty $sameAs)
 * @method InsuranceAgencyType setSlogan(Property\SloganProperty $slogan)
 * @method InsuranceAgencyType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method InsuranceAgencyType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method InsuranceAgencyType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method InsuranceAgencyType setTelephone(Property\TelephoneProperty $telephone)
 * @method InsuranceAgencyType setUrl(Property\UrlProperty $url)
 */
class InsuranceAgencyType extends FinancialServiceType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/InsuranceAgency';
	}
}