# Auto-generated navigation for articles

A Pen created on CodePen.io. Original URL: [https://codepen.io/eugene11/pen/PoWBoJe](https://codepen.io/eugene11/pen/PoWBoJe).

This code generates a navigation sidebar for the article. In js you can find articleContentTitles = $(".articleContent h2") variable. This line defines which selectors we are looking for, in my situation it's h2 title tag, you can easily change it for another tag or class.

After selecting titles generateNavForTitle function generates nav links and appends them to our navigation area(you can select it in js also). Additionally we're connecting these links with our titles by id(which is also created from titles *watch createIdFromTitle function).

Because of it we have anchor scrolling functional on navigation click.

Also there are active text section monitoring functional. You can see the active class and marker position change on scroll event.

And also you need to change position fixed, to position sticky if you having some content before and after the article.