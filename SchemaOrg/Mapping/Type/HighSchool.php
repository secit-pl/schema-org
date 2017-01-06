<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class HighSchool.
 * 
 * @method HighSchool setAdditionalType(Property\AdditionalType $additionalType)
 * @method HighSchool setAddress(Property\Address $address)
 * @method HighSchool setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method HighSchool setAlternateName(Property\AlternateName $alternateName)
 * @method HighSchool setAlumni(Property\Alumni $alumni)
 * @method HighSchool setAreaServed(Property\AreaServed $areaServed)
 * @method HighSchool setAward(Property\Award $award)
 * @method HighSchool setBrand(Property\Brand $brand)
 * @method HighSchool setContactPoint(Property\ContactPoint $contactPoint)
 * @method HighSchool setDepartment(Property\Department $department)
 * @method HighSchool setDescription(Property\Description $description)
 * @method HighSchool setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method HighSchool setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method HighSchool setDuns(Property\Duns $duns)
 * @method HighSchool setEmail(Property\Email $email)
 * @method HighSchool setEmployee(Property\Employee $employee)
 * @method HighSchool setEvent(Property\Event $event)
 * @method HighSchool setFaxNumber(Property\FaxNumber $faxNumber)
 * @method HighSchool setFounder(Property\Founder $founder)
 * @method HighSchool setFoundingDate(Property\FoundingDate $foundingDate)
 * @method HighSchool setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method HighSchool setFunder(Property\Funder $funder)
 * @method HighSchool setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method HighSchool setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method HighSchool setHasPOS(Property\HasPOS $hasPOS)
 * @method HighSchool setImage(Property\Image $image)
 * @method HighSchool setIsicV4(Property\IsicV4 $isicV4)
 * @method HighSchool setLegalName(Property\LegalName $legalName)
 * @method HighSchool setLeiCode(Property\LeiCode $leiCode)
 * @method HighSchool setLocation(Property\Location $location)
 * @method HighSchool setLogo(Property\Logo $logo)
 * @method HighSchool setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method HighSchool setMakesOffer(Property\MakesOffer $makesOffer)
 * @method HighSchool setMember(Property\Member $member)
 * @method HighSchool setMemberOf(Property\MemberOf $memberOf)
 * @method HighSchool setNaics(Property\Naics $naics)
 * @method HighSchool setName(Property\Name $name)
 * @method HighSchool setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method HighSchool setOwns(Property\Owns $owns)
 * @method HighSchool setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method HighSchool setPotentialAction(Property\PotentialAction $potentialAction)
 * @method HighSchool setReview(Property\Review $review)
 * @method HighSchool setSameAs(Property\SameAs $sameAs)
 * @method HighSchool setSeeks(Property\Seeks $seeks)
 * @method HighSchool setSponsor(Property\Sponsor $sponsor)
 * @method HighSchool setSubOrganization(Property\SubOrganization $subOrganization)
 * @method HighSchool setTaxID(Property\TaxID $taxID)
 * @method HighSchool setTelephone(Property\Telephone $telephone)
 * @method HighSchool setUrl(Property\Url $url)
 * @method HighSchool setVatID(Property\VatID $vatID)
 */
class HighSchool extends EducationalOrganization {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HighSchool';
	}
}