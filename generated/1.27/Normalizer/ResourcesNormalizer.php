<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_27\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ResourcesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Docker\\API\\V1_27\\Model\\Resources' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\V1_27\Model\Resources) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Docker\API\V1_27\Model\Resources();
        if (property_exists($data, 'CpuShares')) {
            $object->setCpuShares($data->{'CpuShares'});
        }
        if (property_exists($data, 'Memory')) {
            $object->setMemory($data->{'Memory'});
        }
        if (property_exists($data, 'CgroupParent')) {
            $object->setCgroupParent($data->{'CgroupParent'});
        }
        if (property_exists($data, 'BlkioWeight')) {
            $object->setBlkioWeight($data->{'BlkioWeight'});
        }
        if (property_exists($data, 'BlkioWeightDevice')) {
            $values = [];
            foreach ($data->{'BlkioWeightDevice'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Docker\\API\\V1_27\\Model\\ResourcesBlkioWeightDeviceItem', 'json', $context);
            }
            $object->setBlkioWeightDevice($values);
        }
        if (property_exists($data, 'BlkioDeviceReadBps')) {
            $values_1 = [];
            foreach ($data->{'BlkioDeviceReadBps'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Docker\\API\\V1_27\\Model\\ThrottleDevice', 'json', $context);
            }
            $object->setBlkioDeviceReadBps($values_1);
        }
        if (property_exists($data, 'BlkioDeviceWriteBps')) {
            $values_2 = [];
            foreach ($data->{'BlkioDeviceWriteBps'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Docker\\API\\V1_27\\Model\\ThrottleDevice', 'json', $context);
            }
            $object->setBlkioDeviceWriteBps($values_2);
        }
        if (property_exists($data, 'BlkioDeviceReadIOps')) {
            $values_3 = [];
            foreach ($data->{'BlkioDeviceReadIOps'} as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Docker\\API\\V1_27\\Model\\ThrottleDevice', 'json', $context);
            }
            $object->setBlkioDeviceReadIOps($values_3);
        }
        if (property_exists($data, 'BlkioDeviceWriteIOps')) {
            $values_4 = [];
            foreach ($data->{'BlkioDeviceWriteIOps'} as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Docker\\API\\V1_27\\Model\\ThrottleDevice', 'json', $context);
            }
            $object->setBlkioDeviceWriteIOps($values_4);
        }
        if (property_exists($data, 'CpuPeriod')) {
            $object->setCpuPeriod($data->{'CpuPeriod'});
        }
        if (property_exists($data, 'CpuQuota')) {
            $object->setCpuQuota($data->{'CpuQuota'});
        }
        if (property_exists($data, 'CpuRealtimePeriod')) {
            $object->setCpuRealtimePeriod($data->{'CpuRealtimePeriod'});
        }
        if (property_exists($data, 'CpuRealtimeRuntime')) {
            $object->setCpuRealtimeRuntime($data->{'CpuRealtimeRuntime'});
        }
        if (property_exists($data, 'CpusetCpus')) {
            $object->setCpusetCpus($data->{'CpusetCpus'});
        }
        if (property_exists($data, 'CpusetMems')) {
            $object->setCpusetMems($data->{'CpusetMems'});
        }
        if (property_exists($data, 'Devices')) {
            $values_5 = [];
            foreach ($data->{'Devices'} as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Docker\\API\\V1_27\\Model\\DeviceMapping', 'json', $context);
            }
            $object->setDevices($values_5);
        }
        if (property_exists($data, 'DiskQuota')) {
            $object->setDiskQuota($data->{'DiskQuota'});
        }
        if (property_exists($data, 'KernelMemory')) {
            $object->setKernelMemory($data->{'KernelMemory'});
        }
        if (property_exists($data, 'MemoryReservation')) {
            $object->setMemoryReservation($data->{'MemoryReservation'});
        }
        if (property_exists($data, 'MemorySwap')) {
            $object->setMemorySwap($data->{'MemorySwap'});
        }
        if (property_exists($data, 'MemorySwappiness')) {
            $object->setMemorySwappiness($data->{'MemorySwappiness'});
        }
        if (property_exists($data, 'NanoCPUs')) {
            $object->setNanoCPUs($data->{'NanoCPUs'});
        }
        if (property_exists($data, 'OomKillDisable')) {
            $object->setOomKillDisable($data->{'OomKillDisable'});
        }
        if (property_exists($data, 'PidsLimit')) {
            $object->setPidsLimit($data->{'PidsLimit'});
        }
        if (property_exists($data, 'Ulimits')) {
            $values_6 = [];
            foreach ($data->{'Ulimits'} as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, 'Docker\\API\\V1_27\\Model\\ResourcesUlimitsItem', 'json', $context);
            }
            $object->setUlimits($values_6);
        }
        if (property_exists($data, 'CpuCount')) {
            $object->setCpuCount($data->{'CpuCount'});
        }
        if (property_exists($data, 'CpuPercent')) {
            $object->setCpuPercent($data->{'CpuPercent'});
        }
        if (property_exists($data, 'IOMaximumIOps')) {
            $object->setIOMaximumIOps($data->{'IOMaximumIOps'});
        }
        if (property_exists($data, 'IOMaximumBandwidth')) {
            $object->setIOMaximumBandwidth($data->{'IOMaximumBandwidth'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCpuShares()) {
            $data->{'CpuShares'} = $object->getCpuShares();
        }
        if (null !== $object->getMemory()) {
            $data->{'Memory'} = $object->getMemory();
        }
        if (null !== $object->getCgroupParent()) {
            $data->{'CgroupParent'} = $object->getCgroupParent();
        }
        if (null !== $object->getBlkioWeight()) {
            $data->{'BlkioWeight'} = $object->getBlkioWeight();
        }
        if (null !== $object->getBlkioWeightDevice()) {
            $values = [];
            foreach ($object->getBlkioWeightDevice() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'BlkioWeightDevice'} = $values;
        }
        if (null !== $object->getBlkioDeviceReadBps()) {
            $values_1 = [];
            foreach ($object->getBlkioDeviceReadBps() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'BlkioDeviceReadBps'} = $values_1;
        }
        if (null !== $object->getBlkioDeviceWriteBps()) {
            $values_2 = [];
            foreach ($object->getBlkioDeviceWriteBps() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'BlkioDeviceWriteBps'} = $values_2;
        }
        if (null !== $object->getBlkioDeviceReadIOps()) {
            $values_3 = [];
            foreach ($object->getBlkioDeviceReadIOps() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data->{'BlkioDeviceReadIOps'} = $values_3;
        }
        if (null !== $object->getBlkioDeviceWriteIOps()) {
            $values_4 = [];
            foreach ($object->getBlkioDeviceWriteIOps() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data->{'BlkioDeviceWriteIOps'} = $values_4;
        }
        if (null !== $object->getCpuPeriod()) {
            $data->{'CpuPeriod'} = $object->getCpuPeriod();
        }
        if (null !== $object->getCpuQuota()) {
            $data->{'CpuQuota'} = $object->getCpuQuota();
        }
        if (null !== $object->getCpuRealtimePeriod()) {
            $data->{'CpuRealtimePeriod'} = $object->getCpuRealtimePeriod();
        }
        if (null !== $object->getCpuRealtimeRuntime()) {
            $data->{'CpuRealtimeRuntime'} = $object->getCpuRealtimeRuntime();
        }
        if (null !== $object->getCpusetCpus()) {
            $data->{'CpusetCpus'} = $object->getCpusetCpus();
        }
        if (null !== $object->getCpusetMems()) {
            $data->{'CpusetMems'} = $object->getCpusetMems();
        }
        if (null !== $object->getDevices()) {
            $values_5 = [];
            foreach ($object->getDevices() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data->{'Devices'} = $values_5;
        }
        if (null !== $object->getDiskQuota()) {
            $data->{'DiskQuota'} = $object->getDiskQuota();
        }
        if (null !== $object->getKernelMemory()) {
            $data->{'KernelMemory'} = $object->getKernelMemory();
        }
        if (null !== $object->getMemoryReservation()) {
            $data->{'MemoryReservation'} = $object->getMemoryReservation();
        }
        if (null !== $object->getMemorySwap()) {
            $data->{'MemorySwap'} = $object->getMemorySwap();
        }
        if (null !== $object->getMemorySwappiness()) {
            $data->{'MemorySwappiness'} = $object->getMemorySwappiness();
        }
        if (null !== $object->getNanoCPUs()) {
            $data->{'NanoCPUs'} = $object->getNanoCPUs();
        }
        if (null !== $object->getOomKillDisable()) {
            $data->{'OomKillDisable'} = $object->getOomKillDisable();
        }
        if (null !== $object->getPidsLimit()) {
            $data->{'PidsLimit'} = $object->getPidsLimit();
        }
        if (null !== $object->getUlimits()) {
            $values_6 = [];
            foreach ($object->getUlimits() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $data->{'Ulimits'} = $values_6;
        }
        if (null !== $object->getCpuCount()) {
            $data->{'CpuCount'} = $object->getCpuCount();
        }
        if (null !== $object->getCpuPercent()) {
            $data->{'CpuPercent'} = $object->getCpuPercent();
        }
        if (null !== $object->getIOMaximumIOps()) {
            $data->{'IOMaximumIOps'} = $object->getIOMaximumIOps();
        }
        if (null !== $object->getIOMaximumBandwidth()) {
            $data->{'IOMaximumBandwidth'} = $object->getIOMaximumBandwidth();
        }

        return $data;
    }
}