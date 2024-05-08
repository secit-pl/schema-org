<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A library.
 * 
 * @method LibraryType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method LibraryType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method LibraryType setAddress(Property\AddressProperty $address)
 * @method LibraryType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method LibraryType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method LibraryType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method LibraryType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method LibraryType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method LibraryType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method LibraryType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method LibraryType setDescription(Property\DescriptionProperty $description)
 * @method LibraryType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method LibraryType setEvent(Property\EventProperty $event)
 * @method LibraryType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method LibraryType setGeo(Property\GeoProperty $geo)
 * @method LibraryType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method LibraryType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method LibraryType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method LibraryType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method LibraryType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method LibraryType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method LibraryType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method LibraryType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method LibraryType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method LibraryType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method LibraryType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method LibraryType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method LibraryType setHasMap(Property\HasMapProperty $hasMap)
 * @method LibraryType setIdentifier(Property\IdentifierProperty $identifier)
 * @method LibraryType setImage(Property\ImageProperty $image)
 * @method LibraryType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method LibraryType setIsicV4(Property\IsicV4Property $isicV4)
 * @method LibraryType setKeywords(Property\KeywordsProperty $keywords)
 * @method LibraryType setLatitude(Property\LatitudeProperty $latitude)
 * @method LibraryType setLogo(Property\LogoProperty $logo)
 * @method LibraryType setLongitude(Property\LongitudeProperty $longitude)
 * @method LibraryType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method LibraryType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method LibraryType setName(Property\NameProperty $name)
 * @method LibraryType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method LibraryType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method LibraryType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method LibraryType setPhoto(Property\PhotoProperty $photo)
 * @method LibraryType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method LibraryType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method LibraryType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method LibraryType setReview(Property\ReviewProperty $review)
 * @method LibraryType setSameAs(Property\SameAsProperty $sameAs)
 * @method LibraryType setSlogan(Property\SloganProperty $slogan)
 * @method LibraryType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method LibraryType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method LibraryType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method LibraryType setTelephone(Property\TelephoneProperty $telephone)
 * @method LibraryType setUrl(Property\UrlProperty $url)
 */
class LibraryType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Library';
	}
}