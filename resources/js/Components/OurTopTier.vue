<template>
    <div class="container-fluid" id="OurTopTierContainerFluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="OurTopTierContent">
                    <ul>
                        <li>
                            <h1>Inspiring work made for<span> our top-tiers</span></h1>
                            <p>Collaborate over projects with your team and clients with your team and clients optimised
                                for mobile and tablet don't let slow</p>
                        </li>
                        <li>
                            See more
                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="8" viewBox="0 0 4 8" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0.115679 7.87882C0.0416059 7.80113 0 7.69582 0 7.58602C0 7.47622 0.0416059 7.3709 0.115679 7.29321L3.17087 4.0928C3.18315 4.07997 3.19289 4.06473 3.19954 4.04795C3.20618 4.03117 3.20961 4.01318 3.20961 3.99501C3.20961 3.97685 3.20618 3.95886 3.19954 3.94208C3.19289 3.9253 3.18315 3.91006 3.17087 3.89723L0.115679 0.696816C0.0458095 0.61827 0.00777173 0.514381 0.0095799 0.407037C0.0113878 0.299693 0.0529006 0.197275 0.125371 0.121359C0.197842 0.0454438 0.295613 0.00195851 0.398086 6.45537e-05C0.500559 -0.00182941 0.599734 0.0380158 0.674716 0.111206L3.72991 3.31162C3.90285 3.49291 4 3.73872 4 3.99501C4 4.25131 3.90285 4.49712 3.72991 4.67841L0.674716 7.87882C0.600551 7.95642 0.500017 8 0.395197 8C0.290377 8 0.189844 7.95642 0.115679 7.87882Z"
                                    fill="#4E6DDF" />
                            </svg>
                        </li>
                    </ul>
                    <div class="MainWrapperSwipper position-relative">
                        <button class="custom-next-inspire" id="customer-next" @click="prevSlideInspire">
                            <i class="fa-solid fa-chevron-left"></i>
                        </button>
                        <button class="custom-next-inspire" id="customer-next" @click="nextSlideInspire">
                            <i class="fa-solid fa-chevron-right"></i>
                        </button>
                        <div class="TopTierSwiper  ">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="SliderImage">
                                        <img src="https://test-shayansolution.syedhussnainshah.tech/images/OurTopTier/Group 46865.webp"
                                            alt="">
                                    </div>
                                    <div class="sliderContent">
                                        <ul>
                                            <li>
                                                <img src="https://test-shayansolution.syedhussnainshah.tech/images/OurTopTier/logo-1.webp"
                                                    alt="">
                                            </li>
                                            <li>
                                                <span>Sword SW Web App</span>
                                                <p>by Shadi Saifan</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="SliderImage">

                                        <img src="https://test-shayansolution.syedhussnainshah.tech/images/OurTopTier/Group 46866.webp"
                                            alt="">

                                    </div>
                                    <div class="sliderContent">
                                        <ul>
                                            <li>
                                                <img src="https://test-shayansolution.syedhussnainshah.tech/images/OurTopTier/logo-2.webp"
                                                    alt="">
                                            </li>
                                            <li>
                                                <span>newroom.io</span>
                                                <p>by Jay Yap</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="SliderImage">

                                        <img src="https://test-shayansolution.syedhussnainshah.tech/images/OurTopTier/Group 46867.webp"
                                            alt="">

                                    </div>
                                    <div class="sliderContent">
                                        <ul>
                                            <li>
                                                <img src="https://test-shayansolution.syedhussnainshah.tech/images/OurTopTier/logo-3.webp"
                                                    alt="">
                                            </li>
                                            <li>
                                                <span>Tootar</span>
                                                <p>by Zeeshan Haider</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="SliderImage">
                                        <img src="https://test-shayansolution.syedhussnainshah.tech/images/OurTopTier/Group 46868.webp"
                                            alt="">
                                    </div>
                                    <div class="sliderContent">
                                        <ul>
                                            <li>
                                                <img src="https://test-shayansolution.syedhussnainshah.tech/images/OurTopTier/logo-4.webp"
                                                    alt="">
                                            </li>
                                            <li>
                                                <span>Gaper.io</span>
                                                <p>by Trevor Stewart</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>
</template>
<script>
import Swiper from 'swiper';
import 'swiper/swiper-bundle.css';
export default {
    // props: {
    //     InspiringWorkmadeForOurTop: [],
    // },
    data() {
        return {
            swiper: null, // Store the Swiper instance
        };
    },
    mounted() {
        // Initialize Swiper
        this.swiper = new Swiper('.TopTierSwiper', {
            slidesPerView: 2,
            breakpoints: {
                100: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 1,
                    spaceBetween: 40,
                },
                998: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 39,
                },
            },
        });
    },
    methods: {
        nextSlideInspire() {
            if (this.swiper) {
                this.swiper.slideNext();
            }
        },
        prevSlideInspire() {
            if (this.swiper) {
                this.swiper.slidePrev();
            }
        },

    },
};

</script>
<style >
#OurTopTierContainerFluid {
    min-height: 642px;
    flex-shrink: 0;
    background: #F5F5F5;
    margin-top: 275px;
}

#OurTopTierContent {
    padding-top: 107px;

    >ul {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        flex-wrap: wrap;
        list-style: none;
        padding: 0px;

        >li {
            color: #4E6DDF;
            text-align: center;
            font-family: Inter;
            font-size: 17px;
            font-style: normal;
            font-weight: 500;
            line-height: 160%;


            /* 27.2px */
            >h1 {
                color: #000;
                text-align: center;
                font-family: Inter;
                font-size: 31px;
                font-style: normal;
                font-weight: 700;
                line-height: 160%;
                text-align: start;

                /* 49.6px */
                >span {
                    color: #3219B3;
                    font-family: Inter;
                    font-size: 31px;
                    font-style: normal;
                    font-weight: 700;
                    line-height: 160%;
                }
            }

            >p {
                max-width: 523px;
                color: #05000B;
                font-family: Inter;
                font-size: 16px;
                text-align: start;
                font-style: normal;
                font-weight: 400;
                line-height: 145.5%;
                /* 23.28px */
                opacity: 0.7;
            }

            >svg {
                margin-left: 8px;
            }
        }

        >li:nth-child(2) {
            padding-top: 15px;
            color: #3219B3;
            text-align: center;
            font-family: Inter;
            font-size: 17px;
            font-style: normal;
            font-weight: 500;
            line-height: 160%;
        }
    }
}

.MainWrapperSwipper {
    >button:nth-child(1) {
        position: absolute;
        left: -2%;
        display: flex;
        justify-content: center;
        align-items: center;
        bottom: 48%;
        width: 50px;
        height: 50px;
        flex-shrink: 0;
        background-color: #2554CA;
        border: none;
        border-radius: 50%;
        z-index: 99;
        color: white;
    }

    >button:nth-child(2) {
        position: absolute;
        right: -2%;
        display: flex;
        justify-content: center;
        align-items: center;
        bottom: 48%;
        width: 50px;
        height: 50px;
        flex-shrink: 0;
        background-color: #2554CA;
        border: none;
        border-radius: 50%;
        z-index: 99;
        color: white;
    }

    >.TopTierSwiper {
        overflow: hidden;


        >.swiper-wrapper {

            width: 100%;
            /* background-color: yellow; */
            /* overflow: hidden; */



            >.swiper-slide {
                padding: 0px;
                max-width: 312px;
                /* min-height: 318px; */
                flex-shrink: 0;
                border-radius: 6px;
                border: 1px solid #D9D9D9;
                background: #FFF;
                box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;

                >.SliderImage {
                    width: 100%;
                    max-height: 241px;
                    flex-shrink: 0;

                    >img {
                        width: 100%;
                        height: 100%;
                    }
                }

                >.sliderContent {
                    /* background-color: blue; */
                    width: 100%;
                    height: 77px;
                    display: flex;
                    /* justify-content: center; */
                    align-items: center;

                    >ul {
                        display: flex;
                        justify-content: flex-start;
                        align-items: center;
                        list-style: none;
                        padding: 0px;
                        /* background-color: pink; */
                        width: 100%;
                        /* padding-top: 15px; */
                        padding-left: 13px;

                        >li:nth-child(1) {
                            border-radius: 50%;
                            padding: 0px;
                            margin: 0px;
                            padding-right: 11px;

                            >img {
                                border-radius: 50%;
                                max-width: 43px;
                                max-height: 43px;
                                flex-shrink: 0;
                            }
                        }

                        >li:nth-child(2) {
                            padding: 0px;
                            margin: 0px;
                            display: flex;
                            justify-content: center;
                            align-items: flex-start;
                            flex-direction: column;

                            >span {
                                color: #05000B;
                                font-family: Inter;
                                font-size: 19px;
                                font-style: normal;
                                font-weight: 600;
                                line-height: 160%;
                                /* 30.4px */
                                padding: 0px;
                                margin: 0px;
                            }

                            >p {
                                color: #05000B;
                                font-family: Inter;
                                font-size: 16px;
                                font-style: normal;
                                font-weight: 400;
                                line-height: 160%;
                                margin: 0px;
                                padding: 0px;
                            }
                        }
                    }
                }
            }
        }
    }
}
</style>
