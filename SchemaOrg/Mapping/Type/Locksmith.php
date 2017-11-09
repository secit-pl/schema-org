<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Locksmith.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\LocksmithType instead.
 * 
 * @method Locksmith setAdditionalType(Property\AdditionalType $additionalType)
 * @method Locksmith setAddress(Property\Address $address)
 * @method Locksmith setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Locksmith setAlternateName(Property\AlternateName $alternateName)
 * @method Locksmith setAlumni(Property\Alumni $alumni)
 * @method Locksmith setAreaServed(Property\AreaServed $areaServed)
 * @method Locksmith setAward(Property\Award $award)
 * @method Locksmith setBrand(Property\Brand $brand)
 * @method Locksmith setContactPoint(Property\ContactPoint $contactPoint)
 * @method Locksmith setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method Locksmith setDepartment(Property\Department $department)
 * @method Locksmith setDescription(Property\Description $description)
 * @method Locksmith setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Locksmith setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method Locksmith setDuns(Property\Duns $duns)
 * @method Locksmith setEmail(Property\Email $email)
 * @method Locksmith setEmployee(Property\Employee $employee)
 * @method Locksmith setEvent(Property\Event $event)
 * @method Locksmith setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Locksmith setFounder(Property\Founder $founder)
 * @method Locksmith setFoundingDate(Property\FoundingDate $foundingDate)
 * @method Locksmith setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method Locksmith setFunder(Property\Funder $funder)
 * @method Locksmith setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Locksmith setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method Locksmith setHasPOS(Property\HasPOS $hasPOS)
 * @method Locksmith setIdentifier(Property\Identifier $identifier)
 * @method Locksmith setImage(Property\Image $image)
 * @method Locksmith setIsicV4(Property\IsicV4 $isicV4)
 * @method Locksmith setLegalName(Property\LegalName $legalName)
 * @method Locksmith setLeiCode(Property\LeiCode $leiCode)
 * @method Locksmith setLocation(Property\Location $location)
 * @method Locksmith setLogo(Property\Logo $logo)
 * @method Locksmith setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Locksmith setMakesOffer(Property\MakesOffer $makesOffer)
 * @method Locksmith setMember(Property\Member $member)
 * @method Locksmith setMemberOf(Property\MemberOf $memberOf)
 * @method Locksmith setNaics(Property\Naics $naics)
 * @method Locksmith setName(Property\Name $name)
 * @method Locksmith setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method Locksmith setOpeningHours(Property\OpeningHours $openingHours)
 * @method Locksmith setOwns(Property\Owns $owns)
 * @method Locksmith setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method Locksmith setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method Locksmith setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Locksmith setPriceRange(Property\PriceRange $priceRange)
 * @method Locksmith setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method Locksmith setReview(Property\Review $review)
 * @method Locksmith setSameAs(Property\SameAs $sameAs)
 * @method Locksmith setSeeks(Property\Seeks $seeks)
 * @method Locksmith setSponsor(Property\Sponsor $sponsor)
 * @method Locksmith setSubOrganization(Property\SubOrganization $subOrganization)
 * @method Locksmith setTaxID(Property\TaxID $taxID)
 * @method Locksmith setTelephone(Property\Telephone $telephone)
 * @method Locksmith setUrl(Property\Url $url)
 * @method Locksmith setVatID(Property\VatID $vatID)
 */
class Locksmith extends HomeAndConstructionBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Locksmith';
	}
}