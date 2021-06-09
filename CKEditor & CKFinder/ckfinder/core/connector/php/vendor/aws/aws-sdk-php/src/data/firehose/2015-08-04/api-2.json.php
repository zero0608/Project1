<?php
// This file was auto-generated from sdk-root/src/data/firehose/2015-08-04/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2015-08-04', 'endpointPrefix' => 'firehose', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceAbbreviation' => 'Firehose', 'serviceFullName' => 'Amazon Kinesis Firehose', 'serviceId' => 'Firehose', 'signatureVersion' => 'v4', 'targetPrefix' => 'Firehose_20150804', 'uid' => 'firehose-2015-08-04', ], 'operations' => [ 'CreateDeliveryStream' => [ 'name' => 'CreateDeliveryStream', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateDeliveryStreamInput', ], 'output' => [ 'shape' => 'CreateDeliveryStreamOutput', ], 'errors' => [ [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ResourceInUseException', ], ], ], 'DeleteDeliveryStream' => [ 'name' => 'DeleteDeliveryStream', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteDeliveryStreamInput', ], 'output' => [ 'shape' => 'DeleteDeliveryStreamOutput', ], 'errors' => [ [ 'shape' => 'ResourceInUseException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'DescribeDeliveryStream' => [ 'name' => 'DescribeDeliveryStream', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeDeliveryStreamInput', ], 'output' => [ 'shape' => 'DescribeDeliveryStreamOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], ], ], 'ListDeliveryStreams' => [ 'name' => 'ListDeliveryStreams', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListDeliveryStreamsInput', ], 'output' => [ 'shape' => 'ListDeliveryStreamsOutput', ], ], 'ListTagsForDeliveryStream' => [ 'name' => 'ListTagsForDeliveryStream', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListTagsForDeliveryStreamInput', ], 'output' => [ 'shape' => 'ListTagsForDeliveryStreamOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'LimitExceededException', ], ], ], 'PutRecord' => [ 'name' => 'PutRecord', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'PutRecordInput', ], 'output' => [ 'shape' => 'PutRecordOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], 'PutRecordBatch' => [ 'name' => 'PutRecordBatch', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'PutRecordBatchInput', ], 'output' => [ 'shape' => 'PutRecordBatchOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], 'StartDeliveryStreamEncryption' => [ 'name' => 'StartDeliveryStreamEncryption', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StartDeliveryStreamEncryptionInput', ], 'output' => [ 'shape' => 'StartDeliveryStreamEncryptionOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ResourceInUseException', ], [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'LimitExceededException', ], ], ], 'StopDeliveryStreamEncryption' => [ 'name' => 'StopDeliveryStreamEncryption', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StopDeliveryStreamEncryptionInput', ], 'output' => [ 'shape' => 'StopDeliveryStreamEncryptionOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ResourceInUseException', ], [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'LimitExceededException', ], ], ], 'TagDeliveryStream' => [ 'name' => 'TagDeliveryStream', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'TagDeliveryStreamInput', ], 'output' => [ 'shape' => 'TagDeliveryStreamOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ResourceInUseException', ], [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'LimitExceededException', ], ], ], 'UntagDeliveryStream' => [ 'name' => 'UntagDeliveryStream', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UntagDeliveryStreamInput', ], 'output' => [ 'shape' => 'UntagDeliveryStreamOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ResourceInUseException', ], [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'LimitExceededException', ], ], ], 'UpdateDestination' => [ 'name' => 'UpdateDestination', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateDestinationInput', ], 'output' => [ 'shape' => 'UpdateDestinationOutput', ], 'errors' => [ [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'ResourceInUseException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ConcurrentModificationException', ], ], ], ], 'shapes' => [ 'AWSKMSKeyARN' => [ 'type' => 'string', 'max' => 512, 'min' => 1, 'pattern' => 'arn:.*', ], 'BlockSizeBytes' => [ 'type' => 'integer', 'min' => 67108864, ], 'BooleanObject' => [ 'type' => 'boolean', ], 'BucketARN' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, 'pattern' => 'arn:.*', ], 'BufferingHints' => [ 'type' => 'structure', 'members' => [ 'SizeInMBs' => [ 'shape' => 'SizeInMBs', ], 'IntervalInSeconds' => [ 'shape' => 'IntervalInSeconds', ], ], ], 'CloudWatchLoggingOptions' => [ 'type' => 'structure', 'members' => [ 'Enabled' => [ 'shape' => 'BooleanObject', ], 'LogGroupName' => [ 'shape' => 'LogGroupName', ], 'LogStreamName' => [ 'shape' => 'LogStreamName', ], ], ], 'ClusterJDBCURL' => [ 'type' => 'string', 'min' => 1, 'pattern' => 'jdbc:(redshift|postgresql)://((?!-)[A-Za-z0-9-]{1,63}(?<!-)\\.)+redshift\\.amazonaws\\.com:\\d{1,5}/[a-zA-Z0-9_$]+', ], 'ColumnToJsonKeyMappings' => [ 'type' => 'map', 'key' => [ 'shape' => 'NonEmptyStringWithoutWhitespace', ], 'value' => [ 'shape' => 'NonEmptyString', ], ], 'CompressionFormat' => [ 'type' => 'string', 'enum' => [ 'UNCOMPRESSED', 'GZIP', 'ZIP', 'Snappy', ], ], 'ConcurrentModificationException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'CopyCommand' => [ 'type' => 'structure', 'required' => [ 'DataTableName', ], 'members' => [ 'DataTableName' => [ 'shape' => 'DataTableName', ], 'DataTableColumns' => [ 'shape' => 'DataTableColumns', ], 'CopyOptions' => [ 'shape' => 'CopyOptions', ], ], ], 'CopyOptions' => [ 'type' => 'string', ], 'CreateDeliveryStreamInput' => [ 'type' => 'structure', 'required' => [ 'DeliveryStreamName', ], 'members' => [ 'DeliveryStreamName' => [ 'shape' => 'DeliveryStreamName', ], 'DeliveryStreamType' => [ 'shape' => 'DeliveryStreamType', ], 'KinesisStreamSourceConfiguration' => [ 'shape' => 'KinesisStreamSourceConfiguration', ], 'S3DestinationConfiguration' => [ 'shape' => 'S3DestinationConfiguration', 'deprecated' => true, ], 'ExtendedS3DestinationConfiguration' => [ 'shape' => 'ExtendedS3DestinationConfiguration', ], 'RedshiftDestinationConfiguration' => [ 'shape' => 'RedshiftDestinationConfiguration', ], 'ElasticsearchDestinationConfiguration' => [ 'shape' => 'ElasticsearchDestinationConfiguration', ], 'SplunkDestinationConfiguration' => [ 'shape' => 'SplunkDestinationConfiguration', ], 'Tags' => [ 'shape' => 'TagDeliveryStreamInputTagList', ], ], ], 'CreateDeliveryStreamOutput' => [ 'type' => 'structure', 'members' => [ 'DeliveryStreamARN' => [ 'shape' => 'DeliveryStreamARN', ], ], ], 'Data' => [ 'type' => 'blob', 'max' => 1024000, 'min' => 0, ], 'DataFormatConversionConfiguration' => [ 'type' => 'structure', 'members' => [ 'SchemaConfiguration' => [ 'shape' => 'SchemaConfiguration', ], 'InputFormatConfiguration' => [ 'shape' => 'InputFormatConfiguration', ], 'OutputFormatConfiguration' => [ 'shape' => 'OutputFormatConfiguration', ], 'Enabled' => [ 'shape' => 'BooleanObject', ], ], ], 'DataTableColumns' => [ 'type' => 'string', ], 'DataTableName' => [ 'type' => 'string', 'min' => 1, ], 'DeleteDeliveryStreamInput' => [ 'type' => 'structure', 'required' => [ 'DeliveryStreamName', ], 'members' => [ 'DeliveryStreamName' => [ 'shape' => 'DeliveryStreamName', ], ], ], 'DeleteDeliveryStreamOutput' => [ 'type' => 'structure', 'members' => [], ], 'DeliveryStartTimestamp' => [ 'type' => 'timestamp', ], 'DeliveryStreamARN' => [ 'type' => 'string', 'max' => 512, 'min' => 1, 'pattern' => 'arn:.*', ], 'DeliveryStreamDescription' => [ 'type' => 'structure', 'required' => [ 'DeliveryStreamName', 'DeliveryStreamARN', 'DeliveryStreamStatus', 'DeliveryStreamType', 'VersionId', 'Destinations', 'HasMoreDestinations', ], 'members' => [ 'DeliveryStreamName' => [ 'shape' => 'DeliveryStreamName', ], 'DeliveryStreamARN' => [ 'shape' => 'DeliveryStreamARN', ], 'DeliveryStreamStatus' => [ 'shape' => 'DeliveryStreamStatus', ], 'DeliveryStreamEncryptionConfiguration' => [ 'shape' => 'DeliveryStreamEncryptionConfiguration', ], 'DeliveryStreamType' => [ 'shape' => 'DeliveryStreamType', ], 'VersionId' => [ 'shape' => 'DeliveryStreamVersionId', ], 'CreateTimestamp' => [ 'shape' => 'Timestamp', ], 'LastUpdateTimestamp' => [ 'shape' => 'Timestamp', ], 'Source' => [ 'shape' => 'SourceDescription', ], 'Destinations' => [ 'shape' => 'DestinationDescriptionList', ], 'HasMoreDestinations' => [ 'shape' => 'BooleanObject', ], ], ], 'DeliveryStreamEncryptionConfiguration' => [ 'type' => 'structure', 'members' => [ 'Status' => [ 'shape' => 'DeliveryStreamEncryptionStatus', ], ], ], 'DeliveryStreamEncryptionStatus' => [ 'type' => 'string', 'enum' => [ 'ENABLED', 'ENABLING', 'DISABLED', 'DISABLING', ], ], 'DeliveryStreamName' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '[a-zA-Z0-9_.-]+', ], 'DeliveryStreamNameList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DeliveryStreamName', ], ], 'DeliveryStreamStatus' => [ 'type' => 'string', 'enum' => [ 'CREATING', 'DELETING', 'ACTIVE', ], ], 'DeliveryStreamType' => [ 'type' => 'string', 'enum' => [ 'DirectPut', 'KinesisStreamAsSource', ], ], 'DeliveryStreamVersionId' => [ 'type' => 'string', 'max' => 50, 'min' => 1, 'pattern' => '[0-9]+', ], 'DescribeDeliveryStreamInput' => [ 'type' => 'structure', 'required' => [ 'DeliveryStreamName', ], 'members' => [ 'DeliveryStreamName' => [ 'shape' => 'DeliveryStreamName', ], 'Limit' => [ 'shape' => 'DescribeDeliveryStreamInputLimit', ], 'ExclusiveStartDestinationId' => [ 'shape' => 'DestinationId', ], ], ], 'DescribeDeliveryStreamInputLimit' => [ 'type' => 'integer', 'max' => 10000, 'min' => 1, ], 'DescribeDeliveryStreamOutput' => [ 'type' => 'structure', 'required' => [ 'DeliveryStreamDescription', ], 'members' => [ 'DeliveryStreamDescription' => [ 'shape' => 'DeliveryStreamDescription', ], ], ], 'Deserializer' => [ 'type' => 'structure', 'members' => [ 'OpenXJsonSerDe' => [ 'shape' => 'OpenXJsonSerDe', ], 'HiveJsonSerDe' => [ 'shape' => 'HiveJsonSerDe', ], ], ], 'DestinationDescription' => [ 'type' => 'structure', 'required' => [ 'DestinationId', ], 'members' => [ 'DestinationId' => [ 'shape' => 'DestinationId', ], 'S3DestinationDescription' => [ 'shape' => 'S3DestinationDescription', ], 'ExtendedS3DestinationDescription' => [ 'shape' => 'ExtendedS3DestinationDescription', ], 'RedshiftDestinationDescription' => [ 'shape' => 'RedshiftDestinationDescription', ], 'ElasticsearchDestinationDescription' => [ 'shape' => 'ElasticsearchDestinationDescription', ], 'SplunkDestinationDescription' => [ 'shape' => 'SplunkDestinationDescription', ], ], ], 'DestinationDescriptionList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DestinationDescription', ], ], 'DestinationId' => [ 'type' => 'string', 'max' => 100, 'min' => 1, ], 'ElasticsearchBufferingHints' => [ 'type' => 'structure', 'members' => [ 'IntervalInSeconds' => [ 'shape' => 'ElasticsearchBufferingIntervalInSeconds', ], 'SizeInMBs' => [ 'shape' => 'ElasticsearchBufferingSizeInMBs', ], ], ], 'ElasticsearchBufferingIntervalInSeconds' => [ 'type' => 'integer', 'max' => 900, 'min' => 60, ], 'ElasticsearchBufferingSizeInMBs' => [ 'type' => 'integer', 'max' => 100, 'min' => 1, ], 'ElasticsearchDestinationConfiguration' => [ 'type' => 'structure', 'required' => [ 'RoleARN', 'DomainARN', 'IndexName', 'TypeName', 'S3Configuration', ], 'members' => [ 'RoleARN' => [ 'shape' => 'RoleARN', ], 'DomainARN' => [ 'shape' => 'ElasticsearchDomainARN', ], 'IndexName' => [ 'shape' => 'ElasticsearchIndexName', ], 'TypeName' => [ 'shape' => 'ElasticsearchTypeName', ], 'IndexRotationPeriod' => [ 'shape' => 'ElasticsearchIndexRotationPeriod', ], 'BufferingHints' => [ 'shape' => 'ElasticsearchBufferingHints', ], 'RetryOptions' => [ 'shape' => 'ElasticsearchRetryOptions', ], 'S3BackupMode' => [ 'shape' => 'ElasticsearchS3BackupMode', ], 'S3Configuration' => [ 'shape' => 'S3DestinationConfiguration', ], 'ProcessingConfiguration' => [ 'shape' => 'ProcessingConfiguration', ], 'CloudWatchLoggingOptions' => [ 'shape' => 'CloudWatchLoggingOptions', ], ], ], 'ElasticsearchDestinationDescription' => [ 'type' => 'structure', 'members' => [ 'RoleARN' => [ 'shape' => 'RoleARN', ], 'DomainARN' => [ 'shape' => 'ElasticsearchDomainARN', ], 'IndexName' => [ 'shape' => 'ElasticsearchIndexName', ], 'TypeName' => [ 'shape' => 'ElasticsearchTypeName', ], 'IndexRotationPeriod' => [ 'shape' => 'ElasticsearchIndexRotationPeriod', ], 'BufferingHints' => [ 'shape' => 'ElasticsearchBufferingHints', ], 'RetryOptions' => [ 'shape' => 'ElasticsearchRetryOptions', ], 'S3BackupMode' => [ 'shape' => 'ElasticsearchS3BackupMode', ], 'S3DestinationDescription' => [ 'shape' => 'S3DestinationDescription', ], 'ProcessingConfiguration' => [ 'shape' => 'ProcessingConfiguration', ], 'CloudWatchLoggingOptions' => [ 'shape' => 'CloudWatchLoggingOptions', ], ], ], 'ElasticsearchDestinationUpdate' => [ 'type' => 'structure', 'members' => [ 'RoleARN' => [ 'shape' => 'RoleARN', ], 'DomainARN' => [ 'shape' => 'ElasticsearchDomainARN', ], 'IndexName' => [ 'shape' => 'ElasticsearchIndexName', ], 'TypeName' => [ 'shape' => 'ElasticsearchTypeName', ], 'IndexRotationPeriod' => [ 'shape' => 'ElasticsearchIndexRotationPeriod', ], 'BufferingHints' => [ 'shape' => 'ElasticsearchBufferingHints', ], 'RetryOptions' => [ 'shape' => 'ElasticsearchRetryOptions', ], 'S3Update' => [ 'shape' => 'S3DestinationUpdate', ], 'ProcessingConfiguration' => [ 'shape' => 'ProcessingConfiguration', ], 'CloudWatchLoggingOptions' => [ 'shape' => 'CloudWatchLoggingOptions', ], ], ], 'ElasticsearchDomainARN' => [ 'type' => 'string', 'max' => 512, 'min' => 1, 'pattern' => 'arn:.*', ], 'ElasticsearchIndexName' => [ 'type' => 'string', 'max' => 80, 'min' => 1, ], 'ElasticsearchIndexRotationPeriod' => [ 'type' => 'string', 'enum' => [ 'NoRotation', 'OneHour', 'OneDay', 'OneWeek', 'OneMonth', ], ], 'ElasticsearchRetryDurationInSeconds' => [ 'type' => 'integer', 'max' => 7200, 'min' => 0, ], 'ElasticsearchRetryOptions' => [ 'type' => 'structure', 'members' => [ 'DurationInSeconds' => [ 'shape' => 'ElasticsearchRetryDurationInSeconds', ], ], ], 'ElasticsearchS3BackupMode' => [ 'type' => 'string', 'enum' => [ 'FailedDocumentsOnly', 'AllDocuments', ], ], 'ElasticsearchTypeName' => [ 'type' => 'string', 'max' => 100, 'min' => 1, ], 'EncryptionConfiguration' => [ 'type' => 'structure', 'members' => [ 'NoEncryptionConfig' => [ 'shape' => 'NoEncryptionConfig', ], 'KMSEncryptionConfig' => [ 'shape' => 'KMSEncryptionConfig', ], ], ], 'ErrorCode' => [ 'type' => 'string', ], 'ErrorMessage' => [ 'type' => 'string', ], 'ExtendedS3DestinationConfiguration' => [ 'type' => 'structure', 'required' => [ 'RoleARN', 'BucketARN', ], 'members' => [ 'RoleARN' => [ 'shape' => 'RoleARN', ], 'BucketARN' => [ 'shape' => 'BucketARN', ], 'Prefix' => [ 'shape' => 'Prefix', ], 'BufferingHints' => [ 'shape' => 'BufferingHints', ], 'CompressionFormat' => [ 'shape' => 'CompressionFormat', ], 'EncryptionConfiguration' => [ 'shape' => 'EncryptionConfiguration', ], 'CloudWatchLoggingOptions' => [ 'shape' => 'CloudWatchLoggingOptions', ], 'ProcessingConfiguration' => [ 'shape' => 'ProcessingConfiguration', ], 'S3BackupMode' => [ 'shape' => 'S3BackupMode', ], 'S3BackupConfiguration' => [ 'shape' => 'S3DestinationConfiguration', ], 'DataFormatConversionConfiguration' => [ 'shape' => 'DataFormatConversionConfiguration', ], ], ], 'ExtendedS3DestinationDescription' => [ 'type' => 'structure', 'required' => [ 'RoleARN', 'BucketARN', 'BufferingHints', 'CompressionFormat', 'EncryptionConfiguration', ], 'members' => [ 'RoleARN' => [ 'shape' => 'RoleARN', ], 'BucketARN' => [ 'shape' => 'BucketARN', ], 'Prefix' => [ 'shape' => 'Prefix', ], 'BufferingHints' => [ 'shape' => 'BufferingHints', ], 'CompressionFormat' => [ 'shape' => 'CompressionFormat', ], 'EncryptionConfiguration' => [ 'shape' => 'EncryptionConfiguration', ], 'CloudWatchLoggingOptions' => [ 'shape' => 'CloudWatchLoggingOptions', ], 'ProcessingConfiguration' => [ 'shape' => 'ProcessingConfiguration', ], 'S3BackupMode' => [ 'shape' => 'S3BackupMode', ], 'S3BackupDescription' => [ 'shape' => 'S3DestinationDescription', ], 'DataFormatConversionConfiguration' => [ 'shape' => 'DataFormatConversionConfiguration', ], ], ], 'ExtendedS3DestinationUpdate' => [ 'type' => 'structure', 'members' => [ 'RoleARN' => [ 'shape' => 'RoleARN', ], 'BucketARN' => [ 'shape' => 'BucketARN', ], 'Prefix' => [ 'shape' => 'Prefix', ], 'BufferingHints' => [ 'shape' => 'BufferingHints', ], 'CompressionFormat' => [ 'shape' => 'CompressionFormat', ], 'EncryptionConfiguration' => [ 'shape' => 'EncryptionConfiguration', ], 'CloudWatchLoggingOptions' => [ 'shape' => 'CloudWatchLoggingOptions', ], 'ProcessingConfiguration' => [ 'shape' => 'ProcessingConfiguration', ], 'S3BackupMode' => [ 'shape' => 'S3BackupMode', ], 'S3BackupUpdate' => [ 'shape' => 'S3DestinationUpdate', ], 'DataFormatConversionConfiguration' => [ 'shape' => 'DataFormatConversionConfiguration', ], ], ], 'HECAcknowledgmentTimeoutInSeconds' => [ 'type' => 'integer', 'max' => 600, 'min' => 180, ], 'HECEndpoint' => [ 'type' => 'string', ], 'HECEndpointType' => [ 'type' => 'string', 'enum' => [ 'Raw', 'Event', ], ], 'HECToken' => [ 'type' => 'string', ], 'HiveJsonSerDe' => [ 'type' => 'structure', 'members' => [ 'TimestampFormats' => [ 'shape' => 'ListOfNonEmptyStrings', ], ], ], 'InputFormatConfiguration' => [ 'type' => 'structure', 'members' => [ 'Deserializer' => [ 'shape' => 'Deserializer', ], ], ], 'IntervalInSeconds' => [ 'type' => 'integer', 'max' => 900, 'min' => 60, ], 'InvalidArgumentException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'KMSEncryptionConfig' => [ 'type' => 'structure', 'required' => [ 'AWSKMSKeyARN', ], 'members' => [ 'AWSKMSKeyARN' => [ 'shape' => 'AWSKMSKeyARN', ], ], ], 'KinesisStreamARN' => [ 'type' => 'string', 'max' => 512, 'min' => 1, 'pattern' => 'arn:.*', ], 'KinesisStreamSourceConfiguration' => [ 'type' => 'structure', 'required' => [ 'KinesisStreamARN', 'RoleARN', ], 'members' => [ 'KinesisStreamARN' => [ 'shape' => 'KinesisStreamARN', ], 'RoleARN' => [ 'shape' => 'RoleARN', ], ], ], 'KinesisStreamSourceDescription' => [ 'type' => 'structure', 'members' => [ 'KinesisStreamARN' => [ 'shape' => 'KinesisStreamARN', ], 'RoleARN' => [ 'shape' => 'RoleARN', ], 'DeliveryStartTimestamp' => [ 'shape' => 'DeliveryStartTimestamp', ], ], ], 'LimitExceededException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'ListDeliveryStreamsInput' => [ 'type' => 'structure', 'members' => [ 'Limit' => [ 'shape' => 'ListDeliveryStreamsInputLimit', ], 'DeliveryStreamType' => [ 'shape' => 'DeliveryStreamType', ], 'ExclusiveStartDeliveryStreamName' => [ 'shape' => 'DeliveryStreamName', ], ], ], 'ListDeliveryStreamsInputLimit' => [ 'type' => 'integer', 'max' => 10000, 'min' => 1, ], 'ListDeliveryStreamsOutput' => [ 'type' => 'structure', 'required' => [ 'DeliveryStreamNames', 'HasMoreDeliveryStreams', ], 'members' => [ 'DeliveryStreamNames' => [ 'shape' => 'DeliveryStreamNameList', ], 'HasMoreDeliveryStreams' => [ 'shape' => 'BooleanObject', ], ], ], 'ListOfNonEmptyStrings' => [ 'type' => 'list', 'member' => [ 'shape' => 'NonEmptyString', ], ], 'ListOfNonEmptyStringsWithoutWhitespace' => [ 'type' => 'list', 'member' => [ 'shape' => 'NonEmptyStringWithoutWhitespace', ], ], 'ListTagsForDeliveryStreamInput' => [ 'type' => 'structure', 'required' => [ 'DeliveryStreamName', ], 'members' => [ 'DeliveryStreamName' => [ 'shape' => 'DeliveryStreamName', ], 'ExclusiveStartTagKey' => [ 'shape' => 'TagKey', ], 'Limit' => [ 'shape' => 'ListTagsForDeliveryStreamInputLimit', ], ], ], 'ListTagsForDeliveryStreamInputLimit' => [ 'type' => 'integer', 'max' => 50, 'min' => 1, ], 'ListTagsForDeliveryStreamOutput' => [ 'type' => 'structure', 'required' => [ 'Tags', 'HasMoreTags', ], 'members' => [ 'Tags' => [ 'shape' => 'ListTagsForDeliveryStreamOutputTagList', ], 'HasMoreTags' => [ 'shape' => 'BooleanObject', ], ], ], 'ListTagsForDeliveryStreamOutputTagList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], 'max' => 50, 'min' => 0, ], 'LogGroupName' => [ 'type' => 'string', ], 'LogStreamName' => [ 'type' => 'string', ], 'NoEncryptionConfig' => [ 'type' => 'string', 'enum' => [ 'NoEncryption', ], ], 'NonEmptyString' => [ 'type' => 'string', 'pattern' => '^(?!\\s*$).+', ], 'NonEmptyStringWithoutWhitespace' => [ 'type' => 'string', 'pattern' => '^\\S+$', ], 'NonNegativeIntegerObject' => [ 'type' => 'integer', 'min' => 0, ], 'OpenXJsonSerDe' => [ 'type' => 'structure', 'members' => [ 'ConvertDotsInJsonKeysToUnderscores' => [ 'shape' => 'BooleanObject', ], 'CaseInsensitive' => [ 'shape' => 'BooleanObject', ], 'ColumnToJsonKeyMappings' => [ 'shape' => 'ColumnToJsonKeyMappings', ], ], ], 'OrcCompression' => [ 'type' => 'string', 'enum' => [ 'NONE', 'ZLIB', 'SNAPPY', ], ], 'OrcFormatVersion' => [ 'type' => 'string', 'enum' => [ 'V0_11', 'V0_12', ], ], 'OrcRowIndexStride' => [ 'type' => 'integer', 'min' => 1000, ], 'OrcSerDe' => [ 'type' => 'structure', 'members' => [ 'StripeSizeBytes' => [ 'shape' => 'OrcStripeSizeBytes', ], 'BlockSizeBytes' => [ 'shape' => 'BlockSizeBytes', ], 'RowIndexStride' => [ 'shape' => 'OrcRowIndexStride', ], 'EnablePadding' => [ 'shape' => 'BooleanObject', ], 'PaddingTolerance' => [ 'shape' => 'Proportion', ], 'Compression' => [ 'shape' => 'OrcCompression', ], 'BloomFilterColumns' => [ 'shape' => 'ListOfNonEmptyStringsWithoutWhitespace', ], 'BloomFilterFalsePositiveProbability' => [ 'shape' => 'Proportion', ], 'DictionaryKeyThreshold' => [ 'shape' => 'Proportion', ], 'FormatVersion' => [ 'shape' => 'OrcFormatVersion', ], ], ], 'OrcStripeSizeBytes' => [ 'type' => 'integer', 'min' => 8388608, ], 'OutputFormatConfiguration' => [ 'type' => 'structure', 'members' => [ 'Serializer' => [ 'shape' => 'Serializer', ], ], ], 'ParquetCompression' => [ 'type' => 'string', 'enum' => [ 'UNCOMPRESSED', 'GZIP', 'SNAPPY', ], ], 'ParquetPageSizeBytes' => [ 'type' => 'integer', 'min' => 65536, ], 'ParquetSerDe' => [ 'type' => 'structure', 'members' => [ 'BlockSizeBytes' => [ 'shape' => 'BlockSizeBytes', ], 'PageSizeBytes' => [ 'shape' => 'ParquetPageSizeBytes', ], 'Compression' => [ 'shape' => 'ParquetCompression', ], 'EnableDictionaryCompression' => [ 'shape' => 'BooleanObject', ], 'MaxPaddingBytes' => [ 'shape' => 'NonNegativeIntegerObject', ], 'WriterVersion' => [ 'shape' => 'ParquetWriterVersion', ], ], ], 'ParquetWriterVersion' => [ 'type' => 'string', 'enum' => [ 'V1', 'V2', ], ], 'Password' => [ 'type' => 'string', 'min' => 6, 'sensitive' => true, ], 'Prefix' => [ 'type' => 'string', ], 'ProcessingConfiguration' => [ 'type' => 'structure', 'members' => [ 'Enabled' => [ 'shape' => 'BooleanObject', ], 'Processors' => [ 'shape' => 'ProcessorList', ], ], ], 'Processor' => [ 'type' => 'structure', 'required' => [ 'Type', ], 'members' => [ 'Type' => [ 'shape' => 'ProcessorType', ], 'Parameters' => [ 'shape' => 'ProcessorParameterList', ], ], ], 'ProcessorList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Processor', ], ], 'ProcessorParameter' => [ 'type' => 'structure', 'required' => [ 'ParameterName', 'ParameterValue', ], 'members' => [ 'ParameterName' => [ 'shape' => 'ProcessorParameterName', ], 'ParameterValue' => [ 'shape' => 'ProcessorParameterValue', ], ], ], 'ProcessorParameterList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProcessorParameter', ], ], 'ProcessorParameterName' => [ 'type' => 'string', 'enum' => [ 'LambdaArn', 'NumberOfRetries', 'RoleArn', 'BufferSizeInMBs', 'BufferIntervalInSeconds', ], ], 'ProcessorParameterValue' => [ 'type' => 'string', 'max' => 512, 'min' => 1, ], 'ProcessorType' => [ 'type' => 'string', 'enum' => [ 'Lambda', ], ], 'Proportion' => [ 'type' => 'double', 'max' => 1, 'min' => 0, ], 'PutRecordBatchInput' => [ 'type' => 'structure', 'required' => [ 'DeliveryStreamName', 'Records', ], 'members' => [ 'DeliveryStreamName' => [ 'shape' => 'DeliveryStreamName', ], 'Records' => [ 'shape' => 'PutRecordBatchRequestEntryList', ], ], ], 'PutRecordBatchOutput' => [ 'type' => 'structure', 'required' => [ 'FailedPutCount', 'RequestResponses', ], 'members' => [ 'FailedPutCount' => [ 'shape' => 'NonNegativeIntegerObject', ], 'Encrypted' => [ 'shape' => 'BooleanObject', ], 'RequestResponses' => [ 'shape' => 'PutRecordBatchResponseEntryList', ], ], ], 'PutRecordBatchRequestEntryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Record', ], 'max' => 500, 'min' => 1, ], 'PutRecordBatchResponseEntry' => [ 'type' => 'structure', 'members' => [ 'RecordId' => [ 'shape' => 'PutResponseRecordId', ], 'ErrorCode' => [ 'shape' => 'ErrorCode', ], 'ErrorMessage' => [ 'shape' => 'ErrorMessage', ], ], ], 'PutRecordBatchResponseEntryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'PutRecordBatchResponseEntry', ], 'max' => 500, 'min' => 1, ], 'PutRecordInput' => [ 'type' => 'structure', 'required' => [ 'DeliveryStreamName', 'Record', ], 'members' => [ 'DeliveryStreamName' => [ 'shape' => 'DeliveryStreamName', ], 'Record' => [ 'shape' => 'Record', ], ], ], 'PutRecordOutput' => [ 'type' => 'structure', 'required' => [ 'RecordId', ], 'members' => [ 'RecordId' => [ 'shape' => 'PutResponseRecordId', ], 'Encrypted' => [ 'shape' => 'BooleanObject', ], ], ], 'PutResponseRecordId' => [ 'type' => 'string', 'min' => 1, ], 'Record' => [ 'type' => 'structure', 'required' => [ 'Data', ], 'members' => [ 'Data' => [ 'shape' => 'Data', ], ], ], 'RedshiftDestinationConfiguration' => [ 'type' => 'structure', 'required' => [ 'RoleARN', 'ClusterJDBCURL', 'CopyCommand', 'Username', 'Password', 'S3Configuration', ], 'members' => [ 'RoleARN' => [ 'shape' => 'RoleARN', ], 'ClusterJDBCURL' => [ 'shape' => 'ClusterJDBCURL', ], 'CopyCommand' => [ 'shape' => 'CopyCommand', ], 'Username' => [ 'shape' => 'Username', ], 'Password' => [ 'shape' => 'Password', ], 'RetryOptions' => [ 'shape' => 'RedshiftRetryOptions', ], 'S3Configuration' => [ 'shape' => 'S3DestinationConfiguration', ], 'ProcessingConfiguration' => [ 'shape' => 'ProcessingConfiguration', ], 'S3BackupMode' => [ 'shape' => 'RedshiftS3BackupMode', ], 'S3BackupConfiguration' => [ 'shape' => 'S3DestinationConfiguration', ], 'CloudWatchLoggingOptions' => [ 'shape' => 'CloudWatchLoggingOptions', ], ], ], 'RedshiftDestinationDescription' => [ 'type' => 'structure', 'required' => [ 'RoleARN', 'ClusterJDBCURL', 'CopyCommand', 'Username', 'S3DestinationDescription', ], 'members' => [ 'RoleARN' => [ 'shape' => 'RoleARN', ], 'ClusterJDBCURL' => [ 'shape' => 'ClusterJDBCURL', ], 'CopyCommand' => [ 'shape' => 'CopyCommand', ], 'Username' => [ 'shape' => 'Username', ], 'RetryOptions' => [ 'shape' => 'RedshiftRetryOptions', ], 'S3DestinationDescription' => [ 'shape' => 'S3DestinationDescription', ], 'ProcessingConfiguration' => [ 'shape' => 'ProcessingConfiguration', ], 'S3BackupMode' => [ 'shape' => 'RedshiftS3BackupMode', ], 'S3BackupDescription' => [ 'shape' => 'S3DestinationDescription', ], 'CloudWatchLoggingOptions' => [ 'shape' => 'CloudWatchLoggingOptions', ], ], ], 'RedshiftDestinationUpdate' => [ 'type' => 'structure', 'members' => [ 'RoleARN' => [ 'shape' => 'RoleARN', ], 'ClusterJDBCURL' => [ 'shape' => 'ClusterJDBCURL', ], 'CopyCommand' => [ 'shape' => 'CopyCommand', ], 'Username' => [ 'shape' => 'Username', ], 'Password' => [ 'shape' => 'Password', ], 'RetryOptions' => [ 'shape' => 'RedshiftRetryOptions', ], 'S3Update' => [ 'shape' => 'S3DestinationUpdate', ], 'ProcessingConfiguration' => [ 'shape' => 'ProcessingConfiguration', ], 'S3BackupMode' => [ 'shape' => 'RedshiftS3BackupMode', ], 'S3BackupUpdate' => [ 'shape' => 'S3DestinationUpdate', ], 'CloudWatchLoggingOptions' => [ 'shape' => 'CloudWatchLoggingOptions', ], ], ], 'RedshiftRetryDurationInSeconds' => [ 'type' => 'integer', 'max' => 7200, 'min' => 0, ], 'RedshiftRetryOptions' => [ 'type' => 'structure', 'members' => [ 'DurationInSeconds' => [ 'shape' => 'RedshiftRetryDurationInSeconds', ], ], ], 'RedshiftS3BackupMode' => [ 'type' => 'string', 'enum' => [ 'Disabled', 'Enabled', ], ], 'ResourceInUseException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'RoleARN' => [ 'type' => 'string', 'max' => 512, 'min' => 1, 'pattern' => 'arn:.*', ], 'S3BackupMode' => [ 'type' => 'string', 'enum' => [ 'Disabled', 'Enabled', ], ], 'S3DestinationConfiguration' => [ 'type' => 'structure', 'required' => [ 'RoleARN', 'BucketARN', ], 'members' => [ 'RoleARN' => [ 'shape' => 'RoleARN', ], 'BucketARN' => [ 'shape' => 'BucketARN', ], 'Prefix' => [ 'shape' => 'Prefix', ], 'BufferingHints' => [ 'shape' => 'BufferingHints', ], 'CompressionFormat' => [ 'shape' => 'CompressionFormat', ], 'EncryptionConfiguration' => [ 'shape' => 'EncryptionConfiguration', ], 'CloudWatchLoggingOptions' => [ 'shape' => 'CloudWatchLoggingOptions', ], ], ], 'S3DestinationDescription' => [ 'type' => 'structure', 'required' => [ 'RoleARN', 'BucketARN', 'BufferingHints', 'CompressionFormat', 'EncryptionConfiguration', ], 'members' => [ 'RoleARN' => [ 'shape' => 'RoleARN', ], 'BucketARN' => [ 'shape' => 'BucketARN', ], 'Prefix' => [ 'shape' => 'Prefix', ], 'BufferingHints' => [ 'shape' => 'BufferingHints', ], 'CompressionFormat' => [ 'shape' => 'CompressionFormat', ], 'EncryptionConfiguration' => [ 'shape' => 'EncryptionConfiguration', ], 'CloudWatchLoggingOptions' => [ 'shape' => 'CloudWatchLoggingOptions', ], ], ], 'S3DestinationUpdate' => [ 'type' => 'structure', 'members' => [ 'RoleARN' => [ 'shape' => 'RoleARN', ], 'BucketARN' => [ 'shape' => 'BucketARN', ], 'Prefix' => [ 'shape' => 'Prefix', ], 'BufferingHints' => [ 'shape' => 'BufferingHints', ], 'CompressionFormat' => [ 'shape' => 'CompressionFormat', ], 'EncryptionConfiguration' => [ 'shape' => 'EncryptionConfiguration', ], 'CloudWatchLoggingOptions' => [ 'shape' => 'CloudWatchLoggingOptions', ], ], ], 'SchemaConfiguration' => [ 'type' => 'structure', 'members' => [ 'RoleARN' => [ 'shape' => 'NonEmptyStringWithoutWhitespace', ], 'CatalogId' => [ 'shape' => 'NonEmptyStringWithoutWhitespace', ], 'DatabaseName' => [ 'shape' => 'NonEmptyStringWithoutWhitespace', ], 'TableName' => [ 'shape' => 'NonEmptyStringWithoutWhitespace', ], 'Region' => [ 'shape' => 'NonEmptyStringWithoutWhitespace', ], 'VersionId' => [ 'shape' => 'NonEmptyStringWithoutWhitespace', ], ], ], 'Serializer' => [ 'type' => 'structure', 'members' => [ 'ParquetSerDe' => [ 'shape' => 'ParquetSerDe', ], 'OrcSerDe' => [ 'shape' => 'OrcSerDe', ], ], ], 'ServiceUnavailableException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, 'fault' => true, ], 'SizeInMBs' => [ 'type' => 'integer', 'max' => 128, 'min' => 1, ], 'SourceDescription' => [ 'type' => 'structure', 'members' => [ 'KinesisStreamSourceDescription' => [ 'shape' => 'KinesisStreamSourceDescription', ], ], ], 'SplunkDestinationConfiguration' => [ 'type' => 'structure', 'required' => [ 'HECEndpoint', 'HECEndpointType', 'HECToken', 'S3Configuration', ], 'members' => [ 'HECEndpoint' => [ 'shape' => 'HECEndpoint', ], 'HECEndpointType' => [ 'shape' => 'HECEndpointType', ], 'HECToken' => [ 'shape' => 'HECToken', ], 'HECAcknowledgmentTimeoutInSeconds' => [ 'shape' => 'HECAcknowledgmentTimeoutInSeconds', ], 'RetryOptions' => [ 'shape' => 'SplunkRetryOptions', ], 'S3BackupMode' => [ 'shape' => 'SplunkS3BackupMode', ], 'S3Configuration' => [ 'shape' => 'S3DestinationConfiguration', ], 'ProcessingConfiguration' => [ 'shape' => 'ProcessingConfiguration', ], 'CloudWatchLoggingOptions' => [ 'shape' => 'CloudWatchLoggingOptions', ], ], ], 'SplunkDestinationDescription' => [ 'type' => 'structure', 'members' => [ 'HECEndpoint' => [ 'shape' => 'HECEndpoint', ], 'HECEndpointType' => [ 'shape' => 'HECEndpointType', ], 'HECToken' => [ 'shape' => 'HECToken', ], 'HECAcknowledgmentTimeoutInSeconds' => [ 'shape' => 'HECAcknowledgmentTimeoutInSeconds', ], 'RetryOptions' => [ 'shape' => 'SplunkRetryOptions', ], 'S3BackupMode' => [ 'shape' => 'SplunkS3BackupMode', ], 'S3DestinationDescription' => [ 'shape' => 'S3DestinationDescription', ], 'ProcessingConfiguration' => [ 'shape' => 'ProcessingConfiguration', ], 'CloudWatchLoggingOptions' => [ 'shape' => 'CloudWatchLoggingOptions', ], ], ], 'SplunkDestinationUpdate' => [ 'type' => 'structure', 'members' => [ 'HECEndpoint' => [ 'shape' => 'HECEndpoint', ], 'HECEndpointType' => [ 'shape' => 'HECEndpointType', ], 'HECToken' => [ 'shape' => 'HECToken', ], 'HECAcknowledgmentTimeoutInSeconds' => [ 'shape' => 'HECAcknowledgmentTimeoutInSeconds', ], 'RetryOptions' => [ 'shape' => 'SplunkRetryOptions', ], 'S3BackupMode' => [ 'shape' => 'SplunkS3BackupMode', ], 'S3Update' => [ 'shape' => 'S3DestinationUpdate', ], 'ProcessingConfiguration' => [ 'shape' => 'ProcessingConfiguration', ], 'CloudWatchLoggingOptions' => [ 'shape' => 'CloudWatchLoggingOptions', ], ], ], 'SplunkRetryDurationInSeconds' => [ 'type' => 'integer', 'max' => 7200, 'min' => 0, ], 'SplunkRetryOptions' => [ 'type' => 'structure', 'members' => [ 'DurationInSeconds' => [ 'shape' => 'SplunkRetryDurationInSeconds', ], ], ], 'SplunkS3BackupMode' => [ 'type' => 'string', 'enum' => [ 'FailedEventsOnly', 'AllEvents', ], ], 'StartDeliveryStreamEncryptionInput' => [ 'type' => 'structure', 'required' => [ 'DeliveryStreamName', ], 'members' => [ 'DeliveryStreamName' => [ 'shape' => 'DeliveryStreamName', ], ], ], 'StartDeliveryStreamEncryptionOutput' => [ 'type' => 'structure', 'members' => [], ], 'StopDeliveryStreamEncryptionInput' => [ 'type' => 'structure', 'required' => [ 'DeliveryStreamName', ], 'members' => [ 'DeliveryStreamName' => [ 'shape' => 'DeliveryStreamName', ], ], ], 'StopDeliveryStreamEncryptionOutput' => [ 'type' => 'structure', 'members' => [], ], 'Tag' => [ 'type' => 'structure', 'required' => [ 'Key', ], 'members' => [ 'Key' => [ 'shape' => 'TagKey', ], 'Value' => [ 'shape' => 'TagValue', ], ], ], 'TagDeliveryStreamInput' => [ 'type' => 'structure', 'required' => [ 'DeliveryStreamName', 'Tags', ], 'members' => [ 'DeliveryStreamName' => [ 'shape' => 'DeliveryStreamName', ], 'Tags' => [ 'shape' => 'TagDeliveryStreamInputTagList', ], ], ], 'TagDeliveryStreamInputTagList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], 'max' => 50, 'min' => 1, ], 'TagDeliveryStreamOutput' => [ 'type' => 'structure', 'members' => [], ], 'TagKey' => [ 'type' => 'string', 'max' => 128, 'min' => 1, ], 'TagKeyList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagKey', ], 'max' => 50, 'min' => 1, ], 'TagValue' => [ 'type' => 'string', 'max' => 256, 'min' => 0, ], 'Timestamp' => [ 'type' => 'timestamp', ], 'UntagDeliveryStreamInput' => [ 'type' => 'structure', 'required' => [ 'DeliveryStreamName', 'TagKeys', ], 'members' => [ 'DeliveryStreamName' => [ 'shape' => 'DeliveryStreamName', ], 'TagKeys' => [ 'shape' => 'TagKeyList', ], ], ], 'UntagDeliveryStreamOutput' => [ 'type' => 'structure', 'members' => [], ], 'UpdateDestinationInput' => [ 'type' => 'structure', 'required' => [ 'DeliveryStreamName', 'CurrentDeliveryStreamVersionId', 'DestinationId', ], 'members' => [ 'DeliveryStreamName' => [ 'shape' => 'DeliveryStreamName', ], 'CurrentDeliveryStreamVersionId' => [ 'shape' => 'DeliveryStreamVersionId', ], 'DestinationId' => [ 'shape' => 'DestinationId', ], 'S3DestinationUpdate' => [ 'shape' => 'S3DestinationUpdate', 'deprecated' => true, ], 'ExtendedS3DestinationUpdate' => [ 'shape' => 'ExtendedS3DestinationUpdate', ], 'RedshiftDestinationUpdate' => [ 'shape' => 'RedshiftDestinationUpdate', ], 'ElasticsearchDestinationUpdate' => [ 'shape' => 'ElasticsearchDestinationUpdate', ], 'SplunkDestinationUpdate' => [ 'shape' => 'SplunkDestinationUpdate', ], ], ], 'UpdateDestinationOutput' => [ 'type' => 'structure', 'members' => [], ], 'Username' => [ 'type' => 'string', 'min' => 1, 'sensitive' => true, ], ],];
