const titles = document.querySelectorAll('.container .title');
const links = document.querySelectorAll('#links a');

const observer = new IntersectionObserver(
  (items) => {
    items.forEach((item) => {
      if (item.isIntersecting) {
        const id = `#${item.target.id}`;
        history.pushState({}, item.target.innetText, id);

        links.forEach((link) => {
          link.classList.remove('active');

          const href = link.attributes.href.nodeValue;
          if (href === id) {
            link.classList.add('active');
          }
        });
      }
    });
  },
  {
    threshold: 1,
    rootMargin: '0px 0px -50% 0px',
  }
);

titles.forEach((title) => {
  observer.observe(title);
});
