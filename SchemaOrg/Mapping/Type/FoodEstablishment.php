<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class FoodEstablishment.
 * 
 * @method FoodEstablishment setAddress(Property\Address $address)
 * @method FoodEstablishment setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method FoodEstablishment setAlumni(Property\Alumni $alumni)
 * @method FoodEstablishment setAreaServed(Property\AreaServed $areaServed)
 * @method FoodEstablishment setAward(Property\Award $award)
 * @method FoodEstablishment setBrand(Property\Brand $brand)
 * @method FoodEstablishment setContactPoint(Property\ContactPoint $contactPoint)
 * @method FoodEstablishment setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method FoodEstablishment setDepartment(Property\Department $department)
 * @method FoodEstablishment setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method FoodEstablishment setDuns(Property\Duns $duns)
 * @method FoodEstablishment setEmail(Property\Email $email)
 * @method FoodEstablishment setEmployee(Property\Employee $employee)
 * @method FoodEstablishment setEvent(Property\Event $event)
 * @method FoodEstablishment setFaxNumber(Property\FaxNumber $faxNumber)
 * @method FoodEstablishment setFounder(Property\Founder $founder)
 * @method FoodEstablishment setFoundingDate(Property\FoundingDate $foundingDate)
 * @method FoodEstablishment setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method FoodEstablishment setFunder(Property\Funder $funder)
 * @method FoodEstablishment setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method FoodEstablishment setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method FoodEstablishment setHasPOS(Property\HasPOS $hasPOS)
 * @method FoodEstablishment setIsicV4(Property\IsicV4 $isicV4)
 * @method FoodEstablishment setLegalName(Property\LegalName $legalName)
 * @method FoodEstablishment setLeiCode(Property\LeiCode $leiCode)
 * @method FoodEstablishment setLocation(Property\Location $location)
 * @method FoodEstablishment setLogo(Property\Logo $logo)
 * @method FoodEstablishment setMakesOffer(Property\MakesOffer $makesOffer)
 * @method FoodEstablishment setMember(Property\Member $member)
 * @method FoodEstablishment setMemberOf(Property\MemberOf $memberOf)
 * @method FoodEstablishment setNaics(Property\Naics $naics)
 * @method FoodEstablishment setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method FoodEstablishment setOpeningHours(Property\OpeningHours $openingHours)
 * @method FoodEstablishment setOwns(Property\Owns $owns)
 * @method FoodEstablishment setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method FoodEstablishment setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method FoodEstablishment setPriceRange(Property\PriceRange $priceRange)
 * @method FoodEstablishment setReview(Property\Review $review)
 * @method FoodEstablishment setSeeks(Property\Seeks $seeks)
 * @method FoodEstablishment setSponsor(Property\Sponsor $sponsor)
 * @method FoodEstablishment setSubOrganization(Property\SubOrganization $subOrganization)
 * @method FoodEstablishment setTaxID(Property\TaxID $taxID)
 * @method FoodEstablishment setTelephone(Property\Telephone $telephone)
 * @method FoodEstablishment setVatID(Property\VatID $vatID)
 */
class FoodEstablishment extends LocalBusiness {

	/**
	 * @var Property\AcceptsReservations
	 */
	private $acceptsReservations;

	/**
	 * @var Property\HasMenu
	 */
	private $hasMenu;

	/**
	 * @var Property\ServesCuisine
	 */
	private $servesCuisine;

	/**
	 * @var Property\StarRating
	 */
	private $starRating;

	/**
	 * Get accepts reservations.
	 * 
	 * @return Property\AcceptsReservations
	 */
	public function getAcceptsReservations() {
		return $this->acceptsReservations;
	}

	/**
	 * Get has menu.
	 * 
	 * @return Property\HasMenu
	 */
	public function getHasMenu() {
		return $this->hasMenu;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/FoodEstablishment';
	}

	/**
	 * Get serves cuisine.
	 * 
	 * @return Property\ServesCuisine
	 */
	public function getServesCuisine() {
		return $this->servesCuisine;
	}

	/**
	 * Get star rating.
	 * 
	 * @return Property\StarRating
	 */
	public function getStarRating() {
		return $this->starRating;
	}

	/**
	 * Set accepts reservations.
	 * 
	 * @param Property\AcceptsReservations $acceptsReservations
	 * @return FoodEstablishment
	 */
	public function setAcceptsReservations(Property\AcceptsReservations $acceptsReservations) {
		$this->acceptsReservations = $acceptsReservations;

		return $this;
	}

	/**
	 * Set has menu.
	 * 
	 * @param Property\HasMenu $hasMenu
	 * @return FoodEstablishment
	 */
	public function setHasMenu(Property\HasMenu $hasMenu) {
		$this->hasMenu = $hasMenu;

		return $this;
	}

	/**
	 * Set serves cuisine.
	 * 
	 * @param Property\ServesCuisine $servesCuisine
	 * @return FoodEstablishment
	 */
	public function setServesCuisine(Property\ServesCuisine $servesCuisine) {
		$this->servesCuisine = $servesCuisine;

		return $this;
	}

	/**
	 * Set star rating.
	 * 
	 * @param Property\StarRating $starRating
	 * @return FoodEstablishment
	 */
	public function setStarRating(Property\StarRating $starRating) {
		$this->starRating = $starRating;

		return $this;
	}
}