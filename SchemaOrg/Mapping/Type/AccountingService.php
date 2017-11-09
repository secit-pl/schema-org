<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AccountingService.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\AccountingServiceType instead.
 * 
 * @method AccountingService setAdditionalType(Property\AdditionalType $additionalType)
 * @method AccountingService setAddress(Property\Address $address)
 * @method AccountingService setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method AccountingService setAlternateName(Property\AlternateName $alternateName)
 * @method AccountingService setAlumni(Property\Alumni $alumni)
 * @method AccountingService setAreaServed(Property\AreaServed $areaServed)
 * @method AccountingService setAward(Property\Award $award)
 * @method AccountingService setBrand(Property\Brand $brand)
 * @method AccountingService setContactPoint(Property\ContactPoint $contactPoint)
 * @method AccountingService setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method AccountingService setDepartment(Property\Department $department)
 * @method AccountingService setDescription(Property\Description $description)
 * @method AccountingService setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method AccountingService setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method AccountingService setDuns(Property\Duns $duns)
 * @method AccountingService setEmail(Property\Email $email)
 * @method AccountingService setEmployee(Property\Employee $employee)
 * @method AccountingService setEvent(Property\Event $event)
 * @method AccountingService setFaxNumber(Property\FaxNumber $faxNumber)
 * @method AccountingService setFeesAndCommissionsSpecification(Property\FeesAndCommissionsSpecification $feesAndCommissionsSpecification)
 * @method AccountingService setFounder(Property\Founder $founder)
 * @method AccountingService setFoundingDate(Property\FoundingDate $foundingDate)
 * @method AccountingService setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method AccountingService setFunder(Property\Funder $funder)
 * @method AccountingService setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method AccountingService setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method AccountingService setHasPOS(Property\HasPOS $hasPOS)
 * @method AccountingService setIdentifier(Property\Identifier $identifier)
 * @method AccountingService setImage(Property\Image $image)
 * @method AccountingService setIsicV4(Property\IsicV4 $isicV4)
 * @method AccountingService setLegalName(Property\LegalName $legalName)
 * @method AccountingService setLeiCode(Property\LeiCode $leiCode)
 * @method AccountingService setLocation(Property\Location $location)
 * @method AccountingService setLogo(Property\Logo $logo)
 * @method AccountingService setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method AccountingService setMakesOffer(Property\MakesOffer $makesOffer)
 * @method AccountingService setMember(Property\Member $member)
 * @method AccountingService setMemberOf(Property\MemberOf $memberOf)
 * @method AccountingService setNaics(Property\Naics $naics)
 * @method AccountingService setName(Property\Name $name)
 * @method AccountingService setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method AccountingService setOpeningHours(Property\OpeningHours $openingHours)
 * @method AccountingService setOwns(Property\Owns $owns)
 * @method AccountingService setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method AccountingService setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method AccountingService setPotentialAction(Property\PotentialAction $potentialAction)
 * @method AccountingService setPriceRange(Property\PriceRange $priceRange)
 * @method AccountingService setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method AccountingService setReview(Property\Review $review)
 * @method AccountingService setSameAs(Property\SameAs $sameAs)
 * @method AccountingService setSeeks(Property\Seeks $seeks)
 * @method AccountingService setSponsor(Property\Sponsor $sponsor)
 * @method AccountingService setSubOrganization(Property\SubOrganization $subOrganization)
 * @method AccountingService setTaxID(Property\TaxID $taxID)
 * @method AccountingService setTelephone(Property\Telephone $telephone)
 * @method AccountingService setUrl(Property\Url $url)
 * @method AccountingService setVatID(Property\VatID $vatID)
 */
class AccountingService extends FinancialService {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AccountingService';
	}
}