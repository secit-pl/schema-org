<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TrainStation.
 * 
 * @method TrainStation setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method TrainStation setAdditionalType(Property\AdditionalType $additionalType)
 * @method TrainStation setAddress(Property\Address $address)
 * @method TrainStation setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method TrainStation setAlternateName(Property\AlternateName $alternateName)
 * @method TrainStation setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method TrainStation setBranchCode(Property\BranchCode $branchCode)
 * @method TrainStation setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method TrainStation setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method TrainStation setDescription(Property\Description $description)
 * @method TrainStation setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method TrainStation setEvent(Property\Event $event)
 * @method TrainStation setFaxNumber(Property\FaxNumber $faxNumber)
 * @method TrainStation setGeo(Property\Geo $geo)
 * @method TrainStation setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method TrainStation setHasMap(Property\HasMap $hasMap)
 * @method TrainStation setIdentifier(Property\Identifier $identifier)
 * @method TrainStation setImage(Property\Image $image)
 * @method TrainStation setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method TrainStation setIsicV4(Property\IsicV4 $isicV4)
 * @method TrainStation setLogo(Property\Logo $logo)
 * @method TrainStation setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method TrainStation setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method TrainStation setName(Property\Name $name)
 * @method TrainStation setOpeningHours(Property\OpeningHours $openingHours)
 * @method TrainStation setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method TrainStation setPhoto(Property\Photo $photo)
 * @method TrainStation setPotentialAction(Property\PotentialAction $potentialAction)
 * @method TrainStation setPublicAccess(Property\PublicAccess $publicAccess)
 * @method TrainStation setReview(Property\Review $review)
 * @method TrainStation setSameAs(Property\SameAs $sameAs)
 * @method TrainStation setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method TrainStation setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method TrainStation setTelephone(Property\Telephone $telephone)
 * @method TrainStation setUrl(Property\Url $url)
 */
class TrainStation extends CivicStructure {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TrainStation';
	}
}