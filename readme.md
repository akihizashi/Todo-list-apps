<h3 align="center">アプリご案内致します。</h3>
<h5>技術要素：</h5>
<a href="https://laravel.com/">Laravel</a>(v5.6)というPHP Frameworkでバックエンドを作りまして、<a href="http://getbootstrap.com">Bootstrap</a>(v4.1)というCSS FrameWorkでユーザーインターフェースを作りました。
<h5>アプリの機能：</h5>
<p>- ログインと会員登録</p>
<p>- TodoリストとTodo追加、さらにTodo削除のことが出来ます。</p>
<p>- 簡単な検索機能</p>
<h5>アプリの設定手順：</h5>
<p>- フォルダーをダウンロードしてから、C:\xampp\htdocsにコピーをしてください。</p>
<p>- Xamppを起動してApacheとMySQLを起動してください。</p>
<p>- Commando Promptを起動して、mysql -u root -p　でアクセスして、create database teamlab; を打って、データベース作ってください。</p>
<p>- Commando Promptで cd c:\xampp\htdocs\Todo-list-apps でフォルダーにアクセスして、php artisan migrate を打つと,データベースにテーブルを自動的に作られます。</p>
<p>- また、他のCommando Promptを起動して　php artisan serve を打つと、アプリのdevelope serverを自動的に起動されます。</p>
<p>- ブラウザを起動して　localhost:8000/login　を打つと、アプリをアクセスすることが出来ます。</p>
<h5>ファイル説明：</h5>
<p>/app: アプリのModel</p>
<p>/app/Http/Controller: アプリのController</p>
<p>/config/database.php: データベースの明細設定</p>
<p>/database/migrations: データベースのテーブル設定</p>
<p>/resource/views: アプリのTemplateやLayout</p>
<p>/.env: アプリの接続設定</p>
