<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A dry-cleaning business.
 * 
 * @method DryCleaningOrLaundryType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method DryCleaningOrLaundryType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DryCleaningOrLaundryType setAddress(Property\AddressProperty $address)
 * @method DryCleaningOrLaundryType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method DryCleaningOrLaundryType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DryCleaningOrLaundryType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method DryCleaningOrLaundryType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method DryCleaningOrLaundryType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method DryCleaningOrLaundryType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method DryCleaningOrLaundryType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method DryCleaningOrLaundryType setDescription(Property\DescriptionProperty $description)
 * @method DryCleaningOrLaundryType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DryCleaningOrLaundryType setEvent(Property\EventProperty $event)
 * @method DryCleaningOrLaundryType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method DryCleaningOrLaundryType setGeo(Property\GeoProperty $geo)
 * @method DryCleaningOrLaundryType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method DryCleaningOrLaundryType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method DryCleaningOrLaundryType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method DryCleaningOrLaundryType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method DryCleaningOrLaundryType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method DryCleaningOrLaundryType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method DryCleaningOrLaundryType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method DryCleaningOrLaundryType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method DryCleaningOrLaundryType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method DryCleaningOrLaundryType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method DryCleaningOrLaundryType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method DryCleaningOrLaundryType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method DryCleaningOrLaundryType setHasMap(Property\HasMapProperty $hasMap)
 * @method DryCleaningOrLaundryType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DryCleaningOrLaundryType setImage(Property\ImageProperty $image)
 * @method DryCleaningOrLaundryType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method DryCleaningOrLaundryType setIsicV4(Property\IsicV4Property $isicV4)
 * @method DryCleaningOrLaundryType setKeywords(Property\KeywordsProperty $keywords)
 * @method DryCleaningOrLaundryType setLatitude(Property\LatitudeProperty $latitude)
 * @method DryCleaningOrLaundryType setLogo(Property\LogoProperty $logo)
 * @method DryCleaningOrLaundryType setLongitude(Property\LongitudeProperty $longitude)
 * @method DryCleaningOrLaundryType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DryCleaningOrLaundryType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method DryCleaningOrLaundryType setName(Property\NameProperty $name)
 * @method DryCleaningOrLaundryType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method DryCleaningOrLaundryType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method DryCleaningOrLaundryType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method DryCleaningOrLaundryType setPhoto(Property\PhotoProperty $photo)
 * @method DryCleaningOrLaundryType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DryCleaningOrLaundryType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method DryCleaningOrLaundryType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method DryCleaningOrLaundryType setReview(Property\ReviewProperty $review)
 * @method DryCleaningOrLaundryType setSameAs(Property\SameAsProperty $sameAs)
 * @method DryCleaningOrLaundryType setSlogan(Property\SloganProperty $slogan)
 * @method DryCleaningOrLaundryType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method DryCleaningOrLaundryType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method DryCleaningOrLaundryType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method DryCleaningOrLaundryType setTelephone(Property\TelephoneProperty $telephone)
 * @method DryCleaningOrLaundryType setUrl(Property\UrlProperty $url)
 */
class DryCleaningOrLaundryType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DryCleaningOrLaundry';
	}
}