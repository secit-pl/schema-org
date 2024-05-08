<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An art gallery.
 * 
 * @method ArtGalleryType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method ArtGalleryType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ArtGalleryType setAddress(Property\AddressProperty $address)
 * @method ArtGalleryType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ArtGalleryType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ArtGalleryType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method ArtGalleryType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method ArtGalleryType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method ArtGalleryType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method ArtGalleryType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method ArtGalleryType setDescription(Property\DescriptionProperty $description)
 * @method ArtGalleryType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ArtGalleryType setEvent(Property\EventProperty $event)
 * @method ArtGalleryType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method ArtGalleryType setGeo(Property\GeoProperty $geo)
 * @method ArtGalleryType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method ArtGalleryType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method ArtGalleryType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method ArtGalleryType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method ArtGalleryType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method ArtGalleryType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method ArtGalleryType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method ArtGalleryType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method ArtGalleryType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method ArtGalleryType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method ArtGalleryType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method ArtGalleryType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method ArtGalleryType setHasMap(Property\HasMapProperty $hasMap)
 * @method ArtGalleryType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ArtGalleryType setImage(Property\ImageProperty $image)
 * @method ArtGalleryType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method ArtGalleryType setIsicV4(Property\IsicV4Property $isicV4)
 * @method ArtGalleryType setKeywords(Property\KeywordsProperty $keywords)
 * @method ArtGalleryType setLatitude(Property\LatitudeProperty $latitude)
 * @method ArtGalleryType setLogo(Property\LogoProperty $logo)
 * @method ArtGalleryType setLongitude(Property\LongitudeProperty $longitude)
 * @method ArtGalleryType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ArtGalleryType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method ArtGalleryType setName(Property\NameProperty $name)
 * @method ArtGalleryType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method ArtGalleryType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method ArtGalleryType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method ArtGalleryType setPhoto(Property\PhotoProperty $photo)
 * @method ArtGalleryType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ArtGalleryType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method ArtGalleryType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method ArtGalleryType setReview(Property\ReviewProperty $review)
 * @method ArtGalleryType setSameAs(Property\SameAsProperty $sameAs)
 * @method ArtGalleryType setSlogan(Property\SloganProperty $slogan)
 * @method ArtGalleryType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method ArtGalleryType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method ArtGalleryType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ArtGalleryType setTelephone(Property\TelephoneProperty $telephone)
 * @method ArtGalleryType setUrl(Property\UrlProperty $url)
 */
class ArtGalleryType extends EntertainmentBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ArtGallery';
	}
}