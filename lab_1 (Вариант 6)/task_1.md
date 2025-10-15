## Найти и исправить все ошибки

```
<header>Узнай на все 100 %!</header>
    <section>
        <h1>Языки программирования</h1>
        <figure>
            <img src="https://www.python.org/static/img/python-logo.png">
            <figcaption>Логотип Python</figcaption>
        </figure>
        <article>
            <p>Изучать Python очень весело</p>
            <p>Но нужно читать и практиковаться</p>
            <p>И сильно-сильно стараться</p>
        </article>    
    </section>
    <nav>
        <a href="#">Главная страница</a><br>
        <a href="#">Раздел 1</a><br>
        <a href="#">Раздел 2</a><br>
    </nav>
    <footer>Успехов в освоении</footer>
```

### Ошибки
1. Фрагмент не соответствует стандартному виду html-документа, так как отсутствуют: `<DOCTYPE>, <head>, <body>, <html>`
2. В блоке `<nav>` предпочтительнее использовать списки `<ul>` или `<ol>` 
3. Возможно строка в `<header>` подразумевалась как `title` вкладки (лучше её указать в `<head>`)

### Исправленный фрагмент

```
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset = "UTF-8">
	<title>Узнай на все 100 %</title>
</head>
<body>
	<header> Узнай на все 100 % </header>
	<section>
		<h1>Языки программирования</h1>
		<figure>
			<img src="https://www.python.org/static/img/python-logo.png">
			<figcaption>Логотип Python</figcaption>
		</figure>
		<article>
			<p>Изучать Python очень весело</p>
			<p>Но нужно читать и практиковаться</p>
			<p>И сильно-сильно стараться</p>
		</article>    
	</section>
	<nav>
		<ul>
			<li> <a href="#">Главная страница</a> </li>
			<li> <a href="#">Раздел 1</a> </li>
			<li> <a href="#">Раздел 2</a> </li>
		</ul>
	</nav>
	    
	<footer> Успехов в освоении </footer>
</body>
</html>
```