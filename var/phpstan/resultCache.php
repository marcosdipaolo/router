<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1775401182,
	'meta' => array (
  'cacheVersion' => 'v12-linesToIgnore',
  'phpstanVersion' => '1.12.33',
  'phpVersion' => 80227,
  'projectConfig' => '{parameters: {featureToggles: {bleedingEdge: true, skipCheckGenericClasses: {_prevent_merging: true}, explicitMixedInUnknownGenericNew: true, explicitMixedForGlobalVariables: true, explicitMixedViaIsArray: true, arrayFilter: true, arrayUnpacking: true, arrayValues: true, nodeConnectingVisitorCompatibility: false, nodeConnectingVisitorRule: true, disableCheckMissingIterableValueType: true, strictUnnecessaryNullsafePropertyFetch: true, looseComparison: true, consistentConstructor: true, checkUnresolvableParameterTypes: true, readOnlyByPhpDoc: true, phpDocParserRequireWhitespaceBeforeDescription: true, phpDocParserIncludeLines: true, enableIgnoreErrorsWithinPhpDocs: true, runtimeReflectionRules: true, notAnalysedTrait: true, curlSetOptTypes: true, listType: true, abstractTraitMethod: true, missingMagicSerializationRule: true, nullContextForVoidReturningFunctions: true, unescapeStrings: true, alwaysCheckTooWideReturnTypeFinalMethods: true, duplicateStubs: true, logicalXor: true, betterNoop: true, invarianceComposition: true, alwaysTrueAlwaysReported: true, disableUnreachableBranchesRules: true, varTagType: true, closureDefaultParameterTypeRule: true, newRuleLevelHelper: true, instanceofType: true, paramOutVariance: true, allInvalidPhpDocs: true, strictStaticMethodTemplateTypeVariance: true, propertyVariance: true, genericPrototypeMessage: true, stricterFunctionMap: true, invalidPhpDocTagLine: true, detectDeadTypeInMultiCatch: true, zeroFiles: true, projectServicesNotInAnalysedPaths: true, callUserFunc: true, finalByPhpDoc: true, magicConstantOutOfContext: true, paramOutType: true, pure: true, checkParameterCastableToStringFunctions: true, uselessReturnValue: true, printfArrayParameters: true, preciseMissingReturn: true, validatePregQuote: true, noImplicitWildcard: true, tooWidePropertyType: true, explicitThrow: true, absentTypeChecks: true, requireFileExists: true}, stubFiles: [phar://phpstan.phar/stubs/bleedingEdge/Rule.stub], level: 9, paths: [/Users/marcosdipaolo/Documents/dev/own/router/src, /Users/marcosdipaolo/Documents/dev/own/router/test], excludePaths: {analyseAndScan: [/Users/marcosdipaolo/Documents/dev/own/router/vendor], analyse: []}, checkMissingIterableValueType: true, checkGenericClassInNonGenericObjectType: true, tmpDir: /Users/marcosdipaolo/Documents/dev/own/router/var/phpstan, treatPhpDocTypesAsCertain: true}}',
  'analysedPaths' => 
  array (
    0 => '/Users/marcosdipaolo/Documents/dev/own/router/src',
    1 => '/Users/marcosdipaolo/Documents/dev/own/router/test',
  ),
  'scannedFiles' => 
  array (
  ),
  'composerLocks' => 
  array (
    '/Users/marcosdipaolo/Documents/dev/own/router/composer.lock' => 'cf26dd48f5f5dbc40e1d468da53f10590137c46a',
  ),
  'composerInstalled' => 
  array (
    '/Users/marcosdipaolo/Documents/dev/own/router/vendor/composer/installed.php' => 
    array (
      'versions' => 
      array (
        'doctrine/instantiator' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'reference' => 'c6222283fa3f4ac679f8b9ced9a4e23f163e80d0',
          'type' => 'library',
          'install_path' => '/Users/marcosdipaolo/Documents/dev/own/router/vendor/composer/../doctrine/instantiator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'marcosdipaolo/container' => 
        array (
          'pretty_version' => '1.1.0',
          'version' => '1.1.0.0',
          'reference' => '707eb30fd0dea34888aefb6f51e267e0eddedbb4',
          'type' => 'library',
          'install_path' => '/Users/marcosdipaolo/Documents/dev/own/router/vendor/composer/../marcosdipaolo/container',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'myclabs/deep-copy' => 
        array (
          'pretty_version' => '1.13.4',
          'version' => '1.13.4.0',
          'reference' => '07d290f0c47959fd5eed98c95ee5602db07e0b6a',
          'type' => 'library',
          'install_path' => '/Users/marcosdipaolo/Documents/dev/own/router/vendor/composer/../myclabs/deep-copy',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nikic/php-parser' => 
        array (
          'pretty_version' => 'v5.7.0',
          'version' => '5.7.0.0',
          'reference' => 'dca41cd15c2ac9d055ad70dbfd011130757d1f82',
          'type' => 'library',
          'install_path' => '/Users/marcosdipaolo/Documents/dev/own/router/vendor/composer/../nikic/php-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/manifest' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => '54750ef60c58e43759730615a392c31c80e23176',
          'type' => 'library',
          'install_path' => '/Users/marcosdipaolo/Documents/dev/own/router/vendor/composer/../phar-io/manifest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/version' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
          'type' => 'library',
          'install_path' => '/Users/marcosdipaolo/Documents/dev/own/router/vendor/composer/../phar-io/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpstan/phpstan' => 
        array (
          'pretty_version' => '1.12.33',
          'version' => '1.12.33.0',
          'reference' => '37982d6fc7cbb746dda7773530cda557cdf119e1',
          'type' => 'library',
          'install_path' => '/Users/marcosdipaolo/Documents/dev/own/router/vendor/composer/../phpstan/phpstan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-code-coverage' => 
        array (
          'pretty_version' => '9.2.32',
          'version' => '9.2.32.0',
          'reference' => '85402a822d1ecf1db1096959413d35e1c37cf1a5',
          'type' => 'library',
          'install_path' => '/Users/marcosdipaolo/Documents/dev/own/router/vendor/composer/../phpunit/php-code-coverage',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-file-iterator' => 
        array (
          'pretty_version' => '3.0.6',
          'version' => '3.0.6.0',
          'reference' => 'cf1c2e7c203ac650e352f4cc675a7021e7d1b3cf',
          'type' => 'library',
          'install_path' => '/Users/marcosdipaolo/Documents/dev/own/router/vendor/composer/../phpunit/php-file-iterator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-invoker' => 
        array (
          'pretty_version' => '3.1.1',
          'version' => '3.1.1.0',
          'reference' => '5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
          'type' => 'library',
          'install_path' => '/Users/marcosdipaolo/Documents/dev/own/router/vendor/composer/../phpunit/php-invoker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-text-template' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => '5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
          'type' => 'library',
          'install_path' => '/Users/marcosdipaolo/Documents/dev/own/router/vendor/composer/../phpunit/php-text-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-timer' => 
        array (
          'pretty_version' => '5.0.3',
          'version' => '5.0.3.0',
          'reference' => '5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
          'type' => 'library',
          'install_path' => '/Users/marcosdipaolo/Documents/dev/own/router/vendor/composer/../phpunit/php-timer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/phpunit' => 
        array (
          'pretty_version' => '9.6.34',
          'version' => '9.6.34.0',
          'reference' => 'b36f02317466907a230d3aa1d34467041271ef4a',
          'type' => 'library',
          'install_path' => '/Users/marcosdipaolo/Documents/dev/own/router/vendor/composer/../phpunit/phpunit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'psr/container' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
          'type' => 'library',
          'install_path' => '/Users/marcosdipaolo/Documents/dev/own/router/vendor/composer/../psr/container',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'rector/rector' => 
        array (
          'pretty_version' => '1.2.10',
          'version' => '1.2.10.0',
          'reference' => '40f9cf38c05296bd32f444121336a521a293fa61',
          'type' => 'library',
          'install_path' => '/Users/marcosdipaolo/Documents/dev/own/router/vendor/composer/../rector/rector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/cli-parser' => 
        array (
          'pretty_version' => '1.0.2',
          'version' => '1.0.2.0',
          'reference' => '2b56bea83a09de3ac06bb18b92f068e60cc6f50b',
          'type' => 'library',
          'install_path' => '/Users/marcosdipaolo/Documents/dev/own/router/vendor/composer/../sebastian/cli-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit' => 
        array (
          'pretty_version' => '1.0.8',
          'version' => '1.0.8.0',
          'reference' => '1fc9f64c0927627ef78ba436c9b17d967e68e120',
          'type' => 'library',
          'install_path' => '/Users/marcosdipaolo/Documents/dev/own/router/vendor/composer/../sebastian/code-unit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit-reverse-lookup' => 
        array (
          'pretty_version' => '2.0.3',
          'version' => '2.0.3.0',
          'reference' => 'ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
          'type' => 'library',
          'install_path' => '/Users/marcosdipaolo/Documents/dev/own/router/vendor/composer/../sebastian/code-unit-reverse-lookup',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/comparator' => 
        array (
          'pretty_version' => '4.0.10',
          'version' => '4.0.10.0',
          'reference' => 'e4df00b9b3571187db2831ae9aada2c6efbd715d',
          'type' => 'library',
          'install_path' => '/Users/marcosdipaolo/Documents/dev/own/router/vendor/composer/../sebastian/comparator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/complexity' => 
        array (
          'pretty_version' => '2.0.3',
          'version' => '2.0.3.0',
          'reference' => '25f207c40d62b8b7aa32f5ab026c53561964053a',
          'type' => 'library',
          'install_path' => '/Users/marcosdipaolo/Documents/dev/own/router/vendor/composer/../sebastian/complexity',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/diff' => 
        array (
          'pretty_version' => '4.0.6',
          'version' => '4.0.6.0',
          'reference' => 'ba01945089c3a293b01ba9badc29ad55b106b0bc',
          'type' => 'library',
          'install_path' => '/Users/marcosdipaolo/Documents/dev/own/router/vendor/composer/../sebastian/diff',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/environment' => 
        array (
          'pretty_version' => '5.1.5',
          'version' => '5.1.5.0',
          'reference' => '830c43a844f1f8d5b7a1f6d6076b784454d8b7ed',
          'type' => 'library',
          'install_path' => '/Users/marcosdipaolo/Documents/dev/own/router/vendor/composer/../sebastian/environment',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/exporter' => 
        array (
          'pretty_version' => '4.0.8',
          'version' => '4.0.8.0',
          'reference' => '14c6ba52f95a36c3d27c835d65efc7123c446e8c',
          'type' => 'library',
          'install_path' => '/Users/marcosdipaolo/Documents/dev/own/router/vendor/composer/../sebastian/exporter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/global-state' => 
        array (
          'pretty_version' => '5.0.8',
          'version' => '5.0.8.0',
          'reference' => 'b6781316bdcd28260904e7cc18ec983d0d2ef4f6',
          'type' => 'library',
          'install_path' => '/Users/marcosdipaolo/Documents/dev/own/router/vendor/composer/../sebastian/global-state',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/lines-of-code' => 
        array (
          'pretty_version' => '1.0.4',
          'version' => '1.0.4.0',
          'reference' => 'e1e4a170560925c26d424b6a03aed157e7dcc5c5',
          'type' => 'library',
          'install_path' => '/Users/marcosdipaolo/Documents/dev/own/router/vendor/composer/../sebastian/lines-of-code',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-enumerator' => 
        array (
          'pretty_version' => '4.0.4',
          'version' => '4.0.4.0',
          'reference' => '5c9eeac41b290a3712d88851518825ad78f45c71',
          'type' => 'library',
          'install_path' => '/Users/marcosdipaolo/Documents/dev/own/router/vendor/composer/../sebastian/object-enumerator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-reflector' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => 'b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
          'type' => 'library',
          'install_path' => '/Users/marcosdipaolo/Documents/dev/own/router/vendor/composer/../sebastian/object-reflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/recursion-context' => 
        array (
          'pretty_version' => '4.0.6',
          'version' => '4.0.6.0',
          'reference' => '539c6691e0623af6dc6f9c20384c120f963465a0',
          'type' => 'library',
          'install_path' => '/Users/marcosdipaolo/Documents/dev/own/router/vendor/composer/../sebastian/recursion-context',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/resource-operations' => 
        array (
          'pretty_version' => '3.0.4',
          'version' => '3.0.4.0',
          'reference' => '05d5692a7993ecccd56a03e40cd7e5b09b1d404e',
          'type' => 'library',
          'install_path' => '/Users/marcosdipaolo/Documents/dev/own/router/vendor/composer/../sebastian/resource-operations',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/type' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'reference' => '75e2c2a32f5e0b3aef905b9ed0b179b953b3d7c7',
          'type' => 'library',
          'install_path' => '/Users/marcosdipaolo/Documents/dev/own/router/vendor/composer/../sebastian/type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/version' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => 'c6c1022351a901512170118436c764e473f6de8c',
          'type' => 'library',
          'install_path' => '/Users/marcosdipaolo/Documents/dev/own/router/vendor/composer/../sebastian/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'theseer/tokenizer' => 
        array (
          'pretty_version' => '1.3.1',
          'version' => '1.3.1.0',
          'reference' => 'b7489ce515e168639d17feec34b8847c326b0b3c',
          'type' => 'library',
          'install_path' => '/Users/marcosdipaolo/Documents/dev/own/router/vendor/composer/../theseer/tokenizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
      ),
    ),
  ),
  'executedFilesHashes' => 
  array (
    'phar:///Users/marcosdipaolo/Documents/dev/own/router/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute.php' => 'eaf9127f074e9c7ebc65043ec4050f9fed60c2bb',
    'phar:///Users/marcosdipaolo/Documents/dev/own/router/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php' => '0b4b78277eb6545955d2ce5e09bff28f1f8052c8',
    'phar:///Users/marcosdipaolo/Documents/dev/own/router/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php' => 'a3e6299b87ee5d407dae7651758edfa11a74cb11',
    'phar:///Users/marcosdipaolo/Documents/dev/own/router/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php' => '1b349aa997a834faeafe05fa21bc31cae22bf2e2',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'FFI',
    2 => 'PDO',
    3 => 'PDO_ODBC',
    4 => 'Phar',
    5 => 'Reflection',
    6 => 'SPL',
    7 => 'SimpleXML',
    8 => 'Zend OPcache',
    9 => 'bcmath',
    10 => 'bz2',
    11 => 'calendar',
    12 => 'ctype',
    13 => 'curl',
    14 => 'date',
    15 => 'dba',
    16 => 'dom',
    17 => 'exif',
    18 => 'fileinfo',
    19 => 'filter',
    20 => 'ftp',
    21 => 'gd',
    22 => 'gettext',
    23 => 'gmp',
    24 => 'hash',
    25 => 'iconv',
    26 => 'intl',
    27 => 'json',
    28 => 'ldap',
    29 => 'libxml',
    30 => 'mbstring',
    31 => 'mysqli',
    32 => 'mysqlnd',
    33 => 'odbc',
    34 => 'openssl',
    35 => 'pcntl',
    36 => 'pcre',
    37 => 'pdo_dblib',
    38 => 'pdo_mysql',
    39 => 'pdo_pgsql',
    40 => 'pdo_sqlite',
    41 => 'pgsql',
    42 => 'posix',
    43 => 'pspell',
    44 => 'random',
    45 => 'readline',
    46 => 'session',
    47 => 'shmop',
    48 => 'soap',
    49 => 'sockets',
    50 => 'sodium',
    51 => 'sqlite3',
    52 => 'standard',
    53 => 'sysvmsg',
    54 => 'sysvsem',
    55 => 'sysvshm',
    56 => 'tidy',
    57 => 'tokenizer',
    58 => 'xml',
    59 => 'xmlreader',
    60 => 'xmlwriter',
    61 => 'xsl',
    62 => 'zip',
    63 => 'zlib',
  ),
  'stubFiles' => 
  array (
    'phar://phpstan.phar/stubs/bleedingEdge/Rule.stub' => 'd9794712c5ee66bd8116e645391fe9a181af070a',
  ),
  'level' => '9',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Http/Request.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot cast mixed to string.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Http/Request.php',
       'line' => 38,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Http/Request.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 38,
       'nodeType' => 'PhpParser\\Node\\Expr\\Cast\\String_',
       'identifier' => 'cast.string',
       'metadata' => 
      array (
      ),
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $url of function parse_url expects string, mixed given.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Http/Request.php',
       'line' => 39,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Http/Request.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 39,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Variable $_GET on left side of ?? always exists and is not nullable.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Http/Request.php',
       'line' => 40,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Http/Request.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 40,
       'nodeType' => 'PhpParser\\Node\\Expr\\BinaryOp\\Coalesce',
       'identifier' => 'nullCoalesce.variable',
       'metadata' => 
      array (
      ),
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Variable $_POST on left side of ?? always exists and is not nullable.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Http/Request.php',
       'line' => 41,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Http/Request.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 41,
       'nodeType' => 'PhpParser\\Node\\Expr\\BinaryOp\\Coalesce',
       'identifier' => 'nullCoalesce.variable',
       'metadata' => 
      array (
      ),
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot cast mixed to string.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Http/Request.php',
       'line' => 139,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Http/Request.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 139,
       'nodeType' => 'PhpParser\\Node\\Expr\\Cast\\String_',
       'identifier' => 'cast.string',
       'metadata' => 
      array (
      ),
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot cast mixed to string.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Http/Request.php',
       'line' => 144,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Http/Request.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 144,
       'nodeType' => 'PhpParser\\Node\\Expr\\Cast\\String_',
       'identifier' => 'cast.string',
       'metadata' => 
      array (
      ),
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot cast mixed to string.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Http/Request.php',
       'line' => 150,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Http/Request.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 150,
       'nodeType' => 'PhpParser\\Node\\Expr\\Cast\\String_',
       'identifier' => 'cast.string',
       'metadata' => 
      array (
      ),
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot cast mixed to string.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Http/Request.php',
       'line' => 152,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Http/Request.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 152,
       'nodeType' => 'PhpParser\\Node\\Expr\\Cast\\String_',
       'identifier' => 'cast.string',
       'metadata' => 
      array (
      ),
    )),
    8 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot cast mixed to string.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Http/Request.php',
       'line' => 155,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Http/Request.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 155,
       'nodeType' => 'PhpParser\\Node\\Expr\\Cast\\String_',
       'identifier' => 'cast.string',
       'metadata' => 
      array (
      ),
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Http/Response.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant MDP\\Http\\Response::STATUS_MESSAGES is unused.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Http/Response.php',
       'line' => 17,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Http/Response.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/developing-extensions/always-used-class-constants',
       'nodeLine' => 5,
       'nodeType' => 'PHPStan\\Node\\ClassConstantsNode',
       'identifier' => 'classConstant.unused',
       'metadata' => 
      array (
      ),
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Middleware/MethodSpoofingMiddleware.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot cast mixed to string.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Middleware/MethodSpoofingMiddleware.php',
       'line' => 19,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Middleware/MethodSpoofingMiddleware.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 19,
       'nodeType' => 'PhpParser\\Node\\Expr\\Cast\\String_',
       'identifier' => 'cast.string',
       'metadata' => 
      array (
      ),
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot cast mixed to string.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Middleware/MethodSpoofingMiddleware.php',
       'line' => 23,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Middleware/MethodSpoofingMiddleware.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 23,
       'nodeType' => 'PhpParser\\Node\\Expr\\Cast\\String_',
       'identifier' => 'cast.string',
       'metadata' => 
      array (
      ),
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/RouteCache.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method MDP\\Router\\RouteCache::load() should return array<int, array<int|string, mixed>>|null but returns array|null.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/RouteCache.php',
       'line' => 37,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/RouteCache.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 37,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Return_',
       'identifier' => 'return.type',
       'metadata' => 
      array (
      ),
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Router.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $method of class MDP\\Router\\RouteDefinition constructor expects string, mixed given.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Router.php',
       'line' => 62,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Router.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 61,
       'nodeType' => 'PhpParser\\Node\\Expr\\New_',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #2 $path of class MDP\\Router\\RouteDefinition constructor expects string, mixed given.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Router.php',
       'line' => 63,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Router.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 61,
       'nodeType' => 'PhpParser\\Node\\Expr\\New_',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #3 $action of class MDP\\Router\\RouteDefinition constructor expects string, mixed given.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Router.php',
       'line' => 64,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Router.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 61,
       'nodeType' => 'PhpParser\\Node\\Expr\\New_',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #4 $middleware of class MDP\\Router\\RouteDefinition constructor expects array<int, MDP\\Middleware\\MiddlewareInterface|string>, mixed given.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Router.php',
       'line' => 65,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Router.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 61,
       'nodeType' => 'PhpParser\\Node\\Expr\\New_',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #5 $name of class MDP\\Router\\RouteDefinition constructor expects string|null, mixed given.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Router.php',
       'line' => 66,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Router.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 61,
       'nodeType' => 'PhpParser\\Node\\Expr\\New_',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $objectOrClass of class ReflectionClass constructor expects class-string<T of object>|T of object, string given.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Router.php',
       'line' => 87,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Router.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 87,
       'nodeType' => 'PhpParser\\Node\\Expr\\New_',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Unsafe usage of new static().',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Router.php',
       'line' => 120,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Router.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-error-unsafe-usage-of-new-static',
       'nodeLine' => 120,
       'nodeType' => 'PhpParser\\Node\\Expr\\New_',
       'identifier' => 'new.static',
       'metadata' => 
      array (
      ),
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method MDP\\Router\\Router::create() should return static(MDP\\Router\\Router) but returns MDP\\Router\\Router.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Router.php',
       'line' => 123,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Router.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 123,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Return_',
       'identifier' => 'return.type',
       'metadata' => 
      array (
      ),
    )),
    8 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property MDP\\Router\\Router::$globalMiddleware (array<int, MDP\\Middleware\\MiddlewareInterface>) does not accept array<int, MDP\\Middleware\\MiddlewareInterface|string>.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Router.php',
       'line' => 261,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Router.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 261,
       'nodeType' => 'PHPStan\\Node\\PropertyAssignNode',
       'identifier' => 'assign.propertyType',
       'metadata' => 
      array (
      ),
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/RouterConfiguration.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method MDP\\Router\\RouterConfiguration::setRoutesFilePath() has parameter $routesFilePath with no type specified.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/RouterConfiguration.php',
       'line' => 16,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/RouterConfiguration.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 16,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/UrlGenerator.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method MDP\\Router\\UrlGenerator::route() has parameter $parameters with no value type specified in iterable type array.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/UrlGenerator.php',
       'line' => 19,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/UrlGenerator.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 19,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Utilities/FileLogger.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method MDP\\Utilities\\FileLogger::log() has parameter $context with no value type specified in iterable type array.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Utilities/FileLogger.php',
       'line' => 20,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Utilities/FileLogger.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 20,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method MDP\\Utilities\\FileLogger::error() has parameter $context with no value type specified in iterable type array.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Utilities/FileLogger.php',
       'line' => 29,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Utilities/FileLogger.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 29,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method MDP\\Utilities\\FileLogger::warning() has parameter $context with no value type specified in iterable type array.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Utilities/FileLogger.php',
       'line' => 34,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Utilities/FileLogger.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 34,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method MDP\\Utilities\\FileLogger::info() has parameter $context with no value type specified in iterable type array.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Utilities/FileLogger.php',
       'line' => 39,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Utilities/FileLogger.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 39,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method MDP\\Utilities\\FileLogger::debug() has parameter $context with no value type specified in iterable type array.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Utilities/FileLogger.php',
       'line' => 44,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Utilities/FileLogger.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 44,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Utilities/LoggerInterface.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method MDP\\Utilities\\LoggerInterface::log() has parameter $context with no value type specified in iterable type array.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Utilities/LoggerInterface.php',
       'line' => 7,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Utilities/LoggerInterface.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 7,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method MDP\\Utilities\\LoggerInterface::error() has parameter $context with no value type specified in iterable type array.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Utilities/LoggerInterface.php',
       'line' => 9,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Utilities/LoggerInterface.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 9,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method MDP\\Utilities\\LoggerInterface::warning() has parameter $context with no value type specified in iterable type array.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Utilities/LoggerInterface.php',
       'line' => 11,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Utilities/LoggerInterface.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 11,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method MDP\\Utilities\\LoggerInterface::info() has parameter $context with no value type specified in iterable type array.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Utilities/LoggerInterface.php',
       'line' => 13,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Utilities/LoggerInterface.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 13,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method MDP\\Utilities\\LoggerInterface::debug() has parameter $context with no value type specified in iterable type array.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Utilities/LoggerInterface.php',
       'line' => 15,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Utilities/LoggerInterface.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 15,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/helpers.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function getControllers() return type has no value type specified in iterable type array.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/src/helpers.php',
       'line' => 4,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/helpers.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 4,
       'nodeType' => 'PHPStan\\Node\\InFunctionNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/MockedController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property MDP\\Test\\Router\\MockedController::$service is never read, only written.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/MockedController.php',
       'line' => 16,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/MockedController.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/developing-extensions/always-read-written-properties',
       'nodeLine' => 14,
       'nodeType' => 'PHPStan\\Node\\ClassPropertiesNode',
       'identifier' => 'property.onlyWritten',
       'metadata' => 
      array (
      ),
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Binary operation "." between \'User \' and mixed results in an error.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/MockedController.php',
       'line' => 30,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/MockedController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 30,
       'nodeType' => 'PhpParser\\Node\\Expr\\BinaryOp\\Concat',
       'identifier' => 'binaryOp.invalid',
       'metadata' => 
      array (
      ),
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method MDP\\Test\\Router\\RouterTest::testBasicGetRequest() has no return type specified.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
       'line' => 43,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 43,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method MDP\\Test\\Router\\RouterTest::testNotFoundRoute() has no return type specified.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
       'line' => 55,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 55,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method MDP\\Test\\Router\\RouterTest::testRouteWithParameters() has no return type specified.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
       'line' => 67,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 67,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method MDP\\Test\\Router\\RouterTest::testPostRequest() has no return type specified.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
       'line' => 78,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 78,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method MDP\\Test\\Router\\RouterTest::testPutRequest() has no return type specified.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
       'line' => 89,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 89,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method MDP\\Test\\Router\\RouterTest::testPatchRequest() has no return type specified.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
       'line' => 100,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 100,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method MDP\\Test\\Router\\RouterTest::testDeleteRequest() has no return type specified.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
       'line' => 111,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 111,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method MDP\\Test\\Router\\RouterTest::testRouteParametersExtracted() has no return type specified.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
       'line' => 122,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 122,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
    )),
    8 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method MDP\\Test\\Router\\RouterTest::testListRoutes() has no return type specified.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
       'line' => 134,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 134,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
    )),
    9 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to method PHPUnit\\Framework\\Assert::assertIsArray() with array<int, array{method: string, path: string, action: string, name: string|null, middleware: array<int, MDP\\Middleware\\MiddlewareInterface|string>}> will always evaluate to true.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
       'line' => 138,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 138,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.alreadyNarrowedType',
       'metadata' => 
      array (
      ),
    )),
    10 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method MDP\\Test\\Router\\RouterTest::testUrlGeneration() has no return type specified.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
       'line' => 149,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 149,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
    )),
    11 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method MDP\\Test\\Router\\RouterTest::testRequestQueryParameters() has no return type specified.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
       'line' => 164,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 164,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
    )),
    12 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method MDP\\Test\\Router\\RouterTest::testRequestJsonBody() has no return type specified.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
       'line' => 173,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 173,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
    )),
    13 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #6 $body of class MDP\\Http\\Request constructor expects string|null, string|false given.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
       'line' => 176,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 176,
       'nodeType' => 'PhpParser\\Node\\Expr\\New_',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
    )),
    14 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method MDP\\Test\\Router\\RouterTest::testResponseHeaders() has no return type specified.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
       'line' => 186,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 186,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
    )),
    15 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method MDP\\Test\\Router\\RouterTest::testCorsHeaders() has no return type specified.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
       'line' => 197,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 197,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
    )),
    16 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #2 $haystack of method PHPUnit\\Framework\\Assert::assertStringContainsString() expects string, string|null given.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
       'line' => 203,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 203,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
    )),
    17 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method MDP\\Test\\Router\\RouterTest::testSecurityHeaders() has no return type specified.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
       'line' => 209,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 209,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
    )),
    18 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method MDP\\Test\\Router\\RouterTest::testJsonResponse() has no return type specified.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
       'line' => 221,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 221,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
    )),
    19 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method MDP\\Test\\Router\\RouterTest::testDebugMode() has no return type specified.',
       'file' => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
       'line' => 234,
       'canBeIgnored' => true,
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 234,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
    )),
  ),
); },
	'locallyIgnoredErrorsCallback' => static function (): array { return array (
); },
	'linesToIgnore' => array (
),
	'unmatchedLineIgnores' => array (
),
	'collectedDataCallback' => static function (): array { return array (
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Http/Request.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'MDP\\Http\\Request',
        1 => 'getMethod',
        2 => 'MDP\\Http\\Request',
      ),
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Http/Request.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector',
    )),
    1 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'MDP\\Http\\Request',
        1 => 'getUri',
        2 => 'MDP\\Http\\Request',
      ),
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Http/Request.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector',
    )),
    2 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'MDP\\Http\\Request',
        1 => 'getQueryParams',
        2 => 'MDP\\Http\\Request',
      ),
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Http/Request.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector',
    )),
    3 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'MDP\\Http\\Request',
        1 => 'getQuery',
        2 => 'MDP\\Http\\Request',
      ),
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Http/Request.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector',
    )),
    4 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'MDP\\Http\\Request',
        1 => 'getPostData',
        2 => 'MDP\\Http\\Request',
      ),
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Http/Request.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector',
    )),
    5 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'MDP\\Http\\Request',
        1 => 'getPost',
        2 => 'MDP\\Http\\Request',
      ),
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Http/Request.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector',
    )),
    6 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'MDP\\Http\\Request',
        1 => 'getRouteParams',
        2 => 'MDP\\Http\\Request',
      ),
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Http/Request.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector',
    )),
    7 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'MDP\\Http\\Request',
        1 => 'getRouteParam',
        2 => 'MDP\\Http\\Request',
      ),
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Http/Request.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector',
    )),
    8 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'MDP\\Http\\Request',
        1 => 'getBody',
        2 => 'MDP\\Http\\Request',
      ),
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Http/Request.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector',
    )),
    9 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'MDP\\Http\\Request',
        1 => 'getHeaders',
        2 => 'MDP\\Http\\Request',
      ),
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Http/Request.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector',
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Http/Response.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'MDP\\Http\\Response',
        1 => 'getStatusCode',
        2 => 'MDP\\Http\\Response',
      ),
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Http/Response.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector',
    )),
    1 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'MDP\\Http\\Response',
        1 => 'getHeader',
        2 => 'MDP\\Http\\Response',
      ),
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Http/Response.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector',
    )),
    2 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'MDP\\Http\\Response',
        1 => 'getHeaders',
        2 => 'MDP\\Http\\Response',
      ),
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Http/Response.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector',
    )),
    3 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'MDP\\Http\\Response',
        1 => 'getBody',
        2 => 'MDP\\Http\\Response',
      ),
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Http/Response.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector',
    )),
    4 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'http_response_code',
        1 => 129,
      ),
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Http/Response.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector',
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Middleware/CorsMiddleware.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 'MDP\\Middleware\\CorsMiddleware',
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Middleware/CorsMiddleware.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector',
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Middleware/MethodSpoofingMiddleware.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 'MDP\\Middleware\\MethodSpoofingMiddleware',
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Middleware/MethodSpoofingMiddleware.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector',
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Attributes/Delete.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'MDP\\Router\\Attributes\\Route',
        1 => '__construct',
        2 => 12,
      ),
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Attributes/Delete.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector',
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Attributes/Get.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'MDP\\Router\\Attributes\\Route',
        1 => '__construct',
        2 => 12,
      ),
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Attributes/Get.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector',
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Attributes/Patch.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'MDP\\Router\\Attributes\\Route',
        1 => '__construct',
        2 => 10,
      ),
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Attributes/Patch.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector',
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Attributes/Post.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'MDP\\Router\\Attributes\\Route',
        1 => '__construct',
        2 => 12,
      ),
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Attributes/Post.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector',
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Attributes/Put.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'MDP\\Router\\Attributes\\Route',
        1 => '__construct',
        2 => 12,
      ),
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Attributes/Put.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector',
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Attributes/Route.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 'MDP\\Router\\Attributes\\Route',
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Attributes/Route.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector',
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/RouteCache.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'MDP\\Router\\RouteCache',
        1 => 'isEnabled',
        2 => 'MDP\\Router\\RouteCache',
      ),
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/RouteCache.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector',
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/RouteCollection.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'MDP\\Router\\RouteCollection',
        1 => 'all',
        2 => 'MDP\\Router\\RouteCollection',
      ),
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/RouteCollection.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector',
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/RouteDefinition.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'preg_match_all',
        1 => 28,
      ),
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/RouteDefinition.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector',
    )),
    1 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'MDP\\Router\\RouteDefinition',
        1 => 'getMethod',
        2 => 'MDP\\Router\\RouteDefinition',
      ),
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/RouteDefinition.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector',
    )),
    2 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'MDP\\Router\\RouteDefinition',
        1 => 'getPath',
        2 => 'MDP\\Router\\RouteDefinition',
      ),
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/RouteDefinition.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector',
    )),
    3 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'MDP\\Router\\RouteDefinition',
        1 => 'getAction',
        2 => 'MDP\\Router\\RouteDefinition',
      ),
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/RouteDefinition.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector',
    )),
    4 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'MDP\\Router\\RouteDefinition',
        1 => 'getMiddleware',
        2 => 'MDP\\Router\\RouteDefinition',
      ),
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/RouteDefinition.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector',
    )),
    5 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'MDP\\Router\\RouteDefinition',
        1 => 'getName',
        2 => 'MDP\\Router\\RouteDefinition',
      ),
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/RouteDefinition.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector',
    )),
    6 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'MDP\\Router\\RouteDefinition',
        1 => 'getParameters',
        2 => 'MDP\\Router\\RouteDefinition',
      ),
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/RouteDefinition.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector',
    )),
    7 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'MDP\\Router\\RouteDefinition',
        1 => 'toArray',
        2 => 'MDP\\Router\\RouteDefinition',
      ),
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/RouteDefinition.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector',
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Router.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'MDP\\Router\\Router',
        1 => 'url',
        2 => 'MDP\\Router\\Router',
      ),
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Router.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector',
    )),
    1 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'MDP\\Router\\Router',
        1 => 'getRoutes',
        2 => 'MDP\\Router\\Router',
      ),
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Router.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector',
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/RouterConfiguration.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'MDP\\Router\\RouterConfiguration',
        1 => 'getRoutesFilePath',
        2 => 'MDP\\Router\\RouterConfiguration',
      ),
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/RouterConfiguration.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector',
    )),
    1 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'MDP\\Router\\RouterConfiguration',
        1 => 'getControllersNamespace',
        2 => 'MDP\\Router\\RouterConfiguration',
      ),
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/RouterConfiguration.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector',
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/UrlGenerator.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 'MDP\\Router\\UrlGenerator',
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/UrlGenerator.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector',
    )),
    1 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'MDP\\Router\\UrlGenerator',
        1 => 'getBasePath',
        2 => 'MDP\\Router\\UrlGenerator',
      ),
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/UrlGenerator.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector',
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Utilities/FileLogger.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'MDP\\Utilities\\FileLogger',
        1 => 'getLogFile',
        2 => 'MDP\\Utilities\\FileLogger',
      ),
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/Utilities/FileLogger.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector',
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/helpers.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'array_splice',
        1 => 13,
      ),
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/src/helpers.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector',
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/MockedController.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 'MDP\\Test\\Router\\MockedController',
       'filePath' => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/MockedController.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector',
    )),
  ),
); },
	'dependencies' => array (
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Http/Request.php' => 
  array (
    'fileHash' => '37807b2ceac9b32c17f0a8c9094105e55541316b',
    'dependentFiles' => 
    array (
      0 => '/Users/marcosdipaolo/Documents/dev/own/router/src/Middleware/CorsMiddleware.php',
      1 => '/Users/marcosdipaolo/Documents/dev/own/router/src/Middleware/MethodSpoofingMiddleware.php',
      2 => '/Users/marcosdipaolo/Documents/dev/own/router/src/Middleware/MiddlewareInterface.php',
      3 => '/Users/marcosdipaolo/Documents/dev/own/router/src/Middleware/SecurityHeadersMiddleware.php',
      4 => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Router.php',
      5 => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/MockedController.php',
      6 => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
    ),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Http/Response.php' => 
  array (
    'fileHash' => 'aa8ffe2094b5dad71bb22db2c6692aa649d79ba3',
    'dependentFiles' => 
    array (
      0 => '/Users/marcosdipaolo/Documents/dev/own/router/src/Middleware/CorsMiddleware.php',
      1 => '/Users/marcosdipaolo/Documents/dev/own/router/src/Middleware/MethodSpoofingMiddleware.php',
      2 => '/Users/marcosdipaolo/Documents/dev/own/router/src/Middleware/MiddlewareInterface.php',
      3 => '/Users/marcosdipaolo/Documents/dev/own/router/src/Middleware/SecurityHeadersMiddleware.php',
      4 => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Router.php',
      5 => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/MockedController.php',
      6 => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
    ),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Middleware/CorsMiddleware.php' => 
  array (
    'fileHash' => 'b097f7ba24c46ab06dccd417ced1c7e9542574c5',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Middleware/MethodSpoofingMiddleware.php' => 
  array (
    'fileHash' => 'b04096b6550b6f5fa11fedd90fa49fb80ff9b94f',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Middleware/MiddlewareInterface.php' => 
  array (
    'fileHash' => '522a8f0116b959240128f49d0f562c42e1598d69',
    'dependentFiles' => 
    array (
      0 => '/Users/marcosdipaolo/Documents/dev/own/router/src/Middleware/CorsMiddleware.php',
      1 => '/Users/marcosdipaolo/Documents/dev/own/router/src/Middleware/MethodSpoofingMiddleware.php',
      2 => '/Users/marcosdipaolo/Documents/dev/own/router/src/Middleware/SecurityHeadersMiddleware.php',
      3 => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/RouteCollection.php',
      4 => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/RouteDefinition.php',
      5 => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/RouteGroup.php',
      6 => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Router.php',
      7 => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
    ),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Middleware/SecurityHeadersMiddleware.php' => 
  array (
    'fileHash' => 'e44363b20f4eae88e952c98aaafe589fd0c20050',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Attributes/Delete.php' => 
  array (
    'fileHash' => '15e4c36ac4785311a43f342d5705b8d94064f0f2',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Attributes/Get.php' => 
  array (
    'fileHash' => '6869a33e94172a0f16b25f314e2ef7ade927da1b',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Attributes/Patch.php' => 
  array (
    'fileHash' => '7eda35fc8bd0038ab9f2f8910d3a83e63cf01d89',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Attributes/Post.php' => 
  array (
    'fileHash' => 'bf59b7cabcefe99855da44de9344638dff311bd9',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Attributes/Put.php' => 
  array (
    'fileHash' => '1b68f52b58d24936a72469bb53aa776373e5cb50',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Attributes/Route.php' => 
  array (
    'fileHash' => '5d28fe13b232edda6fd50037fb03ed418fea649f',
    'dependentFiles' => 
    array (
      0 => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Attributes/Delete.php',
      1 => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Attributes/Get.php',
      2 => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Attributes/Patch.php',
      3 => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Attributes/Post.php',
      4 => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Attributes/Put.php',
      5 => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Router.php',
    ),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Exceptions/PageNotFoundRouterException.php' => 
  array (
    'fileHash' => '66a3ae9472b148f8ba858efc754ceef132d86cf9',
    'dependentFiles' => 
    array (
      0 => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Router.php',
    ),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/RouteCache.php' => 
  array (
    'fileHash' => '31db6e9c9effce4b779ecda7f814d5d2e619e5ec',
    'dependentFiles' => 
    array (
      0 => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Router.php',
    ),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/RouteCollection.php' => 
  array (
    'fileHash' => '10028b3f0b69e40355bdef15126945cf34c8e7aa',
    'dependentFiles' => 
    array (
      0 => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/RouteCache.php',
      1 => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/RouteGroup.php',
      2 => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Router.php',
      3 => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/UrlGenerator.php',
    ),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/RouteDefinition.php' => 
  array (
    'fileHash' => '5f16a3be0aed01d99fc6b29e76ca0d42941ae627',
    'dependentFiles' => 
    array (
      0 => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/RouteCollection.php',
      1 => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/RouteGroup.php',
      2 => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Router.php',
      3 => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/UrlGenerator.php',
    ),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/RouteGroup.php' => 
  array (
    'fileHash' => '4ce0052ee54995b8ddbd24a18dfe6600740596b0',
    'dependentFiles' => 
    array (
      0 => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/RouteCollection.php',
    ),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Router.php' => 
  array (
    'fileHash' => '802fa976b26c98080e177767ec818a84383e716e',
    'dependentFiles' => 
    array (
      0 => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
    ),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/RouterConfiguration.php' => 
  array (
    'fileHash' => '832b5d2458ac87dd4a9acf699165df25df37fac3',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/UrlGenerator.php' => 
  array (
    'fileHash' => '4d584088563f977ac4d0b47552256523ca816742',
    'dependentFiles' => 
    array (
      0 => '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Router.php',
      1 => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
    ),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Utilities/FileLogger.php' => 
  array (
    'fileHash' => '96aff09df3501808546096c7640957c2b32c8ce1',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Utilities/LoggerInterface.php' => 
  array (
    'fileHash' => '71978c6513543e86ef0aba861237cacf70d1acdb',
    'dependentFiles' => 
    array (
      0 => '/Users/marcosdipaolo/Documents/dev/own/router/src/Utilities/FileLogger.php',
    ),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/helpers.php' => 
  array (
    'fileHash' => '11f300dcbbad7ed1dbb2a399124ae217847383c1',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/routes.php' => 
  array (
    'fileHash' => 'ef3f8455d6c4dbd3a853965425a977477c83137d',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/MockedController.php' => 
  array (
    'fileHash' => '27b758cceaaad7861d1fe6ee2f7e4b4cc80c2158',
    'dependentFiles' => 
    array (
      0 => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
    ),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/MockedService/MockedService.php' => 
  array (
    'fileHash' => '7d0b2da3f6ebb2b0b413afef12089ad589050724',
    'dependentFiles' => 
    array (
      0 => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
    ),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/MockedService/MockedServiceApi.php' => 
  array (
    'fileHash' => 'a9318a7dcb5268b0efd86d798670b325adcfb70a',
    'dependentFiles' => 
    array (
      0 => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/MockedController.php',
      1 => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/MockedService/MockedService.php',
      2 => '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php',
    ),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php' => 
  array (
    'fileHash' => '8704796fcf9dfb541c9c18b28a368945a469c2d2',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/mockedRoutes.php' => 
  array (
    'fileHash' => 'b1c864fe0c03acb3f3e8a4d6e64d63875b894061',
    'dependentFiles' => 
    array (
    ),
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Http/Request.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'MDP\\Http\\Request',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<string, mixed>|null $queryParams
     * @param array<string, mixed>|null $postData
     * @param array<string, mixed>|null $headers
     */',
             'namespace' => 'MDP\\Http',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'method',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'uri',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'queryParams',
               'type' => '?array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'postData',
               'type' => '?array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'headers',
               'type' => '?array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            5 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'body',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getMethod',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getUri',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getQueryParams',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @return array<string, mixed> */',
             'namespace' => 'MDP\\Http',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getQuery',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'mixed',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'key',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'default',
               'type' => '?mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getPostData',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @return array<string, mixed> */',
             'namespace' => 'MDP\\Http',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getPost',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'mixed',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'key',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'default',
               'type' => '?mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getRouteParams',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @return array<string, mixed> */',
             'namespace' => 'MDP\\Http',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getRouteParam',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'mixed',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'key',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'default',
               'type' => '?mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setRouteParams',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @param array<string, mixed> $params */',
             'namespace' => 'MDP\\Http',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'params',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getBody',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getJsonBody',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @return array<string, mixed> */',
             'namespace' => 'MDP\\Http',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        12 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getHeader',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'mixed',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'key',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'default',
               'type' => '?mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        13 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getHeaders',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @return array<string, mixed> */',
             'namespace' => 'MDP\\Http',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        14 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isJson',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        15 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isAjax',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        16 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getIP',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Http/Response.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'MDP\\Http\\Response',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setStatusCode',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'code',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getStatusCode',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setHeader',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getHeader',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getHeaders',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @return array<string, string> */',
             'namespace' => 'MDP\\Http',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'json',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @param array<mixed, mixed> $data */',
             'namespace' => 'MDP\\Http',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'statusCode',
               'type' => '?int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'text',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'content',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'statusCode',
               'type' => '?int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'html',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'content',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'statusCode',
               'type' => '?int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setBody',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'body',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getBody',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'redirect',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'url',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'statusCode',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'send',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        12 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'addCorsHeaders',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'origin',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        13 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'addSecurityHeaders',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Middleware/CorsMiddleware.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'MDP\\Middleware\\CorsMiddleware',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'MDP\\Middleware\\MiddlewareInterface',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<int, string> $allowMethods
     * @param array<int, string> $allowHeaders
     */',
             'namespace' => 'MDP\\Middleware',
             'uses' => 
            array (
              'request' => 'MDP\\Http\\Request',
              'response' => 'MDP\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'allowOrigin',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'allowMethods',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'allowHeaders',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'MDP\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'MDP\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'response',
               'type' => 'MDP\\Http\\Response',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'next',
               'type' => 'callable',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Middleware/MethodSpoofingMiddleware.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'MDP\\Middleware\\MethodSpoofingMiddleware',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'MDP\\Middleware\\MiddlewareInterface',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'parameterName',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'MDP\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'MDP\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'response',
               'type' => 'MDP\\Http\\Response',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'next',
               'type' => 'callable',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Middleware/MiddlewareInterface.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'MDP\\Middleware\\MiddlewareInterface',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Handle the request and pass control to the next middleware
     *
     * @param callable(Request, Response): Response $next
     */',
             'namespace' => 'MDP\\Middleware',
             'uses' => 
            array (
              'request' => 'MDP\\Http\\Request',
              'response' => 'MDP\\Http\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'MDP\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'MDP\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'response',
               'type' => 'MDP\\Http\\Response',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'next',
               'type' => 'callable',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Middleware/SecurityHeadersMiddleware.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'MDP\\Middleware\\SecurityHeadersMiddleware',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'MDP\\Middleware\\MiddlewareInterface',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'MDP\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'MDP\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'response',
               'type' => 'MDP\\Http\\Response',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'next',
               'type' => 'callable',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Attributes/Delete.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'MDP\\Router\\Attributes\\Delete',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'MDP\\Router\\Attributes\\Route',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'path',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'Attribute',
           'args' => 
          array (
          ),
        )),
      ),
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Attributes/Get.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'MDP\\Router\\Attributes\\Get',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'MDP\\Router\\Attributes\\Route',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'path',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'Attribute',
           'args' => 
          array (
          ),
        )),
      ),
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Attributes/Patch.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'MDP\\Router\\Attributes\\Patch',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'MDP\\Router\\Attributes\\Route',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'path',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'Attribute',
           'args' => 
          array (
            0 => '\\Attribute::TARGET_METHOD',
          ),
        )),
      ),
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Attributes/Post.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'MDP\\Router\\Attributes\\Post',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'MDP\\Router\\Attributes\\Route',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'path',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'Attribute',
           'args' => 
          array (
          ),
        )),
      ),
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Attributes/Put.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'MDP\\Router\\Attributes\\Put',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'MDP\\Router\\Attributes\\Route',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'path',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'Attribute',
           'args' => 
          array (
          ),
        )),
      ),
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Attributes/Route.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'MDP\\Router\\Attributes\\Route',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'path',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'verb',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'Attribute',
           'args' => 
          array (
          ),
        )),
      ),
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Exceptions/PageNotFoundRouterException.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'MDP\\Router\\Exceptions\\PageNotFoundRouterException',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Class PageNotFoundRouterException
 * @package MDP\\Exceptions
 */',
         'namespace' => 'MDP\\Router\\Exceptions',
         'uses' => 
        array (
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Exception',
       'implements' => 
      array (
        0 => 'Throwable',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * PageNotFoundRouterException constructor.
     * @param string $message
     */',
             'namespace' => 'MDP\\Router\\Exceptions',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'message',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/RouteCache.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'MDP\\Router\\RouteCache',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'cachePath',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'enabled',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'has',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Check if cache exists and is valid
     */',
             'namespace' => 'MDP\\Router',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'load',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Load routes from cache
     * @return array<int, array<mixed, mixed>>|null
     */',
             'namespace' => 'MDP\\Router',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'save',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Save routes to cache
     */',
             'namespace' => 'MDP\\Router',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'collection',
               'type' => 'MDP\\Router\\RouteCollection',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'clear',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Clear the cache
     */',
             'namespace' => 'MDP\\Router',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setEnabled',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'enabled',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isEnabled',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/RouteCollection.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'MDP\\Router\\RouteCollection',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'add',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<int, string|\\MDP\\Middleware\\MiddlewareInterface> $middleware
     */',
             'namespace' => 'MDP\\Router',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'MDP\\Router\\RouteDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'method',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'path',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'middleware',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'addDefinition',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'route',
               'type' => 'MDP\\Router\\RouteDefinition',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'get',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<int, string|\\MDP\\Middleware\\MiddlewareInterface> $middleware
     */',
             'namespace' => 'MDP\\Router',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'MDP\\Router\\RouteDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'path',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'middleware',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'post',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<int, string|\\MDP\\Middleware\\MiddlewareInterface> $middleware
     */',
             'namespace' => 'MDP\\Router',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'MDP\\Router\\RouteDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'path',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'middleware',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'put',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<int, string|\\MDP\\Middleware\\MiddlewareInterface> $middleware
     */',
             'namespace' => 'MDP\\Router',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'MDP\\Router\\RouteDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'path',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'middleware',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'patch',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<int, string|\\MDP\\Middleware\\MiddlewareInterface> $middleware
     */',
             'namespace' => 'MDP\\Router',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'MDP\\Router\\RouteDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'path',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'middleware',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'delete',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<int, string|\\MDP\\Middleware\\MiddlewareInterface> $middleware
     */',
             'namespace' => 'MDP\\Router',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'MDP\\Router\\RouteDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'path',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'middleware',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'options',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<int, string|\\MDP\\Middleware\\MiddlewareInterface> $middleware
     */',
             'namespace' => 'MDP\\Router',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'MDP\\Router\\RouteDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'path',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'middleware',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'head',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<int, string|\\MDP\\Middleware\\MiddlewareInterface> $middleware
     */',
             'namespace' => 'MDP\\Router',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'MDP\\Router\\RouteDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'path',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'middleware',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'group',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Group routes under a common prefix and middleware
     *
     * @param array<int, string|\\MDP\\Middleware\\MiddlewareInterface> $groupMiddleware
     */',
             'namespace' => 'MDP\\Router',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'prefix',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'groupMiddleware',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'callback',
               'type' => 'callable',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'all',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @return array<int, RouteDefinition> */',
             'namespace' => 'MDP\\Router',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @return array<int, array<mixed, mixed>> */',
             'namespace' => 'MDP\\Router',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/RouteDefinition.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'MDP\\Router\\RouteDefinition',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<int, string|\\MDP\\Middleware\\MiddlewareInterface> $middleware
     */',
             'namespace' => 'MDP\\Router',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'method',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'path',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'middleware',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getMethod',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getPath',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getAction',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getMiddleware',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @return array<int, string|\\MDP\\Middleware\\MiddlewareInterface> */',
             'namespace' => 'MDP\\Router',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getName',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getParameters',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @return array<int, string> */',
             'namespace' => 'MDP\\Router',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toRegexPattern',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Convert path to regex pattern for matching
     * /users/{id} becomes /users/(\\d+) or /users/([^/]+) based on requirements
     */',
             'namespace' => 'MDP\\Router',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'matches',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Check if this route matches the given method and path
     *
     * @return array<string, string>|null
     */',
             'namespace' => 'MDP\\Router',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'method',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'path',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array{method: string, path: string, action: string, middleware: array<int, string|\\MDP\\Middleware\\MiddlewareInterface>, name: string|null, parameters: array<int, string>}
     */',
             'namespace' => 'MDP\\Router',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/RouteGroup.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'MDP\\Router\\RouteGroup',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<int, string|\\MDP\\Middleware\\MiddlewareInterface> $middleware
     */',
             'namespace' => 'MDP\\Router',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'collection',
               'type' => 'MDP\\Router\\RouteCollection',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'prefix',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'middleware',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'get',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<int, string|\\MDP\\Middleware\\MiddlewareInterface> $middleware
     */',
             'namespace' => 'MDP\\Router',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'MDP\\Router\\RouteDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'path',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'middleware',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'post',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<int, string|\\MDP\\Middleware\\MiddlewareInterface> $middleware
     */',
             'namespace' => 'MDP\\Router',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'MDP\\Router\\RouteDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'path',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'middleware',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'put',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<int, string|\\MDP\\Middleware\\MiddlewareInterface> $middleware
     */',
             'namespace' => 'MDP\\Router',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'MDP\\Router\\RouteDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'path',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'middleware',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'patch',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<int, string|\\MDP\\Middleware\\MiddlewareInterface> $middleware
     */',
             'namespace' => 'MDP\\Router',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'MDP\\Router\\RouteDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'path',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'middleware',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'delete',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<int, string|\\MDP\\Middleware\\MiddlewareInterface> $middleware
     */',
             'namespace' => 'MDP\\Router',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'MDP\\Router\\RouteDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'path',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'middleware',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'head',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<int, string|\\MDP\\Middleware\\MiddlewareInterface> $middleware
     */',
             'namespace' => 'MDP\\Router',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'MDP\\Router\\RouteDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'path',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'middleware',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'options',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<int, string|\\MDP\\Middleware\\MiddlewareInterface> $middleware
     */',
             'namespace' => 'MDP\\Router',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'MDP\\Router\\RouteDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'path',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'middleware',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/Router.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'MDP\\Router\\Router',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'registerRoutesFromControllerAttributes',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register routes from controller method attributes
     *
     * @param array<int, string> $controllers
     * @throws ReflectionException
     */',
             'namespace' => 'MDP\\Router',
             'uses' => 
            array (
              'container' => 'MDP\\Container\\Container',
              'request' => 'MDP\\Http\\Request',
              'response' => 'MDP\\Http\\Response',
              'middlewareinterface' => 'MDP\\Middleware\\MiddlewareInterface',
              'route' => 'MDP\\Router\\Attributes\\Route',
              'pagenotfoundrouterexception' => 'MDP\\Router\\Exceptions\\PageNotFoundRouterException',
              'reflectionattribute' => 'ReflectionAttribute',
              'reflectionclass' => 'ReflectionClass',
              'reflectionexception' => 'ReflectionException',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'controllers',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create or retrieve a router singleton
     *
     * @param array<int, string> $controllers
     * @throws ReflectionException
     */',
             'namespace' => 'MDP\\Router',
             'uses' => 
            array (
              'container' => 'MDP\\Container\\Container',
              'request' => 'MDP\\Http\\Request',
              'response' => 'MDP\\Http\\Response',
              'middlewareinterface' => 'MDP\\Middleware\\MiddlewareInterface',
              'route' => 'MDP\\Router\\Attributes\\Route',
              'pagenotfoundrouterexception' => 'MDP\\Router\\Exceptions\\PageNotFoundRouterException',
              'reflectionattribute' => 'ReflectionAttribute',
              'reflectionclass' => 'ReflectionClass',
              'reflectionexception' => 'ReflectionException',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'static',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'controllers',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'container',
               'type' => 'MDP\\Container\\Container',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'cacheDir',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'cacheEnabled',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'direct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Handle an incoming HTTP request
     *
     * @throws Throwable
     */',
             'namespace' => 'MDP\\Router',
             'uses' => 
            array (
              'container' => 'MDP\\Container\\Container',
              'request' => 'MDP\\Http\\Request',
              'response' => 'MDP\\Http\\Response',
              'middlewareinterface' => 'MDP\\Middleware\\MiddlewareInterface',
              'route' => 'MDP\\Router\\Attributes\\Route',
              'pagenotfoundrouterexception' => 'MDP\\Router\\Exceptions\\PageNotFoundRouterException',
              'reflectionattribute' => 'ReflectionAttribute',
              'reflectionclass' => 'ReflectionClass',
              'reflectionexception' => 'ReflectionException',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'MDP\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => '?MDP\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'response',
               'type' => '?MDP\\Http\\Response',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'middleware',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add global middleware
     */',
             'namespace' => 'MDP\\Router',
             'uses' => 
            array (
              'container' => 'MDP\\Container\\Container',
              'request' => 'MDP\\Http\\Request',
              'response' => 'MDP\\Http\\Response',
              'middlewareinterface' => 'MDP\\Middleware\\MiddlewareInterface',
              'route' => 'MDP\\Router\\Attributes\\Route',
              'pagenotfoundrouterexception' => 'MDP\\Router\\Exceptions\\PageNotFoundRouterException',
              'reflectionattribute' => 'ReflectionAttribute',
              'reflectionclass' => 'ReflectionClass',
              'reflectionexception' => 'ReflectionException',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'middleware',
               'type' => 'string|MDP\\Middleware\\MiddlewareInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'url',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the URL generator for reverse routing
     */',
             'namespace' => 'MDP\\Router',
             'uses' => 
            array (
              'container' => 'MDP\\Container\\Container',
              'request' => 'MDP\\Http\\Request',
              'response' => 'MDP\\Http\\Response',
              'middlewareinterface' => 'MDP\\Middleware\\MiddlewareInterface',
              'route' => 'MDP\\Router\\Attributes\\Route',
              'pagenotfoundrouterexception' => 'MDP\\Router\\Exceptions\\PageNotFoundRouterException',
              'reflectionattribute' => 'ReflectionAttribute',
              'reflectionclass' => 'ReflectionClass',
              'reflectionexception' => 'ReflectionException',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'MDP\\Router\\UrlGenerator',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getRoutes',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get all registered routes
     */',
             'namespace' => 'MDP\\Router',
             'uses' => 
            array (
              'container' => 'MDP\\Container\\Container',
              'request' => 'MDP\\Http\\Request',
              'response' => 'MDP\\Http\\Response',
              'middlewareinterface' => 'MDP\\Middleware\\MiddlewareInterface',
              'route' => 'MDP\\Router\\Attributes\\Route',
              'pagenotfoundrouterexception' => 'MDP\\Router\\Exceptions\\PageNotFoundRouterException',
              'reflectionattribute' => 'ReflectionAttribute',
              'reflectionclass' => 'ReflectionClass',
              'reflectionexception' => 'ReflectionException',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'MDP\\Router\\RouteCollection',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'group',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create a route group
     *
     * @param array<int, string|MiddlewareInterface> $middleware
     */',
             'namespace' => 'MDP\\Router',
             'uses' => 
            array (
              'container' => 'MDP\\Container\\Container',
              'request' => 'MDP\\Http\\Request',
              'response' => 'MDP\\Http\\Response',
              'middlewareinterface' => 'MDP\\Middleware\\MiddlewareInterface',
              'route' => 'MDP\\Router\\Attributes\\Route',
              'pagenotfoundrouterexception' => 'MDP\\Router\\Exceptions\\PageNotFoundRouterException',
              'reflectionattribute' => 'ReflectionAttribute',
              'reflectionclass' => 'ReflectionClass',
              'reflectionexception' => 'ReflectionException',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'prefix',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'middleware',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'callback',
               'type' => 'callable',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'debug',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Enable or disable debug mode
     */',
             'namespace' => 'MDP\\Router',
             'uses' => 
            array (
              'container' => 'MDP\\Container\\Container',
              'request' => 'MDP\\Http\\Request',
              'response' => 'MDP\\Http\\Response',
              'middlewareinterface' => 'MDP\\Middleware\\MiddlewareInterface',
              'route' => 'MDP\\Router\\Attributes\\Route',
              'pagenotfoundrouterexception' => 'MDP\\Router\\Exceptions\\PageNotFoundRouterException',
              'reflectionattribute' => 'ReflectionAttribute',
              'reflectionclass' => 'ReflectionClass',
              'reflectionexception' => 'ReflectionException',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'enabled',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'clearCache',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Clear route cache
     */',
             'namespace' => 'MDP\\Router',
             'uses' => 
            array (
              'container' => 'MDP\\Container\\Container',
              'request' => 'MDP\\Http\\Request',
              'response' => 'MDP\\Http\\Response',
              'middlewareinterface' => 'MDP\\Middleware\\MiddlewareInterface',
              'route' => 'MDP\\Router\\Attributes\\Route',
              'pagenotfoundrouterexception' => 'MDP\\Router\\Exceptions\\PageNotFoundRouterException',
              'reflectionattribute' => 'ReflectionAttribute',
              'reflectionclass' => 'ReflectionClass',
              'reflectionexception' => 'ReflectionException',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'listRoutes',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get all registered routes (for debugging)
     *
     * @return array<int, array{method: string, path: string, action: string, name: string|null, middleware: array<int, string|MiddlewareInterface>}>
     */',
             'namespace' => 'MDP\\Router',
             'uses' => 
            array (
              'container' => 'MDP\\Container\\Container',
              'request' => 'MDP\\Http\\Request',
              'response' => 'MDP\\Http\\Response',
              'middlewareinterface' => 'MDP\\Middleware\\MiddlewareInterface',
              'route' => 'MDP\\Router\\Attributes\\Route',
              'pagenotfoundrouterexception' => 'MDP\\Router\\Exceptions\\PageNotFoundRouterException',
              'reflectionattribute' => 'ReflectionAttribute',
              'reflectionclass' => 'ReflectionClass',
              'reflectionexception' => 'ReflectionException',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__clone',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Singletons should not be cloneable
     */',
             'namespace' => 'MDP\\Router',
             'uses' => 
            array (
              'container' => 'MDP\\Container\\Container',
              'request' => 'MDP\\Http\\Request',
              'response' => 'MDP\\Http\\Response',
              'middlewareinterface' => 'MDP\\Middleware\\MiddlewareInterface',
              'route' => 'MDP\\Router\\Attributes\\Route',
              'pagenotfoundrouterexception' => 'MDP\\Router\\Exceptions\\PageNotFoundRouterException',
              'reflectionattribute' => 'ReflectionAttribute',
              'reflectionclass' => 'ReflectionClass',
              'reflectionexception' => 'ReflectionException',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__wakeup',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Prevent unserialization
     */',
             'namespace' => 'MDP\\Router',
             'uses' => 
            array (
              'container' => 'MDP\\Container\\Container',
              'request' => 'MDP\\Http\\Request',
              'response' => 'MDP\\Http\\Response',
              'middlewareinterface' => 'MDP\\Middleware\\MiddlewareInterface',
              'route' => 'MDP\\Router\\Attributes\\Route',
              'pagenotfoundrouterexception' => 'MDP\\Router\\Exceptions\\PageNotFoundRouterException',
              'reflectionattribute' => 'ReflectionAttribute',
              'reflectionclass' => 'ReflectionClass',
              'reflectionexception' => 'ReflectionException',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/RouterConfiguration.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'MDP\\Router\\RouterConfiguration',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getRoutesFilePath',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setRoutesFilePath',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'routesFilePath',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getControllersNamespace',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setControllersNamespace',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'controllersNamespace',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Router/UrlGenerator.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'MDP\\Router\\UrlGenerator',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'routes',
               'type' => 'MDP\\Router\\RouteCollection',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'basePath',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'route',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Generate a URL from a route name and parameters
     *
     * @param string $name The route name
     * @param array $parameters Parameters to fill in the route
     * @return string The generated URL
     * @throws \\InvalidArgumentException if route is not found
     */',
             'namespace' => 'MDP\\Router',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'parameters',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setBasePath',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Set the base path for URL generation
     */',
             'namespace' => 'MDP\\Router',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'basePath',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getBasePath',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Utilities/FileLogger.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'MDP\\Utilities\\FileLogger',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'MDP\\Utilities\\LoggerInterface',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'logFile',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'dateFormat',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'log',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'level',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'message',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'context',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'error',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'message',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'context',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'warning',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'message',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'context',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'info',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'message',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'context',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'debug',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'message',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'context',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getLogFile',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/Utilities/LoggerInterface.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'MDP\\Utilities\\LoggerInterface',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'log',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'level',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'message',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'context',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'error',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'message',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'context',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'warning',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'message',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'context',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'info',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'message',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'context',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'debug',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'message',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'context',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/src/helpers.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'getControllers',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => 'array',
       'parameters' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'controllersDirectory',
           'type' => 'string',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'namespace',
           'type' => 'string',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/MockedController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'MDP\\Test\\Router\\MockedController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'service',
               'type' => 'MDP\\Test\\Router\\MockedService\\MockedServiceApi',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'home',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'MDP\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'MDP\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'response',
               'type' => 'MDP\\Http\\Response',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'MDP\\Router\\Attributes\\Get',
               'args' => 
              array (
                0 => '"/"',
              ),
            )),
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getUser',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'MDP\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'MDP\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'response',
               'type' => 'MDP\\Http\\Response',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'MDP\\Router\\Attributes\\Get',
               'args' => 
              array (
                0 => '"/users/{id}"',
              ),
            )),
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'createUser',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'MDP\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'MDP\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'response',
               'type' => 'MDP\\Http\\Response',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'MDP\\Router\\Attributes\\Post',
               'args' => 
              array (
                0 => '"/users"',
              ),
            )),
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'updateUser',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'MDP\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'MDP\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'response',
               'type' => 'MDP\\Http\\Response',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'MDP\\Router\\Attributes\\Put',
               'args' => 
              array (
                0 => '"/users/{id}"',
              ),
            )),
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'patchUser',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'MDP\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'MDP\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'response',
               'type' => 'MDP\\Http\\Response',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'MDP\\Router\\Attributes\\Patch',
               'args' => 
              array (
                0 => '"/users/{id}"',
              ),
            )),
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'deleteUser',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'MDP\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'MDP\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'response',
               'type' => 'MDP\\Http\\Response',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'MDP\\Router\\Attributes\\Delete',
               'args' => 
              array (
                0 => '"/users/{id}"',
              ),
            )),
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'search',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'MDP\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'MDP\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'response',
               'type' => 'MDP\\Http\\Response',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'MDP\\Router\\Attributes\\Get',
               'args' => 
              array (
                0 => '"/search"',
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/MockedService/MockedService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'MDP\\Test\\Router\\MockedService\\MockedService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'MDP\\Test\\Router\\MockedService\\MockedServiceApi',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/MockedService/MockedServiceApi.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'MDP\\Test\\Router\\MockedService\\MockedServiceApi',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
      ),
    )),
  ),
  '/Users/marcosdipaolo/Documents/dev/own/router/test/Router/RouterTest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'MDP\\Test\\Router\\RouterTest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'PHPUnit\\Framework\\TestCase',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setUp',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @throws Throwable
     */',
             'namespace' => 'MDP\\Test\\Router',
             'uses' => 
            array (
              'container' => 'MDP\\Container\\Container',
              'request' => 'MDP\\Http\\Request',
              'response' => 'MDP\\Http\\Response',
              'router' => 'MDP\\Router\\Router',
              'routedefinition' => 'MDP\\Router\\RouteDefinition',
              'mockedservice' => 'MDP\\Test\\Router\\MockedService\\MockedService',
              'mockedserviceapi' => 'MDP\\Test\\Router\\MockedService\\MockedServiceApi',
              'testcase' => 'PHPUnit\\Framework\\TestCase',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testBasicGetRequest',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Test basic GET request
     */',
             'namespace' => 'MDP\\Test\\Router',
             'uses' => 
            array (
              'container' => 'MDP\\Container\\Container',
              'request' => 'MDP\\Http\\Request',
              'response' => 'MDP\\Http\\Response',
              'router' => 'MDP\\Router\\Router',
              'routedefinition' => 'MDP\\Router\\RouteDefinition',
              'mockedservice' => 'MDP\\Test\\Router\\MockedService\\MockedService',
              'mockedserviceapi' => 'MDP\\Test\\Router\\MockedService\\MockedServiceApi',
              'testcase' => 'PHPUnit\\Framework\\TestCase',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testNotFoundRoute',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Test 404 Not Found
     */',
             'namespace' => 'MDP\\Test\\Router',
             'uses' => 
            array (
              'container' => 'MDP\\Container\\Container',
              'request' => 'MDP\\Http\\Request',
              'response' => 'MDP\\Http\\Response',
              'router' => 'MDP\\Router\\Router',
              'routedefinition' => 'MDP\\Router\\RouteDefinition',
              'mockedservice' => 'MDP\\Test\\Router\\MockedService\\MockedService',
              'mockedserviceapi' => 'MDP\\Test\\Router\\MockedService\\MockedServiceApi',
              'testcase' => 'PHPUnit\\Framework\\TestCase',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testRouteWithParameters',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Test route with parameters
     */',
             'namespace' => 'MDP\\Test\\Router',
             'uses' => 
            array (
              'container' => 'MDP\\Container\\Container',
              'request' => 'MDP\\Http\\Request',
              'response' => 'MDP\\Http\\Response',
              'router' => 'MDP\\Router\\Router',
              'routedefinition' => 'MDP\\Router\\RouteDefinition',
              'mockedservice' => 'MDP\\Test\\Router\\MockedService\\MockedService',
              'mockedserviceapi' => 'MDP\\Test\\Router\\MockedService\\MockedServiceApi',
              'testcase' => 'PHPUnit\\Framework\\TestCase',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testPostRequest',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Test POST request
     */',
             'namespace' => 'MDP\\Test\\Router',
             'uses' => 
            array (
              'container' => 'MDP\\Container\\Container',
              'request' => 'MDP\\Http\\Request',
              'response' => 'MDP\\Http\\Response',
              'router' => 'MDP\\Router\\Router',
              'routedefinition' => 'MDP\\Router\\RouteDefinition',
              'mockedservice' => 'MDP\\Test\\Router\\MockedService\\MockedService',
              'mockedserviceapi' => 'MDP\\Test\\Router\\MockedService\\MockedServiceApi',
              'testcase' => 'PHPUnit\\Framework\\TestCase',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testPutRequest',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Test PUT request
     */',
             'namespace' => 'MDP\\Test\\Router',
             'uses' => 
            array (
              'container' => 'MDP\\Container\\Container',
              'request' => 'MDP\\Http\\Request',
              'response' => 'MDP\\Http\\Response',
              'router' => 'MDP\\Router\\Router',
              'routedefinition' => 'MDP\\Router\\RouteDefinition',
              'mockedservice' => 'MDP\\Test\\Router\\MockedService\\MockedService',
              'mockedserviceapi' => 'MDP\\Test\\Router\\MockedService\\MockedServiceApi',
              'testcase' => 'PHPUnit\\Framework\\TestCase',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testPatchRequest',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Test PATCH request
     */',
             'namespace' => 'MDP\\Test\\Router',
             'uses' => 
            array (
              'container' => 'MDP\\Container\\Container',
              'request' => 'MDP\\Http\\Request',
              'response' => 'MDP\\Http\\Response',
              'router' => 'MDP\\Router\\Router',
              'routedefinition' => 'MDP\\Router\\RouteDefinition',
              'mockedservice' => 'MDP\\Test\\Router\\MockedService\\MockedService',
              'mockedserviceapi' => 'MDP\\Test\\Router\\MockedService\\MockedServiceApi',
              'testcase' => 'PHPUnit\\Framework\\TestCase',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testDeleteRequest',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Test DELETE request
     */',
             'namespace' => 'MDP\\Test\\Router',
             'uses' => 
            array (
              'container' => 'MDP\\Container\\Container',
              'request' => 'MDP\\Http\\Request',
              'response' => 'MDP\\Http\\Response',
              'router' => 'MDP\\Router\\Router',
              'routedefinition' => 'MDP\\Router\\RouteDefinition',
              'mockedservice' => 'MDP\\Test\\Router\\MockedService\\MockedService',
              'mockedserviceapi' => 'MDP\\Test\\Router\\MockedService\\MockedServiceApi',
              'testcase' => 'PHPUnit\\Framework\\TestCase',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testRouteParametersExtracted',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Test that route parameters are accessible
     */',
             'namespace' => 'MDP\\Test\\Router',
             'uses' => 
            array (
              'container' => 'MDP\\Container\\Container',
              'request' => 'MDP\\Http\\Request',
              'response' => 'MDP\\Http\\Response',
              'router' => 'MDP\\Router\\Router',
              'routedefinition' => 'MDP\\Router\\RouteDefinition',
              'mockedservice' => 'MDP\\Test\\Router\\MockedService\\MockedService',
              'mockedserviceapi' => 'MDP\\Test\\Router\\MockedService\\MockedServiceApi',
              'testcase' => 'PHPUnit\\Framework\\TestCase',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testListRoutes',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Test listing routes for debugging
     */',
             'namespace' => 'MDP\\Test\\Router',
             'uses' => 
            array (
              'container' => 'MDP\\Container\\Container',
              'request' => 'MDP\\Http\\Request',
              'response' => 'MDP\\Http\\Response',
              'router' => 'MDP\\Router\\Router',
              'routedefinition' => 'MDP\\Router\\RouteDefinition',
              'mockedservice' => 'MDP\\Test\\Router\\MockedService\\MockedService',
              'mockedserviceapi' => 'MDP\\Test\\Router\\MockedService\\MockedServiceApi',
              'testcase' => 'PHPUnit\\Framework\\TestCase',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testUrlGeneration',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Test URL generation with reverse routing
     */',
             'namespace' => 'MDP\\Test\\Router',
             'uses' => 
            array (
              'container' => 'MDP\\Container\\Container',
              'request' => 'MDP\\Http\\Request',
              'response' => 'MDP\\Http\\Response',
              'router' => 'MDP\\Router\\Router',
              'routedefinition' => 'MDP\\Router\\RouteDefinition',
              'mockedservice' => 'MDP\\Test\\Router\\MockedService\\MockedService',
              'mockedserviceapi' => 'MDP\\Test\\Router\\MockedService\\MockedServiceApi',
              'testcase' => 'PHPUnit\\Framework\\TestCase',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testRequestQueryParameters',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Test request with query parameters
     */',
             'namespace' => 'MDP\\Test\\Router',
             'uses' => 
            array (
              'container' => 'MDP\\Container\\Container',
              'request' => 'MDP\\Http\\Request',
              'response' => 'MDP\\Http\\Response',
              'router' => 'MDP\\Router\\Router',
              'routedefinition' => 'MDP\\Router\\RouteDefinition',
              'mockedservice' => 'MDP\\Test\\Router\\MockedService\\MockedService',
              'mockedserviceapi' => 'MDP\\Test\\Router\\MockedService\\MockedServiceApi',
              'testcase' => 'PHPUnit\\Framework\\TestCase',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        12 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testRequestJsonBody',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Test request JSON body parsing
     */',
             'namespace' => 'MDP\\Test\\Router',
             'uses' => 
            array (
              'container' => 'MDP\\Container\\Container',
              'request' => 'MDP\\Http\\Request',
              'response' => 'MDP\\Http\\Response',
              'router' => 'MDP\\Router\\Router',
              'routedefinition' => 'MDP\\Router\\RouteDefinition',
              'mockedservice' => 'MDP\\Test\\Router\\MockedService\\MockedService',
              'mockedserviceapi' => 'MDP\\Test\\Router\\MockedService\\MockedServiceApi',
              'testcase' => 'PHPUnit\\Framework\\TestCase',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        13 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testResponseHeaders',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Test response headers
     */',
             'namespace' => 'MDP\\Test\\Router',
             'uses' => 
            array (
              'container' => 'MDP\\Container\\Container',
              'request' => 'MDP\\Http\\Request',
              'response' => 'MDP\\Http\\Response',
              'router' => 'MDP\\Router\\Router',
              'routedefinition' => 'MDP\\Router\\RouteDefinition',
              'mockedservice' => 'MDP\\Test\\Router\\MockedService\\MockedService',
              'mockedserviceapi' => 'MDP\\Test\\Router\\MockedService\\MockedServiceApi',
              'testcase' => 'PHPUnit\\Framework\\TestCase',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        14 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testCorsHeaders',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Test CORS response headers
     */',
             'namespace' => 'MDP\\Test\\Router',
             'uses' => 
            array (
              'container' => 'MDP\\Container\\Container',
              'request' => 'MDP\\Http\\Request',
              'response' => 'MDP\\Http\\Response',
              'router' => 'MDP\\Router\\Router',
              'routedefinition' => 'MDP\\Router\\RouteDefinition',
              'mockedservice' => 'MDP\\Test\\Router\\MockedService\\MockedService',
              'mockedserviceapi' => 'MDP\\Test\\Router\\MockedService\\MockedServiceApi',
              'testcase' => 'PHPUnit\\Framework\\TestCase',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        15 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testSecurityHeaders',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Test security headers
     */',
             'namespace' => 'MDP\\Test\\Router',
             'uses' => 
            array (
              'container' => 'MDP\\Container\\Container',
              'request' => 'MDP\\Http\\Request',
              'response' => 'MDP\\Http\\Response',
              'router' => 'MDP\\Router\\Router',
              'routedefinition' => 'MDP\\Router\\RouteDefinition',
              'mockedservice' => 'MDP\\Test\\Router\\MockedService\\MockedService',
              'mockedserviceapi' => 'MDP\\Test\\Router\\MockedService\\MockedServiceApi',
              'testcase' => 'PHPUnit\\Framework\\TestCase',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        16 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testJsonResponse',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Test JSON response
     */',
             'namespace' => 'MDP\\Test\\Router',
             'uses' => 
            array (
              'container' => 'MDP\\Container\\Container',
              'request' => 'MDP\\Http\\Request',
              'response' => 'MDP\\Http\\Response',
              'router' => 'MDP\\Router\\Router',
              'routedefinition' => 'MDP\\Router\\RouteDefinition',
              'mockedservice' => 'MDP\\Test\\Router\\MockedService\\MockedService',
              'mockedserviceapi' => 'MDP\\Test\\Router\\MockedService\\MockedServiceApi',
              'testcase' => 'PHPUnit\\Framework\\TestCase',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        17 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testDebugMode',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Test debug mode
     */',
             'namespace' => 'MDP\\Test\\Router',
             'uses' => 
            array (
              'container' => 'MDP\\Container\\Container',
              'request' => 'MDP\\Http\\Request',
              'response' => 'MDP\\Http\\Response',
              'router' => 'MDP\\Router\\Router',
              'routedefinition' => 'MDP\\Router\\RouteDefinition',
              'mockedservice' => 'MDP\\Test\\Router\\MockedService\\MockedService',
              'mockedserviceapi' => 'MDP\\Test\\Router\\MockedService\\MockedServiceApi',
              'testcase' => 'PHPUnit\\Framework\\TestCase',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
); },
];
