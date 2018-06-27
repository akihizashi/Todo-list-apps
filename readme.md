<h3 align="center">アプリご案内致します。</h3>
<h5>技術要素：</h5>
<a href="https://laravel.com/">Laravel</a>(v5.6)というPHP Frameworkでバックエンドを作りまして、<a href="http://getbootstrap.com">Bootstrap</a>(v4.1)というCSS FrameWorkでユーザーインターフェースを作りました。
<h5>アプリの機能：</h5>
- ログインと会員登録
- TodoリストとTodo追加、さらにTodo削除のことが出来ます。
- 簡単な検索機能
<h5>アプリの設定手順：</h5>
- フォルダーをダウンロードしてから、C:\xampp\htdocsにコピーをしてください。
- Xamppを起動してApacheとMySQLを起動してください。
- Commando Promptを起動して、mysql -u root -p　でアクセスして、create database teamlab; を打って、データベース作ってください。
- Commando Promptで cd c:\xampp\htdocs\Todo-list-apps でフォルダーにアクセスして、php artisan migrate を打つと,データベースにテーブルを自動的に作られます。
- また、他のCommando Promptを起動して　php artisan serve を打つと、アプリのdevelope serverを自動的に起動されます。
- ブラウザを起動して　localhost:8000/login　を打つと、アプリをアクセスすることが出来ます。
