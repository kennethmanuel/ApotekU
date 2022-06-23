# Recomended Contributing Guide for Collaborator

## Setting up
1. Fork repositoy
2. Clone your forked repository
```plaintext
git clone https://github.com/<Your GitHub Username/ApotekU.git
```
3. Install all dependencies
```plaintext
composer install
```
4. Configure environment settings and generate app key
```plaintext
copy .env.example .env
php artisan key:generate
```
5. Create MySQL database named `apoteku` (prefferably)

6. Configure database connection
open .env file and change variable below as needed
```plaintext
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=apoteku
DB_USERNAME=root
DB_PASSWORD=
```
7. Migrate
```
php artisan migrate
```

8. Install node dependency
```
npm install && npm run dev
npm install
```

9. Add upstream repository
```plaintext
git remote add upstream https://github.com/kennethmanuel/ApotekU.git
```

10. Make new feature branch
```plaintext
git checkout -b <feature_branch>
```
11. Push your working feature branch
```plaintext
git push -u origin <feature_branch>
```

## Workflow
1. Update your forked repository to latest upstream commits
```plaintext
git checkout main
git pull upstream main
```
2. Resolve conflict if there is any

3. Update your `<feature_branch>` to local main
```plaintext
git checkout feature
git merge main
```

4. Resolve conflict if there is any

5. Work on your feature branch

6. Push changes
```plaintext
git push
```

7. Make pull request from your forked repository's `<feature branch>`
