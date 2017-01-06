<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TravelAgency.
 * 
 * @method TravelAgency setAdditionalType(Property\AdditionalType $additionalType)
 * @method TravelAgency setAddress(Property\Address $address)
 * @method TravelAgency setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method TravelAgency setAlternateName(Property\AlternateName $alternateName)
 * @method TravelAgency setAlumni(Property\Alumni $alumni)
 * @method TravelAgency setAreaServed(Property\AreaServed $areaServed)
 * @method TravelAgency setAward(Property\Award $award)
 * @method TravelAgency setBrand(Property\Brand $brand)
 * @method TravelAgency setContactPoint(Property\ContactPoint $contactPoint)
 * @method TravelAgency setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method TravelAgency setDepartment(Property\Department $department)
 * @method TravelAgency setDescription(Property\Description $description)
 * @method TravelAgency setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method TravelAgency setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method TravelAgency setDuns(Property\Duns $duns)
 * @method TravelAgency setEmail(Property\Email $email)
 * @method TravelAgency setEmployee(Property\Employee $employee)
 * @method TravelAgency setEvent(Property\Event $event)
 * @method TravelAgency setFaxNumber(Property\FaxNumber $faxNumber)
 * @method TravelAgency setFounder(Property\Founder $founder)
 * @method TravelAgency setFoundingDate(Property\FoundingDate $foundingDate)
 * @method TravelAgency setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method TravelAgency setFunder(Property\Funder $funder)
 * @method TravelAgency setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method TravelAgency setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method TravelAgency setHasPOS(Property\HasPOS $hasPOS)
 * @method TravelAgency setImage(Property\Image $image)
 * @method TravelAgency setIsicV4(Property\IsicV4 $isicV4)
 * @method TravelAgency setLegalName(Property\LegalName $legalName)
 * @method TravelAgency setLeiCode(Property\LeiCode $leiCode)
 * @method TravelAgency setLocation(Property\Location $location)
 * @method TravelAgency setLogo(Property\Logo $logo)
 * @method TravelAgency setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method TravelAgency setMakesOffer(Property\MakesOffer $makesOffer)
 * @method TravelAgency setMember(Property\Member $member)
 * @method TravelAgency setMemberOf(Property\MemberOf $memberOf)
 * @method TravelAgency setNaics(Property\Naics $naics)
 * @method TravelAgency setName(Property\Name $name)
 * @method TravelAgency setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method TravelAgency setOpeningHours(Property\OpeningHours $openingHours)
 * @method TravelAgency setOwns(Property\Owns $owns)
 * @method TravelAgency setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method TravelAgency setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method TravelAgency setPotentialAction(Property\PotentialAction $potentialAction)
 * @method TravelAgency setPriceRange(Property\PriceRange $priceRange)
 * @method TravelAgency setReview(Property\Review $review)
 * @method TravelAgency setSameAs(Property\SameAs $sameAs)
 * @method TravelAgency setSeeks(Property\Seeks $seeks)
 * @method TravelAgency setSponsor(Property\Sponsor $sponsor)
 * @method TravelAgency setSubOrganization(Property\SubOrganization $subOrganization)
 * @method TravelAgency setTaxID(Property\TaxID $taxID)
 * @method TravelAgency setTelephone(Property\Telephone $telephone)
 * @method TravelAgency setUrl(Property\Url $url)
 * @method TravelAgency setVatID(Property\VatID $vatID)
 */
class TravelAgency extends LocalBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TravelAgency';
	}
}