# UnivaPay-for-EC-CUBE4

参考ソースコード  
https://github.com/EC-CUBE/sample-payment-plugin

参考文献  
https://qiita.com/haruna-nagayoshi/items/27108c75eaf9511f3524  
https://qiita.com/yoshiharu-semachi/items/03817d6dd883b000348f

UnivaPayドキュメント  
https://docs.gyro-n.money/guides/widget-javascript/  
https://github.com/univapay/univapay-php-sdk

検証環境は下記参照  
https://github.com/univapaycast/EC-CUBE4-for-UnivaPay

その他手順
- application tokenを店舗限定で発行
- /admin/univapay/configにて設定
- webhookを店舗限定で/uniapay/hookにサブスクの成功と失敗にチェックを入れて作成
