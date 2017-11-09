<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MeetingRoom.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\MeetingRoomType instead.
 * 
 * @method MeetingRoom setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method MeetingRoom setAdditionalType(Property\AdditionalType $additionalType)
 * @method MeetingRoom setAddress(Property\Address $address)
 * @method MeetingRoom setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method MeetingRoom setAlternateName(Property\AlternateName $alternateName)
 * @method MeetingRoom setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method MeetingRoom setBranchCode(Property\BranchCode $branchCode)
 * @method MeetingRoom setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method MeetingRoom setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method MeetingRoom setDescription(Property\Description $description)
 * @method MeetingRoom setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method MeetingRoom setEvent(Property\Event $event)
 * @method MeetingRoom setFaxNumber(Property\FaxNumber $faxNumber)
 * @method MeetingRoom setFloorSize(Property\FloorSize $floorSize)
 * @method MeetingRoom setGeo(Property\Geo $geo)
 * @method MeetingRoom setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method MeetingRoom setHasMap(Property\HasMap $hasMap)
 * @method MeetingRoom setIdentifier(Property\Identifier $identifier)
 * @method MeetingRoom setImage(Property\Image $image)
 * @method MeetingRoom setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method MeetingRoom setIsicV4(Property\IsicV4 $isicV4)
 * @method MeetingRoom setLogo(Property\Logo $logo)
 * @method MeetingRoom setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method MeetingRoom setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method MeetingRoom setName(Property\Name $name)
 * @method MeetingRoom setNumberOfRooms(Property\NumberOfRooms $numberOfRooms)
 * @method MeetingRoom setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method MeetingRoom setPermittedUsage(Property\PermittedUsage $permittedUsage)
 * @method MeetingRoom setPetsAllowed(Property\PetsAllowed $petsAllowed)
 * @method MeetingRoom setPhoto(Property\Photo $photo)
 * @method MeetingRoom setPotentialAction(Property\PotentialAction $potentialAction)
 * @method MeetingRoom setPublicAccess(Property\PublicAccess $publicAccess)
 * @method MeetingRoom setReview(Property\Review $review)
 * @method MeetingRoom setSameAs(Property\SameAs $sameAs)
 * @method MeetingRoom setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method MeetingRoom setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method MeetingRoom setTelephone(Property\Telephone $telephone)
 * @method MeetingRoom setUrl(Property\Url $url)
 */
class MeetingRoom extends Room {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MeetingRoom';
	}
}