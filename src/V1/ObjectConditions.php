<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/storagetransfer/v1/transfer_types.proto

namespace Google\Cloud\StorageTransfer\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Conditions that determine which objects are transferred. Applies only
 * to Cloud Data Sources such as S3, Azure, and Cloud Storage.
 * The "last modification time" refers to the time of the
 * last change to the object's content or metadata — specifically, this is
 * the `updated` property of Cloud Storage objects, the `LastModified` field
 * of S3 objects, and the `Last-Modified` header of Azure blobs.
 * For S3 objects, the `LastModified` value is the time the object begins
 * uploading. If the object meets your "last modification time" criteria,
 * but has not finished uploading, the object is not transferred. See
 * [Transfer from Amazon S3 to Cloud
 * Storage](https://cloud.google.com/storage-transfer/docs/create-transfers/agentless/s3#transfer_options)
 * for more information.
 * Transfers with a [PosixFilesystem][google.storagetransfer.v1.PosixFilesystem]
 * source or destination don't support `ObjectConditions`.
 *
 * Generated from protobuf message <code>google.storagetransfer.v1.ObjectConditions</code>
 */
class ObjectConditions extends \Google\Protobuf\Internal\Message
{
    /**
     * Ensures that objects are not transferred until a specific minimum time
     * has elapsed after the "last modification time". When a
     * [TransferOperation][google.storagetransfer.v1.TransferOperation] begins,
     * objects with a "last modification time" are transferred only if the elapsed
     * time between the
     * [start_time][google.storagetransfer.v1.TransferOperation.start_time] of the
     * `TransferOperation` and the "last modification time" of the object is equal
     * to or greater than the value of min_time_elapsed_since_last_modification`.
     * Objects that do not have a "last modification time" are also transferred.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration min_time_elapsed_since_last_modification = 1;</code>
     */
    protected $min_time_elapsed_since_last_modification = null;
    /**
     * Ensures that objects are not transferred if a specific maximum time
     * has elapsed since the "last modification time".
     * When a [TransferOperation][google.storagetransfer.v1.TransferOperation]
     * begins, objects with a "last modification time" are transferred only if the
     * elapsed time between the
     * [start_time][google.storagetransfer.v1.TransferOperation.start_time] of the
     * `TransferOperation`and the "last modification time" of the object
     *  is less than the value of max_time_elapsed_since_last_modification`.
     * Objects that do not have a "last modification time" are also transferred.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration max_time_elapsed_since_last_modification = 2;</code>
     */
    protected $max_time_elapsed_since_last_modification = null;
    /**
     * If you specify `include_prefixes`, Storage Transfer Service uses the items
     * in the `include_prefixes` array to determine which objects to include in a
     * transfer. Objects must start with one of the matching `include_prefixes`
     * for inclusion in the transfer. If
     * [exclude_prefixes][google.storagetransfer.v1.ObjectConditions.exclude_prefixes]
     * is specified, objects must not start with any of the `exclude_prefixes`
     * specified for inclusion in the transfer.
     * The following are requirements of `include_prefixes`:
     *   * Each include-prefix can contain any sequence of Unicode characters, to
     *     a max length of 1024 bytes when UTF8-encoded, and must not contain
     *     Carriage Return or Line Feed characters.  Wildcard matching and regular
     *     expression matching are not supported.
     *   * Each include-prefix must omit the leading slash. For example, to
     *     include the object `s3://my-aws-bucket/logs/y=2015/requests.gz`,
     *     specify the include-prefix as `logs/y=2015/requests.gz`.
     *   * None of the include-prefix values can be empty, if specified.
     *   * Each include-prefix must include a distinct portion of the object
     *     namespace. No include-prefix may be a prefix of another
     *     include-prefix.
     * The max size of `include_prefixes` is 1000.
     * For more information, see [Filtering objects from
     * transfers](/storage-transfer/docs/filtering-objects-from-transfers).
     *
     * Generated from protobuf field <code>repeated string include_prefixes = 3;</code>
     */
    private $include_prefixes;
    /**
     * If you specify `exclude_prefixes`, Storage Transfer Service uses the items
     * in the `exclude_prefixes` array to determine which objects to exclude from
     * a transfer. Objects must not start with one of the matching
     * `exclude_prefixes` for inclusion in a transfer.
     * The following are requirements of `exclude_prefixes`:
     *   * Each exclude-prefix can contain any sequence of Unicode characters, to
     *     a max length of 1024 bytes when UTF8-encoded, and must not contain
     *     Carriage Return or Line Feed characters.  Wildcard matching and regular
     *     expression matching are not supported.
     *   * Each exclude-prefix must omit the leading slash. For example, to
     *     exclude the object `s3://my-aws-bucket/logs/y=2015/requests.gz`,
     *     specify the exclude-prefix as `logs/y=2015/requests.gz`.
     *   * None of the exclude-prefix values can be empty, if specified.
     *   * Each exclude-prefix must exclude a distinct portion of the object
     *     namespace. No exclude-prefix may be a prefix of another
     *     exclude-prefix.
     *   * If
     *   [include_prefixes][google.storagetransfer.v1.ObjectConditions.include_prefixes]
     *   is specified, then each exclude-prefix must start with the value of a
     *   path explicitly included by `include_prefixes`.
     * The max size of `exclude_prefixes` is 1000.
     * For more information, see [Filtering objects from
     * transfers](/storage-transfer/docs/filtering-objects-from-transfers).
     *
     * Generated from protobuf field <code>repeated string exclude_prefixes = 4;</code>
     */
    private $exclude_prefixes;
    /**
     * If specified, only objects with a "last modification time" on or after
     * this timestamp and objects that don't have a "last modification time" are
     * transferred.
     * The `last_modified_since` and `last_modified_before` fields can be used
     * together for chunked data processing. For example, consider a script that
     * processes each day's worth of data at a time. For that you'd set each
     * of the fields as follows:
     * *  `last_modified_since` to the start of the day
     * *  `last_modified_before` to the end of the day
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_modified_since = 5;</code>
     */
    protected $last_modified_since = null;
    /**
     * If specified, only objects with a "last modification time" before this
     * timestamp and objects that don't have a "last modification time" are
     * transferred.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_modified_before = 6;</code>
     */
    protected $last_modified_before = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $min_time_elapsed_since_last_modification
     *           Ensures that objects are not transferred until a specific minimum time
     *           has elapsed after the "last modification time". When a
     *           [TransferOperation][google.storagetransfer.v1.TransferOperation] begins,
     *           objects with a "last modification time" are transferred only if the elapsed
     *           time between the
     *           [start_time][google.storagetransfer.v1.TransferOperation.start_time] of the
     *           `TransferOperation` and the "last modification time" of the object is equal
     *           to or greater than the value of min_time_elapsed_since_last_modification`.
     *           Objects that do not have a "last modification time" are also transferred.
     *     @type \Google\Protobuf\Duration $max_time_elapsed_since_last_modification
     *           Ensures that objects are not transferred if a specific maximum time
     *           has elapsed since the "last modification time".
     *           When a [TransferOperation][google.storagetransfer.v1.TransferOperation]
     *           begins, objects with a "last modification time" are transferred only if the
     *           elapsed time between the
     *           [start_time][google.storagetransfer.v1.TransferOperation.start_time] of the
     *           `TransferOperation`and the "last modification time" of the object
     *            is less than the value of max_time_elapsed_since_last_modification`.
     *           Objects that do not have a "last modification time" are also transferred.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $include_prefixes
     *           If you specify `include_prefixes`, Storage Transfer Service uses the items
     *           in the `include_prefixes` array to determine which objects to include in a
     *           transfer. Objects must start with one of the matching `include_prefixes`
     *           for inclusion in the transfer. If
     *           [exclude_prefixes][google.storagetransfer.v1.ObjectConditions.exclude_prefixes]
     *           is specified, objects must not start with any of the `exclude_prefixes`
     *           specified for inclusion in the transfer.
     *           The following are requirements of `include_prefixes`:
     *             * Each include-prefix can contain any sequence of Unicode characters, to
     *               a max length of 1024 bytes when UTF8-encoded, and must not contain
     *               Carriage Return or Line Feed characters.  Wildcard matching and regular
     *               expression matching are not supported.
     *             * Each include-prefix must omit the leading slash. For example, to
     *               include the object `s3://my-aws-bucket/logs/y=2015/requests.gz`,
     *               specify the include-prefix as `logs/y=2015/requests.gz`.
     *             * None of the include-prefix values can be empty, if specified.
     *             * Each include-prefix must include a distinct portion of the object
     *               namespace. No include-prefix may be a prefix of another
     *               include-prefix.
     *           The max size of `include_prefixes` is 1000.
     *           For more information, see [Filtering objects from
     *           transfers](/storage-transfer/docs/filtering-objects-from-transfers).
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $exclude_prefixes
     *           If you specify `exclude_prefixes`, Storage Transfer Service uses the items
     *           in the `exclude_prefixes` array to determine which objects to exclude from
     *           a transfer. Objects must not start with one of the matching
     *           `exclude_prefixes` for inclusion in a transfer.
     *           The following are requirements of `exclude_prefixes`:
     *             * Each exclude-prefix can contain any sequence of Unicode characters, to
     *               a max length of 1024 bytes when UTF8-encoded, and must not contain
     *               Carriage Return or Line Feed characters.  Wildcard matching and regular
     *               expression matching are not supported.
     *             * Each exclude-prefix must omit the leading slash. For example, to
     *               exclude the object `s3://my-aws-bucket/logs/y=2015/requests.gz`,
     *               specify the exclude-prefix as `logs/y=2015/requests.gz`.
     *             * None of the exclude-prefix values can be empty, if specified.
     *             * Each exclude-prefix must exclude a distinct portion of the object
     *               namespace. No exclude-prefix may be a prefix of another
     *               exclude-prefix.
     *             * If
     *             [include_prefixes][google.storagetransfer.v1.ObjectConditions.include_prefixes]
     *             is specified, then each exclude-prefix must start with the value of a
     *             path explicitly included by `include_prefixes`.
     *           The max size of `exclude_prefixes` is 1000.
     *           For more information, see [Filtering objects from
     *           transfers](/storage-transfer/docs/filtering-objects-from-transfers).
     *     @type \Google\Protobuf\Timestamp $last_modified_since
     *           If specified, only objects with a "last modification time" on or after
     *           this timestamp and objects that don't have a "last modification time" are
     *           transferred.
     *           The `last_modified_since` and `last_modified_before` fields can be used
     *           together for chunked data processing. For example, consider a script that
     *           processes each day's worth of data at a time. For that you'd set each
     *           of the fields as follows:
     *           *  `last_modified_since` to the start of the day
     *           *  `last_modified_before` to the end of the day
     *     @type \Google\Protobuf\Timestamp $last_modified_before
     *           If specified, only objects with a "last modification time" before this
     *           timestamp and objects that don't have a "last modification time" are
     *           transferred.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Storagetransfer\V1\TransferTypes::initOnce();
        parent::__construct($data);
    }

    /**
     * Ensures that objects are not transferred until a specific minimum time
     * has elapsed after the "last modification time". When a
     * [TransferOperation][google.storagetransfer.v1.TransferOperation] begins,
     * objects with a "last modification time" are transferred only if the elapsed
     * time between the
     * [start_time][google.storagetransfer.v1.TransferOperation.start_time] of the
     * `TransferOperation` and the "last modification time" of the object is equal
     * to or greater than the value of min_time_elapsed_since_last_modification`.
     * Objects that do not have a "last modification time" are also transferred.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration min_time_elapsed_since_last_modification = 1;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getMinTimeElapsedSinceLastModification()
    {
        return $this->min_time_elapsed_since_last_modification;
    }

    public function hasMinTimeElapsedSinceLastModification()
    {
        return isset($this->min_time_elapsed_since_last_modification);
    }

    public function clearMinTimeElapsedSinceLastModification()
    {
        unset($this->min_time_elapsed_since_last_modification);
    }

    /**
     * Ensures that objects are not transferred until a specific minimum time
     * has elapsed after the "last modification time". When a
     * [TransferOperation][google.storagetransfer.v1.TransferOperation] begins,
     * objects with a "last modification time" are transferred only if the elapsed
     * time between the
     * [start_time][google.storagetransfer.v1.TransferOperation.start_time] of the
     * `TransferOperation` and the "last modification time" of the object is equal
     * to or greater than the value of min_time_elapsed_since_last_modification`.
     * Objects that do not have a "last modification time" are also transferred.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration min_time_elapsed_since_last_modification = 1;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setMinTimeElapsedSinceLastModification($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->min_time_elapsed_since_last_modification = $var;

        return $this;
    }

    /**
     * Ensures that objects are not transferred if a specific maximum time
     * has elapsed since the "last modification time".
     * When a [TransferOperation][google.storagetransfer.v1.TransferOperation]
     * begins, objects with a "last modification time" are transferred only if the
     * elapsed time between the
     * [start_time][google.storagetransfer.v1.TransferOperation.start_time] of the
     * `TransferOperation`and the "last modification time" of the object
     *  is less than the value of max_time_elapsed_since_last_modification`.
     * Objects that do not have a "last modification time" are also transferred.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration max_time_elapsed_since_last_modification = 2;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getMaxTimeElapsedSinceLastModification()
    {
        return $this->max_time_elapsed_since_last_modification;
    }

    public function hasMaxTimeElapsedSinceLastModification()
    {
        return isset($this->max_time_elapsed_since_last_modification);
    }

    public function clearMaxTimeElapsedSinceLastModification()
    {
        unset($this->max_time_elapsed_since_last_modification);
    }

    /**
     * Ensures that objects are not transferred if a specific maximum time
     * has elapsed since the "last modification time".
     * When a [TransferOperation][google.storagetransfer.v1.TransferOperation]
     * begins, objects with a "last modification time" are transferred only if the
     * elapsed time between the
     * [start_time][google.storagetransfer.v1.TransferOperation.start_time] of the
     * `TransferOperation`and the "last modification time" of the object
     *  is less than the value of max_time_elapsed_since_last_modification`.
     * Objects that do not have a "last modification time" are also transferred.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration max_time_elapsed_since_last_modification = 2;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setMaxTimeElapsedSinceLastModification($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->max_time_elapsed_since_last_modification = $var;

        return $this;
    }

    /**
     * If you specify `include_prefixes`, Storage Transfer Service uses the items
     * in the `include_prefixes` array to determine which objects to include in a
     * transfer. Objects must start with one of the matching `include_prefixes`
     * for inclusion in the transfer. If
     * [exclude_prefixes][google.storagetransfer.v1.ObjectConditions.exclude_prefixes]
     * is specified, objects must not start with any of the `exclude_prefixes`
     * specified for inclusion in the transfer.
     * The following are requirements of `include_prefixes`:
     *   * Each include-prefix can contain any sequence of Unicode characters, to
     *     a max length of 1024 bytes when UTF8-encoded, and must not contain
     *     Carriage Return or Line Feed characters.  Wildcard matching and regular
     *     expression matching are not supported.
     *   * Each include-prefix must omit the leading slash. For example, to
     *     include the object `s3://my-aws-bucket/logs/y=2015/requests.gz`,
     *     specify the include-prefix as `logs/y=2015/requests.gz`.
     *   * None of the include-prefix values can be empty, if specified.
     *   * Each include-prefix must include a distinct portion of the object
     *     namespace. No include-prefix may be a prefix of another
     *     include-prefix.
     * The max size of `include_prefixes` is 1000.
     * For more information, see [Filtering objects from
     * transfers](/storage-transfer/docs/filtering-objects-from-transfers).
     *
     * Generated from protobuf field <code>repeated string include_prefixes = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIncludePrefixes()
    {
        return $this->include_prefixes;
    }

    /**
     * If you specify `include_prefixes`, Storage Transfer Service uses the items
     * in the `include_prefixes` array to determine which objects to include in a
     * transfer. Objects must start with one of the matching `include_prefixes`
     * for inclusion in the transfer. If
     * [exclude_prefixes][google.storagetransfer.v1.ObjectConditions.exclude_prefixes]
     * is specified, objects must not start with any of the `exclude_prefixes`
     * specified for inclusion in the transfer.
     * The following are requirements of `include_prefixes`:
     *   * Each include-prefix can contain any sequence of Unicode characters, to
     *     a max length of 1024 bytes when UTF8-encoded, and must not contain
     *     Carriage Return or Line Feed characters.  Wildcard matching and regular
     *     expression matching are not supported.
     *   * Each include-prefix must omit the leading slash. For example, to
     *     include the object `s3://my-aws-bucket/logs/y=2015/requests.gz`,
     *     specify the include-prefix as `logs/y=2015/requests.gz`.
     *   * None of the include-prefix values can be empty, if specified.
     *   * Each include-prefix must include a distinct portion of the object
     *     namespace. No include-prefix may be a prefix of another
     *     include-prefix.
     * The max size of `include_prefixes` is 1000.
     * For more information, see [Filtering objects from
     * transfers](/storage-transfer/docs/filtering-objects-from-transfers).
     *
     * Generated from protobuf field <code>repeated string include_prefixes = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIncludePrefixes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->include_prefixes = $arr;

        return $this;
    }

    /**
     * If you specify `exclude_prefixes`, Storage Transfer Service uses the items
     * in the `exclude_prefixes` array to determine which objects to exclude from
     * a transfer. Objects must not start with one of the matching
     * `exclude_prefixes` for inclusion in a transfer.
     * The following are requirements of `exclude_prefixes`:
     *   * Each exclude-prefix can contain any sequence of Unicode characters, to
     *     a max length of 1024 bytes when UTF8-encoded, and must not contain
     *     Carriage Return or Line Feed characters.  Wildcard matching and regular
     *     expression matching are not supported.
     *   * Each exclude-prefix must omit the leading slash. For example, to
     *     exclude the object `s3://my-aws-bucket/logs/y=2015/requests.gz`,
     *     specify the exclude-prefix as `logs/y=2015/requests.gz`.
     *   * None of the exclude-prefix values can be empty, if specified.
     *   * Each exclude-prefix must exclude a distinct portion of the object
     *     namespace. No exclude-prefix may be a prefix of another
     *     exclude-prefix.
     *   * If
     *   [include_prefixes][google.storagetransfer.v1.ObjectConditions.include_prefixes]
     *   is specified, then each exclude-prefix must start with the value of a
     *   path explicitly included by `include_prefixes`.
     * The max size of `exclude_prefixes` is 1000.
     * For more information, see [Filtering objects from
     * transfers](/storage-transfer/docs/filtering-objects-from-transfers).
     *
     * Generated from protobuf field <code>repeated string exclude_prefixes = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExcludePrefixes()
    {
        return $this->exclude_prefixes;
    }

    /**
     * If you specify `exclude_prefixes`, Storage Transfer Service uses the items
     * in the `exclude_prefixes` array to determine which objects to exclude from
     * a transfer. Objects must not start with one of the matching
     * `exclude_prefixes` for inclusion in a transfer.
     * The following are requirements of `exclude_prefixes`:
     *   * Each exclude-prefix can contain any sequence of Unicode characters, to
     *     a max length of 1024 bytes when UTF8-encoded, and must not contain
     *     Carriage Return or Line Feed characters.  Wildcard matching and regular
     *     expression matching are not supported.
     *   * Each exclude-prefix must omit the leading slash. For example, to
     *     exclude the object `s3://my-aws-bucket/logs/y=2015/requests.gz`,
     *     specify the exclude-prefix as `logs/y=2015/requests.gz`.
     *   * None of the exclude-prefix values can be empty, if specified.
     *   * Each exclude-prefix must exclude a distinct portion of the object
     *     namespace. No exclude-prefix may be a prefix of another
     *     exclude-prefix.
     *   * If
     *   [include_prefixes][google.storagetransfer.v1.ObjectConditions.include_prefixes]
     *   is specified, then each exclude-prefix must start with the value of a
     *   path explicitly included by `include_prefixes`.
     * The max size of `exclude_prefixes` is 1000.
     * For more information, see [Filtering objects from
     * transfers](/storage-transfer/docs/filtering-objects-from-transfers).
     *
     * Generated from protobuf field <code>repeated string exclude_prefixes = 4;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExcludePrefixes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->exclude_prefixes = $arr;

        return $this;
    }

    /**
     * If specified, only objects with a "last modification time" on or after
     * this timestamp and objects that don't have a "last modification time" are
     * transferred.
     * The `last_modified_since` and `last_modified_before` fields can be used
     * together for chunked data processing. For example, consider a script that
     * processes each day's worth of data at a time. For that you'd set each
     * of the fields as follows:
     * *  `last_modified_since` to the start of the day
     * *  `last_modified_before` to the end of the day
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_modified_since = 5;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLastModifiedSince()
    {
        return $this->last_modified_since;
    }

    public function hasLastModifiedSince()
    {
        return isset($this->last_modified_since);
    }

    public function clearLastModifiedSince()
    {
        unset($this->last_modified_since);
    }

    /**
     * If specified, only objects with a "last modification time" on or after
     * this timestamp and objects that don't have a "last modification time" are
     * transferred.
     * The `last_modified_since` and `last_modified_before` fields can be used
     * together for chunked data processing. For example, consider a script that
     * processes each day's worth of data at a time. For that you'd set each
     * of the fields as follows:
     * *  `last_modified_since` to the start of the day
     * *  `last_modified_before` to the end of the day
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_modified_since = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastModifiedSince($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_modified_since = $var;

        return $this;
    }

    /**
     * If specified, only objects with a "last modification time" before this
     * timestamp and objects that don't have a "last modification time" are
     * transferred.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_modified_before = 6;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLastModifiedBefore()
    {
        return $this->last_modified_before;
    }

    public function hasLastModifiedBefore()
    {
        return isset($this->last_modified_before);
    }

    public function clearLastModifiedBefore()
    {
        unset($this->last_modified_before);
    }

    /**
     * If specified, only objects with a "last modification time" before this
     * timestamp and objects that don't have a "last modification time" are
     * transferred.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_modified_before = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastModifiedBefore($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_modified_before = $var;

        return $this;
    }

}

