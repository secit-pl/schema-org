<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class InternetCafe.
 * 
 * @method InternetCafe setAdditionalType(Property\AdditionalType $additionalType)
 * @method InternetCafe setAddress(Property\Address $address)
 * @method InternetCafe setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method InternetCafe setAlternateName(Property\AlternateName $alternateName)
 * @method InternetCafe setAlumni(Property\Alumni $alumni)
 * @method InternetCafe setAreaServed(Property\AreaServed $areaServed)
 * @method InternetCafe setAward(Property\Award $award)
 * @method InternetCafe setBrand(Property\Brand $brand)
 * @method InternetCafe setContactPoint(Property\ContactPoint $contactPoint)
 * @method InternetCafe setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method InternetCafe setDepartment(Property\Department $department)
 * @method InternetCafe setDescription(Property\Description $description)
 * @method InternetCafe setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method InternetCafe setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method InternetCafe setDuns(Property\Duns $duns)
 * @method InternetCafe setEmail(Property\Email $email)
 * @method InternetCafe setEmployee(Property\Employee $employee)
 * @method InternetCafe setEvent(Property\Event $event)
 * @method InternetCafe setFaxNumber(Property\FaxNumber $faxNumber)
 * @method InternetCafe setFounder(Property\Founder $founder)
 * @method InternetCafe setFoundingDate(Property\FoundingDate $foundingDate)
 * @method InternetCafe setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method InternetCafe setFunder(Property\Funder $funder)
 * @method InternetCafe setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method InternetCafe setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method InternetCafe setHasPOS(Property\HasPOS $hasPOS)
 * @method InternetCafe setIdentifier(Property\Identifier $identifier)
 * @method InternetCafe setImage(Property\Image $image)
 * @method InternetCafe setIsicV4(Property\IsicV4 $isicV4)
 * @method InternetCafe setLegalName(Property\LegalName $legalName)
 * @method InternetCafe setLeiCode(Property\LeiCode $leiCode)
 * @method InternetCafe setLocation(Property\Location $location)
 * @method InternetCafe setLogo(Property\Logo $logo)
 * @method InternetCafe setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method InternetCafe setMakesOffer(Property\MakesOffer $makesOffer)
 * @method InternetCafe setMember(Property\Member $member)
 * @method InternetCafe setMemberOf(Property\MemberOf $memberOf)
 * @method InternetCafe setNaics(Property\Naics $naics)
 * @method InternetCafe setName(Property\Name $name)
 * @method InternetCafe setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method InternetCafe setOpeningHours(Property\OpeningHours $openingHours)
 * @method InternetCafe setOwns(Property\Owns $owns)
 * @method InternetCafe setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method InternetCafe setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method InternetCafe setPotentialAction(Property\PotentialAction $potentialAction)
 * @method InternetCafe setPriceRange(Property\PriceRange $priceRange)
 * @method InternetCafe setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method InternetCafe setReview(Property\Review $review)
 * @method InternetCafe setSameAs(Property\SameAs $sameAs)
 * @method InternetCafe setSeeks(Property\Seeks $seeks)
 * @method InternetCafe setSponsor(Property\Sponsor $sponsor)
 * @method InternetCafe setSubOrganization(Property\SubOrganization $subOrganization)
 * @method InternetCafe setTaxID(Property\TaxID $taxID)
 * @method InternetCafe setTelephone(Property\Telephone $telephone)
 * @method InternetCafe setUrl(Property\Url $url)
 * @method InternetCafe setVatID(Property\VatID $vatID)
 */
class InternetCafe extends LocalBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/InternetCafe';
	}
}