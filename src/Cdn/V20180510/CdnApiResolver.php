<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Cdn based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Cdn\V20180510
 *
 * @method AddCdnDomain addCdnDomain(array $options = [])
 * @method AddFCTrigger addFCTrigger(array $options = [])
 * @method BatchAddCdnDomain batchAddCdnDomain(array $options = [])
 * @method BatchDeleteCdnDomainConfig batchDeleteCdnDomainConfig(array $options = [])
 * @method BatchSetCdnDomainConfig batchSetCdnDomainConfig(array $options = [])
 * @method BatchSetCdnDomainServerCertificate batchSetCdnDomainServerCertificate(array $options = [])
 * @method BatchUpdateCdnDomain batchUpdateCdnDomain(array $options = [])
 * @method CreateUsageDetailDataExportTask createUsageDetailDataExportTask(array $options = [])
 * @method CreateUserUsageDataExportTask createUserUsageDataExportTask(array $options = [])
 * @method DeleteCdnDomain deleteCdnDomain(array $options = [])
 * @method DeleteFCTrigger deleteFCTrigger(array $options = [])
 * @method DeleteUsageDetailDataExportTask deleteUsageDetailDataExportTask(array $options = [])
 * @method DeleteUserUsageDataExportTask deleteUserUsageDataExportTask(array $options = [])
 * @method DescribeCdnCertificateDetail describeCdnCertificateDetail(array $options = [])
 * @method DescribeCdnCertificateList describeCdnCertificateList(array $options = [])
 * @method DescribeCdnDomainBaseDetail describeCdnDomainBaseDetail(array $options = [])
 * @method DescribeCdnDomainConfigs describeCdnDomainConfigs(array $options = [])
 * @method DescribeCdnDomainDetail describeCdnDomainDetail(array $options = [])
 * @method DescribeCdnDomainLogs describeCdnDomainLogs(array $options = [])
 * @method DescribeCdnMonitorData describeCdnMonitorData(array $options = [])
 * @method DescribeCdnRegionAndIsp describeCdnRegionAndIsp(array $options = [])
 * @method DescribeCdnService describeCdnService(array $options = [])
 * @method DescribeCdnUserQuota describeCdnUserQuota(array $options = [])
 * @method DescribeCdnUserResourcePackage describeCdnUserResourcePackage(array $options = [])
 * @method DescribeCustomLogConfig describeCustomLogConfig(array $options = [])
 * @method DescribeDomainAverageResponseTime describeDomainAverageResponseTime(array $options = [])
 * @method DescribeDomainBpsData describeDomainBpsData(array $options = [])
 * @method DescribeDomainBpsDataByTimeStamp describeDomainBpsDataByTimeStamp(array $options = [])
 * @method DescribeDomainCCAttackInfo describeDomainCCAttackInfo(array $options = [])
 * @method DescribeDomainCCData describeDomainCCData(array $options = [])
 * @method DescribeDomainCertificateInfo describeDomainCertificateInfo(array $options = [])
 * @method DescribeDomainCname describeDomainCname(array $options = [])
 * @method DescribeDomainConfigs describeDomainConfigs(array $options = [])
 * @method DescribeDomainCustomLogConfig describeDomainCustomLogConfig(array $options = [])
 * @method DescribeDomainDownstreamBpsOfEdge describeDomainDownstreamBpsOfEdge(array $options = [])
 * @method DescribeDomainFileSizeProportionData describeDomainFileSizeProportionData(array $options = [])
 * @method DescribeDomainHitRateData describeDomainHitRateData(array $options = [])
 * @method DescribeDomainHttpCodeData describeDomainHttpCodeData(array $options = [])
 * @method DescribeDomainISPData describeDomainISPData(array $options = [])
 * @method DescribeDomainMax95BpsData describeDomainMax95BpsData(array $options = [])
 * @method DescribeDomainMonthBillingBpsData describeDomainMonthBillingBpsData(array $options = [])
 * @method DescribeDomainPathData describeDomainPathData(array $options = [])
 * @method DescribeDomainPvData describeDomainPvData(array $options = [])
 * @method DescribeDomainQpsData describeDomainQpsData(array $options = [])
 * @method DescribeDomainRealTimeBpsData describeDomainRealTimeBpsData(array $options = [])
 * @method DescribeDomainRealTimeByteHitRateData describeDomainRealTimeByteHitRateData(array $options = [])
 * @method DescribeDomainRealTimeData describeDomainRealTimeData(array $options = [])
 * @method DescribeDomainRealTimeHttpCodeData describeDomainRealTimeHttpCodeData(array $options = [])
 * @method DescribeDomainRealTimeQpsData describeDomainRealTimeQpsData(array $options = [])
 * @method DescribeDomainRealTimeReqHitRateData describeDomainRealTimeReqHitRateData(array $options = [])
 * @method DescribeDomainRealTimeSrcBpsData describeDomainRealTimeSrcBpsData(array $options = [])
 * @method DescribeDomainRealTimeSrcTrafficData describeDomainRealTimeSrcTrafficData(array $options = [])
 * @method DescribeDomainRegionData describeDomainRegionData(array $options = [])
 * @method DescribeDomainReqHitRateData describeDomainReqHitRateData(array $options = [])
 * @method DescribeDomainSrcBpsData describeDomainSrcBpsData(array $options = [])
 * @method DescribeDomainSrcHttpCodeData describeDomainSrcHttpCodeData(array $options = [])
 * @method DescribeDomainSrcTrafficData describeDomainSrcTrafficData(array $options = [])
 * @method DescribeDomainTopReferVisit describeDomainTopReferVisit(array $options = [])
 * @method DescribeDomainTopUrlVisit describeDomainTopUrlVisit(array $options = [])
 * @method DescribeDomainTrafficData describeDomainTrafficData(array $options = [])
 * @method DescribeDomainUpstreamBpsOfEdge describeDomainUpstreamBpsOfEdge(array $options = [])
 * @method DescribeDomainUpstreamOfCenter describeDomainUpstreamOfCenter(array $options = [])
 * @method DescribeDomainUsageData describeDomainUsageData(array $options = [])
 * @method DescribeDomainUvData describeDomainUvData(array $options = [])
 * @method DescribeDomainsBySource describeDomainsBySource(array $options = [])
 * @method DescribeDomainsUsageByDay describeDomainsUsageByDay(array $options = [])
 * @method DescribeFCTrigger describeFCTrigger(array $options = [])
 * @method DescribeIpInfo describeIpInfo(array $options = [])
 * @method DescribeL2VipsByDomain describeL2VipsByDomain(array $options = [])
 * @method DescribeOneMinuteData describeOneMinuteData(array $options = [])
 * @method DescribeRangeDataByLocateAndIspService describeRangeDataByLocateAndIspService(array $options = [])
 * @method DescribeRealtimeDeliveryAcc describeRealtimeDeliveryAcc(array $options = [])
 * @method DescribeRefreshQuota describeRefreshQuota(array $options = [])
 * @method DescribeRefreshTasks describeRefreshTasks(array $options = [])
 * @method DescribeTopDomainsByFlow describeTopDomainsByFlow(array $options = [])
 * @method DescribeUserConfigs describeUserConfigs(array $options = [])
 * @method DescribeUserDomains describeUserDomains(array $options = [])
 * @method DescribeUserUsageDataExportTask describeUserUsageDataExportTask(array $options = [])
 * @method DescribeUserUsageDetailDataExportTask describeUserUsageDetailDataExportTask(array $options = [])
 * @method GetUserDomainBlackList getUserDomainBlackList(array $options = [])
 * @method ListDomainsByLogConfigId listDomainsByLogConfigId(array $options = [])
 * @method ListFCTrigger listFCTrigger(array $options = [])
 * @method ModifyCdnDomain modifyCdnDomain(array $options = [])
 * @method ModifyCdnService modifyCdnService(array $options = [])
 * @method ModifyCdnSubscribeService modifyCdnSubscribeService(array $options = [])
 * @method ModifyDomainCustomLogConfig modifyDomainCustomLogConfig(array $options = [])
 * @method ModifyFileCacheExpiredConfig modifyFileCacheExpiredConfig(array $options = [])
 * @method ModifyHttpHeaderConfig modifyHttpHeaderConfig(array $options = [])
 * @method ModifyUserCustomLogConfig modifyUserCustomLogConfig(array $options = [])
 * @method OpenCdnService openCdnService(array $options = [])
 * @method PushObjectCache pushObjectCache(array $options = [])
 * @method RefreshObjectCaches refreshObjectCaches(array $options = [])
 * @method SetBusinessFunctionConfig setBusinessFunctionConfig(array $options = [])
 * @method SetCacheExpiredConfig setCacheExpiredConfig(array $options = [])
 * @method SetCcConfig setCcConfig(array $options = [])
 * @method SetDomainGreenManagerConfig setDomainGreenManagerConfig(array $options = [])
 * @method SetDomainServerCertificate setDomainServerCertificate(array $options = [])
 * @method SetErrorPageConfig setErrorPageConfig(array $options = [])
 * @method SetFileCacheExpiredConfig setFileCacheExpiredConfig(array $options = [])
 * @method SetForceRedirectConfig setForceRedirectConfig(array $options = [])
 * @method SetForwardSchemeConfig setForwardSchemeConfig(array $options = [])
 * @method SetHttpErrorPageConfig setHttpErrorPageConfig(array $options = [])
 * @method SetHttpHeaderConfig setHttpHeaderConfig(array $options = [])
 * @method SetHttpsOptionConfig setHttpsOptionConfig(array $options = [])
 * @method SetIgnoreQueryStringConfig setIgnoreQueryStringConfig(array $options = [])
 * @method SetIpAllowListConfig setIpAllowListConfig(array $options = [])
 * @method SetIpBlackListConfig setIpBlackListConfig(array $options = [])
 * @method SetL2OssKeyConfig setL2OssKeyConfig(array $options = [])
 * @method SetLocationAccessRestriction setLocationAccessRestriction(array $options = [])
 * @method SetOptimizeConfig setOptimizeConfig(array $options = [])
 * @method SetPageCompressConfig setPageCompressConfig(array $options = [])
 * @method SetPathCacheExpiredConfig setPathCacheExpiredConfig(array $options = [])
 * @method SetRangeConfig setRangeConfig(array $options = [])
 * @method SetRefererConfig setRefererConfig(array $options = [])
 * @method SetRefererRegexConfig setRefererRegexConfig(array $options = [])
 * @method SetRemoveQueryStringConfig setRemoveQueryStringConfig(array $options = [])
 * @method SetReqAuthConfig setReqAuthConfig(array $options = [])
 * @method SetReqHeaderConfig setReqHeaderConfig(array $options = [])
 * @method SetSourceHostConfig setSourceHostConfig(array $options = [])
 * @method SetVideoSeekConfig setVideoSeekConfig(array $options = [])
 * @method SetWafConfig setWafConfig(array $options = [])
 * @method SetWaitingRoomConfig setWaitingRoomConfig(array $options = [])
 * @method StartCdnDomain startCdnDomain(array $options = [])
 * @method StopCdnDomain stopCdnDomain(array $options = [])
 * @method UpdateFCTrigger updateFCTrigger(array $options = [])
 */
class CdnApiResolver
{
    use ApiResolverTrait;
}
