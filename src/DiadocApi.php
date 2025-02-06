<?php

namespace infotech\diadoc;

use DateTime;
use Diadoc\Api\Proto\AcquireCounteragentRequest;
use Diadoc\Api\Proto\AcquireCounteragentResult;
use Diadoc\Api\Proto\AsyncMethodResult;
use Diadoc\Api\Proto\Box;
use Diadoc\Api\Proto\Counteragent;
use Diadoc\Api\Proto\CounteragentCertificateList;
use Diadoc\Api\Proto\CounteragentList;
use Diadoc\Api\Proto\Department;
use Diadoc\Api\Proto\Docflow\GetDocflowBatchRequest;
use Diadoc\Api\Proto\Docflow\GetDocflowBatchResponse;
use Diadoc\Api\Proto\Docflow\GetDocflowEventsRequest;
use Diadoc\Api\Proto\Docflow\GetDocflowEventsResponse;
use Diadoc\Api\Proto\Docflow\GetDocflowsByPacketIdRequest;
use Diadoc\Api\Proto\Docflow\GetDocflowsByPacketIdResponse;
use Diadoc\Api\Proto\Docflow\SearchDocflowsRequest;
use Diadoc\Api\Proto\Docflow\SearchDocflowsResponse;
use Diadoc\Api\Proto\DocumentId;
use Diadoc\Api\Proto\Documents\Document;
use Diadoc\Api\Proto\Documents\DocumentList;
use Diadoc\Api\Proto\Documents\Types\GetDocumentTypesResponseV2;
use Diadoc\Api\Proto\Events\BoxEvent;
use Diadoc\Api\Proto\Events\BoxEventList;
use Diadoc\Api\Proto\Events\Message;
use Diadoc\Api\Proto\Events\MessagePatch;
use Diadoc\Api\Proto\Events\MessagePatchToPost;
use Diadoc\Api\Proto\Events\MessageToPost;
use Diadoc\Api\Proto\Events\SignedContent;
use Diadoc\Api\Proto\Events\Template;
use Diadoc\Api\Proto\Events\TemplateToPost;
use Diadoc\Api\Proto\Forwarding\ForwardDocumentRequest;
use Diadoc\Api\Proto\GetOrganizationsByInnListRequest;
use Diadoc\Api\Proto\GetOrganizationsByInnListResponse;
use Diadoc\Api\Proto\InvitationDocument;
use Diadoc\Api\Proto\LoginPassword;
use Diadoc\Api\Proto\Organization;
use Diadoc\Api\Proto\OrganizationList;
use Diadoc\Api\Proto\OrganizationUserPermissions;
use Diadoc\Api\Proto\OrganizationUsersList;
use Diadoc\Api\Proto\RussianAddress;
use Diadoc\Api\Proto\SortDirection;
use Diadoc\Api\Proto\TimeBasedFilter;
use Diadoc\Api\Proto\Timestamp;
use Diadoc\Api\Proto\User;
use Exception;
use infotech\diadoc\Exception\DiadocApiException;
use infotech\diadoc\Exception\DiadocApiUnauthorizedException;
use infotech\diadoc\Filter\DocumentsFilter;
use infotech\diadoc\Helper\DateHelper;
use infotech\diadoc\Signer\Interfaces\SignerProviderInterface;

class DiadocApi
{
    public const METHOD_GET = 'GET';
    public const METHOD_POST = 'POST';

    public const CONTENT_FORM_URL_ENCODED = 'application/x-www-form-urlencoded';

    public const RESOURCE_ACQUIRE_COUNTERAGENT_RESULT = '/AcquireCounteragentResult';
    public const RESOURCE_ACQUIRE_COUNTERAGENTS = '/AcquireCounteragent';
    public const RESOURCE_ACQUIRE_COUNTERAGENTS_V2 = '/V2/AcquireCounteragent';
    public const RESOURCE_AUTHENTICATE = '/Authenticate';
    public const RESOURCE_AUTHENTICATE_V2 = '/V2/Authenticate';
    public const RESOURCE_AUTHENTICATE_V3 = '/V3/Authenticate';
    public const RESOURCE_AUTO_SIGN_RECEIPTS = '/AutoSignReceipts';
    public const RESOURCE_AUTO_SIGN_RECEIPTS_RESULT = '/AutoSignReceiptsResult';
    public const RESOURCE_BREAK_WITH_COUNTERAGENT = '/BreakWithCounteragent';
    public const RESOURCE_CAN_SEND_INVOICE = '/CanSendInvoice';
    public const RESOURCE_CLOUD_SIGN = '/CloudSign';
    public const RESOURCE_CLOUD_SIGN_CONFIRM = '/CloudSignConfirm';
    public const RESOURCE_CLOUD_SIGN_CONFIRM_RESULT = '/CloudSignConfirmResult';
    public const RESOURCE_CLOUD_SIGN_RESULT = '/CloudSignResult';
    public const RESOURCE_DELETE = '/Delete';
    public const RESOURCE_FORWARD_DOCUMENT = '/V2/ForwardDocument';
    public const RESOURCE_GENERATE_ACCEPTANCE_CERTIFICATE_XML_FOR_BUYER = '/GenerateAcceptanceCertificateXmlForBuyer';
    public const RESOURCE_GENERATE_ACCEPTANCE_CERTIFICATE_XML_FOR_SELLER = '/GenerateAcceptanceCertificateXmlForSeller';
    public const RESOURCE_GENERATE_DOCUMENT_PROTOCOL = '/GenerateDocumentProtocol';
    public const RESOURCE_GENERATE_DOCUMENT_ZIP = '/GenerateDocumentZip';
    public const RESOURCE_GENERATE_FORWARDED_DOCUMENT_PRINT_FORM = '/GenerateForwardedDocumentPrintForm';
    public const RESOURCE_GENERATE_FORWARDED_DOCUMENT_PROTOCOL = '/V2/GenerateForwardedDocumentProtocol';
    public const RESOURCE_GENERATE_INVOICE_CORRECTION_REQUEST_XML = '/GenerateInvoiceCorrectionRequestXml';
    public const RESOURCE_GENERATE_INVOICE_DOCUMENT_RECEIPT_XML = '/GenerateInvoiceDocumentReceiptXml';
    public const RESOURCE_GENERATE_INVOICE_XML = '/GenerateInvoiceXml';
    public const RESOURCE_GENERATE_PRINT_FORM = '/GeneratePrintForm';
    public const RESOURCE_GENERATE_PRINT_FORM_FROM_ATTACHMENT = '/GeneratePrintFormFromAttachment';
    public const RESOURCE_GENERATE_REVOCATION_REQUEST_XML = '/GenerateRevocationRequestXml';
    public const RESOURCE_GENERATE_SIGNATURE_REJECTION_XML = '/GenerateSignatureRejectionXml';
    public const RESOURCE_GENERATE_TITLE_XML = '/GenerateTitleXml';
    public const RESOURCE_GENERATE_TORG_12_XML_FOR_BUYER = '/GenerateTorg12XmlForBuyer';
    public const RESOURCE_GENERATE_TORG_12_XML_FOR_SELLER = '/GenerateTorg12XmlForSeller';
    public const RESOURCE_GET_BOX = '/GetBox';
    public const RESOURCE_GET_COUNTERAGENT = '/GetCounteragent';
    public const RESOURCE_GET_COUNTERAGENT_CERTIFICATES = '/GetCounteragentCertificates';
    public const RESOURCE_GET_COUNTERAGENT_V2 = '/V2/GetCounteragent';
    public const RESOURCE_GET_COUNTERAGENTS = '/GetCounteragents';
    public const RESOURCE_GET_COUNTERAGENTS_V2 = '/V2/GetCounteragents';
    public const RESOURCE_GET_DEPARTMENT = '/GetDepartment';
    public const RESOURCE_GET_DOCFLOWS = '/V2/GetDocflows';
    public const RESOURCE_GET_DOCFLOWS_BY_PACKET_ID = '/V2/GetDocflowsByPacketId';
    public const RESOURCE_GET_DOCFLOWS_EVENTS = '/V2/GetDocflowEvents';
    public const RESOURCE_GET_DOCUMENT = '/V3/GetDocument';
    public const RESOURCE_GET_DOCUMENT_TYPES = '/V2/GetDocumentTypes';
    public const RESOURCE_GET_DOCUMENTS = '/V3/GetDocuments';
    public const RESOURCE_GET_ENTITY_CONTENT = ' /V4/GetEntityContent';
    public const RESOURCE_GET_EVENT = '/V2/GetEvent';
    public const RESOURCE_GET_FORWARDED_DOCUMENT = '/V2/GetForwardedDocuments';
    public const RESOURCE_GET_FORWARDED_DOCUMENT_EVENTS = '/V2/GetForwardedDocumentEvents';
    public const RESOURCE_GET_FORWARDED_ENTITY_CONTENT = '/V2/GetForwardedEntityContent';
    public const RESOURCE_GET_GENERATED_PRINT_FORM = '/GetGeneratedPrintForm';
    public const RESOURCE_GET_INVOICE_CORRECTION_REQUEST_INFO = '/GetInvoiceCorrectionRequestInfo';
    public const RESOURCE_GET_MESSAGE = '/V3/GetMessage';
    public const RESOURCE_GET_MY_ORGANIZATION = '/GetMyOrganizations';
    public const RESOURCE_GET_MY_PERMISSIONS = '/GetMyPermissions';
    public const RESOURCE_GET_MY_USER = '/GetMyUser';
    public const RESOURCE_GET_NEW_EVENTS = '/V4/GetNewEvents';
    public const RESOURCE_GET_ORGANIZATION = '/GetOrganization';
    public const RESOURCE_GET_ORGANIZATION_USERS = '/GetOrganizationUsers';
    public const RESOURCE_GET_ORGANIZATIONS_BY_INN_KPP = '/GetOrganizationsByInnKpp';
    public const RESOURCE_GET_ORGANIZATIONS_BY_INN_LIST = '/GetOrganizationsByInnList';
    public const RESOURCE_GET_RECOGNIZED = '/GetRecognized';
    public const RESOURCE_MOVE_DOCUMENTS = '/MoveDocuments';
    public const RESOURCE_PARSE_ACCEPTANCE_CERTIFICATE_SELLER_TITLE_XML = '/ParseAcceptanceCertificateSellerTitleXml';
    public const RESOURCE_PARSE_INVOICE_XML = '/ParseInvoiceXml';
    public const RESOURCE_PARSE_REVOCATION_REQUEST_XML = '/ParseRevocationRequestXml';
    public const RESOURCE_PARSE_RUSSIAN_ADDRESS = '/ParseRussianAddress';
    public const RESOURCE_PARSE_SIGNATURE_REJECTION_XML = '/ParseSignatureRejectionXml';
    public const RESOURCE_PARSE_TORG_12_SELLER_TITLE_XML = '/ParseTorg12SellerTitleXml';
    public const RESOURCE_PREPARE_DOCUMENTS_TO_SIGN = '/PrepareDocumentsToSign';
    public const RESOURCE_POST_MESSAGE = '/V3/PostMessage';
    public const RESOURCE_POST_MESSAGE_PATCH = '/V3/PostMessagePatch';
    public const RESOURCE_POST_TEMPLATE = '/PostTemplate';
    public const RESOURCE_RECOGNIZE = '/Recognize';
    public const RESOURCE_RECYCLE_DRAFT = '/RecycleDraft';
    public const RESOURCE_RESTORE = '/Restore';
    public const RESOURCE_SEARCH_DOCFLOWS = '/V2/SearchDocflows';
    public const RESOURCE_SEND_DRAFT = '/SendDraft';
    public const RESOURCE_SHELF_UPLOAD = '/ShelfUpload';

    private ?string $token = null;

    public function __construct(
        private string $ddauthApiClientId,
        private string $serviceUrl = 'https://diadoc-api.kontur.ru/',
        private bool $debugRequest = false,
        private ?SignerProviderInterface $signerProvider = null,
    ) {
    }

    public function acquireCounteragent(
        string $myOrgId,
        string $counteragentOrgId,
        string $myDepartmentId,
        ?string $comment = null,
    ): string {
        return $this->doRequest(
            self::RESOURCE_ACQUIRE_COUNTERAGENTS,
            [],
            [
                'myOrgId' => $myOrgId,
                'counteragentOrgId' => $counteragentOrgId,
                'myDepartmentId' => $myDepartmentId,
                'comment' => $comment,
            ],
            self::METHOD_POST,
        );
    }

    public function acquireCounteragentByInnWithDocument(
        string $myOrgId,
        string $counteragentInn,
        ?string $myDepartmentId = null,
        ?InvitationDocument $invitationDocument = null,
        string $messageToContragent = '',
    ): AsyncMethodResult {
        $acquireCounteragentRequest = new AcquireCounteragentRequest();
        $acquireCounteragentRequest->setInn($counteragentInn);
        $acquireCounteragentRequest->setMessageToCounteragent($messageToContragent);
        if ($invitationDocument) {
            $acquireCounteragentRequest->setInvitationDocument($invitationDocument);
        }

        $response = $this->doRequest(
            self::RESOURCE_ACQUIRE_COUNTERAGENTS_V2,
            $acquireCounteragentRequest->serializeToString(),
            [
                'myOrgId' => $myOrgId,
                'myDepartmentId' => $myDepartmentId,
            ],
            self::METHOD_POST,
        );

        $message = new AsyncMethodResult();
        $message->mergeFromString($response);

        return $message;
    }

    public function acquireCounteragentResult(string $taskId): AcquireCounteragentResult
    {
        $response = $this->doRequest(
            self::RESOURCE_ACQUIRE_COUNTERAGENT_RESULT,
            [],
            ['taskId' => $taskId],
        );

        $message = new AcquireCounteragentResult();
        $message->mergeFromString($response);

        return $message;
    }

    public function acquireCounteragentWithDocument(
        string $myOrgId,
        string $counteragentOrgId,
        string $myDepartmentId,
        ?InvitationDocument $invitationDocument = null,
        string $messageToContragent = '',
    ): AsyncMethodResult {
        $acquireCounteragentRequest = new AcquireCounteragentRequest();
        $acquireCounteragentRequest->setOrgId($counteragentOrgId);
        $acquireCounteragentRequest->setMessageToCounteragent($messageToContragent);
        if ($invitationDocument) {
            $acquireCounteragentRequest->setInvitationDocument($invitationDocument);
        }

        $response = $this->doRequest(
            self::RESOURCE_ACQUIRE_COUNTERAGENTS_V2,
            $acquireCounteragentRequest->serializeToString(),
            [
                'myOrgId' => $myOrgId,
                'myDepartmentId' => $myDepartmentId,
            ],
            self::METHOD_POST,
        );

        $message = new AsyncMethodResult();
        $message->mergeFromString($response);

        return $message;
    }

    public function authenticateLogin(string $login, string $password): string
    {
        $response = $this->doRequest(
            self::RESOURCE_AUTHENTICATE,
            [],
            [
                'login' => $login,
                'password' => $password,
            ],
            self::METHOD_POST,
        );

        $this->setToken($response);

        return $response;
    }

    public function authenticateLoginV3(string $login, string $password): string
    {
        $loginPassword = new LoginPassword();
        $loginPassword->setLogin($login);
        $loginPassword->setPassword($password);

        $response = $this->doRequest(
            self::RESOURCE_AUTHENTICATE_V3,
            $loginPassword->serializeToString(),
            ['type' => 'password'],
            self::METHOD_POST,
        );

        $this->setToken($response);

        return $response;
    }

    public function breakWithCounteragent(string $myOrgId, string $counteragentOrgId, string $comment = ''): string
    {
        return $this->doRequest(
            self::RESOURCE_BREAK_WITH_COUNTERAGENT,
            [],
            [
                'myOrgId' => $myOrgId,
                'counteragentOrgId' => $counteragentOrgId,
                'comment' => $comment,
            ],
            self::METHOD_POST,
        );
    }

    public function delete(string $boxId, string $messageId, ?string $documentId = null): bool
    {
        $this->doRequest(
            self::RESOURCE_DELETE,
            [],
            [
                'boxId' => $boxId,
                'messageId' => $messageId,
                'documentId' => $documentId,
            ],
            self::METHOD_POST,
        );

        return true;
    }

    public function forwardDocument(string $boxId, string $toBoxId, DocumentId $documentId): string
    {
        $forwardDocumentRequest = new ForwardDocumentRequest();
        $forwardDocumentRequest->setToBoxId($toBoxId);
        $forwardDocumentRequest->setDocumentId($documentId);

        return $this->doRequest(
            self::RESOURCE_FORWARD_DOCUMENT,
            $forwardDocumentRequest->serializeToString(),
            ['boxId' => $boxId],
            self::METHOD_POST,
        );
    }

    public function generateInvitationDocument(
        string $content,
        string $title,
        bool $signatureRequested = false,
    ): InvitationDocument {
        $message = new InvitationDocument();
        $message->setFileName($title);
        $message->setSignedContent($this->generateSignedContent($content));
        $message->setSignatureRequested($signatureRequested);

        return $message;
    }

    public function generateSignedContent(string $content): SignedContent
    {
        $message = new SignedContent();
        $message->setContent($content);
        if ($this->signerProvider) {
            $message->setSignature($this->signerProvider->sign($content));
        }

        return $message;
    }

    public function generateSignedContentFromFile(string $fileName): SignedContent
    {
        if (!file_exists($fileName)) {
            throw new Exception('File not found');
        }

        $content = (string)file_get_contents($fileName);

        return $this->generateSignedContent($content);
    }

    public function generateTitleXml(array $queryParams, string $postData): string
    {
        return $this->doRequest(
            self::RESOURCE_GENERATE_TITLE_XML,
            $postData,
            $queryParams,
            self::METHOD_POST,
        );
    }

    public function getBox(string $boxId): Box
    {
        $response = $this->doRequest(
            self::RESOURCE_GET_BOX,
            [],
            ['boxId' => $boxId],
        );

        $message = new Box();
        $message->mergeFromString($response);

        return $message;
    }

    public function getCountragent(string $myOrgId, string $counteragentOrgId): Counteragent
    {
        $response = $this->doRequest(
            self::RESOURCE_GET_COUNTERAGENT,
            [],
            [
                'myOrgId' => $myOrgId,
                'counteragentOrgId' => $counteragentOrgId,
            ],
        );

        $message = new Counteragent();
        $message->mergeFromString($response);

        return $message;
    }

    public function getCounteragentCertificates(string $myOrgId, string $counteragentOrgId): CounteragentCertificateList
    {
        $response = $this->doRequest(
            self::RESOURCE_GET_COUNTERAGENT_CERTIFICATES,
            [],
            [
                'myOrgId' => $myOrgId,
                'counteragentOrgId' => $counteragentOrgId,
            ],
        );

        $message = new CounteragentCertificateList();
        $message->mergeFromString($response);

        return $message;
    }

    public function getCountragentV2(string $myOrgId, string $counteragentOrgId): Counteragent
    {
        $response = $this->doRequest(
            self::RESOURCE_GET_COUNTERAGENT_V2,
            [],
            [
                'myOrgId' => $myOrgId,
                'counteragentOrgId' => $counteragentOrgId,
            ],
        );

        $message = new Counteragent();
        $message->mergeFromString($response);

        return $message;
    }

    public function getCountragents(
        string $myOrgId,
        ?string $counteragentStatus = null,
        ?int $afterIndexKey = null,
    ): CounteragentList {
        $response = $this->doRequest(
            self::RESOURCE_GET_COUNTERAGENTS,
            [],
            [
                'myOrgId' => $myOrgId,
                'counteragentStatus' => $counteragentStatus,
                'afterIndexKey' => $afterIndexKey,
            ],
        );

        $message = new CounteragentList();
        $message->mergeFromString($response);

        return $message;
    }

    public function getCountragentsV2(
        string $myOrgId,
        ?string $counteragentStatus = null,
        ?string $afterIndexKey = null,
        ?string $query = null,
    ): CounteragentList {
        $response = $this->doRequest(
            self::RESOURCE_GET_COUNTERAGENTS_V2,
            [],
            [
                'myOrgId' => $myOrgId,
                'counteragentStatus' => $counteragentStatus,
                'afterIndexKey' => $afterIndexKey,
                'query' => $query,
            ],
        );

        $message = new CounteragentList();
        $message->mergeFromString($response);

        return $message;
    }

    public function getDepartment(string $orgId, string $departmentId): Department
    {
        $response = $this->doRequest(
            self::RESOURCE_GET_DEPARTMENT,
            [],
            [
                'orgId' => $orgId,
                'departmentId' => $departmentId,
            ],
        );

        $message = new Department();
        $message->mergeFromString($response);

        return $message;
    }

    public function getDocflowEvents(
        string $boxId,
        ?DateTime $from = null,
        ?DateTime $to = null,
        ?int $sortDirection = null,
        bool $populateDocuments = false,
        bool $populatePreviousDocumentStates = false,
        bool $injectEntityContent = false,
        ?string $afterIndexKey = null,
    ): GetDocflowEventsResponse {
        $timeBasedFilter = new TimeBasedFilter();
        $fromTimestamp = null;
        $toTimestamp = null;

        if ($from !== null) {
            $fromTimestamp = new Timestamp();
            $fromTimestamp->setTicks((int)DateHelper::convertDateTimeToTicks($from));
        }

        if ($to !== null) {
            $toTimestamp = new Timestamp();
            $toTimestamp->setTicks((int)DateHelper::convertDateTimeToTicks($to));
        }

        if ($fromTimestamp) {
            $timeBasedFilter->setFromTimestamp($fromTimestamp);
        }
        if ($toTimestamp) {
            $timeBasedFilter->setToTimestamp($toTimestamp);
        }
        if ($sortDirection !== null) {
            $timeBasedFilter->setSortDirection($sortDirection);
        }

        $getDocflowEventsRequest = new GetDocflowEventsRequest();
        $getDocflowEventsRequest->setFilter($timeBasedFilter);
        $getDocflowEventsRequest->setPopulateDocuments($populateDocuments);
        $getDocflowEventsRequest->setPopulatePreviousDocumentStates($populatePreviousDocumentStates);
        $getDocflowEventsRequest->setInjectEntityContent($injectEntityContent);
        if ($afterIndexKey !== null) {
            $getDocflowEventsRequest->setAfterIndexKey($afterIndexKey);
        }

        $response = $this->doRequest(
            self::RESOURCE_GET_DOCFLOWS_EVENTS,
            $getDocflowEventsRequest->serializeToString(),
            ['boxId' => $boxId],
            self::METHOD_POST,
        );

        $message = new GetDocflowEventsResponse();
        $message->mergeFromString($response);

        return $message;
    }

    public function getDocflows(string $boxId, GetDocflowBatchRequest $getDocflowBatchRequest): GetDocflowBatchResponse
    {
        $response = $this->doRequest(
            self::RESOURCE_GET_DOCFLOWS,
            $getDocflowBatchRequest->serializeToString(),
            ['boxId' => $boxId],
            self::METHOD_POST,
        );

        $message = new GetDocflowBatchResponse();
        $message->mergeFromString($response);

        return $message;
    }

    public function getDocflowsByPacketId(
        string $boxId,
        string $packetId,
        bool $injectEntityContent = false,
        mixed $afterIndexKey = null,
        int $count = 100,
    ): GetDocflowsByPacketIdResponse {
        $getDocflowsByPacketIdRequest = new GetDocflowsByPacketIdRequest();
        $getDocflowsByPacketIdRequest->setPacketId($packetId);
        $getDocflowsByPacketIdRequest->setInjectEntityContent($injectEntityContent);
        $getDocflowsByPacketIdRequest->setAfterIndexKey($afterIndexKey);
        $getDocflowsByPacketIdRequest->setCount($count);

        $response = $this->doRequest(
            self::RESOURCE_GET_DOCFLOWS_BY_PACKET_ID,
            $getDocflowsByPacketIdRequest->serializeToString(),
            ['boxId' => $boxId],
            self::METHOD_POST,
        );

        $message = new GetDocflowsByPacketIdResponse();
        $message->mergeFromString($response);

        return $message;
    }

    public function getDocument(
        string $boxId,
        string $messageId,
        string $entityId,
        string $injectEntityContent = 'true',
    ): Document {
        $response = $this->doRequest(
            self::RESOURCE_GET_DOCUMENT,
            [],
            [
                'boxId' => $boxId,
                'messageId' => $messageId,
                'entityId' => $entityId,
                'injectEntityContent' => $injectEntityContent,
            ],
        );

        $message = new Document();
        $message->mergeFromString($response);

        return $message;
    }

    public function getDocumentTypes(string $boxId): GetDocumentTypesResponseV2
    {
        $params = [
            'boxId' => $boxId,
        ];

        $response = $this->doRequest(
            self::RESOURCE_GET_DOCUMENT_TYPES,
            [],
            $params,
        );

        $message = new GetDocumentTypesResponseV2();
        $message->mergeFromString($response);

        return $message;
    }

    public function getDocuments(
        string $boxId,
        ?DocumentsFilter $documentsFilter = null,
        ?int $sortDirection = null,
        mixed $afterIndexKey = null,
    ): DocumentList {
        if (is_null($sortDirection)) {
            $sortDirection = SortDirection::Ascending;
        }

        $params = [
            'boxId' => $boxId,
            'sortDirection' => $sortDirection,
            'afterIndexKey' => $afterIndexKey,
        ];
        if (is_null($documentsFilter)) {
            $documentsFilter = DocumentsFilter::create();
        }

        $params = array_replace($params, $documentsFilter->toFilter());

        $response = $this->doRequest(
            self::RESOURCE_GET_DOCUMENTS,
            [],
            $params,
        );

        $message = new DocumentList();
        $message->mergeFromString($response);

        return $message;
    }

    public function getEntityContent(string $boxId, string $messageId, string $entityId): string
    {
        return $this->doRequest(
            self::RESOURCE_GET_ENTITY_CONTENT,
            [],
            [
                'boxId' => $boxId,
                'messageId' => $messageId,
                'entityId' => $entityId,
            ],
        );
    }

    public function getEvent(string $boxId, string $eventId): BoxEvent
    {
        $response = $this->doRequest(
            self::RESOURCE_GET_EVENT,
            [],
            [
                'boxId' => $boxId,
                'eventId' => $eventId,
            ],
        );

        $message = new BoxEvent();
        $message->mergeFromString($response);

        return $message;
    }

    public function getMessage(
        string $boxId,
        string $messageId,
        ?string $entityId = null,
        ?string $originalSignature = null,
    ): Message {
        $response = $this->doRequest(
            self::RESOURCE_GET_MESSAGE,
            [],
            [
                'boxId' => $boxId,
                'messageId' => $messageId,
                'entityId' => $entityId,
                'originalSignature' => $originalSignature,
            ],
        );

        $message = new Message();
        $message->mergeFromString($response);

        return $message;
    }

    public function getMyOrganizations(): OrganizationList
    {
        $response = $this->doRequest(self::RESOURCE_GET_MY_ORGANIZATION);

        $message = new OrganizationList();
        $message->mergeFromString($response);

        return $message;
    }

    public function getMyPermissions(string $orgId): OrganizationUserPermissions
    {
        $response = $this->doRequest(
            self::RESOURCE_GET_MY_PERMISSIONS,
            [],
            ['orgId' => $orgId],
        );

        $message = new OrganizationUserPermissions();
        $message->mergeFromString($response);

        return $message;
    }

    public function getMyUser(): User
    {
        $response = $this->doRequest(self::RESOURCE_GET_MY_USER);

        $message = new User();
        $message->mergeFromString($response);

        return $message;
    }

    public function getNewEvents(string $boxId, ?string $afterEventId = null): BoxEventList
    {
        $response = $this->doRequest(
            self::RESOURCE_GET_NEW_EVENTS,
            [],
            [
                'boxId' => $boxId,
                'afterEventId' => $afterEventId,
            ],
        );

        $message = new BoxEventList();
        $message->mergeFromString($response);

        return $message;
    }

    public function getOrganizationByFnsParticipantId(string $fnsParticipantId): Organization
    {
        $response = $this->doRequest(
            self::RESOURCE_GET_ORGANIZATION,
            [],
            ['fnsParticipantId' => $fnsParticipantId],
        );

        $message = new Organization();
        $message->mergeFromString($response);

        return $message;
    }

    public function getOrganizationById(string $orgId): Organization
    {
        $response = $this->doRequest(
            self::RESOURCE_GET_ORGANIZATION,
            [],
            ['orgId' => $orgId],
        );

        $message = new Organization();
        $message->mergeFromString($response);

        return $message;
    }

    public function getOrganizationByInn(string $inn): Organization
    {
        $response = $this->doRequest(
            self::RESOURCE_GET_ORGANIZATION,
            [],
            ['inn' => $inn],
        );

        $message = new Organization();
        $message->mergeFromString($response);

        return $message;
    }

    public function getOrganizationUsers(string $orgId): OrganizationUsersList
    {
        $response = $this->doRequest(
            self::RESOURCE_GET_ORGANIZATION_USERS,
            [],
            ['orgId' => $orgId],
        );

        $message = new OrganizationUsersList();
        $message->mergeFromString($response);

        return $message;
    }

    public function getOrganizationsByInnKpp(
        string $inn,
        ?string $kpp = null,
        bool $includeRelations = false,
    ): OrganizationList {
        $response = $this->doRequest(
            self::RESOURCE_GET_ORGANIZATIONS_BY_INN_KPP,
            [],
            [
                'inn' => $inn,
                'kpp' => $kpp,
                'includeRelations' => $includeRelations ? 'true' : 'false',
            ],
        );

        $message = new OrganizationList();
        $message->mergeFromString($response);

        return $message;
    }

    public function getOrganizationsByInnList(string $myOrgId, array $innList = []): GetOrganizationsByInnListResponse
    {
        $getOrganizationsByInnListRequest = new GetOrganizationsByInnListRequest();
        $getOrganizationsByInnListRequest->setInnList($innList);

        $response = $this->doRequest(
            self::RESOURCE_GET_ORGANIZATIONS_BY_INN_LIST,
            $getOrganizationsByInnListRequest->serializeToString(),
            ['myOrgId' => $myOrgId],
            self::METHOD_POST,
        );

        $message = new GetOrganizationsByInnListResponse();
        $message->mergeFromString($response);

        return $message;
    }

    public function parseRussianAddress(string $address): RussianAddress
    {
        $response = $this->doRequest(
            self::RESOURCE_PARSE_RUSSIAN_ADDRESS,
            [],
            ['address' => $address],
        );

        $message = new RussianAddress();
        $message->mergeFromString($response);

        return $message;
    }

    public function postMessage(MessageToPost $messageToPost, ?string $operationId = null): Message
    {
        $response = $this->doRequest(
            self::RESOURCE_POST_MESSAGE,
            $messageToPost->serializeToString(),
            ['operationId' => $operationId],
            self::METHOD_POST,
        );

        $message = new Message();
        $message->mergeFromString($response);

        return $message;
    }

    public function postMessagePatch(MessagePatchToPost $messagePatchToPost, ?string $operationId = null): MessagePatch
    {
        $response = $this->doRequest(
            self::RESOURCE_POST_MESSAGE_PATCH,
            $messagePatchToPost->serializeToString(),
            ['operationId' => $operationId],
            self::METHOD_POST,
        );

        $message = new MessagePatch();
        $message->mergeFromString($response);

        return $message;
    }

    public function postTemplate(TemplateToPost $templateToPost, ?string $operationId = null): Template
    {
        $response = $this->doRequest(
            self::RESOURCE_POST_TEMPLATE,
            $templateToPost->serializeToString(),
            ['operationId' => $operationId],
            self::METHOD_POST,
        );

        $message = new Template();
        $message->mergeFromString($response);

        return $message;
    }

    public function searchDocflows(
        string $boxId,
        string $queryString,
        ?int $searchScope = null,
        ?int $firstIndex = null,
        int $count = 100,
    ): SearchDocflowsResponse {
        $searchDocflowsRequest = new SearchDocflowsRequest();
        $searchDocflowsRequest->setQueryString($queryString);
        if ($searchScope) {
            $searchDocflowsRequest->setScope($searchScope);
        }

        if ($firstIndex) {
            $searchDocflowsRequest->setFirstIndex($firstIndex);
        }

        $searchDocflowsRequest->setCount($count);

        $response = $this->doRequest(
            self::RESOURCE_SEARCH_DOCFLOWS,
            $searchDocflowsRequest->serializeToString(),
            ['boxId' => $boxId],
            self::METHOD_POST,
        );

        $message = new SearchDocflowsResponse();
        $message->mergeFromString($response);

        return $message;
    }

    public function shelfUpload(string $nameOnShelf, int $partIndex, string $content, int $isLastPart): string
    {
        return $this->doRequest(
            self::RESOURCE_SHELF_UPLOAD,
            ['content' => $content],
            [
                'nameOnShelf' => $nameOnShelf,
                'partIndex' => $partIndex,
                'isLastPart' => $isLastPart,
            ],
            self::METHOD_POST,
            self::CONTENT_FORM_URL_ENCODED,
        );
    }


    protected function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(?string $token): void
    {
        $this->token = $token;
    }

    protected function doRequest(
        string $resource,
        mixed $postData = [],
        array $queryParams = [],
        string $method = self::METHOD_GET,
        ?string $contentType = null,
    ): string {
        if (
            !$this->getToken()
            && !in_array(
                $resource,
                [self::RESOURCE_AUTHENTICATE, self::RESOURCE_AUTHENTICATE_V2, self::RESOURCE_AUTHENTICATE_V3],
                true,
            )
        ) {
            throw new Exception('Unauthorized request');
        }

        $uri = sprintf(
            '%s%s?%s',
            $this->serviceUrl,
            $resource,
            http_build_query($queryParams)
        );

        $ch = curl_init($uri);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 20);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->buildRequestHeaders($contentType));

        if ($method === self::METHOD_POST) {
            curl_setopt($ch, CURLOPT_POST, 0);
            curl_setopt($ch, CURLOPT_POSTFIELDS, is_array($postData) ? http_build_query($postData) : $postData);
        } elseif ($method === self::METHOD_GET) {
            curl_setopt($ch, CURLOPT_HTTPGET, 1);
        }

        if ($this->debugRequest) {
            curl_setopt($ch, CURLOPT_VERBOSE, true);
            curl_setopt($ch, CURLOPT_STDERR, STDOUT);
        }

        /** @var false|string $response */
        $response = curl_exec($ch);

        if (curl_errno($ch) !== 0) {
            throw new DiadocApiException(
                sprintf('Curl error: (%s) %s', curl_errno($ch), curl_error($ch)),
                curl_errno($ch),
            );
        }

        if (!($httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE)) || ($httpCode !== 200 && $httpCode !== 204)) {
            $message = sprintf('Curl error http code: (%s) %s', $httpCode, $response);
            if ($httpCode === 401) {
                throw new DiadocApiUnauthorizedException($message, $httpCode);
            }

            throw new DiadocApiException($message, $httpCode);
        }

        curl_close($ch);

        if ($response === false) {
            throw new DiadocApiException('Diadoc request error false returned');
        }

        return $response;
    }

    private function buildRequestHeaders(?string $contentType = null): array
    {
        $header = sprintf('DiadocAuth ddauth_api_client_id=%s', $this->ddauthApiClientId);
        if ($token = $this->getToken()) {
            $header .= sprintf(', ddauth_token=%s', $token);
        }

        return ['Authorization: ' . $header, 'Content-type: ' . ($contentType ?: 'application/x-protobuf')];
    }
}
