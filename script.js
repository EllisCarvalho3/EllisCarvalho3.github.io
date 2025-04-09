// galeria de sasa

const galleryContainer = document.querySelector('.gallery-container');
const galleryControlsContainer = document.querySelector('.gallery-controls');
const galleryControls = ['previous', 'next'];
const galleryItems = document.querySelectorAll('.gallery-item');

class Carousel {
    constructor(container, items, controls) {
        this.carouselContainer = container;
        this.carouselControls = controls;
        this.carouselArray = [...items];
    }

    updateGallery() {
        this.carouselArray.forEach(el => {
            for (let i = 1; i <= 5; i++) {
                el.classList.remove(`gallery-item-${i}`);
            }
        });

        this.carouselArray.slice(0, 5).forEach((el, i) => {
            el.classList.add(`gallery-item-${i + 1}`);
        });
    }

    setCurrentState(direction) {
        if (direction.className === 'gallery-controls-previous') {
            this.carouselArray.unshift(this.carouselArray.pop());
        } else {
            this.carouselArray.push(this.carouselArray.shift());
        }

        this.updateGallery();
    }

    setControls() {
        this.carouselControls.forEach(control => {
            const button = document.createElement('button');
            button.className = `gallery-controls-${control}`;
            button.innerText = control;
            galleryControlsContainer.appendChild(button);
        });
    }

    useControls() {
        const triggers = [...galleryControlsContainer.childNodes];
        triggers.forEach(control => {
            control.addEventListener('click', e => {
                e.preventDefault();
                this.setCurrentState(control);
            });
        });
    }
}

const exampleCarousel = new Carousel(galleryContainer, galleryItems, galleryControls);

exampleCarousel.setControls();
exampleCarousel.useControls();

// galeria de sasa 


// galeria de ellis

const galleryContainer2 = document.querySelector('.gallery-container-2');
const galleryControlsContainer2 = document.querySelector('.gallery-controls-2');
const galleryControls2 = ['previous', 'next'];
const galleryItems2 = document.querySelectorAll('.gallery-item2');

class Carousel2 {
    constructor(container, items, controls) {
        this.carouselContainer = container;
        this.carouselControls = controls;
        this.carouselArray = [...items];
    }

    updateGallery() {
        this.carouselArray.forEach(el => {
            el.classList.remove('gallery-item-6');
            el.classList.remove('gallery-item-7');
            el.classList.remove('gallery-item-8');
            el.classList.remove('gallery-item-9');
            el.classList.remove('gallery-item-10');
        });

        this.carouselArray.slice(0, 5).forEach((el, i) => {
            el.classList.add(`gallery-item-${i + 6}`);
        }); 
    }

    setCurrentState(direction) {
        if (direction.className === 'gallery-controls-2-previous') {
            this.carouselArray.unshift(this.carouselArray.pop());
        } else {
            this.carouselArray.push(this.carouselArray.shift());
        }

        this.updateGallery();
    }

    setControls() {
        this.carouselControls.forEach(control => {
            const button = document.createElement('button');
            button.className = `gallery-controls-2-${control}`;
            button.innerText = control;
            galleryControlsContainer2.appendChild(button);
        });
    }

    useControls() {
        const triggers = [...galleryControlsContainer2.childNodes];
        triggers.forEach(control => {
            control.addEventListener('click', e => {
                e.preventDefault();
                this.setCurrentState(control);
            });
        });
    }
}

const gallery2Carousel = new Carousel2(galleryContainer2, galleryItems2, galleryControls2);

gallery2Carousel.setControls();
gallery2Carousel.useControls();

// galeria de ellis 
