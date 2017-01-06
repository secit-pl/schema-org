<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Physician.
 * 
 * @method Physician setAdditionalType(Property\AdditionalType $additionalType)
 * @method Physician setAddress(Property\Address $address)
 * @method Physician setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Physician setAlternateName(Property\AlternateName $alternateName)
 * @method Physician setAlumni(Property\Alumni $alumni)
 * @method Physician setAreaServed(Property\AreaServed $areaServed)
 * @method Physician setAward(Property\Award $award)
 * @method Physician setBrand(Property\Brand $brand)
 * @method Physician setContactPoint(Property\ContactPoint $contactPoint)
 * @method Physician setDepartment(Property\Department $department)
 * @method Physician setDescription(Property\Description $description)
 * @method Physician setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Physician setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method Physician setDuns(Property\Duns $duns)
 * @method Physician setEmail(Property\Email $email)
 * @method Physician setEmployee(Property\Employee $employee)
 * @method Physician setEvent(Property\Event $event)
 * @method Physician setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Physician setFounder(Property\Founder $founder)
 * @method Physician setFoundingDate(Property\FoundingDate $foundingDate)
 * @method Physician setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method Physician setFunder(Property\Funder $funder)
 * @method Physician setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Physician setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method Physician setHasPOS(Property\HasPOS $hasPOS)
 * @method Physician setImage(Property\Image $image)
 * @method Physician setIsicV4(Property\IsicV4 $isicV4)
 * @method Physician setLegalName(Property\LegalName $legalName)
 * @method Physician setLeiCode(Property\LeiCode $leiCode)
 * @method Physician setLocation(Property\Location $location)
 * @method Physician setLogo(Property\Logo $logo)
 * @method Physician setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Physician setMakesOffer(Property\MakesOffer $makesOffer)
 * @method Physician setMember(Property\Member $member)
 * @method Physician setMemberOf(Property\MemberOf $memberOf)
 * @method Physician setNaics(Property\Naics $naics)
 * @method Physician setName(Property\Name $name)
 * @method Physician setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method Physician setOwns(Property\Owns $owns)
 * @method Physician setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method Physician setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Physician setReview(Property\Review $review)
 * @method Physician setSameAs(Property\SameAs $sameAs)
 * @method Physician setSeeks(Property\Seeks $seeks)
 * @method Physician setSponsor(Property\Sponsor $sponsor)
 * @method Physician setSubOrganization(Property\SubOrganization $subOrganization)
 * @method Physician setTaxID(Property\TaxID $taxID)
 * @method Physician setTelephone(Property\Telephone $telephone)
 * @method Physician setUrl(Property\Url $url)
 * @method Physician setVatID(Property\VatID $vatID)
 */
class Physician extends MedicalOrganization {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Physician';
	}
}