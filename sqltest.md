```sql
SELECT medicines.id, medicines.generic_name, SUM(quantity) as total_terjual
FROM medicines
INNER JOIN order_detail ON medicines.id = order_detail.medicine_id
GROUP BY medicines.id
ORDER BY total_terjual DESC
LIMIT 5
```

```sql
SELECT users.id, users.name, SUM(total_price) as total_belanja
FROM users
INNER JOIN orders ON users.id = orders.user_id
GROUP BY user_id
ORDER BY total_belanja DESC
LIMIT 3
```