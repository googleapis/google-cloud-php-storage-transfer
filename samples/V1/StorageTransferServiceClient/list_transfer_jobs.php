<?php
/*
 * Copyright 2022 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START storagetransfer_v1_generated_StorageTransferService_ListTransferJobs_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\PagedListResponse;
use Google\Cloud\StorageTransfer\V1\Client\StorageTransferServiceClient;
use Google\Cloud\StorageTransfer\V1\ListTransferJobsRequest;
use Google\Cloud\StorageTransfer\V1\TransferJob;

/**
 * Lists transfer jobs.
 *
 * @param string $filter A list of query parameters specified as JSON text in the form of:
 *
 *                       ```
 *                       {
 *                       "projectId":"my_project_id",
 *                       "jobNames":["jobid1","jobid2",...],
 *                       "jobStatuses":["status1","status2",...],
 *                       "dataBackend":"QUERY_REPLICATION_CONFIGS",
 *                       "sourceBucket":"source-bucket-name",
 *                       "sinkBucket":"sink-bucket-name",
 *                       }
 *                       ```
 *
 *                       The JSON formatting in the example is for display only; provide the
 *                       query parameters without spaces or line breaks.
 *
 *                       * `projectId` is required.
 *                       * Since `jobNames` and `jobStatuses` support multiple values, their values
 *                       must be specified with array notation. `jobNames` and `jobStatuses` are
 *                       optional. Valid values are case-insensitive:
 *                       * [ENABLED][google.storagetransfer.v1.TransferJob.Status.ENABLED]
 *                       * [DISABLED][google.storagetransfer.v1.TransferJob.Status.DISABLED]
 *                       * [DELETED][google.storagetransfer.v1.TransferJob.Status.DELETED]
 *                       * Specify `"dataBackend":"QUERY_REPLICATION_CONFIGS"` to return a list of
 *                       cross-bucket replication jobs.
 *                       * Limit the results to jobs from a particular bucket with `sourceBucket`
 *                       and/or to a particular bucket with `sinkBucket`.
 */
function list_transfer_jobs_sample(string $filter): void
{
    // Create a client.
    $storageTransferServiceClient = new StorageTransferServiceClient();

    // Prepare the request message.
    $request = (new ListTransferJobsRequest())
        ->setFilter($filter);

    // Call the API and handle any network failures.
    try {
        /** @var PagedListResponse $response */
        $response = $storageTransferServiceClient->listTransferJobs($request);

        /** @var TransferJob $element */
        foreach ($response as $element) {
            printf('Element data: %s' . PHP_EOL, $element->serializeToJsonString());
        }
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $filter = '[FILTER]';

    list_transfer_jobs_sample($filter);
}
// [END storagetransfer_v1_generated_StorageTransferService_ListTransferJobs_sync]
