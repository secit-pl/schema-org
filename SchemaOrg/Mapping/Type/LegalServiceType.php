<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A LegalService is a business that provides legally-oriented services, advice and representation, e.g. law firms. As a LocalBusiness it can be described as a provider of one or more Service(s).
 * 
 * @method LegalServiceType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method LegalServiceType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method LegalServiceType setAddress(Property\AddressProperty $address)
 * @method LegalServiceType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method LegalServiceType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method LegalServiceType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method LegalServiceType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method LegalServiceType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method LegalServiceType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method LegalServiceType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method LegalServiceType setDescription(Property\DescriptionProperty $description)
 * @method LegalServiceType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method LegalServiceType setEvent(Property\EventProperty $event)
 * @method LegalServiceType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method LegalServiceType setGeo(Property\GeoProperty $geo)
 * @method LegalServiceType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method LegalServiceType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method LegalServiceType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method LegalServiceType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method LegalServiceType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method LegalServiceType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method LegalServiceType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method LegalServiceType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method LegalServiceType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method LegalServiceType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method LegalServiceType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method LegalServiceType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method LegalServiceType setHasMap(Property\HasMapProperty $hasMap)
 * @method LegalServiceType setIdentifier(Property\IdentifierProperty $identifier)
 * @method LegalServiceType setImage(Property\ImageProperty $image)
 * @method LegalServiceType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method LegalServiceType setIsicV4(Property\IsicV4Property $isicV4)
 * @method LegalServiceType setKeywords(Property\KeywordsProperty $keywords)
 * @method LegalServiceType setLatitude(Property\LatitudeProperty $latitude)
 * @method LegalServiceType setLogo(Property\LogoProperty $logo)
 * @method LegalServiceType setLongitude(Property\LongitudeProperty $longitude)
 * @method LegalServiceType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method LegalServiceType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method LegalServiceType setName(Property\NameProperty $name)
 * @method LegalServiceType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method LegalServiceType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method LegalServiceType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method LegalServiceType setPhoto(Property\PhotoProperty $photo)
 * @method LegalServiceType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method LegalServiceType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method LegalServiceType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method LegalServiceType setReview(Property\ReviewProperty $review)
 * @method LegalServiceType setSameAs(Property\SameAsProperty $sameAs)
 * @method LegalServiceType setSlogan(Property\SloganProperty $slogan)
 * @method LegalServiceType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method LegalServiceType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method LegalServiceType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method LegalServiceType setTelephone(Property\TelephoneProperty $telephone)
 * @method LegalServiceType setUrl(Property\UrlProperty $url)
 */
class LegalServiceType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LegalService';
	}
}