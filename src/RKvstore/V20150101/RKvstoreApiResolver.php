<?php

namespace AlibabaCloud\RKvstore\V20150101;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the RKvstore based on the method name as the Api name.
 *
 * @package   AlibabaCloud\RKvstore\V20150101
 *
 * @method AddBindingTunnel addBindingTunnel(array $options = [])
 * @method AllocateInstancePublicConnection allocateInstancePublicConnection(array $options = [])
 * @method BindTunnel bindTunnel(array $options = [])
 * @method CreateAccount createAccount(array $options = [])
 * @method CreateBackup createBackup(array $options = [])
 * @method CreateCacheAnalysisTask createCacheAnalysisTask(array $options = [])
 * @method CreateInstance createInstance(array $options = [])
 * @method CreateReplicationGroup createReplicationGroup(array $options = [])
 * @method CreateSnapshot createSnapshot(array $options = [])
 * @method CreateStaticVerification createStaticVerification(array $options = [])
 * @method CreateTempInstance createTempInstance(array $options = [])
 * @method DeleteAccount deleteAccount(array $options = [])
 * @method DeleteInstance deleteInstance(array $options = [])
 * @method DeleteReplicationGroup deleteReplicationGroup(array $options = [])
 * @method DeleteSnapshot deleteSnapshot(array $options = [])
 * @method DeleteSnapshotSettings deleteSnapshotSettings(array $options = [])
 * @method DeleteTempInstance deleteTempInstance(array $options = [])
 * @method DescribeAccounts describeAccounts(array $options = [])
 * @method DescribeActiveOperationTask describeActiveOperationTask(array $options = [])
 * @method DescribeActiveOperationTaskCount describeActiveOperationTaskCount(array $options = [])
 * @method DescribeActiveOperationTaskRegion describeActiveOperationTaskRegion(array $options = [])
 * @method DescribeActiveOperationTaskType describeActiveOperationTaskType(array $options = [])
 * @method DescribeAuditRecords describeAuditRecords(array $options = [])
 * @method DescribeBackupPolicy describeBackupPolicy(array $options = [])
 * @method DescribeBackups describeBackups(array $options = [])
 * @method DescribeCacheAnalysisReport describeCacheAnalysisReport(array $options = [])
 * @method DescribeCacheAnalysisReportList describeCacheAnalysisReportList(array $options = [])
 * @method DescribeCertification describeCertification(array $options = [])
 * @method DescribeDBInstanceMonitor describeDBInstanceMonitor(array $options = [])
 * @method DescribeDBInstanceNetInfo describeDBInstanceNetInfo(array $options = [])
 * @method DescribeDynamicVerificationList describeDynamicVerificationList(array $options = [])
 * @method DescribeErrorLogRecords describeErrorLogRecords(array $options = [])
 * @method DescribeHistoryMonitorValues describeHistoryMonitorValues(array $options = [])
 * @method DescribeInstanceAttribute describeInstanceAttribute(array $options = [])
 * @method DescribeInstanceAutoRenewalAttribute describeInstanceAutoRenewalAttribute(array $options = [])
 * @method DescribeInstanceConfig describeInstanceConfig(array $options = [])
 * @method DescribeInstancePerformanceUsage describeInstancePerformanceUsage(array $options = [])
 * @method DescribeInstanceSSL describeInstanceSSL(array $options = [])
 * @method DescribeInstances describeInstances(array $options = [])
 * @method DescribeInstancesByExpireTime describeInstancesByExpireTime(array $options = [])
 * @method DescribeIntranetAttribute describeIntranetAttribute(array $options = [])
 * @method DescribeLogicInstanceTopology describeLogicInstanceTopology(array $options = [])
 * @method DescribeMonitorItems describeMonitorItems(array $options = [])
 * @method DescribeMonthlyServiceStatus describeMonthlyServiceStatus(array $options = [])
 * @method DescribeMonthlyServiceStatusDetail describeMonthlyServiceStatusDetail(array $options = [])
 * @method DescribeParameterModificationHistory describeParameterModificationHistory(array $options = [])
 * @method DescribeParameterTemplates describeParameterTemplates(array $options = [])
 * @method DescribeParameters describeParameters(array $options = [])
 * @method DescribeRdsVSwitchs describeRdsVSwitchs(array $options = [])
 * @method DescribeRdsVpcs describeRdsVpcs(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeReplicaConflictInfo describeReplicaConflictInfo(array $options = [])
 * @method DescribeReplicaInitializeProgress describeReplicaInitializeProgress(array $options = [])
 * @method DescribeReplicaPerformance describeReplicaPerformance(array $options = [])
 * @method DescribeReplicaUsage describeReplicaUsage(array $options = [])
 * @method DescribeReplicas describeReplicas(array $options = [])
 * @method DescribeReplicationGroup describeReplicationGroup(array $options = [])
 * @method DescribeRunningLogRecords describeRunningLogRecords(array $options = [])
 * @method DescribeSecurityIps describeSecurityIps(array $options = [])
 * @method DescribeSlowLogRecords describeSlowLogRecords(array $options = [])
 * @method DescribeSnapshots describeSnapshots(array $options = [])
 * @method DescribeStaticVerificationList describeStaticVerificationList(array $options = [])
 * @method DescribeStrategy describeStrategy(array $options = [])
 * @method DescribeTargetAVZ describeTargetAVZ(array $options = [])
 * @method DescribeTempInstance describeTempInstance(array $options = [])
 * @method DescribeVerificationList describeVerificationList(array $options = [])
 * @method DescribeZones describeZones(array $options = [])
 * @method DestroyInstance destroyInstance(array $options = [])
 * @method EvaluateFailOverSwitch evaluateFailOverSwitch(array $options = [])
 * @method EvaluateResource evaluateResource(array $options = [])
 * @method FlushExpireKeys flushExpireKeys(array $options = [])
 * @method FlushInstance flushInstance(array $options = [])
 * @method GetSnapshotSettings getSnapshotSettings(array $options = [])
 * @method GrantAccountPrivilege grantAccountPrivilege(array $options = [])
 * @method ListReplicationGroup listReplicationGroup(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method MigrateToOtherZone migrateToOtherZone(array $options = [])
 * @method ModifyAccountDescription modifyAccountDescription(array $options = [])
 * @method ModifyActiveOperationPendingTask modifyActiveOperationPendingTask(array $options = [])
 * @method ModifyActiveOperationTask modifyActiveOperationTask(array $options = [])
 * @method ModifyAuditLogConfig modifyAuditLogConfig(array $options = [])
 * @method ModifyBackupPolicy modifyBackupPolicy(array $options = [])
 * @method ModifyCertification modifyCertification(array $options = [])
 * @method ModifyDBInstanceConnectionString modifyDBInstanceConnectionString(array $options = [])
 * @method ModifyDBInstanceMonitor modifyDBInstanceMonitor(array $options = [])
 * @method ModifyDynamicMode modifyDynamicMode(array $options = [])
 * @method ModifyGuardDomainMode modifyGuardDomainMode(array $options = [])
 * @method ModifyInstanceAttribute modifyInstanceAttribute(array $options = [])
 * @method ModifyInstanceAutoRenewalAttribute modifyInstanceAutoRenewalAttribute(array $options = [])
 * @method ModifyInstanceConfig modifyInstanceConfig(array $options = [])
 * @method ModifyInstanceMaintainTime modifyInstanceMaintainTime(array $options = [])
 * @method ModifyInstanceMajorVersion modifyInstanceMajorVersion(array $options = [])
 * @method ModifyInstanceMinorVersion modifyInstanceMinorVersion(array $options = [])
 * @method ModifyInstanceNetExpireTime modifyInstanceNetExpireTime(array $options = [])
 * @method ModifyInstanceSSL modifyInstanceSSL(array $options = [])
 * @method ModifyInstanceSpec modifyInstanceSpec(array $options = [])
 * @method ModifyInstanceSpecPreCheck modifyInstanceSpecPreCheck(array $options = [])
 * @method ModifyInstanceVpcAuthMode modifyInstanceVpcAuthMode(array $options = [])
 * @method ModifyIntranetAttribute modifyIntranetAttribute(array $options = [])
 * @method ModifyReplicaDescription modifyReplicaDescription(array $options = [])
 * @method ModifyReplicaDynamicMode modifyReplicaDynamicMode(array $options = [])
 * @method ModifyReplicaFilterMode modifyReplicaFilterMode(array $options = [])
 * @method ModifyReplicaMode modifyReplicaMode(array $options = [])
 * @method ModifyReplicaRecoverMode modifyReplicaRecoverMode(array $options = [])
 * @method ModifyReplicaRecoveryMode modifyReplicaRecoveryMode(array $options = [])
 * @method ModifyReplicaRelation modifyReplicaRelation(array $options = [])
 * @method ModifyReplicaVerificationMode modifyReplicaVerificationMode(array $options = [])
 * @method ModifyReplicationGroup modifyReplicationGroup(array $options = [])
 * @method ModifySecurityIps modifySecurityIps(array $options = [])
 * @method QueryTask queryTask(array $options = [])
 * @method RebuildInstance rebuildInstance(array $options = [])
 * @method ReleaseInstancePublicConnection releaseInstancePublicConnection(array $options = [])
 * @method ReleaseReplica releaseReplica(array $options = [])
 * @method RenewInstance renewInstance(array $options = [])
 * @method RenewMultiInstance renewMultiInstance(array $options = [])
 * @method ResetAccount resetAccount(array $options = [])
 * @method ResetAccountPassword resetAccountPassword(array $options = [])
 * @method RestartDBInstance restartDBInstance(array $options = [])
 * @method RestartInstance restartInstance(array $options = [])
 * @method RestoreInstance restoreInstance(array $options = [])
 * @method RestoreSnapshot restoreSnapshot(array $options = [])
 * @method RevokeAccountPrivilege revokeAccountPrivilege(array $options = [])
 * @method SetSnapshotSettings setSnapshotSettings(array $options = [])
 * @method SwitchNetwork switchNetwork(array $options = [])
 * @method SwitchTempInstance switchTempInstance(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method TransformToPrePaid transformToPrePaid(array $options = [])
 * @method UnbindTunnel unbindTunnel(array $options = [])
 * @method UnlinkReplicaInstance unlinkReplicaInstance(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method VerifyPassword verifyPassword(array $options = [])
 */
class RKvstoreApiResolver
{
    use ApiResolverTrait;
}
