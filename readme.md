<h3 align="center">アプリご案内致します。</h3>
<h5>技術要素：</h5>
<a href="https://laravel.com/">Laravel</a>(v5.6)というPHP Frameworkでバックエンドを作りまして、<a href="https://getbootstrap.com/>Bootstrap</a>(v4.1)というCSS FrameWorkでユーザーインターフェースを作りました。

1. フォルダーをダウンロードしてから、C:\xampp\htdocsにコピーをしてください。
2. Xamppを起動してApacheとMySQLを起動してください。
3. Commando Promptを起動して、mysql -u root -p　でアクセスして、create database teamlab; を打って、データベース作ってください。
4. Commando Promptで cd c:\xampp\htdocs\Todo-list-apps でフォルダーにアクセスして、php artisan migrate を打つと,
   データベースにテーブルを自動的に作られます。
5. また、他のCommando Promptを起動して　php artisan serve を打つと、アプリのdevelope serverを自動的に起動されます。
6. ブラウザを起動して　localhost:8000/login　を打つと、アプリをアクセスすることが出来ます。
