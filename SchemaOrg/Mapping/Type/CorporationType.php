<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CorporationType.
 * 
 * @method CorporationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CorporationType setAddress(Property\AddressProperty $address)
 * @method CorporationType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method CorporationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CorporationType setAlumni(Property\AlumniProperty $alumni)
 * @method CorporationType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method CorporationType setAward(Property\AwardProperty $award)
 * @method CorporationType setBrand(Property\BrandProperty $brand)
 * @method CorporationType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method CorporationType setDepartment(Property\DepartmentProperty $department)
 * @method CorporationType setDescription(Property\DescriptionProperty $description)
 * @method CorporationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CorporationType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method CorporationType setDuns(Property\DunsProperty $duns)
 * @method CorporationType setEmail(Property\EmailProperty $email)
 * @method CorporationType setEmployee(Property\EmployeeProperty $employee)
 * @method CorporationType setEvent(Property\EventProperty $event)
 * @method CorporationType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method CorporationType setFounder(Property\FounderProperty $founder)
 * @method CorporationType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method CorporationType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method CorporationType setFunder(Property\FunderProperty $funder)
 * @method CorporationType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method CorporationType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method CorporationType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method CorporationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CorporationType setImage(Property\ImageProperty $image)
 * @method CorporationType setIsicV4(Property\IsicV4Property $isicV4)
 * @method CorporationType setLegalName(Property\LegalNameProperty $legalName)
 * @method CorporationType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method CorporationType setLocation(Property\LocationProperty $location)
 * @method CorporationType setLogo(Property\LogoProperty $logo)
 * @method CorporationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CorporationType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method CorporationType setMember(Property\MemberProperty $member)
 * @method CorporationType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method CorporationType setNaics(Property\NaicsProperty $naics)
 * @method CorporationType setName(Property\NameProperty $name)
 * @method CorporationType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method CorporationType setOwns(Property\OwnsProperty $owns)
 * @method CorporationType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method CorporationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CorporationType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method CorporationType setReview(Property\ReviewProperty $review)
 * @method CorporationType setSameAs(Property\SameAsProperty $sameAs)
 * @method CorporationType setSeeks(Property\SeeksProperty $seeks)
 * @method CorporationType setSponsor(Property\SponsorProperty $sponsor)
 * @method CorporationType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method CorporationType setTaxID(Property\TaxIDProperty $taxID)
 * @method CorporationType setTelephone(Property\TelephoneProperty $telephone)
 * @method CorporationType setUrl(Property\UrlProperty $url)
 * @method CorporationType setVatID(Property\VatIDProperty $vatID)
 */
class CorporationType extends OrganizationType {

	/**
	 * @var Property\TickerSymbolProperty
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
	 * @return Property\TickerSymbolProperty
	 */
	public function getTickerSymbol() {
		return $this->tickerSymbol;
	}

	/**
	 * Set ticker symbol.
	 * 
	 * @param Property\TickerSymbolProperty $tickerSymbol
	 * @return CorporationType
	 */
	public function setTickerSymbol(Property\TickerSymbolProperty $tickerSymbol) {
		$this->tickerSymbol = $tickerSymbol;

		return $this;
	}
}