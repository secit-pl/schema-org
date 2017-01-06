<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class InsuranceAgency.
 * 
 * @method InsuranceAgency setAdditionalType(Property\AdditionalType $additionalType)
 * @method InsuranceAgency setAddress(Property\Address $address)
 * @method InsuranceAgency setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method InsuranceAgency setAlternateName(Property\AlternateName $alternateName)
 * @method InsuranceAgency setAlumni(Property\Alumni $alumni)
 * @method InsuranceAgency setAreaServed(Property\AreaServed $areaServed)
 * @method InsuranceAgency setAward(Property\Award $award)
 * @method InsuranceAgency setBrand(Property\Brand $brand)
 * @method InsuranceAgency setContactPoint(Property\ContactPoint $contactPoint)
 * @method InsuranceAgency setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method InsuranceAgency setDepartment(Property\Department $department)
 * @method InsuranceAgency setDescription(Property\Description $description)
 * @method InsuranceAgency setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method InsuranceAgency setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method InsuranceAgency setDuns(Property\Duns $duns)
 * @method InsuranceAgency setEmail(Property\Email $email)
 * @method InsuranceAgency setEmployee(Property\Employee $employee)
 * @method InsuranceAgency setEvent(Property\Event $event)
 * @method InsuranceAgency setFaxNumber(Property\FaxNumber $faxNumber)
 * @method InsuranceAgency setFeesAndCommissionsSpecification(Property\FeesAndCommissionsSpecification $feesAndCommissionsSpecification)
 * @method InsuranceAgency setFounder(Property\Founder $founder)
 * @method InsuranceAgency setFoundingDate(Property\FoundingDate $foundingDate)
 * @method InsuranceAgency setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method InsuranceAgency setFunder(Property\Funder $funder)
 * @method InsuranceAgency setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method InsuranceAgency setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method InsuranceAgency setHasPOS(Property\HasPOS $hasPOS)
 * @method InsuranceAgency setImage(Property\Image $image)
 * @method InsuranceAgency setIsicV4(Property\IsicV4 $isicV4)
 * @method InsuranceAgency setLegalName(Property\LegalName $legalName)
 * @method InsuranceAgency setLeiCode(Property\LeiCode $leiCode)
 * @method InsuranceAgency setLocation(Property\Location $location)
 * @method InsuranceAgency setLogo(Property\Logo $logo)
 * @method InsuranceAgency setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method InsuranceAgency setMakesOffer(Property\MakesOffer $makesOffer)
 * @method InsuranceAgency setMember(Property\Member $member)
 * @method InsuranceAgency setMemberOf(Property\MemberOf $memberOf)
 * @method InsuranceAgency setNaics(Property\Naics $naics)
 * @method InsuranceAgency setName(Property\Name $name)
 * @method InsuranceAgency setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method InsuranceAgency setOpeningHours(Property\OpeningHours $openingHours)
 * @method InsuranceAgency setOwns(Property\Owns $owns)
 * @method InsuranceAgency setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method InsuranceAgency setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method InsuranceAgency setPotentialAction(Property\PotentialAction $potentialAction)
 * @method InsuranceAgency setPriceRange(Property\PriceRange $priceRange)
 * @method InsuranceAgency setReview(Property\Review $review)
 * @method InsuranceAgency setSameAs(Property\SameAs $sameAs)
 * @method InsuranceAgency setSeeks(Property\Seeks $seeks)
 * @method InsuranceAgency setSponsor(Property\Sponsor $sponsor)
 * @method InsuranceAgency setSubOrganization(Property\SubOrganization $subOrganization)
 * @method InsuranceAgency setTaxID(Property\TaxID $taxID)
 * @method InsuranceAgency setTelephone(Property\Telephone $telephone)
 * @method InsuranceAgency setUrl(Property\Url $url)
 * @method InsuranceAgency setVatID(Property\VatID $vatID)
 */
class InsuranceAgency extends FinancialService {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/InsuranceAgency';
	}
}