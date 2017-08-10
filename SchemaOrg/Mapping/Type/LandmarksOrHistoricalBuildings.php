<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LandmarksOrHistoricalBuildings.
 * 
 * @method LandmarksOrHistoricalBuildings setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method LandmarksOrHistoricalBuildings setAdditionalType(Property\AdditionalType $additionalType)
 * @method LandmarksOrHistoricalBuildings setAddress(Property\Address $address)
 * @method LandmarksOrHistoricalBuildings setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method LandmarksOrHistoricalBuildings setAlternateName(Property\AlternateName $alternateName)
 * @method LandmarksOrHistoricalBuildings setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method LandmarksOrHistoricalBuildings setBranchCode(Property\BranchCode $branchCode)
 * @method LandmarksOrHistoricalBuildings setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method LandmarksOrHistoricalBuildings setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method LandmarksOrHistoricalBuildings setDescription(Property\Description $description)
 * @method LandmarksOrHistoricalBuildings setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method LandmarksOrHistoricalBuildings setEvent(Property\Event $event)
 * @method LandmarksOrHistoricalBuildings setFaxNumber(Property\FaxNumber $faxNumber)
 * @method LandmarksOrHistoricalBuildings setGeo(Property\Geo $geo)
 * @method LandmarksOrHistoricalBuildings setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method LandmarksOrHistoricalBuildings setHasMap(Property\HasMap $hasMap)
 * @method LandmarksOrHistoricalBuildings setIdentifier(Property\Identifier $identifier)
 * @method LandmarksOrHistoricalBuildings setImage(Property\Image $image)
 * @method LandmarksOrHistoricalBuildings setIsicV4(Property\IsicV4 $isicV4)
 * @method LandmarksOrHistoricalBuildings setLogo(Property\Logo $logo)
 * @method LandmarksOrHistoricalBuildings setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method LandmarksOrHistoricalBuildings setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method LandmarksOrHistoricalBuildings setName(Property\Name $name)
 * @method LandmarksOrHistoricalBuildings setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method LandmarksOrHistoricalBuildings setPhoto(Property\Photo $photo)
 * @method LandmarksOrHistoricalBuildings setPotentialAction(Property\PotentialAction $potentialAction)
 * @method LandmarksOrHistoricalBuildings setReview(Property\Review $review)
 * @method LandmarksOrHistoricalBuildings setSameAs(Property\SameAs $sameAs)
 * @method LandmarksOrHistoricalBuildings setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method LandmarksOrHistoricalBuildings setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method LandmarksOrHistoricalBuildings setTelephone(Property\Telephone $telephone)
 * @method LandmarksOrHistoricalBuildings setUrl(Property\Url $url)
 */
class LandmarksOrHistoricalBuildings extends Place {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LandmarksOrHistoricalBuildings';
	}
}