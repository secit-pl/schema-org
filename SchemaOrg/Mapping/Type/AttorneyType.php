<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Professional service: Attorney. This type is deprecated - LegalService is more inclusive and less ambiguous.
 * 
 * @method AttorneyType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method AttorneyType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AttorneyType setAddress(Property\AddressProperty $address)
 * @method AttorneyType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method AttorneyType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AttorneyType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method AttorneyType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method AttorneyType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method AttorneyType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method AttorneyType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method AttorneyType setDescription(Property\DescriptionProperty $description)
 * @method AttorneyType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AttorneyType setEvent(Property\EventProperty $event)
 * @method AttorneyType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method AttorneyType setGeo(Property\GeoProperty $geo)
 * @method AttorneyType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method AttorneyType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method AttorneyType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method AttorneyType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method AttorneyType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method AttorneyType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method AttorneyType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method AttorneyType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method AttorneyType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method AttorneyType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method AttorneyType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method AttorneyType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method AttorneyType setHasMap(Property\HasMapProperty $hasMap)
 * @method AttorneyType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AttorneyType setImage(Property\ImageProperty $image)
 * @method AttorneyType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method AttorneyType setIsicV4(Property\IsicV4Property $isicV4)
 * @method AttorneyType setKeywords(Property\KeywordsProperty $keywords)
 * @method AttorneyType setLatitude(Property\LatitudeProperty $latitude)
 * @method AttorneyType setLogo(Property\LogoProperty $logo)
 * @method AttorneyType setLongitude(Property\LongitudeProperty $longitude)
 * @method AttorneyType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AttorneyType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method AttorneyType setName(Property\NameProperty $name)
 * @method AttorneyType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method AttorneyType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method AttorneyType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method AttorneyType setPhoto(Property\PhotoProperty $photo)
 * @method AttorneyType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AttorneyType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method AttorneyType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method AttorneyType setReview(Property\ReviewProperty $review)
 * @method AttorneyType setSameAs(Property\SameAsProperty $sameAs)
 * @method AttorneyType setSlogan(Property\SloganProperty $slogan)
 * @method AttorneyType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method AttorneyType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method AttorneyType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method AttorneyType setTelephone(Property\TelephoneProperty $telephone)
 * @method AttorneyType setUrl(Property\UrlProperty $url)
 */
class AttorneyType extends LegalServiceType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Attorney';
	}
}