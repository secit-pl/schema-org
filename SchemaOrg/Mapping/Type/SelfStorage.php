<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SelfStorage.
 * 
 * @method SelfStorage setAdditionalType(Property\AdditionalType $additionalType)
 * @method SelfStorage setAddress(Property\Address $address)
 * @method SelfStorage setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method SelfStorage setAlternateName(Property\AlternateName $alternateName)
 * @method SelfStorage setAlumni(Property\Alumni $alumni)
 * @method SelfStorage setAreaServed(Property\AreaServed $areaServed)
 * @method SelfStorage setAward(Property\Award $award)
 * @method SelfStorage setBrand(Property\Brand $brand)
 * @method SelfStorage setContactPoint(Property\ContactPoint $contactPoint)
 * @method SelfStorage setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method SelfStorage setDepartment(Property\Department $department)
 * @method SelfStorage setDescription(Property\Description $description)
 * @method SelfStorage setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method SelfStorage setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method SelfStorage setDuns(Property\Duns $duns)
 * @method SelfStorage setEmail(Property\Email $email)
 * @method SelfStorage setEmployee(Property\Employee $employee)
 * @method SelfStorage setEvent(Property\Event $event)
 * @method SelfStorage setFaxNumber(Property\FaxNumber $faxNumber)
 * @method SelfStorage setFounder(Property\Founder $founder)
 * @method SelfStorage setFoundingDate(Property\FoundingDate $foundingDate)
 * @method SelfStorage setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method SelfStorage setFunder(Property\Funder $funder)
 * @method SelfStorage setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method SelfStorage setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method SelfStorage setHasPOS(Property\HasPOS $hasPOS)
 * @method SelfStorage setImage(Property\Image $image)
 * @method SelfStorage setIsicV4(Property\IsicV4 $isicV4)
 * @method SelfStorage setLegalName(Property\LegalName $legalName)
 * @method SelfStorage setLeiCode(Property\LeiCode $leiCode)
 * @method SelfStorage setLocation(Property\Location $location)
 * @method SelfStorage setLogo(Property\Logo $logo)
 * @method SelfStorage setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method SelfStorage setMakesOffer(Property\MakesOffer $makesOffer)
 * @method SelfStorage setMember(Property\Member $member)
 * @method SelfStorage setMemberOf(Property\MemberOf $memberOf)
 * @method SelfStorage setNaics(Property\Naics $naics)
 * @method SelfStorage setName(Property\Name $name)
 * @method SelfStorage setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method SelfStorage setOpeningHours(Property\OpeningHours $openingHours)
 * @method SelfStorage setOwns(Property\Owns $owns)
 * @method SelfStorage setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method SelfStorage setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method SelfStorage setPotentialAction(Property\PotentialAction $potentialAction)
 * @method SelfStorage setPriceRange(Property\PriceRange $priceRange)
 * @method SelfStorage setReview(Property\Review $review)
 * @method SelfStorage setSameAs(Property\SameAs $sameAs)
 * @method SelfStorage setSeeks(Property\Seeks $seeks)
 * @method SelfStorage setSponsor(Property\Sponsor $sponsor)
 * @method SelfStorage setSubOrganization(Property\SubOrganization $subOrganization)
 * @method SelfStorage setTaxID(Property\TaxID $taxID)
 * @method SelfStorage setTelephone(Property\Telephone $telephone)
 * @method SelfStorage setUrl(Property\Url $url)
 * @method SelfStorage setVatID(Property\VatID $vatID)
 */
class SelfStorage extends LocalBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SelfStorage';
	}
}