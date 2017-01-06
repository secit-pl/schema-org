<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LocalBusiness.
 * 
 * @method LocalBusiness setAdditionalType(Property\AdditionalType $additionalType)
 * @method LocalBusiness setAddress(Property\Address $address)
 * @method LocalBusiness setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method LocalBusiness setAlternateName(Property\AlternateName $alternateName)
 * @method LocalBusiness setAlumni(Property\Alumni $alumni)
 * @method LocalBusiness setAreaServed(Property\AreaServed $areaServed)
 * @method LocalBusiness setAward(Property\Award $award)
 * @method LocalBusiness setBrand(Property\Brand $brand)
 * @method LocalBusiness setContactPoint(Property\ContactPoint $contactPoint)
 * @method LocalBusiness setDepartment(Property\Department $department)
 * @method LocalBusiness setDescription(Property\Description $description)
 * @method LocalBusiness setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method LocalBusiness setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method LocalBusiness setDuns(Property\Duns $duns)
 * @method LocalBusiness setEmail(Property\Email $email)
 * @method LocalBusiness setEmployee(Property\Employee $employee)
 * @method LocalBusiness setEvent(Property\Event $event)
 * @method LocalBusiness setFaxNumber(Property\FaxNumber $faxNumber)
 * @method LocalBusiness setFounder(Property\Founder $founder)
 * @method LocalBusiness setFoundingDate(Property\FoundingDate $foundingDate)
 * @method LocalBusiness setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method LocalBusiness setFunder(Property\Funder $funder)
 * @method LocalBusiness setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method LocalBusiness setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method LocalBusiness setHasPOS(Property\HasPOS $hasPOS)
 * @method LocalBusiness setImage(Property\Image $image)
 * @method LocalBusiness setIsicV4(Property\IsicV4 $isicV4)
 * @method LocalBusiness setLegalName(Property\LegalName $legalName)
 * @method LocalBusiness setLeiCode(Property\LeiCode $leiCode)
 * @method LocalBusiness setLocation(Property\Location $location)
 * @method LocalBusiness setLogo(Property\Logo $logo)
 * @method LocalBusiness setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method LocalBusiness setMakesOffer(Property\MakesOffer $makesOffer)
 * @method LocalBusiness setMember(Property\Member $member)
 * @method LocalBusiness setMemberOf(Property\MemberOf $memberOf)
 * @method LocalBusiness setNaics(Property\Naics $naics)
 * @method LocalBusiness setName(Property\Name $name)
 * @method LocalBusiness setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method LocalBusiness setOwns(Property\Owns $owns)
 * @method LocalBusiness setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method LocalBusiness setPotentialAction(Property\PotentialAction $potentialAction)
 * @method LocalBusiness setReview(Property\Review $review)
 * @method LocalBusiness setSameAs(Property\SameAs $sameAs)
 * @method LocalBusiness setSeeks(Property\Seeks $seeks)
 * @method LocalBusiness setSponsor(Property\Sponsor $sponsor)
 * @method LocalBusiness setSubOrganization(Property\SubOrganization $subOrganization)
 * @method LocalBusiness setTaxID(Property\TaxID $taxID)
 * @method LocalBusiness setTelephone(Property\Telephone $telephone)
 * @method LocalBusiness setUrl(Property\Url $url)
 * @method LocalBusiness setVatID(Property\VatID $vatID)
 */
class LocalBusiness extends Organization {

	/**
	 * @var Property\CurrenciesAccepted
	 */
	private $currenciesAccepted;

	/**
	 * @var Property\OpeningHours
	 */
	private $openingHours;

	/**
	 * @var Property\PaymentAccepted
	 */
	private $paymentAccepted;

	/**
	 * @var Property\PriceRange
	 */
	private $priceRange;

	/**
	 * Get currencies accepted.
	 * 
	 * @return Property\CurrenciesAccepted
	 */
	public function getCurrenciesAccepted() {
		return $this->currenciesAccepted;
	}

	/**
	 * Get opening hours.
	 * 
	 * @return Property\OpeningHours
	 */
	public function getOpeningHours() {
		return $this->openingHours;
	}

	/**
	 * Get payment accepted.
	 * 
	 * @return Property\PaymentAccepted
	 */
	public function getPaymentAccepted() {
		return $this->paymentAccepted;
	}

	/**
	 * Get price range.
	 * 
	 * @return Property\PriceRange
	 */
	public function getPriceRange() {
		return $this->priceRange;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LocalBusiness';
	}

	/**
	 * Set currencies accepted.
	 * 
	 * @param Property\CurrenciesAccepted $currenciesAccepted
	 * @return LocalBusiness
	 */
	public function setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted) {
		$this->currenciesAccepted = $currenciesAccepted;

		return $this;
	}

	/**
	 * Set opening hours.
	 * 
	 * @param Property\OpeningHours $openingHours
	 * @return LocalBusiness
	 */
	public function setOpeningHours(Property\OpeningHours $openingHours) {
		$this->openingHours = $openingHours;

		return $this;
	}

	/**
	 * Set payment accepted.
	 * 
	 * @param Property\PaymentAccepted $paymentAccepted
	 * @return LocalBusiness
	 */
	public function setPaymentAccepted(Property\PaymentAccepted $paymentAccepted) {
		$this->paymentAccepted = $paymentAccepted;

		return $this;
	}

	/**
	 * Set price range.
	 * 
	 * @param Property\PriceRange $priceRange
	 * @return LocalBusiness
	 */
	public function setPriceRange(Property\PriceRange $priceRange) {
		$this->priceRange = $priceRange;

		return $this;
	}
}