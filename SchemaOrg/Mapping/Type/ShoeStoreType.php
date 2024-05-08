<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A shoe store.
 * 
 * @method ShoeStoreType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method ShoeStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ShoeStoreType setAddress(Property\AddressProperty $address)
 * @method ShoeStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ShoeStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ShoeStoreType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method ShoeStoreType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method ShoeStoreType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method ShoeStoreType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method ShoeStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method ShoeStoreType setDescription(Property\DescriptionProperty $description)
 * @method ShoeStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ShoeStoreType setEvent(Property\EventProperty $event)
 * @method ShoeStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method ShoeStoreType setGeo(Property\GeoProperty $geo)
 * @method ShoeStoreType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method ShoeStoreType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method ShoeStoreType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method ShoeStoreType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method ShoeStoreType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method ShoeStoreType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method ShoeStoreType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method ShoeStoreType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method ShoeStoreType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method ShoeStoreType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method ShoeStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method ShoeStoreType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method ShoeStoreType setHasMap(Property\HasMapProperty $hasMap)
 * @method ShoeStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ShoeStoreType setImage(Property\ImageProperty $image)
 * @method ShoeStoreType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method ShoeStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method ShoeStoreType setKeywords(Property\KeywordsProperty $keywords)
 * @method ShoeStoreType setLatitude(Property\LatitudeProperty $latitude)
 * @method ShoeStoreType setLogo(Property\LogoProperty $logo)
 * @method ShoeStoreType setLongitude(Property\LongitudeProperty $longitude)
 * @method ShoeStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ShoeStoreType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method ShoeStoreType setName(Property\NameProperty $name)
 * @method ShoeStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method ShoeStoreType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method ShoeStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method ShoeStoreType setPhoto(Property\PhotoProperty $photo)
 * @method ShoeStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ShoeStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method ShoeStoreType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method ShoeStoreType setReview(Property\ReviewProperty $review)
 * @method ShoeStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method ShoeStoreType setSlogan(Property\SloganProperty $slogan)
 * @method ShoeStoreType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method ShoeStoreType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method ShoeStoreType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ShoeStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method ShoeStoreType setUrl(Property\UrlProperty $url)
 */
class ShoeStoreType extends StoreType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ShoeStore';
	}
}