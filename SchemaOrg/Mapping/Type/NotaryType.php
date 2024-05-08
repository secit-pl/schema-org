<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A notary.
 * 
 * @method NotaryType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method NotaryType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method NotaryType setAddress(Property\AddressProperty $address)
 * @method NotaryType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method NotaryType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method NotaryType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method NotaryType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method NotaryType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method NotaryType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method NotaryType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method NotaryType setDescription(Property\DescriptionProperty $description)
 * @method NotaryType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method NotaryType setEvent(Property\EventProperty $event)
 * @method NotaryType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method NotaryType setGeo(Property\GeoProperty $geo)
 * @method NotaryType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method NotaryType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method NotaryType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method NotaryType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method NotaryType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method NotaryType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method NotaryType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method NotaryType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method NotaryType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method NotaryType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method NotaryType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method NotaryType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method NotaryType setHasMap(Property\HasMapProperty $hasMap)
 * @method NotaryType setIdentifier(Property\IdentifierProperty $identifier)
 * @method NotaryType setImage(Property\ImageProperty $image)
 * @method NotaryType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method NotaryType setIsicV4(Property\IsicV4Property $isicV4)
 * @method NotaryType setKeywords(Property\KeywordsProperty $keywords)
 * @method NotaryType setLatitude(Property\LatitudeProperty $latitude)
 * @method NotaryType setLogo(Property\LogoProperty $logo)
 * @method NotaryType setLongitude(Property\LongitudeProperty $longitude)
 * @method NotaryType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method NotaryType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method NotaryType setName(Property\NameProperty $name)
 * @method NotaryType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method NotaryType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method NotaryType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method NotaryType setPhoto(Property\PhotoProperty $photo)
 * @method NotaryType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method NotaryType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method NotaryType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method NotaryType setReview(Property\ReviewProperty $review)
 * @method NotaryType setSameAs(Property\SameAsProperty $sameAs)
 * @method NotaryType setSlogan(Property\SloganProperty $slogan)
 * @method NotaryType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method NotaryType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method NotaryType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method NotaryType setTelephone(Property\TelephoneProperty $telephone)
 * @method NotaryType setUrl(Property\UrlProperty $url)
 */
class NotaryType extends LegalServiceType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Notary';
	}
}