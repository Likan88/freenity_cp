<h1>Freenity_cp</h1>

<h2>Required software</h2>

nodejs 10<br>
docker<br>
npm<br>

<h2>Change IP</h2>

/app/protected/config/main.php 65 line<br>
/public/js/search.js 1 line<br>

<h2>Install</h2>

git clone https://github.com/yiisoft/yii.git<br>
mkdir app/protected/runtime<br>
chmod 777 app/protected/runtime<br>
mkdir app/assets<br>
chmod 777 app/assets<br>
docker-compose -p freenity_admin build <br>
docker-compose -p freenity_admin up -d<br>
