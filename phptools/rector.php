<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Core\ValueObject\PhpVersion;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;
use Rector\Laravel\Set\LaravelSetList;
use Rector\Laravel\Set\LaravelLevelSetList;

return static function (RectorConfig $rectorConfig): void {
    $srcDir = $_ENV['SRC_DIR'];
    $rectorConfig->paths([__DIR__ . "/../${srcDir}",]);

    $rectorConfig->phpVersion(PhpVersion::PHP_81); // PHP バージョン

    $rectorConfig->skip([
        // 対象外ファイル
        __DIR__ . "/../${srcDir}/vendor",
        __DIR__ . "/../${srcDir}/*/vendor/**/*",

        // 対象外ルール （https://github.com/rectorphp/rector/blob/main/docs/rector_rules_overview.md）
        Rector\TypeDeclaration\Rector\FunctionLike\ParamTypeDeclarationRector::class, // 重複 Doc コメント削除
        Rector\TypeDeclaration\Rector\FunctionLike\ReturnTypeDeclarationRector::class, //
        Rector\DeadCode\Rector\ClassMethod\RemoveUselessParamTagRector::class, //
        Rector\DeadCode\Rector\ClassMethod\RemoveUselessReturnTagRector::class, //
        Rector\DeadCode\Rector\Property\RemoveUselessVarTagRector::class, //
        Rector\CodeQuality\Rector\FuncCall\SimplifyRegexPatternRector::class, // 正規表現省略形利用
    ]);

    // define sets of rules
    $rectorConfig->sets([
        SetList::DEAD_CODE,
        // SetList::CODE_QUALITY,
        // SetList::NAMING,
        // LevelSetList::UP_TO_PHP_81,
        // SetList::PHP_81,
        // LaravelSetList::LARAVEL_90,
        // LaravelLevelSetList::UP_TO_LARAVEL_90,
    ]);
};
