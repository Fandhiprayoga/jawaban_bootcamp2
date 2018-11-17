USE soal6

SELECT
pc.id,
pc.name,
GROUP_CONCAT(p.name) AS products
FROM product_categories pc, products p
WHERE p.category_id=pc.id
GROUP BY pc.id

