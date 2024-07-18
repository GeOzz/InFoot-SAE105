function handleScrollAnimation(entries, observer) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }
  
  const options = {
    root: null, 
    rootMargin: '0px', 
    threshold: 0.5, 
  };
  
  const observer = new IntersectionObserver(handleScrollAnimation, options);
  
  const elementsToAnimate = document.querySelectorAll('.scroll-animation');
  
  elementsToAnimate.forEach((element) => {
    observer.observe(element);
  });

  
  
  