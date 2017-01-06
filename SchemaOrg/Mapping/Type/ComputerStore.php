<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ComputerStore.
 * 
 * @method ComputerStore setAdditionalType(Property\AdditionalType $additionalType)
 * @method ComputerStore setAddress(Property\Address $address)
 * @method ComputerStore setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method ComputerStore setAlternateName(Property\AlternateName $alternateName)
 * @method ComputerStore setAlumni(Property\Alumni $alumni)
 * @method ComputerStore setAreaServed(Property\AreaServed $areaServed)
 * @method ComputerStore setAward(Property\Award $award)
 * @method ComputerStore setBrand(Property\Brand $brand)
 * @method ComputerStore setContactPoint(Property\ContactPoint $contactPoint)
 * @method ComputerStore setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method ComputerStore setDepartment(Property\Department $department)
 * @method ComputerStore setDescription(Property\Description $description)
 * @method ComputerStore setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ComputerStore setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method ComputerStore setDuns(Property\Duns $duns)
 * @method ComputerStore setEmail(Property\Email $email)
 * @method ComputerStore setEmployee(Property\Employee $employee)
 * @method ComputerStore setEvent(Property\Event $event)
 * @method ComputerStore setFaxNumber(Property\FaxNumber $faxNumber)
 * @method ComputerStore setFounder(Property\Founder $founder)
 * @method ComputerStore setFoundingDate(Property\FoundingDate $foundingDate)
 * @method ComputerStore setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method ComputerStore setFunder(Property\Funder $funder)
 * @method ComputerStore setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method ComputerStore setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method ComputerStore setHasPOS(Property\HasPOS $hasPOS)
 * @method ComputerStore setImage(Property\Image $image)
 * @method ComputerStore setIsicV4(Property\IsicV4 $isicV4)
 * @method ComputerStore setLegalName(Property\LegalName $legalName)
 * @method ComputerStore setLeiCode(Property\LeiCode $leiCode)
 * @method ComputerStore setLocation(Property\Location $location)
 * @method ComputerStore setLogo(Property\Logo $logo)
 * @method ComputerStore setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ComputerStore setMakesOffer(Property\MakesOffer $makesOffer)
 * @method ComputerStore setMember(Property\Member $member)
 * @method ComputerStore setMemberOf(Property\MemberOf $memberOf)
 * @method ComputerStore setNaics(Property\Naics $naics)
 * @method ComputerStore setName(Property\Name $name)
 * @method ComputerStore setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method ComputerStore setOpeningHours(Property\OpeningHours $openingHours)
 * @method ComputerStore setOwns(Property\Owns $owns)
 * @method ComputerStore setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method ComputerStore setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method ComputerStore setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ComputerStore setPriceRange(Property\PriceRange $priceRange)
 * @method ComputerStore setReview(Property\Review $review)
 * @method ComputerStore setSameAs(Property\SameAs $sameAs)
 * @method ComputerStore setSeeks(Property\Seeks $seeks)
 * @method ComputerStore setSponsor(Property\Sponsor $sponsor)
 * @method ComputerStore setSubOrganization(Property\SubOrganization $subOrganization)
 * @method ComputerStore setTaxID(Property\TaxID $taxID)
 * @method ComputerStore setTelephone(Property\Telephone $telephone)
 * @method ComputerStore setUrl(Property\Url $url)
 * @method ComputerStore setVatID(Property\VatID $vatID)
 */
class ComputerStore extends Store {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ComputerStore';
	}
}