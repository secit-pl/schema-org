<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An electronics store.
 * 
 * @method ElectronicsStoreType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method ElectronicsStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ElectronicsStoreType setAddress(Property\AddressProperty $address)
 * @method ElectronicsStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ElectronicsStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ElectronicsStoreType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method ElectronicsStoreType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method ElectronicsStoreType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method ElectronicsStoreType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method ElectronicsStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method ElectronicsStoreType setDescription(Property\DescriptionProperty $description)
 * @method ElectronicsStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ElectronicsStoreType setEvent(Property\EventProperty $event)
 * @method ElectronicsStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method ElectronicsStoreType setGeo(Property\GeoProperty $geo)
 * @method ElectronicsStoreType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method ElectronicsStoreType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method ElectronicsStoreType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method ElectronicsStoreType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method ElectronicsStoreType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method ElectronicsStoreType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method ElectronicsStoreType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method ElectronicsStoreType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method ElectronicsStoreType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method ElectronicsStoreType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method ElectronicsStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method ElectronicsStoreType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method ElectronicsStoreType setHasMap(Property\HasMapProperty $hasMap)
 * @method ElectronicsStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ElectronicsStoreType setImage(Property\ImageProperty $image)
 * @method ElectronicsStoreType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method ElectronicsStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method ElectronicsStoreType setKeywords(Property\KeywordsProperty $keywords)
 * @method ElectronicsStoreType setLatitude(Property\LatitudeProperty $latitude)
 * @method ElectronicsStoreType setLogo(Property\LogoProperty $logo)
 * @method ElectronicsStoreType setLongitude(Property\LongitudeProperty $longitude)
 * @method ElectronicsStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ElectronicsStoreType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method ElectronicsStoreType setName(Property\NameProperty $name)
 * @method ElectronicsStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method ElectronicsStoreType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method ElectronicsStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method ElectronicsStoreType setPhoto(Property\PhotoProperty $photo)
 * @method ElectronicsStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ElectronicsStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method ElectronicsStoreType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method ElectronicsStoreType setReview(Property\ReviewProperty $review)
 * @method ElectronicsStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method ElectronicsStoreType setSlogan(Property\SloganProperty $slogan)
 * @method ElectronicsStoreType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method ElectronicsStoreType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method ElectronicsStoreType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ElectronicsStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method ElectronicsStoreType setUrl(Property\UrlProperty $url)
 */
class ElectronicsStoreType extends StoreType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ElectronicsStore';
	}
}