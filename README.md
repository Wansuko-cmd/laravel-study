<p>こちらを参考に作成</p>
<a>https://qiita.com/A-Kira/items/1c55ef689c0f91420e81</a>
<h1>使いかた</h1>
<p>プロジェクトファイル直下で<code>docker-compose up -d</code>をする（ログを見たいときは-dを外す）</p>
<p>コンテナが起動したら、以下のコマンドを実行する</p>
<p><code>docker-compose exec php bash</code></p>
<p><code>chmod -R 777 laravel/storage</code></p>
<p>以上</p>
<h1>追記</h1>
<p>composerを入れて、laravelファイル直下で以下のコマンドを実行する</p>
<p><code>composer install</code></p>
<p>これをしないと動かないため注意</p>
<h1>マイグレーション</h1>
<h3>手順</h3>
<ol>
    <li>laravelフォルダ直下で<code>php artisan make:migration 名前 --create=tableの名前</code>を実行</li>
    <li>database/migrationsにできたやつを<a>https://readouble.com/laravel/5.0/ja/schema.html</a>に従って書き換え</li>
    <li><code>docker-compose exec php bash</code>を実行</li>
    <li>laravelフォルダ直下で<code>php artisan migrate</code>を実行</li>
</ol>
<h3>確認</h3>
<ol>
    <li><code>docker exec -it db-host mysql -u root -p</code>を実行(パスワードはdocker-compose.ymlで設定したやつ)</li>
    <li><code>use データベース名;</code>を実行</li>
    <li>あとは<code>show tables;</code>なり、<code>desc テーブル名</code>なり実行する</li>
</ol>
<h3>取り消し</h3>
<code>php artisan migrate:rollback</code>を実行