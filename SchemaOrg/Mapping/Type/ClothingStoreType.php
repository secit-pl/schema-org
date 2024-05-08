<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A clothing store.
 * 
 * @method ClothingStoreType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method ClothingStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ClothingStoreType setAddress(Property\AddressProperty $address)
 * @method ClothingStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ClothingStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ClothingStoreType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method ClothingStoreType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method ClothingStoreType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method ClothingStoreType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method ClothingStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method ClothingStoreType setDescription(Property\DescriptionProperty $description)
 * @method ClothingStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ClothingStoreType setEvent(Property\EventProperty $event)
 * @method ClothingStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method ClothingStoreType setGeo(Property\GeoProperty $geo)
 * @method ClothingStoreType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method ClothingStoreType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method ClothingStoreType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method ClothingStoreType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method ClothingStoreType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method ClothingStoreType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method ClothingStoreType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method ClothingStoreType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method ClothingStoreType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method ClothingStoreType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method ClothingStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method ClothingStoreType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method ClothingStoreType setHasMap(Property\HasMapProperty $hasMap)
 * @method ClothingStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ClothingStoreType setImage(Property\ImageProperty $image)
 * @method ClothingStoreType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method ClothingStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method ClothingStoreType setKeywords(Property\KeywordsProperty $keywords)
 * @method ClothingStoreType setLatitude(Property\LatitudeProperty $latitude)
 * @method ClothingStoreType setLogo(Property\LogoProperty $logo)
 * @method ClothingStoreType setLongitude(Property\LongitudeProperty $longitude)
 * @method ClothingStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ClothingStoreType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method ClothingStoreType setName(Property\NameProperty $name)
 * @method ClothingStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method ClothingStoreType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method ClothingStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method ClothingStoreType setPhoto(Property\PhotoProperty $photo)
 * @method ClothingStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ClothingStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method ClothingStoreType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method ClothingStoreType setReview(Property\ReviewProperty $review)
 * @method ClothingStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method ClothingStoreType setSlogan(Property\SloganProperty $slogan)
 * @method ClothingStoreType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method ClothingStoreType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method ClothingStoreType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ClothingStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method ClothingStoreType setUrl(Property\UrlProperty $url)
 */
class ClothingStoreType extends StoreType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ClothingStore';
	}
}