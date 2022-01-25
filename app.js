setInterval(function(){ slide() }, 5000);
                    function slide() {
                        let activeSlide = document.querySelector('div.slider-item.active'),
                        nextSlide = activeSlide.nextElementSibling;
                        if (!nextSlide) {
                        nextSlide = document.querySelector('div#masthead div.slider-item:first-of-type')
                        }
                    
                        activeSlide.classList.remove('active');
                        activeSlide.classList.add('sliding');
                    
                        nextSlide.classList.add('active');
                    
                        setTimeout(function(){
                            document.querySelector('div.slider-item.sliding').classList.remove('sliding');
                          },800);
                        }