<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ConvenienceStore.
 * 
 * @method ConvenienceStore setAdditionalType(Property\AdditionalType $additionalType)
 * @method ConvenienceStore setAddress(Property\Address $address)
 * @method ConvenienceStore setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method ConvenienceStore setAlternateName(Property\AlternateName $alternateName)
 * @method ConvenienceStore setAlumni(Property\Alumni $alumni)
 * @method ConvenienceStore setAreaServed(Property\AreaServed $areaServed)
 * @method ConvenienceStore setAward(Property\Award $award)
 * @method ConvenienceStore setBrand(Property\Brand $brand)
 * @method ConvenienceStore setContactPoint(Property\ContactPoint $contactPoint)
 * @method ConvenienceStore setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method ConvenienceStore setDepartment(Property\Department $department)
 * @method ConvenienceStore setDescription(Property\Description $description)
 * @method ConvenienceStore setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ConvenienceStore setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method ConvenienceStore setDuns(Property\Duns $duns)
 * @method ConvenienceStore setEmail(Property\Email $email)
 * @method ConvenienceStore setEmployee(Property\Employee $employee)
 * @method ConvenienceStore setEvent(Property\Event $event)
 * @method ConvenienceStore setFaxNumber(Property\FaxNumber $faxNumber)
 * @method ConvenienceStore setFounder(Property\Founder $founder)
 * @method ConvenienceStore setFoundingDate(Property\FoundingDate $foundingDate)
 * @method ConvenienceStore setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method ConvenienceStore setFunder(Property\Funder $funder)
 * @method ConvenienceStore setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method ConvenienceStore setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method ConvenienceStore setHasPOS(Property\HasPOS $hasPOS)
 * @method ConvenienceStore setImage(Property\Image $image)
 * @method ConvenienceStore setIsicV4(Property\IsicV4 $isicV4)
 * @method ConvenienceStore setLegalName(Property\LegalName $legalName)
 * @method ConvenienceStore setLeiCode(Property\LeiCode $leiCode)
 * @method ConvenienceStore setLocation(Property\Location $location)
 * @method ConvenienceStore setLogo(Property\Logo $logo)
 * @method ConvenienceStore setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ConvenienceStore setMakesOffer(Property\MakesOffer $makesOffer)
 * @method ConvenienceStore setMember(Property\Member $member)
 * @method ConvenienceStore setMemberOf(Property\MemberOf $memberOf)
 * @method ConvenienceStore setNaics(Property\Naics $naics)
 * @method ConvenienceStore setName(Property\Name $name)
 * @method ConvenienceStore setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method ConvenienceStore setOpeningHours(Property\OpeningHours $openingHours)
 * @method ConvenienceStore setOwns(Property\Owns $owns)
 * @method ConvenienceStore setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method ConvenienceStore setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method ConvenienceStore setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ConvenienceStore setPriceRange(Property\PriceRange $priceRange)
 * @method ConvenienceStore setReview(Property\Review $review)
 * @method ConvenienceStore setSameAs(Property\SameAs $sameAs)
 * @method ConvenienceStore setSeeks(Property\Seeks $seeks)
 * @method ConvenienceStore setSponsor(Property\Sponsor $sponsor)
 * @method ConvenienceStore setSubOrganization(Property\SubOrganization $subOrganization)
 * @method ConvenienceStore setTaxID(Property\TaxID $taxID)
 * @method ConvenienceStore setTelephone(Property\Telephone $telephone)
 * @method ConvenienceStore setUrl(Property\Url $url)
 * @method ConvenienceStore setVatID(Property\VatID $vatID)
 */
class ConvenienceStore extends Store {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ConvenienceStore';
	}
}