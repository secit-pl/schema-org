<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MiddleSchool.
 * 
 * @method MiddleSchool setAdditionalType(Property\AdditionalType $additionalType)
 * @method MiddleSchool setAddress(Property\Address $address)
 * @method MiddleSchool setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method MiddleSchool setAlternateName(Property\AlternateName $alternateName)
 * @method MiddleSchool setAlumni(Property\Alumni $alumni)
 * @method MiddleSchool setAreaServed(Property\AreaServed $areaServed)
 * @method MiddleSchool setAward(Property\Award $award)
 * @method MiddleSchool setBrand(Property\Brand $brand)
 * @method MiddleSchool setContactPoint(Property\ContactPoint $contactPoint)
 * @method MiddleSchool setDepartment(Property\Department $department)
 * @method MiddleSchool setDescription(Property\Description $description)
 * @method MiddleSchool setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method MiddleSchool setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method MiddleSchool setDuns(Property\Duns $duns)
 * @method MiddleSchool setEmail(Property\Email $email)
 * @method MiddleSchool setEmployee(Property\Employee $employee)
 * @method MiddleSchool setEvent(Property\Event $event)
 * @method MiddleSchool setFaxNumber(Property\FaxNumber $faxNumber)
 * @method MiddleSchool setFounder(Property\Founder $founder)
 * @method MiddleSchool setFoundingDate(Property\FoundingDate $foundingDate)
 * @method MiddleSchool setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method MiddleSchool setFunder(Property\Funder $funder)
 * @method MiddleSchool setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method MiddleSchool setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method MiddleSchool setHasPOS(Property\HasPOS $hasPOS)
 * @method MiddleSchool setImage(Property\Image $image)
 * @method MiddleSchool setIsicV4(Property\IsicV4 $isicV4)
 * @method MiddleSchool setLegalName(Property\LegalName $legalName)
 * @method MiddleSchool setLeiCode(Property\LeiCode $leiCode)
 * @method MiddleSchool setLocation(Property\Location $location)
 * @method MiddleSchool setLogo(Property\Logo $logo)
 * @method MiddleSchool setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method MiddleSchool setMakesOffer(Property\MakesOffer $makesOffer)
 * @method MiddleSchool setMember(Property\Member $member)
 * @method MiddleSchool setMemberOf(Property\MemberOf $memberOf)
 * @method MiddleSchool setNaics(Property\Naics $naics)
 * @method MiddleSchool setName(Property\Name $name)
 * @method MiddleSchool setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method MiddleSchool setOwns(Property\Owns $owns)
 * @method MiddleSchool setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method MiddleSchool setPotentialAction(Property\PotentialAction $potentialAction)
 * @method MiddleSchool setReview(Property\Review $review)
 * @method MiddleSchool setSameAs(Property\SameAs $sameAs)
 * @method MiddleSchool setSeeks(Property\Seeks $seeks)
 * @method MiddleSchool setSponsor(Property\Sponsor $sponsor)
 * @method MiddleSchool setSubOrganization(Property\SubOrganization $subOrganization)
 * @method MiddleSchool setTaxID(Property\TaxID $taxID)
 * @method MiddleSchool setTelephone(Property\Telephone $telephone)
 * @method MiddleSchool setUrl(Property\Url $url)
 * @method MiddleSchool setVatID(Property\VatID $vatID)
 */
class MiddleSchool extends EducationalOrganization {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MiddleSchool';
	}
}