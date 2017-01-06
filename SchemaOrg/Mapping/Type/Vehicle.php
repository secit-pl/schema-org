<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Vehicle.
 * 
 * @method Vehicle setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method Vehicle setAdditionalType(Property\AdditionalType $additionalType)
 * @method Vehicle setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Vehicle setAlternateName(Property\AlternateName $alternateName)
 * @method Vehicle setAudience(Property\Audience $audience)
 * @method Vehicle setAward(Property\Award $award)
 * @method Vehicle setBrand(Property\Brand $brand)
 * @method Vehicle setCategory(Property\Category $category)
 * @method Vehicle setColor(Property\Color $color)
 * @method Vehicle setDepth(Property\Depth $depth)
 * @method Vehicle setDescription(Property\Description $description)
 * @method Vehicle setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Vehicle setGtin12(Property\Gtin12 $gtin12)
 * @method Vehicle setGtin13(Property\Gtin13 $gtin13)
 * @method Vehicle setGtin14(Property\Gtin14 $gtin14)
 * @method Vehicle setGtin8(Property\Gtin8 $gtin8)
 * @method Vehicle setHeight(Property\Height $height)
 * @method Vehicle setImage(Property\Image $image)
 * @method Vehicle setIsAccessoryOrSparePartFor(Property\IsAccessoryOrSparePartFor $isAccessoryOrSparePartFor)
 * @method Vehicle setIsConsumableFor(Property\IsConsumableFor $isConsumableFor)
 * @method Vehicle setIsRelatedTo(Property\IsRelatedTo $isRelatedTo)
 * @method Vehicle setIsSimilarTo(Property\IsSimilarTo $isSimilarTo)
 * @method Vehicle setItemCondition(Property\ItemCondition $itemCondition)
 * @method Vehicle setLogo(Property\Logo $logo)
 * @method Vehicle setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Vehicle setManufacturer(Property\Manufacturer $manufacturer)
 * @method Vehicle setModel(Property\Model $model)
 * @method Vehicle setMpn(Property\Mpn $mpn)
 * @method Vehicle setName(Property\Name $name)
 * @method Vehicle setOffers(Property\Offers $offers)
 * @method Vehicle setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Vehicle setProductID(Property\ProductID $productID)
 * @method Vehicle setProductionDate(Property\ProductionDate $productionDate)
 * @method Vehicle setPurchaseDate(Property\PurchaseDate $purchaseDate)
 * @method Vehicle setReleaseDate(Property\ReleaseDate $releaseDate)
 * @method Vehicle setReview(Property\Review $review)
 * @method Vehicle setSameAs(Property\SameAs $sameAs)
 * @method Vehicle setSku(Property\Sku $sku)
 * @method Vehicle setUrl(Property\Url $url)
 * @method Vehicle setWeight(Property\Weight $weight)
 * @method Vehicle setWidth(Property\Width $width)
 */
class Vehicle extends Product {

	/**
	 * @var Property\CargoVolume
	 */
	private $cargoVolume;

	/**
	 * @var Property\DateVehicleFirstRegistered
	 */
	private $dateVehicleFirstRegistered;

	/**
	 * @var Property\DriveWheelConfiguration
	 */
	private $driveWheelConfiguration;

	/**
	 * @var Property\FuelConsumption
	 */
	private $fuelConsumption;

	/**
	 * @var Property\FuelEfficiency
	 */
	private $fuelEfficiency;

	/**
	 * @var Property\FuelType
	 */
	private $fuelType;

	/**
	 * @var Property\KnownVehicleDamages
	 */
	private $knownVehicleDamages;

	/**
	 * @var Property\MileageFromOdometer
	 */
	private $mileageFromOdometer;

	/**
	 * @var Property\NumberOfAirbags
	 */
	private $numberOfAirbags;

	/**
	 * @var Property\NumberOfAxles
	 */
	private $numberOfAxles;

	/**
	 * @var Property\NumberOfDoors
	 */
	private $numberOfDoors;

	/**
	 * @var Property\NumberOfForwardGears
	 */
	private $numberOfForwardGears;

	/**
	 * @var Property\NumberOfPreviousOwners
	 */
	private $numberOfPreviousOwners;

	/**
	 * @var Property\ProductionDate
	 */
	private $productionDate;

	/**
	 * @var Property\PurchaseDate
	 */
	private $purchaseDate;

	/**
	 * @var Property\SteeringPosition
	 */
	private $steeringPosition;

	/**
	 * @var Property\VehicleConfiguration
	 */
	private $vehicleConfiguration;

	/**
	 * @var Property\VehicleEngine
	 */
	private $vehicleEngine;

	/**
	 * @var Property\VehicleIdentificationNumber
	 */
	private $vehicleIdentificationNumber;

	/**
	 * @var Property\VehicleInteriorColor
	 */
	private $vehicleInteriorColor;

	/**
	 * @var Property\VehicleInteriorType
	 */
	private $vehicleInteriorType;

	/**
	 * @var Property\VehicleModelDate
	 */
	private $vehicleModelDate;

	/**
	 * @var Property\VehicleSeatingCapacity
	 */
	private $vehicleSeatingCapacity;

	/**
	 * @var Property\VehicleTransmission
	 */
	private $vehicleTransmission;

	/**
	 * Get cargo volume.
	 * 
	 * @return Property\CargoVolume
	 */
	public function getCargoVolume() {
		return $this->cargoVolume;
	}

	/**
	 * Get date vehicle first registered.
	 * 
	 * @return Property\DateVehicleFirstRegistered
	 */
	public function getDateVehicleFirstRegistered() {
		return $this->dateVehicleFirstRegistered;
	}

	/**
	 * Get drive wheel configuration.
	 * 
	 * @return Property\DriveWheelConfiguration
	 */
	public function getDriveWheelConfiguration() {
		return $this->driveWheelConfiguration;
	}

	/**
	 * Get fuel consumption.
	 * 
	 * @return Property\FuelConsumption
	 */
	public function getFuelConsumption() {
		return $this->fuelConsumption;
	}

	/**
	 * Get fuel efficiency.
	 * 
	 * @return Property\FuelEfficiency
	 */
	public function getFuelEfficiency() {
		return $this->fuelEfficiency;
	}

	/**
	 * Get fuel type.
	 * 
	 * @return Property\FuelType
	 */
	public function getFuelType() {
		return $this->fuelType;
	}

	/**
	 * Get known vehicle damages.
	 * 
	 * @return Property\KnownVehicleDamages
	 */
	public function getKnownVehicleDamages() {
		return $this->knownVehicleDamages;
	}

	/**
	 * Get mileage from odometer.
	 * 
	 * @return Property\MileageFromOdometer
	 */
	public function getMileageFromOdometer() {
		return $this->mileageFromOdometer;
	}

	/**
	 * Get number of airbags.
	 * 
	 * @return Property\NumberOfAirbags
	 */
	public function getNumberOfAirbags() {
		return $this->numberOfAirbags;
	}

	/**
	 * Get number of axles.
	 * 
	 * @return Property\NumberOfAxles
	 */
	public function getNumberOfAxles() {
		return $this->numberOfAxles;
	}

	/**
	 * Get number of doors.
	 * 
	 * @return Property\NumberOfDoors
	 */
	public function getNumberOfDoors() {
		return $this->numberOfDoors;
	}

	/**
	 * Get number of forward gears.
	 * 
	 * @return Property\NumberOfForwardGears
	 */
	public function getNumberOfForwardGears() {
		return $this->numberOfForwardGears;
	}

	/**
	 * Get number of previous owners.
	 * 
	 * @return Property\NumberOfPreviousOwners
	 */
	public function getNumberOfPreviousOwners() {
		return $this->numberOfPreviousOwners;
	}

	/**
	 * Get production date.
	 * 
	 * @return Property\ProductionDate
	 */
	public function getProductionDate() {
		return $this->productionDate;
	}

	/**
	 * Get purchase date.
	 * 
	 * @return Property\PurchaseDate
	 */
	public function getPurchaseDate() {
		return $this->purchaseDate;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Vehicle';
	}

	/**
	 * Get steering position.
	 * 
	 * @return Property\SteeringPosition
	 */
	public function getSteeringPosition() {
		return $this->steeringPosition;
	}

	/**
	 * Get vehicle configuration.
	 * 
	 * @return Property\VehicleConfiguration
	 */
	public function getVehicleConfiguration() {
		return $this->vehicleConfiguration;
	}

	/**
	 * Get vehicle engine.
	 * 
	 * @return Property\VehicleEngine
	 */
	public function getVehicleEngine() {
		return $this->vehicleEngine;
	}

	/**
	 * Get vehicle identification number.
	 * 
	 * @return Property\VehicleIdentificationNumber
	 */
	public function getVehicleIdentificationNumber() {
		return $this->vehicleIdentificationNumber;
	}

	/**
	 * Get vehicle interior color.
	 * 
	 * @return Property\VehicleInteriorColor
	 */
	public function getVehicleInteriorColor() {
		return $this->vehicleInteriorColor;
	}

	/**
	 * Get vehicle interior type.
	 * 
	 * @return Property\VehicleInteriorType
	 */
	public function getVehicleInteriorType() {
		return $this->vehicleInteriorType;
	}

	/**
	 * Get vehicle model date.
	 * 
	 * @return Property\VehicleModelDate
	 */
	public function getVehicleModelDate() {
		return $this->vehicleModelDate;
	}

	/**
	 * Get vehicle seating capacity.
	 * 
	 * @return Property\VehicleSeatingCapacity
	 */
	public function getVehicleSeatingCapacity() {
		return $this->vehicleSeatingCapacity;
	}

	/**
	 * Get vehicle transmission.
	 * 
	 * @return Property\VehicleTransmission
	 */
	public function getVehicleTransmission() {
		return $this->vehicleTransmission;
	}

	/**
	 * Set cargo volume.
	 * 
	 * @param Property\CargoVolume $cargoVolume
	 * @return Vehicle
	 */
	public function setCargoVolume(Property\CargoVolume $cargoVolume) {
		$this->cargoVolume = $cargoVolume;

		return $this;
	}

	/**
	 * Set date vehicle first registered.
	 * 
	 * @param Property\DateVehicleFirstRegistered $dateVehicleFirstRegistered
	 * @return Vehicle
	 */
	public function setDateVehicleFirstRegistered(Property\DateVehicleFirstRegistered $dateVehicleFirstRegistered) {
		$this->dateVehicleFirstRegistered = $dateVehicleFirstRegistered;

		return $this;
	}

	/**
	 * Set drive wheel configuration.
	 * 
	 * @param Property\DriveWheelConfiguration $driveWheelConfiguration
	 * @return Vehicle
	 */
	public function setDriveWheelConfiguration(Property\DriveWheelConfiguration $driveWheelConfiguration) {
		$this->driveWheelConfiguration = $driveWheelConfiguration;

		return $this;
	}

	/**
	 * Set fuel consumption.
	 * 
	 * @param Property\FuelConsumption $fuelConsumption
	 * @return Vehicle
	 */
	public function setFuelConsumption(Property\FuelConsumption $fuelConsumption) {
		$this->fuelConsumption = $fuelConsumption;

		return $this;
	}

	/**
	 * Set fuel efficiency.
	 * 
	 * @param Property\FuelEfficiency $fuelEfficiency
	 * @return Vehicle
	 */
	public function setFuelEfficiency(Property\FuelEfficiency $fuelEfficiency) {
		$this->fuelEfficiency = $fuelEfficiency;

		return $this;
	}

	/**
	 * Set fuel type.
	 * 
	 * @param Property\FuelType $fuelType
	 * @return Vehicle
	 */
	public function setFuelType(Property\FuelType $fuelType) {
		$this->fuelType = $fuelType;

		return $this;
	}

	/**
	 * Set known vehicle damages.
	 * 
	 * @param Property\KnownVehicleDamages $knownVehicleDamages
	 * @return Vehicle
	 */
	public function setKnownVehicleDamages(Property\KnownVehicleDamages $knownVehicleDamages) {
		$this->knownVehicleDamages = $knownVehicleDamages;

		return $this;
	}

	/**
	 * Set mileage from odometer.
	 * 
	 * @param Property\MileageFromOdometer $mileageFromOdometer
	 * @return Vehicle
	 */
	public function setMileageFromOdometer(Property\MileageFromOdometer $mileageFromOdometer) {
		$this->mileageFromOdometer = $mileageFromOdometer;

		return $this;
	}

	/**
	 * Set number of airbags.
	 * 
	 * @param Property\NumberOfAirbags $numberOfAirbags
	 * @return Vehicle
	 */
	public function setNumberOfAirbags(Property\NumberOfAirbags $numberOfAirbags) {
		$this->numberOfAirbags = $numberOfAirbags;

		return $this;
	}

	/**
	 * Set number of axles.
	 * 
	 * @param Property\NumberOfAxles $numberOfAxles
	 * @return Vehicle
	 */
	public function setNumberOfAxles(Property\NumberOfAxles $numberOfAxles) {
		$this->numberOfAxles = $numberOfAxles;

		return $this;
	}

	/**
	 * Set number of doors.
	 * 
	 * @param Property\NumberOfDoors $numberOfDoors
	 * @return Vehicle
	 */
	public function setNumberOfDoors(Property\NumberOfDoors $numberOfDoors) {
		$this->numberOfDoors = $numberOfDoors;

		return $this;
	}

	/**
	 * Set number of forward gears.
	 * 
	 * @param Property\NumberOfForwardGears $numberOfForwardGears
	 * @return Vehicle
	 */
	public function setNumberOfForwardGears(Property\NumberOfForwardGears $numberOfForwardGears) {
		$this->numberOfForwardGears = $numberOfForwardGears;

		return $this;
	}

	/**
	 * Set number of previous owners.
	 * 
	 * @param Property\NumberOfPreviousOwners $numberOfPreviousOwners
	 * @return Vehicle
	 */
	public function setNumberOfPreviousOwners(Property\NumberOfPreviousOwners $numberOfPreviousOwners) {
		$this->numberOfPreviousOwners = $numberOfPreviousOwners;

		return $this;
	}

	/**
	 * Set production date.
	 * 
	 * @param Property\ProductionDate $productionDate
	 * @return Vehicle
	 */
	public function setProductionDate(Property\ProductionDate $productionDate) {
		$this->productionDate = $productionDate;

		return $this;
	}

	/**
	 * Set purchase date.
	 * 
	 * @param Property\PurchaseDate $purchaseDate
	 * @return Vehicle
	 */
	public function setPurchaseDate(Property\PurchaseDate $purchaseDate) {
		$this->purchaseDate = $purchaseDate;

		return $this;
	}

	/**
	 * Set steering position.
	 * 
	 * @param Property\SteeringPosition $steeringPosition
	 * @return Vehicle
	 */
	public function setSteeringPosition(Property\SteeringPosition $steeringPosition) {
		$this->steeringPosition = $steeringPosition;

		return $this;
	}

	/**
	 * Set vehicle configuration.
	 * 
	 * @param Property\VehicleConfiguration $vehicleConfiguration
	 * @return Vehicle
	 */
	public function setVehicleConfiguration(Property\VehicleConfiguration $vehicleConfiguration) {
		$this->vehicleConfiguration = $vehicleConfiguration;

		return $this;
	}

	/**
	 * Set vehicle engine.
	 * 
	 * @param Property\VehicleEngine $vehicleEngine
	 * @return Vehicle
	 */
	public function setVehicleEngine(Property\VehicleEngine $vehicleEngine) {
		$this->vehicleEngine = $vehicleEngine;

		return $this;
	}

	/**
	 * Set vehicle identification number.
	 * 
	 * @param Property\VehicleIdentificationNumber $vehicleIdentificationNumber
	 * @return Vehicle
	 */
	public function setVehicleIdentificationNumber(Property\VehicleIdentificationNumber $vehicleIdentificationNumber) {
		$this->vehicleIdentificationNumber = $vehicleIdentificationNumber;

		return $this;
	}

	/**
	 * Set vehicle interior color.
	 * 
	 * @param Property\VehicleInteriorColor $vehicleInteriorColor
	 * @return Vehicle
	 */
	public function setVehicleInteriorColor(Property\VehicleInteriorColor $vehicleInteriorColor) {
		$this->vehicleInteriorColor = $vehicleInteriorColor;

		return $this;
	}

	/**
	 * Set vehicle interior type.
	 * 
	 * @param Property\VehicleInteriorType $vehicleInteriorType
	 * @return Vehicle
	 */
	public function setVehicleInteriorType(Property\VehicleInteriorType $vehicleInteriorType) {
		$this->vehicleInteriorType = $vehicleInteriorType;

		return $this;
	}

	/**
	 * Set vehicle model date.
	 * 
	 * @param Property\VehicleModelDate $vehicleModelDate
	 * @return Vehicle
	 */
	public function setVehicleModelDate(Property\VehicleModelDate $vehicleModelDate) {
		$this->vehicleModelDate = $vehicleModelDate;

		return $this;
	}

	/**
	 * Set vehicle seating capacity.
	 * 
	 * @param Property\VehicleSeatingCapacity $vehicleSeatingCapacity
	 * @return Vehicle
	 */
	public function setVehicleSeatingCapacity(Property\VehicleSeatingCapacity $vehicleSeatingCapacity) {
		$this->vehicleSeatingCapacity = $vehicleSeatingCapacity;

		return $this;
	}

	/**
	 * Set vehicle transmission.
	 * 
	 * @param Property\VehicleTransmission $vehicleTransmission
	 * @return Vehicle
	 */
	public function setVehicleTransmission(Property\VehicleTransmission $vehicleTransmission) {
		$this->vehicleTransmission = $vehicleTransmission;

		return $this;
	}
}