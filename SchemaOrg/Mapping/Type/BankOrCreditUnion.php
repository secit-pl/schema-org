<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BankOrCreditUnion.
 * 
 * @method BankOrCreditUnion setAdditionalType(Property\AdditionalType $additionalType)
 * @method BankOrCreditUnion setAddress(Property\Address $address)
 * @method BankOrCreditUnion setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method BankOrCreditUnion setAlternateName(Property\AlternateName $alternateName)
 * @method BankOrCreditUnion setAlumni(Property\Alumni $alumni)
 * @method BankOrCreditUnion setAreaServed(Property\AreaServed $areaServed)
 * @method BankOrCreditUnion setAward(Property\Award $award)
 * @method BankOrCreditUnion setBrand(Property\Brand $brand)
 * @method BankOrCreditUnion setContactPoint(Property\ContactPoint $contactPoint)
 * @method BankOrCreditUnion setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method BankOrCreditUnion setDepartment(Property\Department $department)
 * @method BankOrCreditUnion setDescription(Property\Description $description)
 * @method BankOrCreditUnion setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method BankOrCreditUnion setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method BankOrCreditUnion setDuns(Property\Duns $duns)
 * @method BankOrCreditUnion setEmail(Property\Email $email)
 * @method BankOrCreditUnion setEmployee(Property\Employee $employee)
 * @method BankOrCreditUnion setEvent(Property\Event $event)
 * @method BankOrCreditUnion setFaxNumber(Property\FaxNumber $faxNumber)
 * @method BankOrCreditUnion setFeesAndCommissionsSpecification(Property\FeesAndCommissionsSpecification $feesAndCommissionsSpecification)
 * @method BankOrCreditUnion setFounder(Property\Founder $founder)
 * @method BankOrCreditUnion setFoundingDate(Property\FoundingDate $foundingDate)
 * @method BankOrCreditUnion setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method BankOrCreditUnion setFunder(Property\Funder $funder)
 * @method BankOrCreditUnion setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method BankOrCreditUnion setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method BankOrCreditUnion setHasPOS(Property\HasPOS $hasPOS)
 * @method BankOrCreditUnion setIdentifier(Property\Identifier $identifier)
 * @method BankOrCreditUnion setImage(Property\Image $image)
 * @method BankOrCreditUnion setIsicV4(Property\IsicV4 $isicV4)
 * @method BankOrCreditUnion setLegalName(Property\LegalName $legalName)
 * @method BankOrCreditUnion setLeiCode(Property\LeiCode $leiCode)
 * @method BankOrCreditUnion setLocation(Property\Location $location)
 * @method BankOrCreditUnion setLogo(Property\Logo $logo)
 * @method BankOrCreditUnion setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method BankOrCreditUnion setMakesOffer(Property\MakesOffer $makesOffer)
 * @method BankOrCreditUnion setMember(Property\Member $member)
 * @method BankOrCreditUnion setMemberOf(Property\MemberOf $memberOf)
 * @method BankOrCreditUnion setNaics(Property\Naics $naics)
 * @method BankOrCreditUnion setName(Property\Name $name)
 * @method BankOrCreditUnion setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method BankOrCreditUnion setOpeningHours(Property\OpeningHours $openingHours)
 * @method BankOrCreditUnion setOwns(Property\Owns $owns)
 * @method BankOrCreditUnion setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method BankOrCreditUnion setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method BankOrCreditUnion setPotentialAction(Property\PotentialAction $potentialAction)
 * @method BankOrCreditUnion setPriceRange(Property\PriceRange $priceRange)
 * @method BankOrCreditUnion setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method BankOrCreditUnion setReview(Property\Review $review)
 * @method BankOrCreditUnion setSameAs(Property\SameAs $sameAs)
 * @method BankOrCreditUnion setSeeks(Property\Seeks $seeks)
 * @method BankOrCreditUnion setSponsor(Property\Sponsor $sponsor)
 * @method BankOrCreditUnion setSubOrganization(Property\SubOrganization $subOrganization)
 * @method BankOrCreditUnion setTaxID(Property\TaxID $taxID)
 * @method BankOrCreditUnion setTelephone(Property\Telephone $telephone)
 * @method BankOrCreditUnion setUrl(Property\Url $url)
 * @method BankOrCreditUnion setVatID(Property\VatID $vatID)
 */
class BankOrCreditUnion extends FinancialService {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BankOrCreditUnion';
	}
}