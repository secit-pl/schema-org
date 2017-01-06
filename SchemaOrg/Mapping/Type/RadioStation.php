<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RadioStation.
 * 
 * @method RadioStation setAdditionalType(Property\AdditionalType $additionalType)
 * @method RadioStation setAddress(Property\Address $address)
 * @method RadioStation setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method RadioStation setAlternateName(Property\AlternateName $alternateName)
 * @method RadioStation setAlumni(Property\Alumni $alumni)
 * @method RadioStation setAreaServed(Property\AreaServed $areaServed)
 * @method RadioStation setAward(Property\Award $award)
 * @method RadioStation setBrand(Property\Brand $brand)
 * @method RadioStation setContactPoint(Property\ContactPoint $contactPoint)
 * @method RadioStation setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method RadioStation setDepartment(Property\Department $department)
 * @method RadioStation setDescription(Property\Description $description)
 * @method RadioStation setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method RadioStation setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method RadioStation setDuns(Property\Duns $duns)
 * @method RadioStation setEmail(Property\Email $email)
 * @method RadioStation setEmployee(Property\Employee $employee)
 * @method RadioStation setEvent(Property\Event $event)
 * @method RadioStation setFaxNumber(Property\FaxNumber $faxNumber)
 * @method RadioStation setFounder(Property\Founder $founder)
 * @method RadioStation setFoundingDate(Property\FoundingDate $foundingDate)
 * @method RadioStation setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method RadioStation setFunder(Property\Funder $funder)
 * @method RadioStation setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method RadioStation setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method RadioStation setHasPOS(Property\HasPOS $hasPOS)
 * @method RadioStation setImage(Property\Image $image)
 * @method RadioStation setIsicV4(Property\IsicV4 $isicV4)
 * @method RadioStation setLegalName(Property\LegalName $legalName)
 * @method RadioStation setLeiCode(Property\LeiCode $leiCode)
 * @method RadioStation setLocation(Property\Location $location)
 * @method RadioStation setLogo(Property\Logo $logo)
 * @method RadioStation setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method RadioStation setMakesOffer(Property\MakesOffer $makesOffer)
 * @method RadioStation setMember(Property\Member $member)
 * @method RadioStation setMemberOf(Property\MemberOf $memberOf)
 * @method RadioStation setNaics(Property\Naics $naics)
 * @method RadioStation setName(Property\Name $name)
 * @method RadioStation setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method RadioStation setOpeningHours(Property\OpeningHours $openingHours)
 * @method RadioStation setOwns(Property\Owns $owns)
 * @method RadioStation setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method RadioStation setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method RadioStation setPotentialAction(Property\PotentialAction $potentialAction)
 * @method RadioStation setPriceRange(Property\PriceRange $priceRange)
 * @method RadioStation setReview(Property\Review $review)
 * @method RadioStation setSameAs(Property\SameAs $sameAs)
 * @method RadioStation setSeeks(Property\Seeks $seeks)
 * @method RadioStation setSponsor(Property\Sponsor $sponsor)
 * @method RadioStation setSubOrganization(Property\SubOrganization $subOrganization)
 * @method RadioStation setTaxID(Property\TaxID $taxID)
 * @method RadioStation setTelephone(Property\Telephone $telephone)
 * @method RadioStation setUrl(Property\Url $url)
 * @method RadioStation setVatID(Property\VatID $vatID)
 */
class RadioStation extends LocalBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RadioStation';
	}
}