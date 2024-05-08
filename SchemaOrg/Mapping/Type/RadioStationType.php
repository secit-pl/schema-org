<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A radio station.
 * 
 * @method RadioStationType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method RadioStationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method RadioStationType setAddress(Property\AddressProperty $address)
 * @method RadioStationType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method RadioStationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method RadioStationType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method RadioStationType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method RadioStationType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method RadioStationType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method RadioStationType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method RadioStationType setDescription(Property\DescriptionProperty $description)
 * @method RadioStationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method RadioStationType setEvent(Property\EventProperty $event)
 * @method RadioStationType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method RadioStationType setGeo(Property\GeoProperty $geo)
 * @method RadioStationType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method RadioStationType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method RadioStationType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method RadioStationType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method RadioStationType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method RadioStationType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method RadioStationType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method RadioStationType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method RadioStationType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method RadioStationType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method RadioStationType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method RadioStationType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method RadioStationType setHasMap(Property\HasMapProperty $hasMap)
 * @method RadioStationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method RadioStationType setImage(Property\ImageProperty $image)
 * @method RadioStationType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method RadioStationType setIsicV4(Property\IsicV4Property $isicV4)
 * @method RadioStationType setKeywords(Property\KeywordsProperty $keywords)
 * @method RadioStationType setLatitude(Property\LatitudeProperty $latitude)
 * @method RadioStationType setLogo(Property\LogoProperty $logo)
 * @method RadioStationType setLongitude(Property\LongitudeProperty $longitude)
 * @method RadioStationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method RadioStationType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method RadioStationType setName(Property\NameProperty $name)
 * @method RadioStationType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method RadioStationType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method RadioStationType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method RadioStationType setPhoto(Property\PhotoProperty $photo)
 * @method RadioStationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method RadioStationType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method RadioStationType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method RadioStationType setReview(Property\ReviewProperty $review)
 * @method RadioStationType setSameAs(Property\SameAsProperty $sameAs)
 * @method RadioStationType setSlogan(Property\SloganProperty $slogan)
 * @method RadioStationType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method RadioStationType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method RadioStationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method RadioStationType setTelephone(Property\TelephoneProperty $telephone)
 * @method RadioStationType setUrl(Property\UrlProperty $url)
 */
class RadioStationType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RadioStation';
	}
}