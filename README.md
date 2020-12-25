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
