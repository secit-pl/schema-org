<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An office equipment store.
 * 
 * @method OfficeEquipmentStoreType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method OfficeEquipmentStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method OfficeEquipmentStoreType setAddress(Property\AddressProperty $address)
 * @method OfficeEquipmentStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method OfficeEquipmentStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method OfficeEquipmentStoreType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method OfficeEquipmentStoreType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method OfficeEquipmentStoreType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method OfficeEquipmentStoreType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method OfficeEquipmentStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method OfficeEquipmentStoreType setDescription(Property\DescriptionProperty $description)
 * @method OfficeEquipmentStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method OfficeEquipmentStoreType setEvent(Property\EventProperty $event)
 * @method OfficeEquipmentStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method OfficeEquipmentStoreType setGeo(Property\GeoProperty $geo)
 * @method OfficeEquipmentStoreType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method OfficeEquipmentStoreType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method OfficeEquipmentStoreType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method OfficeEquipmentStoreType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method OfficeEquipmentStoreType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method OfficeEquipmentStoreType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method OfficeEquipmentStoreType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method OfficeEquipmentStoreType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method OfficeEquipmentStoreType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method OfficeEquipmentStoreType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method OfficeEquipmentStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method OfficeEquipmentStoreType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method OfficeEquipmentStoreType setHasMap(Property\HasMapProperty $hasMap)
 * @method OfficeEquipmentStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method OfficeEquipmentStoreType setImage(Property\ImageProperty $image)
 * @method OfficeEquipmentStoreType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method OfficeEquipmentStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method OfficeEquipmentStoreType setKeywords(Property\KeywordsProperty $keywords)
 * @method OfficeEquipmentStoreType setLatitude(Property\LatitudeProperty $latitude)
 * @method OfficeEquipmentStoreType setLogo(Property\LogoProperty $logo)
 * @method OfficeEquipmentStoreType setLongitude(Property\LongitudeProperty $longitude)
 * @method OfficeEquipmentStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method OfficeEquipmentStoreType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method OfficeEquipmentStoreType setName(Property\NameProperty $name)
 * @method OfficeEquipmentStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method OfficeEquipmentStoreType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method OfficeEquipmentStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method OfficeEquipmentStoreType setPhoto(Property\PhotoProperty $photo)
 * @method OfficeEquipmentStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method OfficeEquipmentStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method OfficeEquipmentStoreType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method OfficeEquipmentStoreType setReview(Property\ReviewProperty $review)
 * @method OfficeEquipmentStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method OfficeEquipmentStoreType setSlogan(Property\SloganProperty $slogan)
 * @method OfficeEquipmentStoreType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method OfficeEquipmentStoreType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method OfficeEquipmentStoreType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method OfficeEquipmentStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method OfficeEquipmentStoreType setUrl(Property\UrlProperty $url)
 */
class OfficeEquipmentStoreType extends StoreType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OfficeEquipmentStore';
	}
}