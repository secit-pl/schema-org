<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AutoDealer.
 * 
 * @method AutoDealer setAdditionalType(Property\AdditionalType $additionalType)
 * @method AutoDealer setAddress(Property\Address $address)
 * @method AutoDealer setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method AutoDealer setAlternateName(Property\AlternateName $alternateName)
 * @method AutoDealer setAlumni(Property\Alumni $alumni)
 * @method AutoDealer setAreaServed(Property\AreaServed $areaServed)
 * @method AutoDealer setAward(Property\Award $award)
 * @method AutoDealer setBrand(Property\Brand $brand)
 * @method AutoDealer setContactPoint(Property\ContactPoint $contactPoint)
 * @method AutoDealer setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method AutoDealer setDepartment(Property\Department $department)
 * @method AutoDealer setDescription(Property\Description $description)
 * @method AutoDealer setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method AutoDealer setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method AutoDealer setDuns(Property\Duns $duns)
 * @method AutoDealer setEmail(Property\Email $email)
 * @method AutoDealer setEmployee(Property\Employee $employee)
 * @method AutoDealer setEvent(Property\Event $event)
 * @method AutoDealer setFaxNumber(Property\FaxNumber $faxNumber)
 * @method AutoDealer setFounder(Property\Founder $founder)
 * @method AutoDealer setFoundingDate(Property\FoundingDate $foundingDate)
 * @method AutoDealer setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method AutoDealer setFunder(Property\Funder $funder)
 * @method AutoDealer setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method AutoDealer setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method AutoDealer setHasPOS(Property\HasPOS $hasPOS)
 * @method AutoDealer setImage(Property\Image $image)
 * @method AutoDealer setIsicV4(Property\IsicV4 $isicV4)
 * @method AutoDealer setLegalName(Property\LegalName $legalName)
 * @method AutoDealer setLeiCode(Property\LeiCode $leiCode)
 * @method AutoDealer setLocation(Property\Location $location)
 * @method AutoDealer setLogo(Property\Logo $logo)
 * @method AutoDealer setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method AutoDealer setMakesOffer(Property\MakesOffer $makesOffer)
 * @method AutoDealer setMember(Property\Member $member)
 * @method AutoDealer setMemberOf(Property\MemberOf $memberOf)
 * @method AutoDealer setNaics(Property\Naics $naics)
 * @method AutoDealer setName(Property\Name $name)
 * @method AutoDealer setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method AutoDealer setOpeningHours(Property\OpeningHours $openingHours)
 * @method AutoDealer setOwns(Property\Owns $owns)
 * @method AutoDealer setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method AutoDealer setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method AutoDealer setPotentialAction(Property\PotentialAction $potentialAction)
 * @method AutoDealer setPriceRange(Property\PriceRange $priceRange)
 * @method AutoDealer setReview(Property\Review $review)
 * @method AutoDealer setSameAs(Property\SameAs $sameAs)
 * @method AutoDealer setSeeks(Property\Seeks $seeks)
 * @method AutoDealer setSponsor(Property\Sponsor $sponsor)
 * @method AutoDealer setSubOrganization(Property\SubOrganization $subOrganization)
 * @method AutoDealer setTaxID(Property\TaxID $taxID)
 * @method AutoDealer setTelephone(Property\Telephone $telephone)
 * @method AutoDealer setUrl(Property\Url $url)
 * @method AutoDealer setVatID(Property\VatID $vatID)
 */
class AutoDealer extends AutomotiveBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AutoDealer';
	}
}