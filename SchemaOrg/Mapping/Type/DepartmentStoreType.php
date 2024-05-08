<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A department store.
 * 
 * @method DepartmentStoreType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method DepartmentStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DepartmentStoreType setAddress(Property\AddressProperty $address)
 * @method DepartmentStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method DepartmentStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DepartmentStoreType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method DepartmentStoreType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method DepartmentStoreType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method DepartmentStoreType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method DepartmentStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method DepartmentStoreType setDescription(Property\DescriptionProperty $description)
 * @method DepartmentStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DepartmentStoreType setEvent(Property\EventProperty $event)
 * @method DepartmentStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method DepartmentStoreType setGeo(Property\GeoProperty $geo)
 * @method DepartmentStoreType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method DepartmentStoreType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method DepartmentStoreType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method DepartmentStoreType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method DepartmentStoreType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method DepartmentStoreType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method DepartmentStoreType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method DepartmentStoreType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method DepartmentStoreType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method DepartmentStoreType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method DepartmentStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method DepartmentStoreType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method DepartmentStoreType setHasMap(Property\HasMapProperty $hasMap)
 * @method DepartmentStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DepartmentStoreType setImage(Property\ImageProperty $image)
 * @method DepartmentStoreType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method DepartmentStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method DepartmentStoreType setKeywords(Property\KeywordsProperty $keywords)
 * @method DepartmentStoreType setLatitude(Property\LatitudeProperty $latitude)
 * @method DepartmentStoreType setLogo(Property\LogoProperty $logo)
 * @method DepartmentStoreType setLongitude(Property\LongitudeProperty $longitude)
 * @method DepartmentStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DepartmentStoreType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method DepartmentStoreType setName(Property\NameProperty $name)
 * @method DepartmentStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method DepartmentStoreType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method DepartmentStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method DepartmentStoreType setPhoto(Property\PhotoProperty $photo)
 * @method DepartmentStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DepartmentStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method DepartmentStoreType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method DepartmentStoreType setReview(Property\ReviewProperty $review)
 * @method DepartmentStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method DepartmentStoreType setSlogan(Property\SloganProperty $slogan)
 * @method DepartmentStoreType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method DepartmentStoreType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method DepartmentStoreType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method DepartmentStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method DepartmentStoreType setUrl(Property\UrlProperty $url)
 */
class DepartmentStoreType extends StoreType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DepartmentStore';
	}
}