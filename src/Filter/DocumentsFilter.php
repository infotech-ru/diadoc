<?php

namespace infotech\diadoc\Filter;

use DateTime;
use infotech\diadoc\Helper\DateHelper;

class DocumentsFilter
{
    public const DOCUMENT_TYPE_ANY = 'Any';
    public const DOCUMENT_TYPE_ANY_INVOICE = 'AnyInvoiceDocumentType';
    public const DOCUMENT_TYPE_ANY_BILATERAL = 'AnyBilateralDocumentType';
    public const DOCUMENT_TYPE_ANY_UNILATERAL = 'AnyUnilateralDocumentType';
    public const DOCUMENT_CLASS_INBOUND = 'Inbound';
    public const DOCUMENT_CLASS_OUTBOUND = 'Outbound';
    public const DOCUMENT_CLASS_INTERNAL = 'Internal';
    public const DOCUMENT_STATUS_ANY = '';
    public const DOCUMENT_STATUS_NOT_READ = 'NotRead';
    public const DOCUMENT_STATUS_NO_RECIPIENT_SIGNATURE_REQUEST = 'NoRecipientSignatureRequest';
    public const DOCUMENT_STATUS_WAIT_FOR_RECIPIENT_SIGNATURE = 'WaitingForRecipientSignature';
    public const DOCUMENT_STATUS_WITH_RECIPIENT_SIGNATURE = 'WithRecipientSignature';
    public const DOCUMENT_STATUS_WITH_SENDER_SIGNATURE = 'WithSenderSignature';
    public const DOCUMENT_STATUS_RECIPIENT_SIGNATURE_REQUEST_REJECT = 'RecipientSignatureRequestRejected';
    public const DOCUMENT_STATUS_WAIT_FOR_SENDER_SIGNATURE = 'WaitingForSenderSignature';
    public const DOCUMENT_STATUS_INVALID_SENDER_SIGNATURE = 'InvalidSenderSignature';
    public const DOCUMENT_STATUS_INVALID_RECIPIENT_SIGNATURE = 'InvalidRecipientSignature';
    public const DOCUMENT_STATUS_APPROVED = 'Approved';
    public const DOCUMENT_STATUS_DISAPPROVED = 'Disapproved';
    public const DOCUMENT_STATUS_WAITING_FOR_RESOLUTION = 'WaitingForResolution';
    public const DOCUMENT_STATUS_SIGNATURE_REQUEST_REJECTED = 'SignatureRequestRejected';
    public const DOCUMENT_STATUS_FINISHED = 'Finished';
    public const DOCUMENT_STATUS_HAVE_TO_CREATE_RECEIPT = 'HaveToCreateReceipt';
    public const DOCUMENT_STATUS_NOT_FINISHED = 'NotFinished';
    public const DOCUMENT_STATUS_INVOICE_AMENDMENT_REQUESTED = 'InvoiceAmendmentRequested';
    public const DOCUMENT_STATUS_REVOCATION_IS_REQUESTED_BY_ME = 'RevocationIsRequestedByMe';
    public const DOCUMENT_STATUS_REQUESTS_MY_REVOCATION = 'RequestsMyRevocation';
    public const DOCUMENT_STATUS_REVOCATION_ACCEPTED = 'RevocationAccepted';
    public const DOCUMENT_STATUS_REVOCATION_REJECTED = 'RevocationRejected';
    public const DOCUMENT_STATUS_REVOCATION_APPROVED = 'RevocationApproved';
    public const DOCUMENT_STATUS_REVOCATION_DISAPPROVED = 'RevocationDisapproved';
    public const DOCUMENT_STATUS_WAITING_FOR_REVOCATION_APPROVEMENT = 'WaitingForRevocationApprovement';
    public const DOCUMENT_STATUS_NOT_REVOKED = 'NotRevoked';
    public const DOCUMENT_STATUS_WAITING_FOR_PROXY_SIGNATURE = 'WaitingForProxySignature';
    public const DOCUMENT_STATUS_WITH_PROXY_SIGNATURE = 'WithProxySignature';
    public const DOCUMENT_STATUS_INVALID_PROXY_SIGNATURE = 'InvalidProxySignature';
    public const DOCUMENT_STATUS_PROXY_SIGNATURE_REJECTED = 'ProxySignatureRejected';
    public const DOCUMENT_STATUS_WAITING_FOR_INVOICE_RECEIPT = 'WaitingForInvoiceReceipt';
    public const DOCUMENT_STATUS_WAITING_FOR_RECEIPT = 'WaitingForReceipt';
    public const DOCUMENT_STATUS_REQUESTS_MY_SIGNATURE = 'RequestsMySignature';
    public const DOCUMENT_STATUS_ROAMING_NOTIFICATION_ERROR = 'RoamingNotificationError';

    private string $filterDocumentType = self::DOCUMENT_TYPE_ANY;
    private string $filterDocumentClass = self::DOCUMENT_CLASS_INTERNAL;
    private string $filterDocumentStatus = self::DOCUMENT_STATUS_ANY;
    private ?string $counteragentBoxId = null;
    private ?string $toDepartmentId = null;
    private ?DateTime $fromDate = null;
    private ?DateTime $toDate = null;
    private ?DateTime $fromDocumentDate = null;
    private ?DateTime $toDocumentDate = null;
    private ?string $departmentId = null;
    private ?bool $excludeSubdepartments = null;

    public static function create(): self
    {
        return new self();
    }

    public function getFilterDocumentType(): string
    {
        return $this->filterDocumentType;
    }

    public function setFilterDocumentType(string $filterDocumentType): self
    {
        $this->filterDocumentType = $filterDocumentType;

        return $this;
    }

    public function getFilterDocumentClass(): string
    {
        return $this->filterDocumentClass;
    }

    public function setFilterDocumentClass(string $filterDocumentClass): self
    {
        $this->filterDocumentClass = $filterDocumentClass;

        return $this;
    }

    public function getFilterDocumentStatus(): string
    {
        return $this->filterDocumentStatus;
    }

    public function setFilterDocumentStatus(string $filterDocumentStatus): self
    {
        $this->filterDocumentStatus = $filterDocumentStatus;

        return $this;
    }

    public function getCounteragentBoxId(): ?string
    {
        return $this->counteragentBoxId;
    }

    public function setCounteragentBoxId(string $counteragentBoxId): self
    {
        $this->counteragentBoxId = $counteragentBoxId;

        return $this;
    }

    public function getToDepartmentId(): ?string
    {
        return $this->toDepartmentId;
    }

    public function setToDepartmentId(string $toDepartmentId): self
    {
        $this->toDepartmentId = $toDepartmentId;

        return $this;
    }

    public function getFromDate(): ?DateTime
    {
        return $this->fromDate;
    }

    public function setFromDate(?DateTime $dateTime = null): self
    {
        $this->fromDate = $dateTime;

        return $this;
    }

    public function getToDate(): ?DateTime
    {
        return $this->toDate;
    }

    public function setToDate(?DateTime $dateTime = null): self
    {
        $this->toDate = $dateTime;

        return $this;
    }

    public function getFromDocumentDate(): ?DateTime
    {
        return $this->fromDocumentDate;
    }

    public function setFromDocumentDate(?DateTime $dateTime = null): self
    {
        $this->fromDocumentDate = $dateTime;

        return $this;
    }

    public function getToDocumentDate(): ?DateTime
    {
        return $this->toDocumentDate;
    }

    public function setToDocumentDate(?DateTime $dateTime = null): self
    {
        $this->toDocumentDate = $dateTime;

        return $this;
    }

    public function getDepartmentId(): ?string
    {
        return $this->departmentId;
    }

    public function setDepartmentId(string $departmentId): self
    {
        $this->departmentId = $departmentId;

        return $this;
    }

    public function isExcludeSubdepartments(): ?bool
    {
        return $this->excludeSubdepartments;
    }

    public function setExcludeSubdepartments(bool $excludeSubdepartments): self
    {
        $this->excludeSubdepartments = $excludeSubdepartments;

        return $this;
    }

    private function buildFilterCategory(): string
    {
        return sprintf('%s.%s%s', $this->filterDocumentType, $this->filterDocumentClass, $this->filterDocumentStatus);
    }

    /**
     * @return array{
     *     filterCategory: string,
     *     counteragentBoxId: string|null,
     *     toDepartmentId: string|null,
     *     timestampFromTicks: int|null,
     *     timestampToTicks: int|null,
     *     fromDocumentDate: string|null,
     *     toDocumentDate: string|null,
     *     departmentId: string|null,
     *     excludeSubdepartments: bool|null,
     * }
     */
    public function toFilter(): array
    {
        return [
            'filterCategory' => $this->buildFilterCategory(),
            'counteragentBoxId' => $this->counteragentBoxId,
            'toDepartmentId' => $this->toDepartmentId,
            'timestampFromTicks' => $this->fromDate !== null
                ? DateHelper::convertDateTimeToTicks($this->fromDate)
                : null,
            'timestampToTicks' => $this->toDate !== null ? DateHelper::convertDateTimeToTicks($this->toDate) : null,
            'fromDocumentDate' => $this->fromDocumentDate?->format('d.m.Y'),
            'toDocumentDate' => $this->toDocumentDate?->format('d.m.Y'),
            'departmentId' => $this->departmentId,
            'excludeSubdepartments' => $this->excludeSubdepartments,
        ];
    }
}
