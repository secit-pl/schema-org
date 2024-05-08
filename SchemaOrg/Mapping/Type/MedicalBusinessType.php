<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A particular physical or virtual business of an organization for medical purposes. Examples of MedicalBusiness include different businesses run by health professionals.
 * 
 * @method MedicalBusinessType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method MedicalBusinessType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MedicalBusinessType setAddress(Property\AddressProperty $address)
 * @method MedicalBusinessType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method MedicalBusinessType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MedicalBusinessType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method MedicalBusinessType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method MedicalBusinessType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method MedicalBusinessType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method MedicalBusinessType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method MedicalBusinessType setDescription(Property\DescriptionProperty $description)
 * @method MedicalBusinessType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MedicalBusinessType setEvent(Property\EventProperty $event)
 * @method MedicalBusinessType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method MedicalBusinessType setGeo(Property\GeoProperty $geo)
 * @method MedicalBusinessType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method MedicalBusinessType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method MedicalBusinessType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method MedicalBusinessType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method MedicalBusinessType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method MedicalBusinessType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method MedicalBusinessType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method MedicalBusinessType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method MedicalBusinessType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method MedicalBusinessType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method MedicalBusinessType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method MedicalBusinessType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method MedicalBusinessType setHasMap(Property\HasMapProperty $hasMap)
 * @method MedicalBusinessType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MedicalBusinessType setImage(Property\ImageProperty $image)
 * @method MedicalBusinessType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method MedicalBusinessType setIsicV4(Property\IsicV4Property $isicV4)
 * @method MedicalBusinessType setKeywords(Property\KeywordsProperty $keywords)
 * @method MedicalBusinessType setLatitude(Property\LatitudeProperty $latitude)
 * @method MedicalBusinessType setLogo(Property\LogoProperty $logo)
 * @method MedicalBusinessType setLongitude(Property\LongitudeProperty $longitude)
 * @method MedicalBusinessType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MedicalBusinessType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method MedicalBusinessType setName(Property\NameProperty $name)
 * @method MedicalBusinessType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method MedicalBusinessType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method MedicalBusinessType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method MedicalBusinessType setPhoto(Property\PhotoProperty $photo)
 * @method MedicalBusinessType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MedicalBusinessType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method MedicalBusinessType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method MedicalBusinessType setReview(Property\ReviewProperty $review)
 * @method MedicalBusinessType setSameAs(Property\SameAsProperty $sameAs)
 * @method MedicalBusinessType setSlogan(Property\SloganProperty $slogan)
 * @method MedicalBusinessType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method MedicalBusinessType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method MedicalBusinessType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MedicalBusinessType setTelephone(Property\TelephoneProperty $telephone)
 * @method MedicalBusinessType setUrl(Property\UrlProperty $url)
 */
class MedicalBusinessType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MedicalBusiness';
	}
}