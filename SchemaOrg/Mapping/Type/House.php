<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class House.
 * 
 * @method House setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method House setAdditionalType(Property\AdditionalType $additionalType)
 * @method House setAddress(Property\Address $address)
 * @method House setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method House setAlternateName(Property\AlternateName $alternateName)
 * @method House setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method House setBranchCode(Property\BranchCode $branchCode)
 * @method House setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method House setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method House setDescription(Property\Description $description)
 * @method House setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method House setEvent(Property\Event $event)
 * @method House setFaxNumber(Property\FaxNumber $faxNumber)
 * @method House setFloorSize(Property\FloorSize $floorSize)
 * @method House setGeo(Property\Geo $geo)
 * @method House setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method House setHasMap(Property\HasMap $hasMap)
 * @method House setIdentifier(Property\Identifier $identifier)
 * @method House setImage(Property\Image $image)
 * @method House setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method House setIsicV4(Property\IsicV4 $isicV4)
 * @method House setLogo(Property\Logo $logo)
 * @method House setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method House setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method House setName(Property\Name $name)
 * @method House setNumberOfRooms(Property\NumberOfRooms $numberOfRooms)
 * @method House setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method House setPermittedUsage(Property\PermittedUsage $permittedUsage)
 * @method House setPetsAllowed(Property\PetsAllowed $petsAllowed)
 * @method House setPhoto(Property\Photo $photo)
 * @method House setPotentialAction(Property\PotentialAction $potentialAction)
 * @method House setPublicAccess(Property\PublicAccess $publicAccess)
 * @method House setReview(Property\Review $review)
 * @method House setSameAs(Property\SameAs $sameAs)
 * @method House setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method House setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method House setTelephone(Property\Telephone $telephone)
 * @method House setUrl(Property\Url $url)
 */
class House extends Accommodation {

	/**
	 * @var Property\NumberOfRooms
	 */
	private $numberOfRooms;

	/**
	 * Get number of rooms.
	 * 
	 * @return Property\NumberOfRooms
	 */
	public function getNumberOfRooms() {
		return $this->numberOfRooms;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/House';
	}

	/**
	 * Set number of rooms.
	 * 
	 * @param Property\NumberOfRooms $numberOfRooms
	 * @return House
	 */
	public function setNumberOfRooms(Property\NumberOfRooms $numberOfRooms) {
		$this->numberOfRooms = $numberOfRooms;

		return $this;
	}
}