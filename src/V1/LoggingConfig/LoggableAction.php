<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/storagetransfer/v1/transfer_types.proto

namespace Google\Cloud\StorageTransfer\V1\LoggingConfig;

use UnexpectedValueException;

/**
 * Loggable actions.
 *
 * Protobuf type <code>google.storagetransfer.v1.LoggingConfig.LoggableAction</code>
 */
class LoggableAction
{
    /**
     * Default value. This value is unused.
     *
     * Generated from protobuf enum <code>LOGGABLE_ACTION_UNSPECIFIED = 0;</code>
     */
    const LOGGABLE_ACTION_UNSPECIFIED = 0;
    /**
     * Listing objects in a bucket.
     *
     * Generated from protobuf enum <code>FIND = 1;</code>
     */
    const FIND = 1;
    /**
     * Deleting objects at the source or the destination.
     *
     * Generated from protobuf enum <code>DELETE = 2;</code>
     */
    const DELETE = 2;
    /**
     * Copying objects to the destination.
     *
     * Generated from protobuf enum <code>COPY = 3;</code>
     */
    const COPY = 3;

    private static $valueToName = [
        self::LOGGABLE_ACTION_UNSPECIFIED => 'LOGGABLE_ACTION_UNSPECIFIED',
        self::FIND => 'FIND',
        self::DELETE => 'DELETE',
        self::COPY => 'COPY',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


