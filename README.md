# Recomended Contributing Guide for Collaborator

## Setting up
1. Fork repositoy

2. Clone your forked repository
```plaintext
git clone https://github.com/<Your GitHub Username/ApotekU.git
```

3. Generate key
```
composer key:generate
```

4. Add upstream repository
```plaintext
git remote add upstream https://github.com/kennethmanuel/ApotekU.git
```

5. Make new feature branch
```plaintext
git checkout -b <feature_branch>
```

6. Push your working feature branch
```plaintext
git push -u origin <feature_branch>
```

7. Install all dependencies
```plaintext
composer install
```

8. Configure environment settings and generate app key
```plaintext
copy .env.example .env
php artisan key:generate
```

9. Create MySQL database named `apoteku`

10. Configure database connection
open .env file and change variable below as needed
```plaintext
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=apoteku
DB_USERNAME=root
DB_PASSWORD=
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