<?php

declare(strict_types=1);

return [

    /*
    |--------------------------------------------------------------------------
    | Default Preset
    |--------------------------------------------------------------------------
    |
    | This option controls the default preset that will be used by PHP Insights
    | to make your code reliable, simple, and clean. However, you can always
    | adjust the `Metrics` and `Insights` below in this configuration file.
    |
    | Supported: "default", "laravel", "symfony", "magento2", "drupal"
    |
    */

    'preset' => 'laravel',

    /*
    |--------------------------------------------------------------------------
    | IDE
    |--------------------------------------------------------------------------
    |
    | This options allow to add hyperlinks in your terminal to quickly open
    | files in your favorite IDE while browsing your PhpInsights report.
    |
    | Supported: "textmate", "macvim", "emacs", "sublime", "phpstorm",
    | "atom", "vscode".
    |
    | If you have another IDE that is not in this list but which provide an
    | url-handler, you could fill this config with a pattern like this:
    |
    | myide://open?url=file://%f&line=%l
    |
    */

    'ide' => 'vscode',

    /*
    |--------------------------------------------------------------------------
    | Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may adjust all the various `Insights` that will be used by PHP
    | Insights. You can either add, remove or configure `Insights`. Keep in
    | mind, that all added `Insights` must belong to a specific `Metric`.
    |
    */

    'exclude' => [
        'vendor'
    ],

    'add' => [
        //  ExampleMetric::class => [
        //      ExampleInsight::class,
        //  ]
    ],

    'remove' => [

        // PHPファイル、クラス
        // PHP_CodeSniffer\Standards\Generic\Sniffs\CodeAnalysis\EmptyPHPStatementSniff::class, // 空 PHP
        // PHP_CodeSniffer\Standards\Generic\Sniffs\CodeAnalysis\EmptyStatementSniff::class, // 空
        // PHP_CodeSniffer\Standards\PSR2\Sniffs\Methods\FunctionClosingBraceSniff::class, // 関数の閉じ{}
        // PHP_CodeSniffer\Standards\PSR2\Sniffs\Files\ClosingTagSniff::class, // PHP 終了タグ
        // PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\DisallowShortOpenTagSniff::class, // PHP 短縮開始タグ
        // PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\DisallowAlternativePHPTagsSniff::class, // PHP 代替タグ
        // PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\CharacterBeforePHPOpeningTagSniff::class, // <?php> 前のタグ
        // PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\BacktickOperatorSniff::class, // バッククウォート
        // PHP_CodeSniffer\Standards\PSR2\Sniffs\Files\EndFileNewlineSniff::class, // ファイル末尾改行
        // PHP_CodeSniffer\Standards\PSR1\Sniffs\Files\SideEffectsSniff::class, // 副作用を起こさない
        // PHP_CodeSniffer\Standards\Generic\Sniffs\VersionControl\GitMergeConflictSniff::class, // コンフリクト検知
        // PHP_CodeSniffer\Standards\Generic\Sniffs\Files\ByteOrderMarkSniff::class, // BOM検知
        // PHP_CodeSniffer\Standards\Generic\Sniffs\Files\LineEndingsSniff::class, // 改行コード
        // PHP_CodeSniffer\Standards\PSR12\Sniffs\Classes\ClassInstantiationSniff::class, // クラスの()表記
        // PHP_CodeSniffer\Standards\PSR1\Sniffs\Classes\ClassDeclarationSniff::class, // クラス宣言
        // PHP_CodeSniffer\Standards\PSR2\Sniffs\Classes\PropertyDeclarationSniff::class, // プロパティ宣言
        // PHP_CodeSniffer\Standards\Generic\Sniffs\Formatting\DisallowMultipleStatementsSniff::class, // 1行1宣言
        // PHP_CodeSniffer\Standards\Generic\Sniffs\Files\OneClassPerFileSniff::class, // 1ファイル1クラス
        // PHP_CodeSniffer\Standards\Generic\Sniffs\Files\OneInterfacePerFileSniff::class, // 1ファイル1インターフェイス
        // PHP_CodeSniffer\Standards\Generic\Sniffs\Files\OneTraitPerFileSniff::class, // 1ファイル1トレイト
        // PhpCsFixer\Fixer\Operator\NewWithBracesFixer::class, // new インスタンスには {}をつける
        // PhpCsFixer\Fixer\ControlStructure\NoAlternativeSyntaxFixer::class, // {} を使う代替構文
        // PhpCsFixer\Fixer\Basic\EncodingFixer::class, // UTF-8 BOM 無し
        // PhpCsFixer\Fixer\PhpTag\FullOpeningTagFixer::class, // PHP 開始タグ
        // PhpCsFixer\Fixer\ClassNotation\SingleClassElementPerStatementFixer::class, // 1行複数文の禁止
        // NunoMaduro\PhpInsights\Domain\Insights\SyntaxCheck::class, // PHP Parallel Lint を使う
        // NunoMaduro\PhpInsights\Domain\Insights\ForbiddenNormalClasses::class, // 抽象クラス or Final クラスのみ許容
        // SlevomatCodingStandard\Sniffs\Functions\FunctionLengthSniff::class, // メソッド長さ上限

        // 空白、改行
        // PhpCsFixer\Fixer\ClassNotation\NoBlankLinesAfterClassOpeningFixer::class, // PHP 開始タグ後の改行
        // PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\LanguageConstructSpacingSniff::class, // 言語構成要素
        // PhpCsFixer\Fixer\FunctionNotation\NoSpacesAfterFunctionNameFixer::class, // 関数の後ろスペース
        // PHP_CodeSniffer\Standards\Generic\Sniffs\Arrays\ArrayIndentSniff::class, // 配列インデント
        // PHP_CodeSniffer\Standards\PEAR\Sniffs\WhiteSpace\ObjectOperatorIndentSniff::class, // オブジェクト演算子のインデント
        // ObjectCalisthenics\Sniffs\NamingConventions\ElementNameMinimalLengthSniff::class, // 長さ
        // PHP_CodeSniffer\Standards\PSR2\Sniffs\ControlStructures\SwitchDeclarationSniff::class, // switch 文のインデント
        // PHP_CodeSniffer\Standards\PEAR\Sniffs\WhiteSpace\ScopeClosingBraceSniff::class, // {} の配置
        // PhpCsFixer\Fixer\Basic\BracesFixer::class, // {} 前後の改行
        // SlevomatCodingStandard\Sniffs\PHP\UselessSemicolonSniff::class, // 不要なセミコロン
        // PhpCsFixer\Fixer\LanguageConstruct\DeclareEqualNormalizeFixer::class, //
        // PhpCsFixer\Fixer\ArrayNotation\NoMultilineWhitespaceAroundDoubleArrowFixer::class, // => 前後のスペース
        // PhpCsFixer\Fixer\Operator\ObjectOperatorWithoutWhitespaceFixer::class, // -> 前後のスペース
        // PhpCsFixer\Fixer\Operator\TernaryOperatorSpacesFixer::class, // 三項演算子前後のスペース
        // PHP_CodeSniffer\Standards\Generic\Sniffs\Functions\FunctionCallArgumentSpacingSniff::class, // 関数
        // PHP_CodeSniffer\Standards\Generic\Sniffs\Formatting\SpaceAfterCastSniff::class, // cast の後ろスペース
        // PHP_CodeSniffer\Standards\Generic\Sniffs\WhiteSpace\ArbitraryParenthesesSpacingSniff::class, // カッコ内スペース
        // PHP_CodeSniffer\Standards\Generic\Sniffs\Files\LineLengthSniff::class, // 1行の長さ
        // PHP_CodeSniffer\Standards\Generic\Sniffs\WhiteSpace\DisallowTabIndentSniff::class, // タブによるインデント禁止
        // PHP_CodeSniffer\Standards\Generic\Sniffs\WhiteSpace\IncrementDecrementSpacingSniff::class, // ++ -- 演算子のスペース
        // PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\LanguageConstructSpacingSniff::class, // 言語構成要素
        // SlevomatCodingStandard\Sniffs\Operators\SpreadOperatorSpacingSniff::class, // スプレッド演算子のスペース
        // SlevomatCodingStandard\Sniffs\Namespaces\NamespaceSpacingSniff::class, // name space 前後の改行
        // SlevomatCodingStandard\Sniffs\TypeHints\ParameterTypeHintSpacingSniff::class, // パラメータのタイプヒントのスペース
        // SlevomatCodingStandard\Sniffs\TypeHints\ReturnTypeHintSpacingSniff::class, // 返り値のタイプヒントのスペース
        // PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\SuperfluousWhitespaceSniff::class, // 不要な空白
        // PhpCsFixer\Fixer\ArrayNotation\NoWhitespaceBeforeCommaInArrayFixer::class, // 配列カンマの前はスペース無し
        // PhpCsFixer\Fixer\CastNotation\CastSpacesFixer::class, // cast と変数間のスペース設定
        // PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer::class, // クラス周りのスペース、改行設定
        // PhpCsFixer\Fixer\Comment\NoTrailingWhitespaceInCommentFixer::class, // コメント後のスペース除去
        // PhpCsFixer\Fixer\ControlStructure\SwitchCaseSpaceFixer::class, // switch文スペース
        // PhpCsFixer\Fixer\FunctionNotation\FunctionDeclarationFixer::class, // 関数宣言後のスペース
        // PhpCsFixer\Fixer\FunctionNotation\FunctionTypehintSpaceFixer::class, // パラメータとタイプヒント間のスペース
        // PhpCsFixer\Fixer\Operator\BinaryOperatorSpacesFixer::class, // 二項演算子（=, =>, +, -, ... etc）のスペース
        // PhpCsFixer\Fixer\Semicolon\NoSinglelineWhitespaceBeforeSemicolonsFixer::class, // 文末セミコロン前のスペース
        // PhpCsFixer\Fixer\Whitespace\MethodChainingIndentationFixer::class, // メソッドチェインのインデント
        // PhpCsFixer\Fixer\Whitespace\NoExtraBlankLinesFixer::class, // 不要な連続改行
        // PhpCsFixer\Fixer\Whitespace\NoSpacesAroundOffsetFixer::class, // オフセット{}周囲のスペース
        // PhpCsFixer\Fixer\Whitespace\NoSpacesInsideParenthesisFixer::class, // () 前後のスペース
        // PhpCsFixer\Fixer\Whitespace\NoTrailingWhitespaceFixer::class, // 行末のスペース
        // PhpCsFixer\Fixer\Whitespace\NoWhitespaceInBlankLineFixer::class, // 改行のスペース
        // PhpCsFixer\Fixer\Whitespace\SingleBlankLineAtEofFixer::class, // ファイル末尾の改行
        // PhpCsFixer\Fixer\FunctionNotation\MethodArgumentSpaceFixer::class, // 引数のスペース


        // namespace use 文
        // SlevomatCodingStandard\Sniffs\Namespaces\UseFromSameNamespaceSniff::class, // 同一ネームスペース
        // SlevomatCodingStandard\Sniffs\Namespaces\RequireOneNamespaceInFileSniff::class, // 1ファイルに1つのネームスペース
        // SlevomatCodingStandard\Sniffs\Namespaces\AlphabeticallySortedUsesSniff::class, // use文のアルファベット順
        // SlevomatCodingStandard\Sniffs\Namespaces\UnusedUsesSniff::class, // 不要なuse文
        // SlevomatCodingStandard\Sniffs\Namespaces\UseDoesNotStartWithBackslashSniff::class, // use文バックスラッシュ開始禁止
        // SlevomatCodingStandard\Sniffs\Namespaces\UseSpacingSniff::class, // use文前後のスペース
        // SlevomatCodingStandard\Sniffs\Namespaces\NamespaceDeclarationSniff::class, // ネームスペースの構文
        // PhpCsFixer\Fixer\Import\OrderedImportsFixer::class, // use文のアルファベット順
        // PhpCsFixer\Fixer\Import\SingleImportPerStatementFixer::class, // use 1つにつきインポート1つ

        // visibility
        // SlevomatCodingStandard\Sniffs\Classes\ClassConstantVisibilitySniff::class,
        // SlevomatCodingStandard\Sniffs\Classes\ForbiddenPublicPropertySniff::class,
        // SlevomatCodingStandard\Sniffs\Variables\UnusedVariableSniff::class,
        // PhpCsFixer\Fixer\ClassNotation\ProtectedToPrivateFixer::class,
        // PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer::class,

        // 文字列内変数
        // PhpCsFixer\Fixer\StringNotation\SingleQuoteFixer::class, // シングルクォーテーション利用
        // PhpCsFixer\Fixer\StringNotation\ExplicitStringVariableFixer::class, // ダブルクォーテーション内変数を明示する

        // 配列
        // PhpCsFixer\Fixer\ArrayNotation\NormalizeIndexBraceFixer::class, // 配列要素は[]を使う
        // PHP_CodeSniffer\Standards\Generic\Sniffs\Arrays\DisallowLongArraySyntaxSniff::class, // array() ではなく [] を使う
        // SlevomatCodingStandard\Sniffs\PHP\ShortListSniff::class, // list() ではなく [] を使う
        // SlevomatCodingStandard\Sniffs\Arrays\TrailingArrayCommaSniff::class, // 配列のトレイリングカンマ

        // switch 文
        // PhpCsFixer\Fixer\ControlStructure\SwitchCaseSemicolonToColonFixer::class, // ; ではなく : を使う
        // PHP_CodeSniffer\Standards\PSR2\Sniffs\ControlStructures\SwitchDeclarationSniff::class, // switch
        // SlevomatCodingStandard\Sniffs\ControlStructures\DisallowContinueWithoutIntegerOperandInSwitchSniff::class, // 整数オペランドなしのcontinue

        // 大文字小文字
        // PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\LowerCaseConstantSniff::class, // true, false, null は小文字を使う
        // PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\LowerCaseTypeSniff::class, // PHP 登録文字は小文字を使う
        // PHP_CodeSniffer\Standards\PSR1\Sniffs\Methods\CamelCapsMethodNameSniff::class, // メソッド名はキャメルケースを使う
        // PHP_CodeSniffer\Standards\Generic\Sniffs\NamingConventions\UpperCaseConstantNameSniff::class, // 定数名は全て大文字
        // PhpCsFixer\Fixer\Casing\LowercaseStaticReferenceFixer::class, // self, static, parent は小文字を使う
        // PhpCsFixer\Fixer\Casing\MagicConstantCasingFixer::class, // マジック定数は正しいケースを使う（大文字）
        // PhpCsFixer\Fixer\Casing\MagicMethodCasingFixer::class, // マジックメソッドは正しいケースを使う（小文字）
        // PhpCsFixer\Fixer\Casing\NativeFunctionCasingFixer::class, // PHP のネイティブ関数は正しいケースを使う
        // PHP_CodeSniffer\Standards\Squiz\Sniffs\Classes\ValidClassNameSniff::class, // クラス名は大文字から

        // 不要コード
        // SlevomatCodingStandard\Sniffs\Variables\UselessVariableSniff::class, // variable
        // SlevomatCodingStandard\Sniffs\Functions\UnusedInheritedVariablePassedToClosureSniff::class, // クロージャーのuseで渡される変数
        // SlevomatCodingStandard\Sniffs\Functions\UselessParameterDefaultValueSniff::class, // 無意味なパラメーターデフォルト値
        // SlevomatCodingStandard\Sniffs\Functions\UnusedParameterSniff::class, // パラメーター
        // SlevomatCodingStandard\Sniffs\Namespaces\UselessAliasSniff::class, // エイリアス
        // PHP_CodeSniffer\Standards\PSR12\Sniffs\Namespaces\CompoundNamespaceDepthSniff::class, // 複合名前空間
        // PHP_CodeSniffer\Standards\Generic\Sniffs\CodeAnalysis\UselessOverridingMethodSniff::class, // 無意味なオーバーライド
        // SlevomatCodingStandard\Sniffs\Classes\UselessLateStaticBindingSniff::class, // 不要な late 静的バインディング

        // 演算子
        // SlevomatCodingStandard\Sniffs\ControlStructures\DisallowShortTernaryOperatorSniff::class,
        // SlevomatCodingStandard\Sniffs\ControlStructures\DisallowYodaComparisonSniff::class,
        // SlevomatCodingStandard\Sniffs\Operators\RequireCombinedAssignmentOperatorSniff::class,
        // SlevomatCodingStandard\Sniffs\Operators\RequireOnlyStandaloneIncrementAndDecrementOperatorsSniff::class,
        // PhpCsFixer\Fixer\Operator\TernaryToNullCoalescingFixer::class, // null合体演算子 ??
        // PhpCsFixer\Fixer\Operator\StandardizeNotEqualsFixer::class, // <> ではなく != を使う
        // PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\BacktickOperatorSniff::class, // `` 利用禁止

        // 括弧の使い方
        // SlevomatCodingStandard\Sniffs\ControlStructures\LanguageConstructWithParenthesesSniff::class,
        // SlevomatCodingStandard\Sniffs\PHP\UselessParenthesesSniff::class, // 不要な括弧
        // PhpCsFixer\Fixer\ControlStructure\NoUnneededControlParenthesesFixer::class, //

        // if else の使い方
        // PHP_CodeSniffer\Standards\Generic\Sniffs\CodeAnalysis\UnconditionalIfStatementSniff::class,
        // PhpCsFixer\Fixer\ControlStructure\NoUselessElseFixer::class, // else
        // PhpCsFixer\Fixer\ControlStructure\NoSuperfluousElseifFixer::class, // elseif
        // PHP_CodeSniffer\Standards\PSR2\Sniffs\ControlStructures\ElseIfDeclarationSniff::class, // else if を使わない

        // 不達ロジック
        // SlevomatCodingStandard\Sniffs\Exceptions\DeadCatchSniff::class,
        // SlevomatCodingStandard\Sniffs\Classes\UnusedPrivateElementsSniff::class,
        // NunoMaduro\PhpInsights\Domain\Sniffs\ForbiddenSetterSniff::class,
        // PHP_CodeSniffer\Standards\Generic\Sniffs\CodeAnalysis\UnnecessaryFinalModifierSniff::class,

        // refactor
        // SlevomatCodingStandard\Sniffs\Classes\ModernClassNameReferenceSniff::class, // クラス名の取得は ::class を使う
        // PHP_CodeSniffer\Standards\Generic\Sniffs\CodeAnalysis\ForLoopShouldBeWhileLoopSniff::class, // loop 処理
        // PHP_CodeSniffer\Standards\Generic\Sniffs\CodeAnalysis\JumbledIncrementerSniff::class, // ネストループ内インクリメンター
        // PHP_CodeSniffer\Standards\Generic\Sniffs\CodeAnalysis\UnconditionalIfStatementSniff::class, // boolean のみの定数
        // PhpCsFixer\Fixer\FunctionNotation\CombineNestedDirnameFixer::class, // ネストパラメータ
        // PhpCsFixer\Fixer\ReturnNotation\ReturnAssignmentFixer::class, // 直接 return
        // SlevomatCodingStandard\Sniffs\PHP\OptimizedFunctionsWithoutUnpackingSniff::class, // 内部関数最適化
        // PHP_CodeSniffer\Standards\Generic\Sniffs\Strings\UnnecessaryStringConcatSniff::class, // 文字列連結

        // 禁止
        // PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\DeprecatedFunctionsSniff::class, // PHP 非推奨関数
        // PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\EvalSniff::class,
        // SlevomatCodingStandard\Sniffs\ControlStructures\DisallowEmptySniff::class,
        // NunoMaduro\PhpInsights\Domain\Insights\ForbiddenDefineFunctions::class, // define 関数
        // PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\ForbiddenFunctionsSniff::class, // エイリアス関数
        // PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\GlobalKeywordSniff::class, // キーワード global
        // NunoMaduro\PhpInsights\Domain\Insights\ForbiddenGlobals::class, // グローバルアクセス
        // PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\SAPIUsageSniff::class, // php_sapi_name() を使わない
        // NunoMaduro\PhpInsights\Domain\Insights\ForbiddenDefineGlobalConstants::class, // グローバル定義
        // NunoMaduro\PhpInsights\Domain\Insights\ForbiddenTraits::class, // trait の利用
        // SlevomatCodingStandard\Sniffs\Classes\DisallowLateStaticBindingForConstantsSniff::class, // 定数のLast静的バインディング禁止
        // PHP_CodeSniffer\Standards\Generic\Sniffs\CodeAnalysis\ForLoopWithTestFunctionCallSniff::class, // loop 内テスト関数呼び出し禁止
        // PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\DiscourageGotoSniff::class, // GOTO 禁止

        // コメント
        // PhpCsFixer\Fixer\Comment\MultilineCommentOpeningClosingFixer::class, // DocBlock
        // PhpCsFixer\Fixer\Comment\NoEmptyCommentFixer::class, // 空白コメント除去
        // PHP_CodeSniffer\Standards\Generic\Sniffs\Commenting\FixmeSniff::class, // FIXME コメント検知
        // PHP_CodeSniffer\Standards\Generic\Sniffs\Commenting\TodoSniff::class, // TODO コメント検知
        // PhpCsFixer\Fixer\ControlStructure\NoBreakCommentFixer::class, // no break コメント追加
        // PhpCsFixer\Fixer\Phpdoc\AlignMultilineCommentFixer::class, // 複数行コメントの整列
        // PhpCsFixer\Fixer\Phpdoc\PhpdocTrimFixer::class, // Doc コメントの前後行
        // PhpCsFixer\Fixer\Phpdoc\PhpdocVarAnnotationCorrectOrderFixer::class, // Doc コメントの順番
        // PhpCsFixer\Fixer\Phpdoc\PhpdocIndentFixer::class, // Doc コメントのインデント
        // PhpCsFixer\Fixer\Phpdoc\PhpdocInlineTagFixer::class, // Doc コメントのインラインタグ

        // code analyze
        // PHP_CodeSniffer\Standards\Zend\Sniffs\Debug\CodeAnalyzerSniff::class, // Zend code analyzer
        // PHP_CodeSniffer\Standards\Generic\Sniffs\ControlStructures\InlineControlStructureSniff::class, // 1行
        // PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\NoSilencedErrorsSniff::class, // & 開始行
        // SlevomatCodingStandard\Sniffs\Arrays\DisallowImplicitArrayCreationSniff::class, // 暗黙的な配列作成
        // SlevomatCodingStandard\Sniffs\ControlStructures\AssignmentInConditionSniff::class, // 条件割当
        // SlevomatCodingStandard\Sniffs\Variables\DuplicateAssignmentToVariableSniff::class, // 2重代入
        // PHP_CodeSniffer\Standards\Generic\Sniffs\Functions\CallTimePassByReferenceSniff::class, // 関数の参照渡し
        // SlevomatCodingStandard\Sniffs\Functions\StaticClosureSniff::class, // staticなクロージャー

        // 型の記載
        // SlevomatCodingStandard\Sniffs\PHP\TypeCastSniff::class,
        // SlevomatCodingStandard\Sniffs\TypeHints\NullableTypeForNullDefaultValueSniff::class, // nullable検知
        // SlevomatCodingStandard\Sniffs\TypeHints\DisallowArrayTypeHintSyntaxSniff::class, // [] ではなく array<> を利用
        // SlevomatCodingStandard\Sniffs\TypeHints\DisallowMixedTypeHintSniff::class, // mix 型の禁止
        // SlevomatCodingStandard\Sniffs\TypeHints\LongTypeHintsSniff::class, // Doc コメントでは省略形のタイプヒントを利用
        // SlevomatCodingStandard\Sniffs\TypeHints\NullTypeHintOnLastPositionSniff::class, // |null を最後に記載
        // SlevomatCodingStandard\Sniffs\TypeHints\TypeHintDeclarationSniff::class,
        // SlevomatCodingStandard\Sniffs\TypeHints\UselessConstantTypeHintSniff::class, // 定数の無駄な型
        // SlevomatCodingStandard\Sniffs\Commenting\InlineDocCommentDeclarationSniff::class, // @var コメント検知
        // SlevomatCodingStandard\Sniffs\Commenting\UselessFunctionDocCommentSniff::class, // 情報量が増えていないDocコメント削除
        // SlevomatCodingStandard\Sniffs\Commenting\UselessInheritDocCommentSniff::class, // {@inheritDoc} だけのコメント
        // SlevomatCodingStandard\Sniffs\Commenting\DocCommentSpacingSniff::class, // Doc コメントの改行設定
        // PhpCsFixer\Fixer\FunctionNotation\VoidReturnFixer::class, // void指定
        // PhpCsFixer\Fixer\CastNotation\NoShortBoolCastFixer::class, // (bool) !! を使わない
        // PhpCsFixer\Fixer\CastNotation\ShortScalarCastFixer::class, // int, float, string
        // PhpCsFixer\Fixer\Phpdoc\PhpdocScalarFixer::class, // boolean => bool, integer => int, real or double => float, etc...
        // PhpCsFixer\Fixer\Casing\NativeFunctionTypeDeclarationCasingFixer::class, // PHP ネイティブ関数の型
        // PHP_CodeSniffer\Standards\PSR12\Sniffs\Keywords\ShortFormTypeKeywordsSniff::class, // 省略形
        // PHP_CodeSniffer\Standards\PSR12\Sniffs\Functions\NullableTypeDeclarationSniff::class, // type hint の ?スペース

        // クラス要素の順序
        PhpCsFixer\Fixer\ClassNotation\OrderedClassElementsFixer::class,

        // デバッグ
        PhpCsFixer\Fixer\Alias\NoMixedEchoPrintFixer::class, // echo , print を使わない

        // 命名
        SlevomatCodingStandard\Sniffs\Classes\SuperfluousInterfaceNamingSniff::class, // 「Interface」
        SlevomatCodingStandard\Sniffs\Classes\SuperfluousAbstractClassNamingSniff::class, // 「Abstract」
        SlevomatCodingStandard\Sniffs\Classes\SuperfluousExceptionNamingSniff::class, //「Exception」
        SlevomatCodingStandard\Sniffs\Classes\SuperfluousTraitNamingSniff::class, // 「Trait」

        // 型指定 // 最初は実施しない方がよいかも
        PhpCsFixer\Fixer\FunctionNotation\VoidReturnFixer::class, // 返り値なしは void をつける
        SlevomatCodingStandard\Sniffs\TypeHints\DeclareStrictTypesSniff::class, // strict_type = 1 設定
        SlevomatCodingStandard\Sniffs\TypeHints\ReturnTypeHintSniff::class, // 返り値の型
        SlevomatCodingStandard\Sniffs\TypeHints\ParameterTypeHintSniff::class, // 引数の型
        SlevomatCodingStandard\Sniffs\TypeHints\PropertyTypeHintSniff::class, // プロパティの型
        SlevomatCodingStandard\Sniffs\Operators\DisallowEqualOperatorsSniff::class, // 厳密な型比較（===, !==）
        // その他
        PHP_CodeSniffer\Standards\Generic\Sniffs\Formatting\SpaceAfterNotSniff::class, // ! の後ろスペース
    ],

    'config' => [
        // 改行コード
        PHP_CodeSniffer\Standards\Generic\Sniffs\Files\LineEndingsSniff::class => [
            'eolChar' => '\n',
        ],

        // 複数行コメントの修正対象
        PhpCsFixer\Fixer\Phpdoc\AlignMultilineCommentFixer::class => [
            'comment_type' => 'phpdocs_like' // possible values ['phpdocs_only', 'phpdocs_like', 'all_multiline']
        ],

        // Doc コメントの行数設定
        SlevomatCodingStandard\Sniffs\Commenting\DocCommentSpacingSniff::class => [
            'linesCountBeforeFirstContent' => 0,
            'linesCountBetweenDescriptionAndAnnotations' => 0,
            'linesCountBetweenDifferentAnnotationsTypes' => 0,
            'linesCountBetweenAnnotationsGroups' => 0,
            'linesCountAfterLastContent' => 0,
            'annotationsGroups' => [],
        ],

        // cast と変数間のスペース数
        PhpCsFixer\Fixer\CastNotation\CastSpacesFixer::class => [
            'space' => 'none' // possible values ['single', 'none']
        ],

        // クラス内要素順序
        \PhpCsFixer\Fixer\ClassNotation\OrderedClassElementsFixer::class => [
            'order' => [ // List of strings defining order of elements.
                'use_trait',
                'constant_public',
                'constant_protected',
                'constant_private',
                'property_public',
                'property_protected',
                'property_private',
                'construct',
                'destruct',
                'magic',
                'phpunit',
                'method_public',
                'method_protected',
                'method_private',
            ],
            'sort_algorithm' => 'none' // possible values ['none', 'alpha']
        ],

        // クラスの複雑度閾値
        \NunoMaduro\PhpInsights\Domain\Insights\CyclomaticComplexityIsHigh::class => [
            'maxComplexity' => 5,
        ],

        // メソッド長さ閾値
        \SlevomatCodingStandard\Sniffs\Functions\FunctionLengthSniff::class => [
            'maxLinesLength' => 20,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Requirements
    |--------------------------------------------------------------------------
    |
    | Here you may define a level you want to reach per `Insights` category.
    | When a score is lower than the minimum level defined, then an error
    | code will be returned. This is optional and individually defined.
    |
    */

    'requirements' => [
        //        'min-quality' => 0,
        //        'min-complexity' => 0,
        //        'min-architecture' => 0,
        //        'min-style' => 0,
        //        'disable-security-check' => false,
    ],

    /*
    |--------------------------------------------------------------------------
    | Threads
    |--------------------------------------------------------------------------
    |
    | Here you may adjust how many threads (core) PHPInsights can use to perform
    | the analyse. This is optional, don't provide it and the tool will guess
    | the max core number available. This accept null value or integer > 0.
    |
    */

    'threads' => null,

];
