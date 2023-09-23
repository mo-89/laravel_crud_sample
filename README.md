

## 開発環境のAPIにpostmanでリクエストする方法

GET以外はCSRF対策により、419 Page requiredになる

### Edit app/Http/Middleware/VerifyCsrfToken.php
protected $except にリクエストしたいAPIのrouteを追加
'*'でも可

[Laravel docs csrf-excluding-uris](https://laravel.com/docs/8.x/csrf#csrf-excluding-uris)

※　この方法は開発環境のみに限定すること

#### index 
GET http://localhost/api/testers

#### store
POST http://localhost/api/testers
```
# body raw JSON
{
  "name": "John Doe",
  "memo": "Sample Memo"
}
```
#### update 
http://localhost/api/testers/{id}
```
{
  "name": "John Doe Updated",
  "memo": "Updated Memo"
}
```

#### delete 
http://localhost/api/testers/{id}
