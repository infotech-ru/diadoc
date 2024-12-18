<?php

namespace infotech\diadoc;

use Diadoc\Api\Proto\AsyncMethodResult;
use Diadoc\Api\Proto\Counteragent;
use Diadoc\Api\Proto\CounteragentCertificateList;
use Diadoc\Api\Proto\CounteragentList;
use Diadoc\Api\Proto\Department;
use Diadoc\Api\Proto\GetOrganizationsByInnListResponse;
use Diadoc\Api\Proto\InvitationDocument;
use Diadoc\Api\Proto\Organization;
use Diadoc\Api\Proto\OrganizationUserPermissions;
use Diadoc\Api\Proto\OrganizationUsersList;

class OrganizationApi
{
    public function __construct(private DiadocApi $diadocApi, private string $orgId)
    {
    }

    public function acquireCounteragent(
        string $counteragentOrgId,
        string $myDepartmentId,
        ?string $comment = null,
    ): string {
        return $this->diadocApi->acquireCounteragent($this->orgId, $counteragentOrgId, $myDepartmentId, $comment);
    }

    public function acquireCounteragentByInnWithDocument(
        string $counteragentInn,
        ?string $myDepartmentId = null,
        ?InvitationDocument $invitationDocument = null,
        string $messageToContragent = '',
    ): AsyncMethodResult {
        return $this->diadocApi->acquireCounteragentByInnWithDocument(
            $this->orgId,
            $counteragentInn,
            $myDepartmentId,
            $invitationDocument,
            $messageToContragent,
        );
    }

    public function acquireCounteragentWithDocument(
        string $counteragentOrgId,
        string $myDepartmentId,
        ?InvitationDocument $invitationDocument = null,
        string $messageToContragent = '',
    ): AsyncMethodResult {
        return $this->diadocApi->acquireCounteragentWithDocument(
            $this->orgId,
            $counteragentOrgId,
            $myDepartmentId,
            $invitationDocument,
            $messageToContragent,
        );
    }

    public function breakWithCounteragent(string $counteragentOrgId, string $comment = ''): string
    {
        return $this->diadocApi->breakWithCounteragent($this->orgId, $counteragentOrgId, $comment);
    }

    public function getCountragent(string $counteragentOrgId): Counteragent
    {
        return $this->diadocApi->getCountragent($this->orgId, $counteragentOrgId);
    }

    public function getCounteragentCertificates(string $counteragentOrgId): CounteragentCertificateList
    {
        return $this->diadocApi->getCounteragentCertificates($this->orgId, $counteragentOrgId);
    }

    public function getCountragentV2(string $counteragentOrgId): Counteragent
    {
        return $this->diadocApi->getCountragentV2($this->orgId, $counteragentOrgId);
    }

    public function getCountragents(
        ?string $counteragentStatus = null,
        ?int $afterIndexKey = null,
    ): CounteragentList {
        return $this->diadocApi->getCountragents($this->orgId, $counteragentStatus, $afterIndexKey);
    }

    public function getCountragentsV2(
        ?string $counteragentStatus = null,
        ?string $afterIndexKey = null,
    ): CounteragentList {
        return $this->diadocApi->getCountragentsV2($this->orgId, $counteragentStatus, $afterIndexKey);
    }

    public function getDepartment(string $departmentId): Department
    {
        return $this->diadocApi->getDepartment($this->orgId, $departmentId);
    }

    public function getMyPermissions(): OrganizationUserPermissions
    {
        return $this->diadocApi->getMyPermissions($this->orgId);
    }

    public function getOrganization(): Organization
    {
        return $this->diadocApi->getOrganizationById($this->orgId);
    }

    public function getOrganizationsByInnList(array $innList = []): GetOrganizationsByInnListResponse
    {
        return $this->diadocApi->getOrganizationsByInnList($this->orgId, $innList);
    }

    public function getOrganizationUsers(): OrganizationUsersList
    {
        return $this->diadocApi->getOrganizationUsers($this->orgId);
    }


    public function getDiadocApi(): DiadocApi
    {
        return $this->diadocApi;
    }
}
