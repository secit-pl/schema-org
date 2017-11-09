<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Electrician.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\ElectricianType instead.
 * 
 * @method Electrician setAdditionalType(Property\AdditionalType $additionalType)
 * @method Electrician setAddress(Property\Address $address)
 * @method Electrician setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Electrician setAlternateName(Property\AlternateName $alternateName)
 * @method Electrician setAlumni(Property\Alumni $alumni)
 * @method Electrician setAreaServed(Property\AreaServed $areaServed)
 * @method Electrician setAward(Property\Award $award)
 * @method Electrician setBrand(Property\Brand $brand)
 * @method Electrician setContactPoint(Property\ContactPoint $contactPoint)
 * @method Electrician setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method Electrician setDepartment(Property\Department $department)
 * @method Electrician setDescription(Property\Description $description)
 * @method Electrician setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Electrician setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method Electrician setDuns(Property\Duns $duns)
 * @method Electrician setEmail(Property\Email $email)
 * @method Electrician setEmployee(Property\Employee $employee)
 * @method Electrician setEvent(Property\Event $event)
 * @method Electrician setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Electrician setFounder(Property\Founder $founder)
 * @method Electrician setFoundingDate(Property\FoundingDate $foundingDate)
 * @method Electrician setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method Electrician setFunder(Property\Funder $funder)
 * @method Electrician setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Electrician setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method Electrician setHasPOS(Property\HasPOS $hasPOS)
 * @method Electrician setIdentifier(Property\Identifier $identifier)
 * @method Electrician setImage(Property\Image $image)
 * @method Electrician setIsicV4(Property\IsicV4 $isicV4)
 * @method Electrician setLegalName(Property\LegalName $legalName)
 * @method Electrician setLeiCode(Property\LeiCode $leiCode)
 * @method Electrician setLocation(Property\Location $location)
 * @method Electrician setLogo(Property\Logo $logo)
 * @method Electrician setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Electrician setMakesOffer(Property\MakesOffer $makesOffer)
 * @method Electrician setMember(Property\Member $member)
 * @method Electrician setMemberOf(Property\MemberOf $memberOf)
 * @method Electrician setNaics(Property\Naics $naics)
 * @method Electrician setName(Property\Name $name)
 * @method Electrician setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method Electrician setOpeningHours(Property\OpeningHours $openingHours)
 * @method Electrician setOwns(Property\Owns $owns)
 * @method Electrician setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method Electrician setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method Electrician setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Electrician setPriceRange(Property\PriceRange $priceRange)
 * @method Electrician setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method Electrician setReview(Property\Review $review)
 * @method Electrician setSameAs(Property\SameAs $sameAs)
 * @method Electrician setSeeks(Property\Seeks $seeks)
 * @method Electrician setSponsor(Property\Sponsor $sponsor)
 * @method Electrician setSubOrganization(Property\SubOrganization $subOrganization)
 * @method Electrician setTaxID(Property\TaxID $taxID)
 * @method Electrician setTelephone(Property\Telephone $telephone)
 * @method Electrician setUrl(Property\Url $url)
 * @method Electrician setVatID(Property\VatID $vatID)
 */
class Electrician extends HomeAndConstructionBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Electrician';
	}
}