<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Library.
 * 
 * @method Library setAdditionalType(Property\AdditionalType $additionalType)
 * @method Library setAddress(Property\Address $address)
 * @method Library setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Library setAlternateName(Property\AlternateName $alternateName)
 * @method Library setAlumni(Property\Alumni $alumni)
 * @method Library setAreaServed(Property\AreaServed $areaServed)
 * @method Library setAward(Property\Award $award)
 * @method Library setBrand(Property\Brand $brand)
 * @method Library setContactPoint(Property\ContactPoint $contactPoint)
 * @method Library setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method Library setDepartment(Property\Department $department)
 * @method Library setDescription(Property\Description $description)
 * @method Library setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Library setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method Library setDuns(Property\Duns $duns)
 * @method Library setEmail(Property\Email $email)
 * @method Library setEmployee(Property\Employee $employee)
 * @method Library setEvent(Property\Event $event)
 * @method Library setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Library setFounder(Property\Founder $founder)
 * @method Library setFoundingDate(Property\FoundingDate $foundingDate)
 * @method Library setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method Library setFunder(Property\Funder $funder)
 * @method Library setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Library setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method Library setHasPOS(Property\HasPOS $hasPOS)
 * @method Library setImage(Property\Image $image)
 * @method Library setIsicV4(Property\IsicV4 $isicV4)
 * @method Library setLegalName(Property\LegalName $legalName)
 * @method Library setLeiCode(Property\LeiCode $leiCode)
 * @method Library setLocation(Property\Location $location)
 * @method Library setLogo(Property\Logo $logo)
 * @method Library setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Library setMakesOffer(Property\MakesOffer $makesOffer)
 * @method Library setMember(Property\Member $member)
 * @method Library setMemberOf(Property\MemberOf $memberOf)
 * @method Library setNaics(Property\Naics $naics)
 * @method Library setName(Property\Name $name)
 * @method Library setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method Library setOpeningHours(Property\OpeningHours $openingHours)
 * @method Library setOwns(Property\Owns $owns)
 * @method Library setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method Library setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method Library setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Library setPriceRange(Property\PriceRange $priceRange)
 * @method Library setReview(Property\Review $review)
 * @method Library setSameAs(Property\SameAs $sameAs)
 * @method Library setSeeks(Property\Seeks $seeks)
 * @method Library setSponsor(Property\Sponsor $sponsor)
 * @method Library setSubOrganization(Property\SubOrganization $subOrganization)
 * @method Library setTaxID(Property\TaxID $taxID)
 * @method Library setTelephone(Property\Telephone $telephone)
 * @method Library setUrl(Property\Url $url)
 * @method Library setVatID(Property\VatID $vatID)
 */
class Library extends LocalBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Library';
	}
}