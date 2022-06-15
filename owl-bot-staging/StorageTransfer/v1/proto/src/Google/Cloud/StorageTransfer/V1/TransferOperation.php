<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/storagetransfer/v1/transfer_types.proto

namespace Google\Cloud\StorageTransfer\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A description of the execution of a transfer.
 *
 * Generated from protobuf message <code>google.storagetransfer.v1.TransferOperation</code>
 */
class TransferOperation extends \Google\Protobuf\Internal\Message
{
    /**
     * A globally unique ID assigned by the system.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * The ID of the Google Cloud project that owns the operation.
     *
     * Generated from protobuf field <code>string project_id = 2;</code>
     */
    protected $project_id = '';
    /**
     * Transfer specification.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.TransferSpec transfer_spec = 3;</code>
     */
    protected $transfer_spec = null;
    /**
     * Notification configuration.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.NotificationConfig notification_config = 10;</code>
     */
    protected $notification_config = null;
    /**
     * Start time of this transfer execution.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 4;</code>
     */
    protected $start_time = null;
    /**
     * End time of this transfer execution.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 5;</code>
     */
    protected $end_time = null;
    /**
     * Status of the transfer operation.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.TransferOperation.Status status = 6;</code>
     */
    protected $status = 0;
    /**
     * Information about the progress of the transfer operation.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.TransferCounters counters = 7;</code>
     */
    protected $counters = null;
    /**
     * Summarizes errors encountered with sample error log entries.
     *
     * Generated from protobuf field <code>repeated .google.storagetransfer.v1.ErrorSummary error_breakdowns = 8;</code>
     */
    private $error_breakdowns;
    /**
     * The name of the transfer job that triggers this transfer operation.
     *
     * Generated from protobuf field <code>string transfer_job_name = 9;</code>
     */
    protected $transfer_job_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           A globally unique ID assigned by the system.
     *     @type string $project_id
     *           The ID of the Google Cloud project that owns the operation.
     *     @type \Google\Cloud\StorageTransfer\V1\TransferSpec $transfer_spec
     *           Transfer specification.
     *     @type \Google\Cloud\StorageTransfer\V1\NotificationConfig $notification_config
     *           Notification configuration.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Start time of this transfer execution.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           End time of this transfer execution.
     *     @type int $status
     *           Status of the transfer operation.
     *     @type \Google\Cloud\StorageTransfer\V1\TransferCounters $counters
     *           Information about the progress of the transfer operation.
     *     @type \Google\Cloud\StorageTransfer\V1\ErrorSummary[]|\Google\Protobuf\Internal\RepeatedField $error_breakdowns
     *           Summarizes errors encountered with sample error log entries.
     *     @type string $transfer_job_name
     *           The name of the transfer job that triggers this transfer operation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Storagetransfer\V1\TransferTypes::initOnce();
        parent::__construct($data);
    }

    /**
     * A globally unique ID assigned by the system.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A globally unique ID assigned by the system.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The ID of the Google Cloud project that owns the operation.
     *
     * Generated from protobuf field <code>string project_id = 2;</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * The ID of the Google Cloud project that owns the operation.
     *
     * Generated from protobuf field <code>string project_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * Transfer specification.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.TransferSpec transfer_spec = 3;</code>
     * @return \Google\Cloud\StorageTransfer\V1\TransferSpec|null
     */
    public function getTransferSpec()
    {
        return $this->transfer_spec;
    }

    public function hasTransferSpec()
    {
        return isset($this->transfer_spec);
    }

    public function clearTransferSpec()
    {
        unset($this->transfer_spec);
    }

    /**
     * Transfer specification.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.TransferSpec transfer_spec = 3;</code>
     * @param \Google\Cloud\StorageTransfer\V1\TransferSpec $var
     * @return $this
     */
    public function setTransferSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\StorageTransfer\V1\TransferSpec::class);
        $this->transfer_spec = $var;

        return $this;
    }

    /**
     * Notification configuration.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.NotificationConfig notification_config = 10;</code>
     * @return \Google\Cloud\StorageTransfer\V1\NotificationConfig|null
     */
    public function getNotificationConfig()
    {
        return $this->notification_config;
    }

    public function hasNotificationConfig()
    {
        return isset($this->notification_config);
    }

    public function clearNotificationConfig()
    {
        unset($this->notification_config);
    }

    /**
     * Notification configuration.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.NotificationConfig notification_config = 10;</code>
     * @param \Google\Cloud\StorageTransfer\V1\NotificationConfig $var
     * @return $this
     */
    public function setNotificationConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\StorageTransfer\V1\NotificationConfig::class);
        $this->notification_config = $var;

        return $this;
    }

    /**
     * Start time of this transfer execution.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * Start time of this transfer execution.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * End time of this transfer execution.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 5;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * End time of this transfer execution.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Status of the transfer operation.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.TransferOperation.Status status = 6;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Status of the transfer operation.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.TransferOperation.Status status = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\StorageTransfer\V1\TransferOperation\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Information about the progress of the transfer operation.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.TransferCounters counters = 7;</code>
     * @return \Google\Cloud\StorageTransfer\V1\TransferCounters|null
     */
    public function getCounters()
    {
        return $this->counters;
    }

    public function hasCounters()
    {
        return isset($this->counters);
    }

    public function clearCounters()
    {
        unset($this->counters);
    }

    /**
     * Information about the progress of the transfer operation.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.TransferCounters counters = 7;</code>
     * @param \Google\Cloud\StorageTransfer\V1\TransferCounters $var
     * @return $this
     */
    public function setCounters($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\StorageTransfer\V1\TransferCounters::class);
        $this->counters = $var;

        return $this;
    }

    /**
     * Summarizes errors encountered with sample error log entries.
     *
     * Generated from protobuf field <code>repeated .google.storagetransfer.v1.ErrorSummary error_breakdowns = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getErrorBreakdowns()
    {
        return $this->error_breakdowns;
    }

    /**
     * Summarizes errors encountered with sample error log entries.
     *
     * Generated from protobuf field <code>repeated .google.storagetransfer.v1.ErrorSummary error_breakdowns = 8;</code>
     * @param \Google\Cloud\StorageTransfer\V1\ErrorSummary[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setErrorBreakdowns($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\StorageTransfer\V1\ErrorSummary::class);
        $this->error_breakdowns = $arr;

        return $this;
    }

    /**
     * The name of the transfer job that triggers this transfer operation.
     *
     * Generated from protobuf field <code>string transfer_job_name = 9;</code>
     * @return string
     */
    public function getTransferJobName()
    {
        return $this->transfer_job_name;
    }

    /**
     * The name of the transfer job that triggers this transfer operation.
     *
     * Generated from protobuf field <code>string transfer_job_name = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setTransferJobName($var)
    {
        GPBUtil::checkString($var, True);
        $this->transfer_job_name = $var;

        return $this;
    }

}

