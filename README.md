# Welcome to Bodia SPA

# Local Setup

* Clone project from repository
```
git clone https://github.com/Nguonchhay/WordPressHero.git local.wp-hero.host
```

* Up container with docker
```
docker-compose up -d
```

* Copy configuration
```
cp -a wp-config-sample.php wp-configs.php
```

* Sync data from server

* Add host to `/etc/hosts`
```
sudo vi /etc/hotss
0.0.0.0 local.wp-hero.host www.local.wp-hero.host
```

* Import database from `docker/sample-db.sql`

* Verify installation at `http://local.bodia-spa.host/`

* Login to backend with administrator role
```
http://local.wp-hero.host/wp-login.php
```

__Note__: default admin user `wphero/wphero@12345`