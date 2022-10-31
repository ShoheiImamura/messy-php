# messy-php
php の静的解析整形など

```shell
# 対象元ソースのディレクトリと並列に配置
git clone git@github.com:ShoheiImamura/messy-php.git

# ソースディレクトリを .env に設定（例： sed -e 's/sample_src/myproject/' .env.example > .env）
sed -e 's/sample_src/{target_src_dir}/' .env.example > .env

# 起動
make phptools-init

# PSR12適用確認
make psr12
# PSR12適用
make psr12-fix

# PHPInsights適用確認（./phptools/phpinsights.php に設定）
## 1グループずつルールを開放し、自動整形結果をコミットするのがオススメ
make phpinsights
# PHPInsights適用
make phpinsights-fix

# Rector適用確認（./phptools/rector.php に設定）
## 1グループずつルールを開放し、自動整形結果をコミットするのがオススメ
make rector
# Rector適用
make rector-fix
```