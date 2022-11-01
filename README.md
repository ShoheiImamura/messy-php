# messy-php-fixer

## 背景と目的

スタイルが色々と整っていない PHP のソースコードを見ると、イラっとすることがよくあります。
本来はロジックのリファクタリングに集中したいのですが、スペースや改行が統一されていなかったり、不要なコードが散乱していたりと、乱雑な記述にどうしても気を乱されてしまいます。
このプロジェクトでは、自動で乱雑な記述を一定のフォーマットに整えることにより、私たちがロジックのリファクタリングに集中できる環境をつくることを目的としています。

## できること

- PHP ソースコードの自動整形
- PHP ソースコードの採点
- ...（等々）

## 前提

- docker 環境
- PHP 7.4 以上

## クイックスタート

```shell
# 対象元のソースディレクトリの一つ上に移動
cd {target_src_dir}/../

# 対象元ソースのディレクトリと並列に本リポジトリを配置
git clone git@github.com:ShoheiImamura/messy-php-fixer.git

# ソースディレクトリ名を .env に設定（例： sed -e 's/sample_src/myproject/' .env.example > .env）
sed -e 's/sample_src/{target_src_dir}/' .env.example > .env

# （必要であれば）.envのPHPのバージョンを設定 ※デフォルトは8.0

# 起動（composer install 時にy回答する必要があるかも）
make phptools-init

# ソースコードの採点
make phpinsights

# 自動整形の適用 
make phpinsights-fix

# ソースコードの再採点
make phpinsights
```

## その他

### 自動整形の単位を小さく
`make phpinsights-fix` を実行すると、様々な変更が同時に実行されます。
稼働中のシステムにおいては小さな変更単位で commit するほうが reviewr に好まれると思われるため、以下の順に実施することをお勧めします。

```shell
# 0. phpinsights による採点
make phpinsights

# 1. PSR12 の適用確認
make psr12
# 2. PSR12 の適用
make psr12-fix
# (commit)

# 3. phpinsights の設定変更（remove 設定の PHPファイル、クラス 関連のみコメントアウト、他は全部設定する）&適用
make phpinsights-fix
# (commit)

# 4. phpinsights の設定変更（remove 設定の 空白、改行関連を上記に追加してコメントアウト）&適用
make phpinsights-fix
# (commit)

# 5. phpinsights の設定変更（remove 設定の namespace use 文関連を上記に追加してコメントアウト&適用）
make phpinsights-fix
# (commit)

# 6. ...(phpinsights の設定を型関連以外解放するまで修正 & commit を続ける)&適用 ※型関連は破壊的変更の可能性あり

# 7. rector の設定変更（set設定のDEAD_CODEを解放）&適用
make rector-fix
# 修正分を目検で確認して (commit)

# 8. rector の設定変更（set設定のCODE_QUALITYを解放）&適用
make rector-fix
# 修正分を目検で確認して (commit) ※ 破壊的な変更がある可能性あり

# 9. ...(rector の設定を開放するまで続ける)※修正分を目検で必ず確認

# 10. ソースコードの採点
make phpinsights
```

## 参考

- https://phpinsights.com/get-started.html
- https://github.com/rectorphp/rector/blob/main/docs/rector_rules_overview.md