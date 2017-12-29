<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname(dirname($vendorDir));

return array(
    'App\\AppManager' => $baseDir . '/app/app/AppManager.php',
    'App\\BaseException' => $baseDir . '/app/app/BaseException.php',
    'App\\Config' => $baseDir . '/app/app/Config.php',
    'App\\Exceptions\\ControllerNotFoundException' => $baseDir . '/app/app/Exceptions/ControllerNotFoundException.php',
    'App\\Exceptions\\MethodNotFoundException' => $baseDir . '/app/app/Exceptions/MethodNotFoundException.php',
    'App\\Finder' => $baseDir . '/app/app/Finder.php',
    'Glider\\Adapter\\Contract\\AdapterInterface' => $vendorDir . '/phoxphp/glider/src/Adapter/Contract/AdapterInterface.php',
    'Glider\\ClassLoader' => $vendorDir . '/phoxphp/glider/src/ClassLoader.php',
    'Glider\\Configurator' => $vendorDir . '/phoxphp/glider/src/Configurator.php',
    'Glider\\Connection\\ActiveConnection' => $vendorDir . '/phoxphp/glider/src/Connection/ActiveConnection.php',
    'Glider\\Connection\\ConnectionLoader' => $vendorDir . '/phoxphp/glider/src/Connection/ConnectionLoader.php',
    'Glider\\Connection\\ConnectionManager' => $vendorDir . '/phoxphp/glider/src/Connection/ConnectionManager.php',
    'Glider\\Connection\\Contract\\ConnectionInterface' => $vendorDir . '/phoxphp/glider/src/Connection/Contract/ConnectionInterface.php',
    'Glider\\Connection\\Domain' => $vendorDir . '/phoxphp/glider/src/Connection/Domain.php',
    'Glider\\Connection\\PlatformResolver' => $vendorDir . '/phoxphp/glider/src/Connection/PlatformResolver.php',
    'Glider\\Connection\\QueuedConnections' => $vendorDir . '/phoxphp/glider/src/Connection/QueuedConnections.php',
    'Glider\\Connectors\\Contract\\ConnectorProvider' => $vendorDir . '/phoxphp/glider/src/Connectors/Contract/ConnectorProvider.php',
    'Glider\\Connectors\\Mysqli\\MysqliConnector' => $vendorDir . '/phoxphp/glider/src/Connectors/Mysqli/MysqliConnector.php',
    'Glider\\Contract\\ConfiguratorInterface' => $vendorDir . '/phoxphp/glider/src/Contract/ConfiguratorInterface.php',
    'Glider\\Events\\Contract\\Subscriber' => $vendorDir . '/phoxphp/glider/src/Events/Contract/Subscriber.php',
    'Glider\\Events\\EventManager' => $vendorDir . '/phoxphp/glider/src/Events/EventManager.php',
    'Glider\\Events\\Subscribers\\BuildEventsSubscriber' => $vendorDir . '/phoxphp/glider/src/Events/Subscribers/BuildEventsSubscriber.php',
    'Glider\\Events\\Subscribers\\ConnectionAttemptSubscriber' => $vendorDir . '/phoxphp/glider/src/Events/Subscribers/ConnectionAttemptSubscriber.php',
    'Glider\\Exceptions\\ConnectionFailedException' => $vendorDir . '/phoxphp/glider/src/Exceptions/ConnectionFailedException.php',
    'Glider\\Platform\\Contract\\PlatformProvider' => $vendorDir . '/phoxphp/glider/src/Platform/Contract/PlatformProvider.php',
    'Glider\\Platform\\Mysqli\\MysqliProvider' => $vendorDir . '/phoxphp/glider/src/Platform/Mysqli/MysqliProvider.php',
    'Glider\\Processor\\AbstractProcessorProvider' => $vendorDir . '/phoxphp/glider/src/Processor/AbstractProcessorProvider.php',
    'Glider\\Processor\\Contract\\ProcessorProvider' => $vendorDir . '/phoxphp/glider/src/Processor/Contract/ProcessorProvider.php',
    'Glider\\Processor\\Exceptions\\QueryException' => $vendorDir . '/phoxphp/glider/src/Processor/Exceptions/QueryException.php',
    'Glider\\Processor\\Mysqli\\MysqliProcessor' => $vendorDir . '/phoxphp/glider/src/Processor/Mysqli/MysqliProcessor.php',
    'Glider\\Query\\Builder\\Contract\\QueryBuilderProvider' => $vendorDir . '/phoxphp/glider/src/Query/Builder/Contract/QueryBuilderProvider.php',
    'Glider\\Query\\Builder\\QueryBinder' => $vendorDir . '/phoxphp/glider/src/Query/Builder/QueryBinder.php',
    'Glider\\Query\\Builder\\QueryBuilder' => $vendorDir . '/phoxphp/glider/src/Query/Builder/QueryBuilder.php',
    'Glider\\Query\\Builder\\SqlGenerator' => $vendorDir . '/phoxphp/glider/src/Query/Builder/SqlGenerator.php',
    'Glider\\Query\\Builder\\Type' => $vendorDir . '/phoxphp/glider/src/Query/Builder/Type.php',
    'Glider\\Query\\Exceptions\\InvalidParameterCountException' => $vendorDir . '/phoxphp/glider/src/Query/Exceptions/InvalidParameterCountException.php',
    'Glider\\Query\\Exceptions\\ParameterNotFoundException' => $vendorDir . '/phoxphp/glider/src/Query/Exceptions/ParameterNotFoundException.php',
    'Glider\\Query\\Parameters' => $vendorDir . '/phoxphp/glider/src/Query/Parameters.php',
    'Glider\\Result\\Collection' => $vendorDir . '/phoxphp/glider/src/Result/Collection.php',
    'Glider\\Result\\Contract\\CollectionContract' => $vendorDir . '/phoxphp/glider/src/Result/Contract/CollectionContract.php',
    'Glider\\Result\\Contract\\PlatformResultContract' => $vendorDir . '/phoxphp/glider/src/Result/Contract/PlatformResultContract.php',
    'Glider\\Result\\Contract\\ResultMapperContract' => $vendorDir . '/phoxphp/glider/src/Result/Contract/ResultMapperContract.php',
    'Glider\\Result\\Exceptions\\FunctionNotFoundException' => $vendorDir . '/phoxphp/glider/src/Result/Exceptions/FunctionNotFoundException.php',
    'Glider\\Result\\Exceptions\\InvalidPropertyAccessException' => $vendorDir . '/phoxphp/glider/src/Result/Exceptions/InvalidPropertyAccessException.php',
    'Glider\\Result\\Mappers\\DataResultMapper' => $vendorDir . '/phoxphp/glider/src/Result/Mappers/DataResultMapper.php',
    'Glider\\Result\\Platforms\\MysqliResult' => $vendorDir . '/phoxphp/glider/src/Result/Platforms/MysqliResult.php',
    'Glider\\Result\\ResultMapper' => $vendorDir . '/phoxphp/glider/src/Result/ResultMapper.php',
    'Glider\\Schema\\Column' => $vendorDir . '/phoxphp/glider/src/Schema/Column.php',
    'Glider\\Schema\\Column\\Index' => $vendorDir . '/phoxphp/glider/src/Schema/Column/Index.php',
    'Glider\\Schema\\Column\\Type' => $vendorDir . '/phoxphp/glider/src/Schema/Column/Type.php',
    'Glider\\Schema\\Column\\Type\\BaseType' => $vendorDir . '/phoxphp/glider/src/Schema/Column/Type/BaseType.php',
    'Glider\\Schema\\Column\\Type\\BigInt' => $vendorDir . '/phoxphp/glider/src/Schema/Column/Type/BigInt.php',
    'Glider\\Schema\\Column\\Type\\Bit' => $vendorDir . '/phoxphp/glider/src/Schema/Column/Type/Bit.php',
    'Glider\\Schema\\Column\\Type\\Blob' => $vendorDir . '/phoxphp/glider/src/Schema/Column/Type/Blob.php',
    'Glider\\Schema\\Column\\Type\\Char' => $vendorDir . '/phoxphp/glider/src/Schema/Column/Type/Char.php',
    'Glider\\Schema\\Column\\Type\\Contract\\TypeContract' => $vendorDir . '/phoxphp/glider/src/Schema/Column/Type/Contract/TypeContract.php',
    'Glider\\Schema\\Column\\Type\\Decimal' => $vendorDir . '/phoxphp/glider/src/Schema/Column/Type/Decimal.php',
    'Glider\\Schema\\Column\\Type\\Double' => $vendorDir . '/phoxphp/glider/src/Schema/Column/Type/Double.php',
    'Glider\\Schema\\Column\\Type\\Integer' => $vendorDir . '/phoxphp/glider/src/Schema/Column/Type/Integer.php',
    'Glider\\Schema\\Column\\Type\\LongBlob' => $vendorDir . '/phoxphp/glider/src/Schema/Column/Type/LongBlob.php',
    'Glider\\Schema\\Column\\Type\\LongText' => $vendorDir . '/phoxphp/glider/src/Schema/Column/Type/LongText.php',
    'Glider\\Schema\\Column\\Type\\MediumBlob' => $vendorDir . '/phoxphp/glider/src/Schema/Column/Type/MediumBlob.php',
    'Glider\\Schema\\Column\\Type\\MediumInt' => $vendorDir . '/phoxphp/glider/src/Schema/Column/Type/MediumInt.php',
    'Glider\\Schema\\Column\\Type\\MediumText' => $vendorDir . '/phoxphp/glider/src/Schema/Column/Type/MediumText.php',
    'Glider\\Schema\\Column\\Type\\SmallInt' => $vendorDir . '/phoxphp/glider/src/Schema/Column/Type/SmallInt.php',
    'Glider\\Schema\\Column\\Type\\Text' => $vendorDir . '/phoxphp/glider/src/Schema/Column/Type/Text.php',
    'Glider\\Schema\\Column\\Type\\TinyInt' => $vendorDir . '/phoxphp/glider/src/Schema/Column/Type/TinyInt.php',
    'Glider\\Schema\\Column\\Type\\TinyText' => $vendorDir . '/phoxphp/glider/src/Schema/Column/Type/TinyText.php',
    'Glider\\Schema\\Column\\Type\\Varchar' => $vendorDir . '/phoxphp/glider/src/Schema/Column/Type/Varchar.php',
    'Glider\\Schema\\Contract\\BaseTableContract' => $vendorDir . '/phoxphp/glider/src/Schema/Contract/BaseTableContract.php',
    'Glider\\Schema\\Contract\\SchemaManagerContract' => $vendorDir . '/phoxphp/glider/src/Schema/Contract/SchemaManagerContract.php',
    'Glider\\Schema\\Expressions' => $vendorDir . '/phoxphp/glider/src/Schema/Expressions.php',
    'Glider\\Schema\\Platforms\\MysqliSchemaManager' => $vendorDir . '/phoxphp/glider/src/Schema/Platforms/MysqliSchemaManager.php',
    'Glider\\Schema\\SchemaManager' => $vendorDir . '/phoxphp/glider/src/Schema/SchemaManager.php',
    'Glider\\Schema\\Scheme' => $vendorDir . '/phoxphp/glider/src/Schema/Scheme.php',
    'Glider\\Schema\\Table' => $vendorDir . '/phoxphp/glider/src/Schema/Table.php',
    'Glider\\Statements\\Contract\\StatementContract' => $vendorDir . '/phoxphp/glider/src/Statements/Contract/StatementContract.php',
    'Glider\\Statements\\Exceptions\\QueryException' => $vendorDir . '/phoxphp/glider/src/Statements/Exceptions/QueryException.php',
    'Glider\\Statements\\Platforms\\MysqliStatement' => $vendorDir . '/phoxphp/glider/src/Statements/Platforms/MysqliStatement.php',
    'Glider\\Transactions\\Contract\\TransactionProvider' => $vendorDir . '/phoxphp/glider/src/Transactions/Contract/TransactionProvider.php',
    'Glider\\Transactions\\Mysqli\\MysqliTransaction' => $vendorDir . '/phoxphp/glider/src/Transactions/Mysqli/MysqliTransaction.php',
);
