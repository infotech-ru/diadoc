<?php

namespace infotech\diadoc;

use DateTime;
use Diadoc\Api\Proto\Box;
use Diadoc\Api\Proto\Docflow\GetDocflowBatchRequest;
use Diadoc\Api\Proto\Docflow\GetDocflowBatchResponse;
use Diadoc\Api\Proto\Docflow\GetDocflowEventsResponse;
use Diadoc\Api\Proto\Docflow\GetDocflowsByPacketIdResponse;
use Diadoc\Api\Proto\Docflow\SearchDocflowsResponse;
use Diadoc\Api\Proto\DocumentId;
use Diadoc\Api\Proto\Documents\Document;
use Diadoc\Api\Proto\Documents\DocumentList;
use Diadoc\Api\Proto\Events\BoxEvent;
use Diadoc\Api\Proto\Events\BoxEventList;
use Diadoc\Api\Proto\Events\Message;
use Diadoc\Api\Proto\Organization;
use infotech\diadoc\Exception\DiadocApiException;
use infotech\diadoc\Filter\DocumentsFilter;

class BoxApi
{
    private ?OrganizationApi $organizationApi = null;

    public function __construct(private DiadocApi $diadocApi, private string $boxId)
    {
    }

    public function delete(string $messageId, ?string $documentId = null): bool
    {
        return $this->diadocApi->delete($this->boxId, $messageId, $documentId);
    }

    public function forwardDocument(string $toBoxId, DocumentId $documentId): string
    {
        return $this->diadocApi->forwardDocument($this->boxId, $toBoxId, $documentId);
    }

    public function getBox(): Box
    {
        return $this->diadocApi->getBox($this->boxId);
    }

    public function getDocflowEvents(
        ?DateTime $from = null,
        ?DateTime $to = null,
        ?int $sortDirection = null,
        bool $populateDocuments = false,
        bool $populatePreviousDocumentStates = false,
        bool $injectEntityContent = false,
        ?string $afterIndexKey = null,
    ): GetDocflowEventsResponse {
        return $this->diadocApi->getDocflowEvents(
            $this->boxId,
            $from,
            $to,
            $sortDirection,
            $populateDocuments,
            $populatePreviousDocumentStates,
            $injectEntityContent,
            $afterIndexKey,
        );
    }

    public function getDocflows(GetDocflowBatchRequest $getDocflowBatchRequest): GetDocflowBatchResponse
    {
        return $this->diadocApi->getDocflows($this->boxId, $getDocflowBatchRequest);
    }

    public function getDocflowsByPacketId(
        string $packetId,
        bool $injectEntityContent = false,
        ?int $afterIndexKey = null,
        int $count = 100,
    ): GetDocflowsByPacketIdResponse {
        return $this->diadocApi->getDocflowsByPacketId(
            $this->boxId,
            $packetId,
            $injectEntityContent,
            $afterIndexKey,
            $count,
        );
    }

    public function getDocument(string $messageId, string $entityId): Document
    {
        return $this->diadocApi->getDocument($this->boxId, $messageId, $entityId);
    }

    public function getDocuments(
        ?DocumentsFilter $documentsFilter = null,
        ?int $sortDirection = null,
        mixed $afterIndexKey = null,
    ): DocumentList {
        return $this->diadocApi->getDocuments($this->boxId, $documentsFilter, $sortDirection, $afterIndexKey);
    }

    public function getEntityContent(string $messageId, string $entityId): string
    {
        return $this->diadocApi->getEntityContent($this->boxId, $messageId, $entityId);
    }

    public function getEvent(string $eventId): BoxEvent
    {
        return $this->diadocApi->getEvent($this->boxId, $eventId);
    }

    public function getMessage(string $messageId, ?string $entityId = null, ?string $originalSignature = null): Message
    {
        return $this->diadocApi->getMessage($this->boxId, $messageId, $entityId, $originalSignature);
    }

    public function getNewEvents(?string $afterEventId = null): BoxEventList
    {
        return $this->diadocApi->getNewEvents($this->boxId, $afterEventId);
    }

    public function getOrganization(): ?Organization
    {
        return $this->getBox()->getOrganization();
    }

    public function searchDocflows(
        string $queryString,
        ?int $searchScope = null,
        ?int $firstIndex = null,
        int $count = 100,
    ): SearchDocflowsResponse {
        return $this->diadocApi->searchDocflows($this->boxId, $queryString, $searchScope, $firstIndex, $count);
    }


    public function getDiadocApi(): DiadocApi
    {
        return $this->diadocApi;
    }

    public function getOrganizationApi(): OrganizationApi
    {
        if ($this->organizationApi === null) {
            $orgId = $this->getOrganization()?->getOrgId();
            if ($orgId === null) {
                throw new DiadocApiException();
            }

            $this->organizationApi = new OrganizationApi(
                $this->diadocApi,
                $orgId,
            );
        }

        return $this->organizationApi;
    }
}
