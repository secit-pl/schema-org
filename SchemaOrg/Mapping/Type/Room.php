<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Room.
 * 
 * @method Room setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method Room setAdditionalType(Property\AdditionalType $additionalType)
 * @method Room setAddress(Property\Address $address)
 * @method Room setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Room setAlternateName(Property\AlternateName $alternateName)
 * @method Room setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method Room setBranchCode(Property\BranchCode $branchCode)
 * @method Room setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method Room setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method Room setDescription(Property\Description $description)
 * @method Room setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Room setEvent(Property\Event $event)
 * @method Room setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Room setFloorSize(Property\FloorSize $floorSize)
 * @method Room setGeo(Property\Geo $geo)
 * @method Room setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Room setHasMap(Property\HasMap $hasMap)
 * @method Room setIdentifier(Property\Identifier $identifier)
 * @method Room setImage(Property\Image $image)
 * @method Room setIsicV4(Property\IsicV4 $isicV4)
 * @method Room setLogo(Property\Logo $logo)
 * @method Room setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Room setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method Room setName(Property\Name $name)
 * @method Room setNumberOfRooms(Property\NumberOfRooms $numberOfRooms)
 * @method Room setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method Room setPermittedUsage(Property\PermittedUsage $permittedUsage)
 * @method Room setPetsAllowed(Property\PetsAllowed $petsAllowed)
 * @method Room setPhoto(Property\Photo $photo)
 * @method Room setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Room setReview(Property\Review $review)
 * @method Room setSameAs(Property\SameAs $sameAs)
 * @method Room setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method Room setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method Room setTelephone(Property\Telephone $telephone)
 * @method Room setUrl(Property\Url $url)
 */
class Room extends Accommodation {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Room';
	}
}