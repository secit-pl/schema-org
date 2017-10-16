<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Corporation.
 * 
 * @method Corporation setAdditionalType(Property\AdditionalType $additionalType)
 * @method Corporation setAddress(Property\Address $address)
 * @method Corporation setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Corporation setAlternateName(Property\AlternateName $alternateName)
 * @method Corporation setAlumni(Property\Alumni $alumni)
 * @method Corporation setAreaServed(Property\AreaServed $areaServed)
 * @method Corporation setAward(Property\Award $award)
 * @method Corporation setBrand(Property\Brand $brand)
 * @method Corporation setContactPoint(Property\ContactPoint $contactPoint)
 * @method Corporation setDepartment(Property\Department $department)
 * @method Corporation setDescription(Property\Description $description)
 * @method Corporation setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Corporation setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method Corporation setDuns(Property\Duns $duns)
 * @method Corporation setEmail(Property\Email $email)
 * @method Corporation setEmployee(Property\Employee $employee)
 * @method Corporation setEvent(Property\Event $event)
 * @method Corporation setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Corporation setFounder(Property\Founder $founder)
 * @method Corporation setFoundingDate(Property\FoundingDate $foundingDate)
 * @method Corporation setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method Corporation setFunder(Property\Funder $funder)
 * @method Corporation setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Corporation setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method Corporation setHasPOS(Property\HasPOS $hasPOS)
 * @method Corporation setIdentifier(Property\Identifier $identifier)
 * @method Corporation setImage(Property\Image $image)
 * @method Corporation setIsicV4(Property\IsicV4 $isicV4)
 * @method Corporation setLegalName(Property\LegalName $legalName)
 * @method Corporation setLeiCode(Property\LeiCode $leiCode)
 * @method Corporation setLocation(Property\Location $location)
 * @method Corporation setLogo(Property\Logo $logo)
 * @method Corporation setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Corporation setMakesOffer(Property\MakesOffer $makesOffer)
 * @method Corporation setMember(Property\Member $member)
 * @method Corporation setMemberOf(Property\MemberOf $memberOf)
 * @method Corporation setNaics(Property\Naics $naics)
 * @method Corporation setName(Property\Name $name)
 * @method Corporation setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method Corporation setOwns(Property\Owns $owns)
 * @method Corporation setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method Corporation setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Corporation setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method Corporation setReview(Property\Review $review)
 * @method Corporation setSameAs(Property\SameAs $sameAs)
 * @method Corporation setSeeks(Property\Seeks $seeks)
 * @method Corporation setSponsor(Property\Sponsor $sponsor)
 * @method Corporation setSubOrganization(Property\SubOrganization $subOrganization)
 * @method Corporation setTaxID(Property\TaxID $taxID)
 * @method Corporation setTelephone(Property\Telephone $telephone)
 * @method Corporation setUrl(Property\Url $url)
 * @method Corporation setVatID(Property\VatID $vatID)
 */
class Corporation extends Organization {

	/**
	 * @var Property\TickerSymbol
	 */
	private $tickerSymbol;

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Corporation';
	}

	/**
	 * Get ticker symbol.
	 * 
	 * @return Property\TickerSymbol
	 */
	public function getTickerSymbol() {
		return $this->tickerSymbol;
	}

	/**
	 * Set ticker symbol.
	 * 
	 * @param Property\TickerSymbol $tickerSymbol
	 * @return Corporation
	 */
	public function setTickerSymbol(Property\TickerSymbol $tickerSymbol) {
		$this->tickerSymbol = $tickerSymbol;

		return $this;
	}
}