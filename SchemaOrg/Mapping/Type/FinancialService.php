<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class FinancialService.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\FinancialServiceType instead.
 * 
 * @method FinancialService setAdditionalType(Property\AdditionalType $additionalType)
 * @method FinancialService setAddress(Property\Address $address)
 * @method FinancialService setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method FinancialService setAlternateName(Property\AlternateName $alternateName)
 * @method FinancialService setAlumni(Property\Alumni $alumni)
 * @method FinancialService setAreaServed(Property\AreaServed $areaServed)
 * @method FinancialService setAward(Property\Award $award)
 * @method FinancialService setBrand(Property\Brand $brand)
 * @method FinancialService setContactPoint(Property\ContactPoint $contactPoint)
 * @method FinancialService setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method FinancialService setDepartment(Property\Department $department)
 * @method FinancialService setDescription(Property\Description $description)
 * @method FinancialService setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method FinancialService setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method FinancialService setDuns(Property\Duns $duns)
 * @method FinancialService setEmail(Property\Email $email)
 * @method FinancialService setEmployee(Property\Employee $employee)
 * @method FinancialService setEvent(Property\Event $event)
 * @method FinancialService setFaxNumber(Property\FaxNumber $faxNumber)
 * @method FinancialService setFounder(Property\Founder $founder)
 * @method FinancialService setFoundingDate(Property\FoundingDate $foundingDate)
 * @method FinancialService setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method FinancialService setFunder(Property\Funder $funder)
 * @method FinancialService setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method FinancialService setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method FinancialService setHasPOS(Property\HasPOS $hasPOS)
 * @method FinancialService setIdentifier(Property\Identifier $identifier)
 * @method FinancialService setImage(Property\Image $image)
 * @method FinancialService setIsicV4(Property\IsicV4 $isicV4)
 * @method FinancialService setLegalName(Property\LegalName $legalName)
 * @method FinancialService setLeiCode(Property\LeiCode $leiCode)
 * @method FinancialService setLocation(Property\Location $location)
 * @method FinancialService setLogo(Property\Logo $logo)
 * @method FinancialService setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method FinancialService setMakesOffer(Property\MakesOffer $makesOffer)
 * @method FinancialService setMember(Property\Member $member)
 * @method FinancialService setMemberOf(Property\MemberOf $memberOf)
 * @method FinancialService setNaics(Property\Naics $naics)
 * @method FinancialService setName(Property\Name $name)
 * @method FinancialService setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method FinancialService setOpeningHours(Property\OpeningHours $openingHours)
 * @method FinancialService setOwns(Property\Owns $owns)
 * @method FinancialService setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method FinancialService setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method FinancialService setPotentialAction(Property\PotentialAction $potentialAction)
 * @method FinancialService setPriceRange(Property\PriceRange $priceRange)
 * @method FinancialService setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method FinancialService setReview(Property\Review $review)
 * @method FinancialService setSameAs(Property\SameAs $sameAs)
 * @method FinancialService setSeeks(Property\Seeks $seeks)
 * @method FinancialService setSponsor(Property\Sponsor $sponsor)
 * @method FinancialService setSubOrganization(Property\SubOrganization $subOrganization)
 * @method FinancialService setTaxID(Property\TaxID $taxID)
 * @method FinancialService setTelephone(Property\Telephone $telephone)
 * @method FinancialService setUrl(Property\Url $url)
 * @method FinancialService setVatID(Property\VatID $vatID)
 */
class FinancialService extends LocalBusiness {

	/**
	 * @var Property\FeesAndCommissionsSpecification
	 */
	private $feesAndCommissionsSpecification;

	/**
	 * Get fees and commissions specification.
	 * 
	 * @return Property\FeesAndCommissionsSpecification
	 */
	public function getFeesAndCommissionsSpecification() {
		return $this->feesAndCommissionsSpecification;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/FinancialService';
	}

	/**
	 * Set fees and commissions specification.
	 * 
	 * @param Property\FeesAndCommissionsSpecification $feesAndCommissionsSpecification
	 * @return FinancialService
	 */
	public function setFeesAndCommissionsSpecification(Property\FeesAndCommissionsSpecification $feesAndCommissionsSpecification) {
		$this->feesAndCommissionsSpecification = $feesAndCommissionsSpecification;

		return $this;
	}
}