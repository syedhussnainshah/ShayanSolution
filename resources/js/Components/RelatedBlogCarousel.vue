<template>
    <div class="container-fluid" id="RelatedBlogCarouselContainer">
        <div class="row">
            <div class="col-md-12" id="RelatedBlogCarouselSlider">
                <div class="carousel-container  w-100 d-flex justify-content-center align-items-center">
                    <div class="owl-carousel " style="max-width: 1556px;">
                        <div class="item">
                            <div>

                                <img src="https://test-shayansolution.syedhussnainshah.tech/images/Blogs/r-1.png" alt="Image 1">
                                <h4>Print</h4>
                            </div>
                        </div>
                        <div class="item ">
                            <div>
                                <img src="https://test-shayansolution.syedhussnainshah.tech/images/Blogs/r-2.png" alt="Image 1">
                                <h4>Animation</h4>
                            </div>
                        </div>
                        <div class="item">
                            <div>
                                <img src="https://test-shayansolution.syedhussnainshah.tech/images/Blogs/r-3.png" alt="Image 1">
                                <h4>Illustration</h4>
                            </div>
                        </div>
                        <div class="item">
                            <div>
                                <img src="https://test-shayansolution.syedhussnainshah.tech/images/Blogs/r-4.png" alt="Image 1">
                                <h4>Product Design</h4>
                            </div>
                        </div>
                        <div class="item">
                            <div>
                                <img src="https://test-shayansolution.syedhussnainshah.tech/images/Blogs/r-5.png" alt="Image 1">
                                <h4>Typography</h4>
                            </div>
                        </div>
                        <div class="item">
                            <div>
                                <img src="https://test-shayansolution.syedhussnainshah.tech/images/Blogs/r-6.png" alt="Image 1">
                                <h4>Branding</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<style scoped>
#RelatedBlogCarouselSlider {
    padding: 0px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 90px;

}

.item {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;

    >div {
        width: 226px;
        flex-shrink: 0;


        >img {
            height: 169px;
            width: 100%;
        }

        >h4 {
            color: #0B092D;
            font-family: Inter;
            font-size: 17px;
            font-style: normal;
            font-weight: 600;
            line-height: 127.5%;
            letter-spacing: -0.51px;
            margin-top: 15px;
        }
    }
}
</style>

