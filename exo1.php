SELECT articles.title, articles.content, articles.picture, articles.date_publish, users.firstname
FROM articles
INNER JOIN users ON articles.id_user = users.id
WHERE  articles.id = 10;
