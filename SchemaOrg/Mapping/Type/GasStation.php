<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class GasStation.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\GasStationType instead.
 * 
 * @method GasStation setAdditionalType(Property\AdditionalType $additionalType)
 * @method GasStation setAddress(Property\Address $address)
 * @method GasStation setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method GasStation setAlternateName(Property\AlternateName $alternateName)
 * @method GasStation setAlumni(Property\Alumni $alumni)
 * @method GasStation setAreaServed(Property\AreaServed $areaServed)
 * @method GasStation setAward(Property\Award $award)
 * @method GasStation setBrand(Property\Brand $brand)
 * @method GasStation setContactPoint(Property\ContactPoint $contactPoint)
 * @method GasStation setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method GasStation setDepartment(Property\Department $department)
 * @method GasStation setDescription(Property\Description $description)
 * @method GasStation setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method GasStation setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method GasStation setDuns(Property\Duns $duns)
 * @method GasStation setEmail(Property\Email $email)
 * @method GasStation setEmployee(Property\Employee $employee)
 * @method GasStation setEvent(Property\Event $event)
 * @method GasStation setFaxNumber(Property\FaxNumber $faxNumber)
 * @method GasStation setFounder(Property\Founder $founder)
 * @method GasStation setFoundingDate(Property\FoundingDate $foundingDate)
 * @method GasStation setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method GasStation setFunder(Property\Funder $funder)
 * @method GasStation setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method GasStation setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method GasStation setHasPOS(Property\HasPOS $hasPOS)
 * @method GasStation setIdentifier(Property\Identifier $identifier)
 * @method GasStation setImage(Property\Image $image)
 * @method GasStation setIsicV4(Property\IsicV4 $isicV4)
 * @method GasStation setLegalName(Property\LegalName $legalName)
 * @method GasStation setLeiCode(Property\LeiCode $leiCode)
 * @method GasStation setLocation(Property\Location $location)
 * @method GasStation setLogo(Property\Logo $logo)
 * @method GasStation setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method GasStation setMakesOffer(Property\MakesOffer $makesOffer)
 * @method GasStation setMember(Property\Member $member)
 * @method GasStation setMemberOf(Property\MemberOf $memberOf)
 * @method GasStation setNaics(Property\Naics $naics)
 * @method GasStation setName(Property\Name $name)
 * @method GasStation setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method GasStation setOpeningHours(Property\OpeningHours $openingHours)
 * @method GasStation setOwns(Property\Owns $owns)
 * @method GasStation setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method GasStation setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method GasStation setPotentialAction(Property\PotentialAction $potentialAction)
 * @method GasStation setPriceRange(Property\PriceRange $priceRange)
 * @method GasStation setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method GasStation setReview(Property\Review $review)
 * @method GasStation setSameAs(Property\SameAs $sameAs)
 * @method GasStation setSeeks(Property\Seeks $seeks)
 * @method GasStation setSponsor(Property\Sponsor $sponsor)
 * @method GasStation setSubOrganization(Property\SubOrganization $subOrganization)
 * @method GasStation setTaxID(Property\TaxID $taxID)
 * @method GasStation setTelephone(Property\Telephone $telephone)
 * @method GasStation setUrl(Property\Url $url)
 * @method GasStation setVatID(Property\VatID $vatID)
 */
class GasStation extends AutomotiveBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/GasStation';
	}
}