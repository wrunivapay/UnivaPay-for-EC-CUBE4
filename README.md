# UnivaPay-for-EC-CUBE4

[![License: GPL v3](https://img.shields.io/badge/License-GPLv3-blue.svg)](https://www.gnu.org/licenses/gpl-3.0)  
EC-CUBE用のUnivaPay導入プラグイン  
UnivaPayの申し込み方法  
<https://www.univapay.com/service/credit/#12>  
最新のリリースは下記から  
<https://github.com/univapay/UnivaPay-for-EC-CUBE4/releases>

## 開発環境

### 一般向け

下記を参照にEC-CUBEを構築してください。
<https://github.com/EC-CUBE/ec-cube>

### 管理者向け

```sh
git clone https://github.com/univapaycast/UnivaPay-for-EC-CUBE4.git
cd EC-UnivaPay-for-EC-CUBE4
cp docker-compose.sample.yml docker-compose.yml
docker compose up -d
docker compose exec web sh -c "composer run-script compile && bin/console eccube:install -n"
docker compose exec web sh -c "bin/console eccube:plugin:install --code=UnivaPay && bin/console eccube:plugin:enable --code=UnivaPay"
```

#### データベース更新したとき

```sh
docker compose exec web sh -c "bin/console eccube:install -n && bin/console eccube:plugin:install --code=UnivaPay && bin/console eccube:plugin:enable --code=UnivaPay"
```

#### アップデート手順

1. composer.json内のversionを上げる
2. masterにコミット後github内でバージョンタグの作成
