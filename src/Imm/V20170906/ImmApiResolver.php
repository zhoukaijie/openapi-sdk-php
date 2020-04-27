<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CompareImageFaces compareImageFaces(array $options = [])
 * @method ConvertOfficeFormat convertOfficeFormat(array $options = [])
 * @method CreateCADConversionTask createCADConversionTask(array $options = [])
 * @method CreateDocIndexTask createDocIndexTask(array $options = [])
 * @method CreateGrabFrameTask createGrabFrameTask(array $options = [])
 * @method CreateGroupFacesJob createGroupFacesJob(array $options = [])
 * @method CreateImageProcessTask createImageProcessTask(array $options = [])
 * @method CreateMediaComplexTask createMediaComplexTask(array $options = [])
 * @method CreateMergeFaceGroupsJob createMergeFaceGroupsJob(array $options = [])
 * @method CreateOfficeConversionTask createOfficeConversionTask(array $options = [])
 * @method CreateSet createSet(array $options = [])
 * @method CreateStreamAnalyseTask createStreamAnalyseTask(array $options = [])
 * @method CreateVideoAbstractTask createVideoAbstractTask(array $options = [])
 * @method CreateVideoAnalyseTask createVideoAnalyseTask(array $options = [])
 * @method CreateVideoCompressTask createVideoCompressTask(array $options = [])
 * @method DecodeBlindWatermark decodeBlindWatermark(array $options = [])
 * @method DeleteDocIndex deleteDocIndex(array $options = [])
 * @method DeleteImage deleteImage(array $options = [])
 * @method DeleteImageJob deleteImageJob(array $options = [])
 * @method DeleteOfficeConversionTask deleteOfficeConversionTask(array $options = [])
 * @method DeleteProject deleteProject(array $options = [])
 * @method DeleteSet deleteSet(array $options = [])
 * @method DeleteVideo deleteVideo(array $options = [])
 * @method DeleteVideoTask deleteVideoTask(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DetectImageBodies detectImageBodies(array $options = [])
 * @method DetectImageCelebrity detectImageCelebrity(array $options = [])
 * @method DetectImageFaces detectImageFaces(array $options = [])
 * @method DetectImageLogos detectImageLogos(array $options = [])
 * @method DetectImageQRCodes detectImageQRCodes(array $options = [])
 * @method DetectImageTags detectImageTags(array $options = [])
 * @method DetectImageTexts detectImageTexts(array $options = [])
 * @method DetectQRCodes detectQRCodes(array $options = [])
 * @method EncodeBlindWatermark encodeBlindWatermark(array $options = [])
 * @method FindImages findImages(array $options = [])
 * @method FindImagesByTagNames findImagesByTagNames(array $options = [])
 * @method FindSimilarFaces findSimilarFaces(array $options = [])
 * @method GetDocIndex getDocIndex(array $options = [])
 * @method GetDocIndexTask getDocIndexTask(array $options = [])
 * @method GetImage getImage(array $options = [])
 * @method GetImageJob getImageJob(array $options = [])
 * @method GetMediaMeta getMediaMeta(array $options = [])
 * @method GetOfficeConversionTask getOfficeConversionTask(array $options = [])
 * @method GetOfficeEditURL getOfficeEditURL(array $options = [])
 * @method GetOfficePreviewURL getOfficePreviewURL(array $options = [])
 * @method GetProject getProject(array $options = [])
 * @method GetSet getSet(array $options = [])
 * @method GetVideo getVideo(array $options = [])
 * @method GetVideoTask getVideoTask(array $options = [])
 * @method IndexImage indexImage(array $options = [])
 * @method IndexVideo indexVideo(array $options = [])
 * @method ListFaceGroups listFaceGroups(array $options = [])
 * @method ListImageJobs listImageJobs(array $options = [])
 * @method ListImages listImages(array $options = [])
 * @method ListOfficeConversionTask listOfficeConversionTask(array $options = [])
 * @method ListProjectAPIs listProjectAPIs(array $options = [])
 * @method ListProjects listProjects(array $options = [])
 * @method ListSets listSets(array $options = [])
 * @method ListSetTags listSetTags(array $options = [])
 * @method ListVideoAudios listVideoAudios(array $options = [])
 * @method ListVideoFrames listVideoFrames(array $options = [])
 * @method ListVideos listVideos(array $options = [])
 * @method ListVideoTasks listVideoTasks(array $options = [])
 * @method PutProject putProject(array $options = [])
 * @method RefreshOfficeEditToken refreshOfficeEditToken(array $options = [])
 * @method RefreshOfficePreviewToken refreshOfficePreviewToken(array $options = [])
 * @method SearchDocIndex searchDocIndex(array $options = [])
 * @method UpdateDocIndexMeta updateDocIndexMeta(array $options = [])
 * @method UpdateFaceGroup updateFaceGroup(array $options = [])
 * @method UpdateImage updateImage(array $options = [])
 * @method UpdateProject updateProject(array $options = [])
 * @method UpdateSet updateSet(array $options = [])
 */
class ImmApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'imm';

    /** @var string */
    public $version = '2017-09-06';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'imm';
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getFaceIdA()
 * @method $this withFaceIdA($value)
 * @method string getFaceIdB()
 * @method $this withFaceIdB($value)
 * @method string getImageUriB()
 * @method $this withImageUriB($value)
 * @method string getImageUriA()
 * @method $this withImageUriA($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class CompareImageFaces extends Rpc
{
}

/**
 * @method string getSrcType()
 * @method $this withSrcType($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getPdfVector()
 * @method $this withPdfVector($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getStartPage()
 * @method $this withStartPage($value)
 * @method string getFitToPagesWide()
 * @method $this withFitToPagesWide($value)
 * @method string getTgtFilePrefix()
 * @method $this withTgtFilePrefix($value)
 * @method string getModelId()
 * @method $this withModelId($value)
 * @method string getMaxSheetRow()
 * @method $this withMaxSheetRow($value)
 * @method string getMaxSheetCount()
 * @method $this withMaxSheetCount($value)
 * @method string getEndPage()
 * @method $this withEndPage($value)
 * @method string getTgtFileSuffix()
 * @method $this withTgtFileSuffix($value)
 * @method string getSheetOnePage()
 * @method $this withSheetOnePage($value)
 * @method string getMaxSheetCol()
 * @method $this withMaxSheetCol($value)
 * @method string getTgtType()
 * @method $this withTgtType($value)
 * @method string getHidecomments()
 * @method $this withHidecomments($value)
 * @method string getFitToPagesTall()
 * @method $this withFitToPagesTall($value)
 * @method string getSrcUri()
 * @method $this withSrcUri($value)
 * @method string getTgtFilePages()
 * @method $this withTgtFilePages($value)
 * @method string getTgtUri()
 * @method $this withTgtUri($value)
 */
class ConvertOfficeFormat extends Rpc
{
}

/**
 * @method string getSrcType()
 * @method $this withSrcType($value)
 * @method string getBaseRow()
 * @method $this withBaseRow($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getZoomFactor()
 * @method $this withZoomFactor($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getBaseCol()
 * @method $this withBaseCol($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getUnitWidth()
 * @method $this withUnitWidth($value)
 * @method string getZoomLevel()
 * @method $this withZoomLevel($value)
 * @method string getModelId()
 * @method $this withModelId($value)
 * @method string getTgtType()
 * @method $this withTgtType($value)
 * @method string getUnitHeight()
 * @method $this withUnitHeight($value)
 * @method string getSrcUri()
 * @method $this withSrcUri($value)
 * @method string getThumbnails()
 * @method $this withThumbnails($value)
 * @method string getTgtUri()
 * @method $this withTgtUri($value)
 */
class CreateCADConversionTask extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getUniqueId()
 * @method $this withUniqueId($value)
 * @method string getCustomKey1()
 * @method $this withCustomKey1($value)
 * @method string getSet()
 * @method $this withSet($value)
 * @method string getCustomKey5()
 * @method $this withCustomKey5($value)
 * @method string getCustomKey4()
 * @method $this withCustomKey4($value)
 * @method string getCustomKey3()
 * @method $this withCustomKey3($value)
 * @method string getCustomKey2()
 * @method $this withCustomKey2($value)
 * @method string getCustomKey6()
 * @method $this withCustomKey6($value)
 * @method string getContentType()
 * @method $this withContentType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getSrcUri()
 * @method $this withSrcUri($value)
 */
class CreateDocIndexTask extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getCustomMessage()
 * @method $this withCustomMessage($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getTargetList()
 * @method $this withTargetList($value)
 * @method string getVideoUri()
 * @method $this withVideoUri($value)
 */
class CreateGrabFrameTask extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class CreateGroupFacesJob extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getTargetList()
 * @method $this withTargetList($value)
 * @method string getImageUri()
 * @method $this withImageUri($value)
 */
class CreateImageProcessTask extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 */
class CreateMediaComplexTask extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getGroupIdFrom()
 * @method $this withGroupIdFrom($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getGroupIdTo()
 * @method $this withGroupIdTo($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class CreateMergeFaceGroupsJob extends Rpc
{
}

/**
 * @method string getSrcType()
 * @method $this withSrcType($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getIdempotentToken()
 * @method $this withIdempotentToken($value)
 * @method string getPdfVector()
 * @method $this withPdfVector($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getStartPage()
 * @method $this withStartPage($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getFitToPagesWide()
 * @method $this withFitToPagesWide($value)
 * @method string getTgtFilePrefix()
 * @method $this withTgtFilePrefix($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getModelId()
 * @method $this withModelId($value)
 * @method string getDisplayDpi()
 * @method $this withDisplayDpi($value)
 * @method string getMaxSheetRow()
 * @method $this withMaxSheetRow($value)
 * @method string getMaxSheetCount()
 * @method $this withMaxSheetCount($value)
 * @method string getEndPage()
 * @method $this withEndPage($value)
 * @method string getTgtFileSuffix()
 * @method $this withTgtFileSuffix($value)
 * @method string getSheetOnePage()
 * @method $this withSheetOnePage($value)
 * @method string getMaxSheetCol()
 * @method $this withMaxSheetCol($value)
 * @method string getTgtType()
 * @method $this withTgtType($value)
 * @method string getHidecomments()
 * @method $this withHidecomments($value)
 * @method string getFitToPagesTall()
 * @method $this withFitToPagesTall($value)
 * @method string getSrcUri()
 * @method $this withSrcUri($value)
 * @method string getTgtFilePages()
 * @method $this withTgtFilePages($value)
 * @method string getTgtUri()
 * @method $this withTgtUri($value)
 */
class CreateOfficeConversionTask extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSetName()
 * @method $this withSetName($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class CreateSet extends Rpc
{
}

/**
 * @method string getGrabType()
 * @method $this withGrabType($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getStreamUri()
 * @method $this withStreamUri($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getSaveType()
 * @method $this withSaveType($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getTgtUri()
 * @method $this withTgtUri($value)
 */
class CreateStreamAnalyseTask extends Rpc
{
}

/**
 * @method string getTargetVideoUri()
 * @method $this withTargetVideoUri($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getVideoUri()
 * @method $this withVideoUri($value)
 * @method string getAbstractLength()
 * @method $this withAbstractLength($value)
 * @method string getTargetClipsUri()
 * @method $this withTargetClipsUri($value)
 */
class CreateVideoAbstractTask extends Rpc
{
}

/**
 * @method string getGrabType()
 * @method $this withGrabType($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getVideoUri()
 * @method $this withVideoUri($value)
 * @method string getSaveType()
 * @method $this withSaveType($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getTgtUri()
 * @method $this withTgtUri($value)
 */
class CreateVideoAnalyseTask extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getTargetContainer()
 * @method $this withTargetContainer($value)
 * @method string getCustomMessage()
 * @method $this withCustomMessage($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getTargetList()
 * @method $this withTargetList($value)
 * @method string getVideoUri()
 * @method $this withVideoUri($value)
 */
class CreateVideoCompressTask extends Rpc
{
}

/**
 * @method string getImageQuality()
 * @method $this withImageQuality($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getWatermarkType()
 * @method $this withWatermarkType($value)
 * @method string getTargetUri()
 * @method $this withTargetUri($value)
 * @method string getImageUri()
 * @method $this withImageUri($value)
 * @method string getOriginalImageUri()
 * @method $this withOriginalImageUri($value)
 */
class DecodeBlindWatermark extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getUniqueId()
 * @method $this withUniqueId($value)
 * @method string getSet()
 * @method $this withSet($value)
 */
class DeleteDocIndex extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getImageUri()
 * @method $this withImageUri($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class DeleteImage extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getJobType()
 * @method $this withJobType($value)
 */
class DeleteImageJob extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DeleteOfficeConversionTask extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 */
class DeleteProject extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class DeleteSet extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getResources()
 * @method $this withResources($value)
 * @method string getVideoUri()
 * @method $this withVideoUri($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class DeleteVideo extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getTaskType()
 * @method $this withTaskType($value)
 */
class DeleteVideoTask extends Rpc
{
}

class DescribeRegions extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getImageUri()
 * @method $this withImageUri($value)
 */
class DetectImageBodies extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getLibrary()
 * @method $this withLibrary($value)
 * @method string getRealUid()
 * @method $this withRealUid($value)
 * @method string getImageUri()
 * @method $this withImageUri($value)
 */
class DetectImageCelebrity extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getRealUid()
 * @method $this withRealUid($value)
 * @method string getImageUri()
 * @method $this withImageUri($value)
 */
class DetectImageFaces extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getImageUri()
 * @method $this withImageUri($value)
 */
class DetectImageLogos extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getImageUri()
 * @method $this withImageUri($value)
 */
class DetectImageQRCodes extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getRealUid()
 * @method $this withRealUid($value)
 * @method string getImageUri()
 * @method $this withImageUri($value)
 */
class DetectImageTags extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getImageUri()
 * @method $this withImageUri($value)
 */
class DetectImageTexts extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSrcUris()
 * @method $this withSrcUris($value)
 */
class DetectQRCodes extends Rpc
{
}

/**
 * @method string getImageQuality()
 * @method $this withImageQuality($value)
 * @method string getWatermarkUri()
 * @method $this withWatermarkUri($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getWatermarkType()
 * @method $this withWatermarkType($value)
 * @method string getTargetUri()
 * @method $this withTargetUri($value)
 * @method string getTargetImageType()
 * @method $this withTargetImageType($value)
 * @method string getImageUri()
 * @method $this withImageUri($value)
 */
class EncodeBlindWatermark extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getExternalId()
 * @method $this withExternalId($value)
 * @method string getFacesModifyTimeRange()
 * @method $this withFacesModifyTimeRange($value)
 * @method string getOCRContentsMatch()
 * @method $this withOCRContentsMatch($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getRemarksDPrefix()
 * @method $this withRemarksDPrefix($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getTagNames()
 * @method $this withTagNames($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getRemarksCPrefix()
 * @method $this withRemarksCPrefix($value)
 * @method string getModifyTimeRange()
 * @method $this withModifyTimeRange($value)
 * @method string getAddressLineContentsMatch()
 * @method $this withAddressLineContentsMatch($value)
 * @method string getGender()
 * @method $this withGender($value)
 * @method string getImageSizeRange()
 * @method $this withImageSizeRange($value)
 * @method string getRemarksBPrefix()
 * @method $this withRemarksBPrefix($value)
 * @method string getLocationBoundary()
 * @method $this withLocationBoundary($value)
 * @method string getImageTimeRange()
 * @method $this withImageTimeRange($value)
 * @method string getTagsModifyTimeRange()
 * @method $this withTagsModifyTimeRange($value)
 * @method string getAgeRange()
 * @method $this withAgeRange($value)
 * @method string getRemarksAPrefix()
 * @method $this withRemarksAPrefix($value)
 * @method string getSourceUriPrefix()
 * @method $this withSourceUriPrefix($value)
 * @method string getEmotion()
 * @method $this withEmotion($value)
 * @method string getCreateTimeRange()
 * @method $this withCreateTimeRange($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class FindImages extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getTagNames()
 * @method $this withTagNames($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class FindImagesByTagNames extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getMinSimilarity()
 * @method $this withMinSimilarity($value)
 * @method string getResponseFormat()
 * @method $this withResponseFormat($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getFaceId()
 * @method $this withFaceId($value)
 * @method string getImageUri()
 * @method $this withImageUri($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class FindSimilarFaces extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getUniqueId()
 * @method $this withUniqueId($value)
 * @method string getSet()
 * @method $this withSet($value)
 */
class GetDocIndex extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetDocIndexTask extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getImageUri()
 * @method $this withImageUri($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class GetImage extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getJobType()
 * @method $this withJobType($value)
 */
class GetImageJob extends Rpc
{
}

/**
 * @method string getMediaUri()
 * @method $this withMediaUri($value)
 * @method string getProject()
 * @method $this withProject($value)
 */
class GetMediaMeta extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetOfficeConversionTask extends Rpc
{
}

/**
 * @method string getSrcType()
 * @method $this withSrcType($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getUserID()
 * @method $this withUserID($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getFileID()
 * @method $this withFileID($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 * @method string getSrcUri()
 * @method $this withSrcUri($value)
 * @method string getTgtUri()
 * @method $this withTgtUri($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class GetOfficeEditURL extends Rpc
{
}

/**
 * @method string getSrcType()
 * @method $this withSrcType($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getWatermarkVertical()
 * @method $this withWatermarkVertical($value)
 * @method string getWatermarkType()
 * @method $this withWatermarkType($value)
 * @method string getWatermarkRotate()
 * @method $this withWatermarkRotate($value)
 * @method string getWatermarkValue()
 * @method $this withWatermarkValue($value)
 * @method string getWatermarkFont()
 * @method $this withWatermarkFont($value)
 * @method string getWatermarkHorizontal()
 * @method $this withWatermarkHorizontal($value)
 * @method string getSrcUri()
 * @method $this withSrcUri($value)
 * @method string getWatermarkFillStyle()
 * @method $this withWatermarkFillStyle($value)
 */
class GetOfficePreviewURL extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 */
class GetProject extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class GetSet extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getVideoUri()
 * @method $this withVideoUri($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class GetVideo extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getTaskType()
 * @method $this withTaskType($value)
 */
class GetVideoTask extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getExternalId()
 * @method $this withExternalId($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 * @method string getRealUid()
 * @method $this withRealUid($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getRemarksB()
 * @method $this withRemarksB($value)
 * @method string getRemarksA()
 * @method $this withRemarksA($value)
 * @method string getImageUri()
 * @method $this withImageUri($value)
 * @method string getSourceUri()
 * @method $this withSourceUri($value)
 * @method string getSourcePosition()
 * @method $this withSourcePosition($value)
 * @method string getRemarksD()
 * @method $this withRemarksD($value)
 * @method string getRemarksC()
 * @method $this withRemarksC($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class IndexImage extends Rpc
{
}

/**
 * @method string getGrabType()
 * @method $this withGrabType($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getExternalId()
 * @method $this withExternalId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getRemarksB()
 * @method $this withRemarksB($value)
 * @method string getRemarksA()
 * @method $this withRemarksA($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getVideoUri()
 * @method $this withVideoUri($value)
 * @method string getSaveType()
 * @method $this withSaveType($value)
 * @method string getRemarksD()
 * @method $this withRemarksD($value)
 * @method string getRemarksC()
 * @method $this withRemarksC($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getTgtUri()
 * @method $this withTgtUri($value)
 */
class IndexVideo extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class ListFaceGroups extends Rpc
{
}

/**
 * @method string getMaxKeys()
 * @method $this withMaxKeys($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getJobType()
 * @method $this withJobType($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 */
class ListImageJobs extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 * @method string getCreateTimeStart()
 * @method $this withCreateTimeStart($value)
 */
class ListImages extends Rpc
{
}

/**
 * @method string getMaxKeys()
 * @method $this withMaxKeys($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 */
class ListOfficeConversionTask extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 */
class ListProjectAPIs extends Rpc
{
}

/**
 * @method string getMaxKeys()
 * @method $this withMaxKeys($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 */
class ListProjects extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 */
class ListSets extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class ListSetTags extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getVideoUri()
 * @method $this withVideoUri($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class ListVideoAudios extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getVideoUri()
 * @method $this withVideoUri($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class ListVideoFrames extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 * @method string getCreateTimeStart()
 * @method $this withCreateTimeStart($value)
 */
class ListVideos extends Rpc
{
}

/**
 * @method string getMaxKeys()
 * @method $this withMaxKeys($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 */
class ListVideoTasks extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getCU()
 * @method $this withCU($value)
 * @method string getServiceRole()
 * @method $this withServiceRole($value)
 * @method string getBillingType()
 * @method $this withBillingType($value)
 */
class PutProject extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getAccessToken()
 * @method $this withAccessToken($value)
 * @method string getRefreshToken()
 * @method $this withRefreshToken($value)
 */
class RefreshOfficeEditToken extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getAccessToken()
 * @method $this withAccessToken($value)
 * @method string getRefreshToken()
 * @method $this withRefreshToken($value)
 */
class RefreshOfficePreviewToken extends Rpc
{
}

/**
 * @method string getModifiedTimeEnd()
 * @method $this withModifiedTimeEnd($value)
 * @method string getSizeLimitEnd()
 * @method $this withSizeLimitEnd($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getModifiedTimeStart()
 * @method $this withModifiedTimeStart($value)
 * @method string getPageNumLimitStart()
 * @method $this withPageNumLimitStart($value)
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getSizeLimitStart()
 * @method $this withSizeLimitStart($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getCustomKey1()
 * @method $this withCustomKey1($value)
 * @method string getSet()
 * @method $this withSet($value)
 * @method string getCustomKey5()
 * @method $this withCustomKey5($value)
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getCustomKey4()
 * @method $this withCustomKey4($value)
 * @method string getCustomKey3()
 * @method $this withCustomKey3($value)
 * @method string getCustomKey2()
 * @method $this withCustomKey2($value)
 * @method string getCustomKey6()
 * @method $this withCustomKey6($value)
 * @method string getPageNumLimitEnd()
 * @method $this withPageNumLimitEnd($value)
 * @method string getContentType()
 * @method $this withContentType($value)
 * @method string getName()
 * @method $this withName($value)
 */
class SearchDocIndex extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getUniqueId()
 * @method $this withUniqueId($value)
 * @method string getCustomKey1()
 * @method $this withCustomKey1($value)
 * @method string getSet()
 * @method $this withSet($value)
 * @method string getCustomKey5()
 * @method $this withCustomKey5($value)
 * @method string getCustomKey4()
 * @method $this withCustomKey4($value)
 * @method string getCustomKey3()
 * @method $this withCustomKey3($value)
 * @method string getCustomKey2()
 * @method $this withCustomKey2($value)
 * @method string getCustomKey6()
 * @method $this withCustomKey6($value)
 * @method string getName()
 * @method $this withName($value)
 */
class UpdateDocIndexMeta extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 * @method string getGroupCoverFaceId()
 * @method $this withGroupCoverFaceId($value)
 */
class UpdateFaceGroup extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getExternalId()
 * @method $this withExternalId($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 * @method string getRemarksB()
 * @method $this withRemarksB($value)
 * @method string getRemarksA()
 * @method $this withRemarksA($value)
 * @method string getImageUri()
 * @method $this withImageUri($value)
 * @method string getSourceUri()
 * @method $this withSourceUri($value)
 * @method string getSourcePosition()
 * @method $this withSourcePosition($value)
 * @method string getRemarksD()
 * @method $this withRemarksD($value)
 * @method string getRemarksC()
 * @method $this withRemarksC($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class UpdateImage extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getNewServiceRole()
 * @method $this withNewServiceRole($value)
 * @method string getNewCU()
 * @method $this withNewCU($value)
 */
class UpdateProject extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSetName()
 * @method $this withSetName($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class UpdateSet extends Rpc
{
}
