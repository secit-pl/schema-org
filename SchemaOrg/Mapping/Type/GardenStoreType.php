<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A garden store.
 * 
 * @method GardenStoreType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method GardenStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method GardenStoreType setAddress(Property\AddressProperty $address)
 * @method GardenStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method GardenStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method GardenStoreType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method GardenStoreType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method GardenStoreType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method GardenStoreType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method GardenStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method GardenStoreType setDescription(Property\DescriptionProperty $description)
 * @method GardenStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method GardenStoreType setEvent(Property\EventProperty $event)
 * @method GardenStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method GardenStoreType setGeo(Property\GeoProperty $geo)
 * @method GardenStoreType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method GardenStoreType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method GardenStoreType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method GardenStoreType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method GardenStoreType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method GardenStoreType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method GardenStoreType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method GardenStoreType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method GardenStoreType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method GardenStoreType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method GardenStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method GardenStoreType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method GardenStoreType setHasMap(Property\HasMapProperty $hasMap)
 * @method GardenStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method GardenStoreType setImage(Property\ImageProperty $image)
 * @method GardenStoreType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method GardenStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method GardenStoreType setKeywords(Property\KeywordsProperty $keywords)
 * @method GardenStoreType setLatitude(Property\LatitudeProperty $latitude)
 * @method GardenStoreType setLogo(Property\LogoProperty $logo)
 * @method GardenStoreType setLongitude(Property\LongitudeProperty $longitude)
 * @method GardenStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method GardenStoreType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method GardenStoreType setName(Property\NameProperty $name)
 * @method GardenStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method GardenStoreType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method GardenStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method GardenStoreType setPhoto(Property\PhotoProperty $photo)
 * @method GardenStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method GardenStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method GardenStoreType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method GardenStoreType setReview(Property\ReviewProperty $review)
 * @method GardenStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method GardenStoreType setSlogan(Property\SloganProperty $slogan)
 * @method GardenStoreType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method GardenStoreType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method GardenStoreType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method GardenStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method GardenStoreType setUrl(Property\UrlProperty $url)
 */
class GardenStoreType extends StoreType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/GardenStore';
	}
}