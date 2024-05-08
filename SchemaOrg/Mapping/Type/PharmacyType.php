<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A pharmacy or drugstore.
 * 
 * @method PharmacyType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method PharmacyType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PharmacyType setAddress(Property\AddressProperty $address)
 * @method PharmacyType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method PharmacyType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PharmacyType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method PharmacyType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method PharmacyType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method PharmacyType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method PharmacyType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method PharmacyType setDescription(Property\DescriptionProperty $description)
 * @method PharmacyType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PharmacyType setEvent(Property\EventProperty $event)
 * @method PharmacyType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method PharmacyType setGeo(Property\GeoProperty $geo)
 * @method PharmacyType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method PharmacyType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method PharmacyType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method PharmacyType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method PharmacyType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method PharmacyType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method PharmacyType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method PharmacyType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method PharmacyType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method PharmacyType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method PharmacyType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method PharmacyType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method PharmacyType setHasMap(Property\HasMapProperty $hasMap)
 * @method PharmacyType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PharmacyType setImage(Property\ImageProperty $image)
 * @method PharmacyType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method PharmacyType setIsicV4(Property\IsicV4Property $isicV4)
 * @method PharmacyType setKeywords(Property\KeywordsProperty $keywords)
 * @method PharmacyType setLatitude(Property\LatitudeProperty $latitude)
 * @method PharmacyType setLogo(Property\LogoProperty $logo)
 * @method PharmacyType setLongitude(Property\LongitudeProperty $longitude)
 * @method PharmacyType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PharmacyType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method PharmacyType setName(Property\NameProperty $name)
 * @method PharmacyType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method PharmacyType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method PharmacyType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method PharmacyType setPhoto(Property\PhotoProperty $photo)
 * @method PharmacyType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PharmacyType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method PharmacyType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method PharmacyType setReview(Property\ReviewProperty $review)
 * @method PharmacyType setSameAs(Property\SameAsProperty $sameAs)
 * @method PharmacyType setSlogan(Property\SloganProperty $slogan)
 * @method PharmacyType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method PharmacyType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method PharmacyType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PharmacyType setTelephone(Property\TelephoneProperty $telephone)
 * @method PharmacyType setUrl(Property\UrlProperty $url)
 */
class PharmacyType extends MedicalBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Pharmacy';
	}
}