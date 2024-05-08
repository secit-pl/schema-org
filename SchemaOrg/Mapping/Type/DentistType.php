<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A dentist.
 * 
 * @method DentistType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method DentistType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DentistType setAddress(Property\AddressProperty $address)
 * @method DentistType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method DentistType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DentistType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method DentistType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method DentistType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method DentistType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method DentistType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method DentistType setDescription(Property\DescriptionProperty $description)
 * @method DentistType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DentistType setEvent(Property\EventProperty $event)
 * @method DentistType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method DentistType setGeo(Property\GeoProperty $geo)
 * @method DentistType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method DentistType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method DentistType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method DentistType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method DentistType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method DentistType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method DentistType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method DentistType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method DentistType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method DentistType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method DentistType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method DentistType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method DentistType setHasMap(Property\HasMapProperty $hasMap)
 * @method DentistType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DentistType setImage(Property\ImageProperty $image)
 * @method DentistType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method DentistType setIsicV4(Property\IsicV4Property $isicV4)
 * @method DentistType setKeywords(Property\KeywordsProperty $keywords)
 * @method DentistType setLatitude(Property\LatitudeProperty $latitude)
 * @method DentistType setLogo(Property\LogoProperty $logo)
 * @method DentistType setLongitude(Property\LongitudeProperty $longitude)
 * @method DentistType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DentistType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method DentistType setName(Property\NameProperty $name)
 * @method DentistType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method DentistType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method DentistType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method DentistType setPhoto(Property\PhotoProperty $photo)
 * @method DentistType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DentistType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method DentistType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method DentistType setReview(Property\ReviewProperty $review)
 * @method DentistType setSameAs(Property\SameAsProperty $sameAs)
 * @method DentistType setSlogan(Property\SloganProperty $slogan)
 * @method DentistType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method DentistType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method DentistType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method DentistType setTelephone(Property\TelephoneProperty $telephone)
 * @method DentistType setUrl(Property\UrlProperty $url)
 */
class DentistType extends MedicalBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Dentist';
	}
}