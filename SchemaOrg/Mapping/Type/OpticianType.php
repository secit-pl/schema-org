<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A store that sells reading glasses and similar devices for improving vision.
 * 
 * @method OpticianType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method OpticianType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method OpticianType setAddress(Property\AddressProperty $address)
 * @method OpticianType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method OpticianType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method OpticianType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method OpticianType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method OpticianType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method OpticianType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method OpticianType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method OpticianType setDescription(Property\DescriptionProperty $description)
 * @method OpticianType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method OpticianType setEvent(Property\EventProperty $event)
 * @method OpticianType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method OpticianType setGeo(Property\GeoProperty $geo)
 * @method OpticianType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method OpticianType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method OpticianType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method OpticianType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method OpticianType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method OpticianType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method OpticianType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method OpticianType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method OpticianType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method OpticianType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method OpticianType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method OpticianType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method OpticianType setHasMap(Property\HasMapProperty $hasMap)
 * @method OpticianType setIdentifier(Property\IdentifierProperty $identifier)
 * @method OpticianType setImage(Property\ImageProperty $image)
 * @method OpticianType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method OpticianType setIsicV4(Property\IsicV4Property $isicV4)
 * @method OpticianType setKeywords(Property\KeywordsProperty $keywords)
 * @method OpticianType setLatitude(Property\LatitudeProperty $latitude)
 * @method OpticianType setLogo(Property\LogoProperty $logo)
 * @method OpticianType setLongitude(Property\LongitudeProperty $longitude)
 * @method OpticianType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method OpticianType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method OpticianType setName(Property\NameProperty $name)
 * @method OpticianType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method OpticianType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method OpticianType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method OpticianType setPhoto(Property\PhotoProperty $photo)
 * @method OpticianType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method OpticianType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method OpticianType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method OpticianType setReview(Property\ReviewProperty $review)
 * @method OpticianType setSameAs(Property\SameAsProperty $sameAs)
 * @method OpticianType setSlogan(Property\SloganProperty $slogan)
 * @method OpticianType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method OpticianType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method OpticianType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method OpticianType setTelephone(Property\TelephoneProperty $telephone)
 * @method OpticianType setUrl(Property\UrlProperty $url)
 */
class OpticianType extends MedicalBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Optician';
	}
}