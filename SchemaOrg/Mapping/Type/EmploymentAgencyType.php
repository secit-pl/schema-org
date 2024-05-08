<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An employment agency.
 * 
 * @method EmploymentAgencyType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method EmploymentAgencyType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method EmploymentAgencyType setAddress(Property\AddressProperty $address)
 * @method EmploymentAgencyType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method EmploymentAgencyType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method EmploymentAgencyType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method EmploymentAgencyType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method EmploymentAgencyType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method EmploymentAgencyType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method EmploymentAgencyType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method EmploymentAgencyType setDescription(Property\DescriptionProperty $description)
 * @method EmploymentAgencyType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method EmploymentAgencyType setEvent(Property\EventProperty $event)
 * @method EmploymentAgencyType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method EmploymentAgencyType setGeo(Property\GeoProperty $geo)
 * @method EmploymentAgencyType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method EmploymentAgencyType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method EmploymentAgencyType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method EmploymentAgencyType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method EmploymentAgencyType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method EmploymentAgencyType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method EmploymentAgencyType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method EmploymentAgencyType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method EmploymentAgencyType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method EmploymentAgencyType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method EmploymentAgencyType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method EmploymentAgencyType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method EmploymentAgencyType setHasMap(Property\HasMapProperty $hasMap)
 * @method EmploymentAgencyType setIdentifier(Property\IdentifierProperty $identifier)
 * @method EmploymentAgencyType setImage(Property\ImageProperty $image)
 * @method EmploymentAgencyType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method EmploymentAgencyType setIsicV4(Property\IsicV4Property $isicV4)
 * @method EmploymentAgencyType setKeywords(Property\KeywordsProperty $keywords)
 * @method EmploymentAgencyType setLatitude(Property\LatitudeProperty $latitude)
 * @method EmploymentAgencyType setLogo(Property\LogoProperty $logo)
 * @method EmploymentAgencyType setLongitude(Property\LongitudeProperty $longitude)
 * @method EmploymentAgencyType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method EmploymentAgencyType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method EmploymentAgencyType setName(Property\NameProperty $name)
 * @method EmploymentAgencyType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method EmploymentAgencyType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method EmploymentAgencyType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method EmploymentAgencyType setPhoto(Property\PhotoProperty $photo)
 * @method EmploymentAgencyType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method EmploymentAgencyType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method EmploymentAgencyType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method EmploymentAgencyType setReview(Property\ReviewProperty $review)
 * @method EmploymentAgencyType setSameAs(Property\SameAsProperty $sameAs)
 * @method EmploymentAgencyType setSlogan(Property\SloganProperty $slogan)
 * @method EmploymentAgencyType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method EmploymentAgencyType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method EmploymentAgencyType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method EmploymentAgencyType setTelephone(Property\TelephoneProperty $telephone)
 * @method EmploymentAgencyType setUrl(Property\UrlProperty $url)
 */
class EmploymentAgencyType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EmploymentAgency';
	}
}