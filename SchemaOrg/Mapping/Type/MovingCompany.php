<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MovingCompany.
 * 
 * @method MovingCompany setAdditionalType(Property\AdditionalType $additionalType)
 * @method MovingCompany setAddress(Property\Address $address)
 * @method MovingCompany setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method MovingCompany setAlternateName(Property\AlternateName $alternateName)
 * @method MovingCompany setAlumni(Property\Alumni $alumni)
 * @method MovingCompany setAreaServed(Property\AreaServed $areaServed)
 * @method MovingCompany setAward(Property\Award $award)
 * @method MovingCompany setBrand(Property\Brand $brand)
 * @method MovingCompany setContactPoint(Property\ContactPoint $contactPoint)
 * @method MovingCompany setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method MovingCompany setDepartment(Property\Department $department)
 * @method MovingCompany setDescription(Property\Description $description)
 * @method MovingCompany setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method MovingCompany setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method MovingCompany setDuns(Property\Duns $duns)
 * @method MovingCompany setEmail(Property\Email $email)
 * @method MovingCompany setEmployee(Property\Employee $employee)
 * @method MovingCompany setEvent(Property\Event $event)
 * @method MovingCompany setFaxNumber(Property\FaxNumber $faxNumber)
 * @method MovingCompany setFounder(Property\Founder $founder)
 * @method MovingCompany setFoundingDate(Property\FoundingDate $foundingDate)
 * @method MovingCompany setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method MovingCompany setFunder(Property\Funder $funder)
 * @method MovingCompany setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method MovingCompany setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method MovingCompany setHasPOS(Property\HasPOS $hasPOS)
 * @method MovingCompany setImage(Property\Image $image)
 * @method MovingCompany setIsicV4(Property\IsicV4 $isicV4)
 * @method MovingCompany setLegalName(Property\LegalName $legalName)
 * @method MovingCompany setLeiCode(Property\LeiCode $leiCode)
 * @method MovingCompany setLocation(Property\Location $location)
 * @method MovingCompany setLogo(Property\Logo $logo)
 * @method MovingCompany setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method MovingCompany setMakesOffer(Property\MakesOffer $makesOffer)
 * @method MovingCompany setMember(Property\Member $member)
 * @method MovingCompany setMemberOf(Property\MemberOf $memberOf)
 * @method MovingCompany setNaics(Property\Naics $naics)
 * @method MovingCompany setName(Property\Name $name)
 * @method MovingCompany setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method MovingCompany setOpeningHours(Property\OpeningHours $openingHours)
 * @method MovingCompany setOwns(Property\Owns $owns)
 * @method MovingCompany setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method MovingCompany setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method MovingCompany setPotentialAction(Property\PotentialAction $potentialAction)
 * @method MovingCompany setPriceRange(Property\PriceRange $priceRange)
 * @method MovingCompany setReview(Property\Review $review)
 * @method MovingCompany setSameAs(Property\SameAs $sameAs)
 * @method MovingCompany setSeeks(Property\Seeks $seeks)
 * @method MovingCompany setSponsor(Property\Sponsor $sponsor)
 * @method MovingCompany setSubOrganization(Property\SubOrganization $subOrganization)
 * @method MovingCompany setTaxID(Property\TaxID $taxID)
 * @method MovingCompany setTelephone(Property\Telephone $telephone)
 * @method MovingCompany setUrl(Property\Url $url)
 * @method MovingCompany setVatID(Property\VatID $vatID)
 */
class MovingCompany extends HomeAndConstructionBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MovingCompany';
	}
}