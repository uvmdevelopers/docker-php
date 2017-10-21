<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_31\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers   = [];
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new PortNormalizer();
        $normalizers[] = new MountPointNormalizer();
        $normalizers[] = new DeviceMappingNormalizer();
        $normalizers[] = new ThrottleDeviceNormalizer();
        $normalizers[] = new MountNormalizer();
        $normalizers[] = new MountBindOptionsNormalizer();
        $normalizers[] = new MountVolumeOptionsNormalizer();
        $normalizers[] = new MountVolumeOptionsDriverConfigNormalizer();
        $normalizers[] = new MountTmpfsOptionsNormalizer();
        $normalizers[] = new RestartPolicyNormalizer();
        $normalizers[] = new ResourcesNormalizer();
        $normalizers[] = new ResourcesBlkioWeightDeviceItemNormalizer();
        $normalizers[] = new ResourcesUlimitsItemNormalizer();
        $normalizers[] = new HealthConfigNormalizer();
        $normalizers[] = new HostConfigNormalizer();
        $normalizers[] = new HostConfigLogConfigNormalizer();
        $normalizers[] = new HostConfigPortBindingsItemNormalizer();
        $normalizers[] = new ContainerConfigNormalizer();
        $normalizers[] = new ContainerConfigVolumesNormalizer();
        $normalizers[] = new NetworkConfigNormalizer();
        $normalizers[] = new GraphDriverDataNormalizer();
        $normalizers[] = new ImageNormalizer();
        $normalizers[] = new ImageRootFSNormalizer();
        $normalizers[] = new ImageMetadataNormalizer();
        $normalizers[] = new ImageSummaryNormalizer();
        $normalizers[] = new AuthConfigNormalizer();
        $normalizers[] = new ProcessConfigNormalizer();
        $normalizers[] = new VolumeNormalizer();
        $normalizers[] = new VolumeUsageDataNormalizer();
        $normalizers[] = new NetworkNormalizer();
        $normalizers[] = new IPAMNormalizer();
        $normalizers[] = new NetworkContainerNormalizer();
        $normalizers[] = new BuildInfoNormalizer();
        $normalizers[] = new CreateImageInfoNormalizer();
        $normalizers[] = new PushImageInfoNormalizer();
        $normalizers[] = new ErrorDetailNormalizer();
        $normalizers[] = new ProgressDetailNormalizer();
        $normalizers[] = new ErrorResponseNormalizer();
        $normalizers[] = new IdResponseNormalizer();
        $normalizers[] = new EndpointSettingsNormalizer();
        $normalizers[] = new EndpointSettingsIPAMConfigNormalizer();
        $normalizers[] = new PluginMountNormalizer();
        $normalizers[] = new PluginDeviceNormalizer();
        $normalizers[] = new PluginEnvNormalizer();
        $normalizers[] = new PluginInterfaceTypeNormalizer();
        $normalizers[] = new PluginNormalizer();
        $normalizers[] = new PluginSettingsNormalizer();
        $normalizers[] = new PluginConfigNormalizer();
        $normalizers[] = new PluginConfigInterfaceNormalizer();
        $normalizers[] = new PluginConfigUserNormalizer();
        $normalizers[] = new PluginConfigNetworkNormalizer();
        $normalizers[] = new PluginConfigLinuxNormalizer();
        $normalizers[] = new PluginConfigArgsNormalizer();
        $normalizers[] = new PluginConfigRootfsNormalizer();
        $normalizers[] = new ObjectVersionNormalizer();
        $normalizers[] = new NodeSpecNormalizer();
        $normalizers[] = new NodeNormalizer();
        $normalizers[] = new NodeDescriptionNormalizer();
        $normalizers[] = new NodeDescriptionPlatformNormalizer();
        $normalizers[] = new NodeDescriptionResourcesNormalizer();
        $normalizers[] = new NodeDescriptionEngineNormalizer();
        $normalizers[] = new NodeDescriptionEnginePluginsItemNormalizer();
        $normalizers[] = new TLSInfoNormalizer();
        $normalizers[] = new SwarmSpecNormalizer();
        $normalizers[] = new SwarmSpecOrchestrationNormalizer();
        $normalizers[] = new SwarmSpecRaftNormalizer();
        $normalizers[] = new SwarmSpecDispatcherNormalizer();
        $normalizers[] = new SwarmSpecCAConfigNormalizer();
        $normalizers[] = new SwarmSpecCAConfigExternalCAsItemNormalizer();
        $normalizers[] = new SwarmSpecEncryptionConfigNormalizer();
        $normalizers[] = new SwarmSpecTaskDefaultsNormalizer();
        $normalizers[] = new SwarmSpecTaskDefaultsLogDriverNormalizer();
        $normalizers[] = new ClusterInfoNormalizer();
        $normalizers[] = new TaskSpecNormalizer();
        $normalizers[] = new TaskSpecPluginSpecNormalizer();
        $normalizers[] = new TaskSpecPluginSpecPluginPrivilegeItemNormalizer();
        $normalizers[] = new TaskSpecContainerSpecNormalizer();
        $normalizers[] = new TaskSpecContainerSpecPrivilegesNormalizer();
        $normalizers[] = new TaskSpecContainerSpecPrivilegesCredentialSpecNormalizer();
        $normalizers[] = new TaskSpecContainerSpecPrivilegesSELinuxContextNormalizer();
        $normalizers[] = new TaskSpecContainerSpecDNSConfigNormalizer();
        $normalizers[] = new TaskSpecContainerSpecSecretsItemNormalizer();
        $normalizers[] = new TaskSpecContainerSpecSecretsItemFileNormalizer();
        $normalizers[] = new TaskSpecContainerSpecConfigsItemNormalizer();
        $normalizers[] = new TaskSpecContainerSpecConfigsItemFileNormalizer();
        $normalizers[] = new TaskSpecResourcesNormalizer();
        $normalizers[] = new TaskSpecResourcesLimitsNormalizer();
        $normalizers[] = new TaskSpecResourcesReservationNormalizer();
        $normalizers[] = new TaskSpecRestartPolicyNormalizer();
        $normalizers[] = new TaskSpecPlacementNormalizer();
        $normalizers[] = new TaskSpecPlacementPreferencesItemNormalizer();
        $normalizers[] = new TaskSpecPlacementPreferencesItemSpreadNormalizer();
        $normalizers[] = new TaskSpecPlacementPlatformsItemNormalizer();
        $normalizers[] = new TaskSpecNetworksItemNormalizer();
        $normalizers[] = new TaskSpecLogDriverNormalizer();
        $normalizers[] = new TaskNormalizer();
        $normalizers[] = new TaskStatusNormalizer();
        $normalizers[] = new TaskStatusContainerStatusNormalizer();
        $normalizers[] = new ServiceSpecNormalizer();
        $normalizers[] = new ServiceSpecModeNormalizer();
        $normalizers[] = new ServiceSpecModeReplicatedNormalizer();
        $normalizers[] = new ServiceSpecUpdateConfigNormalizer();
        $normalizers[] = new ServiceSpecRollbackConfigNormalizer();
        $normalizers[] = new ServiceSpecNetworksItemNormalizer();
        $normalizers[] = new EndpointPortConfigNormalizer();
        $normalizers[] = new EndpointSpecNormalizer();
        $normalizers[] = new ServiceNormalizer();
        $normalizers[] = new ServiceEndpointNormalizer();
        $normalizers[] = new ServiceEndpointVirtualIPsItemNormalizer();
        $normalizers[] = new ServiceUpdateStatusNormalizer();
        $normalizers[] = new ImageDeleteResponseItemNormalizer();
        $normalizers[] = new ServiceUpdateResponseNormalizer();
        $normalizers[] = new ContainerSummaryItemNormalizer();
        $normalizers[] = new ContainerSummaryItemHostConfigNormalizer();
        $normalizers[] = new ContainerSummaryItemNetworkSettingsNormalizer();
        $normalizers[] = new DriverNormalizer();
        $normalizers[] = new SecretSpecNormalizer();
        $normalizers[] = new SecretNormalizer();
        $normalizers[] = new ConfigSpecNormalizer();
        $normalizers[] = new ConfigNormalizer();
        $normalizers[] = new ContainersCreateBodyNormalizer();
        $normalizers[] = new ContainersCreateBodyNetworkingConfigNormalizer();
        $normalizers[] = new ContainersCreateResponse201Normalizer();
        $normalizers[] = new ContainersIdJsonResponse200Normalizer();
        $normalizers[] = new ContainersIdJsonResponse200StateNormalizer();
        $normalizers[] = new ContainersIdTopResponse200Normalizer();
        $normalizers[] = new ContainersIdChangesResponse200ItemNormalizer();
        $normalizers[] = new ContainersIdUpdateBodyNormalizer();
        $normalizers[] = new ContainersIdUpdateResponse200Normalizer();
        $normalizers[] = new ContainersIdWaitResponse200Normalizer();
        $normalizers[] = new ContainersIdArchiveResponse400Normalizer();
        $normalizers[] = new ContainersIdArchiveResponse400Normalizer();
        $normalizers[] = new ContainersPruneResponse200Normalizer();
        $normalizers[] = new BuildPruneResponse200Normalizer();
        $normalizers[] = new ImagesNameHistoryResponse200ItemNormalizer();
        $normalizers[] = new ImagesSearchResponse200ItemNormalizer();
        $normalizers[] = new ImagesPruneResponse200Normalizer();
        $normalizers[] = new AuthResponse200Normalizer();
        $normalizers[] = new InfoResponse200Normalizer();
        $normalizers[] = new InfoResponse200PluginsNormalizer();
        $normalizers[] = new InfoResponse200RegistryConfigNormalizer();
        $normalizers[] = new InfoResponse200RegistryConfigIndexConfigsItemNormalizer();
        $normalizers[] = new VersionResponse200Normalizer();
        $normalizers[] = new EventsResponse200Normalizer();
        $normalizers[] = new EventsResponse200ActorNormalizer();
        $normalizers[] = new SystemDfResponse200Normalizer();
        $normalizers[] = new ContainersIdExecBodyNormalizer();
        $normalizers[] = new ExecIdStartBodyNormalizer();
        $normalizers[] = new ExecIdJsonResponse200Normalizer();
        $normalizers[] = new VolumesResponse200Normalizer();
        $normalizers[] = new VolumesCreateBodyNormalizer();
        $normalizers[] = new VolumesPruneResponse200Normalizer();
        $normalizers[] = new NetworksCreateBodyNormalizer();
        $normalizers[] = new NetworksCreateResponse201Normalizer();
        $normalizers[] = new NetworksIdConnectBodyNormalizer();
        $normalizers[] = new NetworksIdDisconnectBodyNormalizer();
        $normalizers[] = new NetworksPruneResponse200Normalizer();
        $normalizers[] = new PluginsPrivilegesResponse200ItemNormalizer();
        $normalizers[] = new PluginsPullBodyItemNormalizer();
        $normalizers[] = new PluginsNameUpgradeBodyItemNormalizer();
        $normalizers[] = new SwarmResponse200Normalizer();
        $normalizers[] = new SwarmResponse200JoinTokensNormalizer();
        $normalizers[] = new SwarmInitBodyNormalizer();
        $normalizers[] = new SwarmJoinBodyNormalizer();
        $normalizers[] = new SwarmUnlockkeyResponse200Normalizer();
        $normalizers[] = new SwarmUnlockBodyNormalizer();
        $normalizers[] = new ServicesCreateBodyNormalizer();
        $normalizers[] = new ServicesCreateResponse201Normalizer();
        $normalizers[] = new ServicesIdUpdateBodyNormalizer();
        $normalizers[] = new SecretsCreateBodyNormalizer();
        $normalizers[] = new SecretsCreateResponse201Normalizer();
        $normalizers[] = new ConfigsCreateBodyNormalizer();
        $normalizers[] = new ConfigsCreateResponse201Normalizer();
        $normalizers[] = new DistributionNameJsonResponse200Normalizer();
        $normalizers[] = new DistributionNameJsonResponse200DescriptorNormalizer();
        $normalizers[] = new DistributionNameJsonResponse200PlatformsItemNormalizer();

        return $normalizers;
    }
}