<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AutoRepair.
 * 
 * @method AutoRepair setAdditionalType(Property\AdditionalType $additionalType)
 * @method AutoRepair setAddress(Property\Address $address)
 * @method AutoRepair setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method AutoRepair setAlternateName(Property\AlternateName $alternateName)
 * @method AutoRepair setAlumni(Property\Alumni $alumni)
 * @method AutoRepair setAreaServed(Property\AreaServed $areaServed)
 * @method AutoRepair setAward(Property\Award $award)
 * @method AutoRepair setBrand(Property\Brand $brand)
 * @method AutoRepair setContactPoint(Property\ContactPoint $contactPoint)
 * @method AutoRepair setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method AutoRepair setDepartment(Property\Department $department)
 * @method AutoRepair setDescription(Property\Description $description)
 * @method AutoRepair setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method AutoRepair setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method AutoRepair setDuns(Property\Duns $duns)
 * @method AutoRepair setEmail(Property\Email $email)
 * @method AutoRepair setEmployee(Property\Employee $employee)
 * @method AutoRepair setEvent(Property\Event $event)
 * @method AutoRepair setFaxNumber(Property\FaxNumber $faxNumber)
 * @method AutoRepair setFounder(Property\Founder $founder)
 * @method AutoRepair setFoundingDate(Property\FoundingDate $foundingDate)
 * @method AutoRepair setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method AutoRepair setFunder(Property\Funder $funder)
 * @method AutoRepair setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method AutoRepair setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method AutoRepair setHasPOS(Property\HasPOS $hasPOS)
 * @method AutoRepair setIdentifier(Property\Identifier $identifier)
 * @method AutoRepair setImage(Property\Image $image)
 * @method AutoRepair setIsicV4(Property\IsicV4 $isicV4)
 * @method AutoRepair setLegalName(Property\LegalName $legalName)
 * @method AutoRepair setLeiCode(Property\LeiCode $leiCode)
 * @method AutoRepair setLocation(Property\Location $location)
 * @method AutoRepair setLogo(Property\Logo $logo)
 * @method AutoRepair setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method AutoRepair setMakesOffer(Property\MakesOffer $makesOffer)
 * @method AutoRepair setMember(Property\Member $member)
 * @method AutoRepair setMemberOf(Property\MemberOf $memberOf)
 * @method AutoRepair setNaics(Property\Naics $naics)
 * @method AutoRepair setName(Property\Name $name)
 * @method AutoRepair setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method AutoRepair setOpeningHours(Property\OpeningHours $openingHours)
 * @method AutoRepair setOwns(Property\Owns $owns)
 * @method AutoRepair setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method AutoRepair setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method AutoRepair setPotentialAction(Property\PotentialAction $potentialAction)
 * @method AutoRepair setPriceRange(Property\PriceRange $priceRange)
 * @method AutoRepair setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method AutoRepair setReview(Property\Review $review)
 * @method AutoRepair setSameAs(Property\SameAs $sameAs)
 * @method AutoRepair setSeeks(Property\Seeks $seeks)
 * @method AutoRepair setSponsor(Property\Sponsor $sponsor)
 * @method AutoRepair setSubOrganization(Property\SubOrganization $subOrganization)
 * @method AutoRepair setTaxID(Property\TaxID $taxID)
 * @method AutoRepair setTelephone(Property\Telephone $telephone)
 * @method AutoRepair setUrl(Property\Url $url)
 * @method AutoRepair setVatID(Property\VatID $vatID)
 */
class AutoRepair extends AutomotiveBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AutoRepair';
	}
}