var slideImage = document.getElementById("slider-img");
var storeSliderImages = [
    "news/2.jpg",
    "news/3.jpg",
    "news/4.jpg",
    "news/5.jpg",
    "news/6.jpg",
    "news/7.jpg",
    "news/8.jpg",
];

var len = storeSliderImages.length;
var i = 0;

function slider() {
    if (i > len - 1) {
        i = 0;
    }

    slideImage.src = storeSliderImages[i];
    i++;
    setTimeout(slider, 5000); 
}
