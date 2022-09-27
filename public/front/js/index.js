window.addEventListener("load", function () {
    // SLIDER JS BEGIN
    const slider = document.querySelector(".slider");
    const sliderMain = document.querySelector(".slider-main");

    const sliderItems = document.querySelectorAll(".slider-item");

    const nextBtn = document.querySelector(".slider-next");
    const prevBtn = document.querySelector(".slider-prev");
    let positionX = 0;
    const sliderItemWidth = 1519;
    const sliderLength = 2;
    let index = 0;

    nextBtn.addEventListener("click", function () {
        handleChangeSlide(1);
    });

    prevBtn.addEventListener("click", function () {
        handleChangeSlide(-1);
    });

    function handleChangeSlide(direction) {
        for( ; ; ) {
            if (direction == 1) {
                index++;
                if (index >= sliderLength) {
                    index = sliderLength;
                    return;
                }
                positionX = positionX - sliderItemWidth;
                sliderMain.style = `transform: translateX(${positionX}px)`;
            }
            else if(direction == -1) {
                index--;
                if(index <= 0) {
                    index = 0;
                    return;
                }
                positionX = positionX + sliderItemWidth;
                sliderMain.style = `transform: translateX(${positionX}px)`;
            }
        }
    }
    // SLIDER JS END

    // PRODUCT BOX BEGIN
    const productMain = document.querySelector(".product-box-main");
    const productItems = document.querySelectorAll(".product-box__content");
    const productPrev = document.querySelector(".product-box__icon-prev");
    const productNext = document.querySelector(".product-box__icon-next");
    let productX = 0;
    let productIndex = 0;
    const productItemWidth = 99.9;
    const productLength = 2;

    productNext.addEventListener("click", function() {
        changeProduct(1);
    });

    productPrev.addEventListener("click", function() {
        changeProduct(-1);
    });

    function changeProduct(direction) {
        for ( ; ; ) {
            if (direction == 1) {
                productIndex++;
                if(productIndex >= productLength) {
                    productIndex = productLength;
                    return;
                }
                productX = productX - productItemWidth;
                productMain.style = `transform: translateX(${productX}%)`;
            }
            else if (direction == -1) {
                productIndex--;
                if(productIndex <= 0 ){
                    productIndex = 0;
                    return;
                }
                productX = productX + productItemWidth;
                productMain.style = `transform: translateX(${productX}%)`;
            }
        }
    }

    const productMain2 = document.querySelector(".product-box-main-2");
    const productItems2 = document.querySelectorAll(".product-box__content-2");
    const productPrev2 = document.querySelector(".product-box__icon-prev-2");
    const productNext2 = document.querySelector(".product-box__icon-next-2");
    let productX2 = 0;
    let productIndex2 = 0;
    const productItemWidth2 = 99.9;
    const productLength2 = 2;

    productNext2.addEventListener("click", function() {
        changeProduct2(1);
    });

    productPrev2.addEventListener("click", function() {
        changeProduct2(-1);
    });

    function changeProduct2(direction) {
        for ( ; ; ) {
            if (direction == 1) {
                productIndex2++;
                if(productIndex2 >= productLength2) {
                    productIndex2 = productLength2;
                    return;
                }
                productX2 = productX2 - productItemWidth2;
                productMain2.style = `transform: translateX(${productX2}%)`;
            }
            else if (direction == -1) {
                productIndex2--;
                if(productIndex2 <= 0 ){
                    productIndex2 = 0;
                    return;
                }
                productX2 = productX2 + productItemWidth2;
                productMain2.style = `transform: translateX(${productX2}%)`;
            }
        }
    }
    // PRODUCT BOX END

    // BLOG BEGIN
    const blogMain = document.querySelector(".blog-body");
    const blogItems = document.querySelectorAll(".blog-body__item");
    const blogPrev = document.querySelector(".blog__icon-prev");
    const blogNext = document.querySelector(".blog__icon-next");
    let blogPositionX = 0;
    let blogIndex = 0;
    const blogItemWidth = blogItems[0].offsetWidth;
    const blogLength = 2;



    blogNext.addEventListener("click", function() {
        changeBlog(1);
    });

    blogPrev.addEventListener("click", function() {
        changeBlog(-1);
    });

    function changeBlog(direction) {
        for (;;) {
            if(direction == 1) {
                blogIndex++;
                if (blogIndex >= blogLength){
                    blogIndex = blogLength;
                    return;
                }
                blogPositionX = blogPositionX - blogItemWidth;
                blogMain.style = `transform: translateX(${blogPositionX}px)`;
                console.log(blogIndex);
            }
            else if (direction == -1) {
                blogIndex--;
                if (blogIndex <= 0){
                    blogIndex = 0;
                    return;
                }
                console.log(blogIndex);
                blogPositionX = blogPositionX + blogItemWidth;
                blogMain.style = `transform: translateX(${blogPositionX}px)`;
            }
        }
    }
    // BLOG END
});