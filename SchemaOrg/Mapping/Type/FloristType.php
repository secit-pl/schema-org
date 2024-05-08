<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A florist.
 * 
 * @method FloristType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method FloristType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method FloristType setAddress(Property\AddressProperty $address)
 * @method FloristType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method FloristType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method FloristType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method FloristType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method FloristType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method FloristType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method FloristType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method FloristType setDescription(Property\DescriptionProperty $description)
 * @method FloristType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method FloristType setEvent(Property\EventProperty $event)
 * @method FloristType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method FloristType setGeo(Property\GeoProperty $geo)
 * @method FloristType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method FloristType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method FloristType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method FloristType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method FloristType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method FloristType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method FloristType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method FloristType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method FloristType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method FloristType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method FloristType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method FloristType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method FloristType setHasMap(Property\HasMapProperty $hasMap)
 * @method FloristType setIdentifier(Property\IdentifierProperty $identifier)
 * @method FloristType setImage(Property\ImageProperty $image)
 * @method FloristType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method FloristType setIsicV4(Property\IsicV4Property $isicV4)
 * @method FloristType setKeywords(Property\KeywordsProperty $keywords)
 * @method FloristType setLatitude(Property\LatitudeProperty $latitude)
 * @method FloristType setLogo(Property\LogoProperty $logo)
 * @method FloristType setLongitude(Property\LongitudeProperty $longitude)
 * @method FloristType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method FloristType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method FloristType setName(Property\NameProperty $name)
 * @method FloristType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method FloristType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method FloristType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method FloristType setPhoto(Property\PhotoProperty $photo)
 * @method FloristType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method FloristType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method FloristType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method FloristType setReview(Property\ReviewProperty $review)
 * @method FloristType setSameAs(Property\SameAsProperty $sameAs)
 * @method FloristType setSlogan(Property\SloganProperty $slogan)
 * @method FloristType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method FloristType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method FloristType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method FloristType setTelephone(Property\TelephoneProperty $telephone)
 * @method FloristType setUrl(Property\UrlProperty $url)
 */
class FloristType extends StoreType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Florist';
	}
}